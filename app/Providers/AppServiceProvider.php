<?php
/**
 * File name: AppServiceProvider.php
 * Last modified: 2020.06.10 at 18:56:11
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2020
 */

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Cashier\Cashier;
use Stripe\Stripe;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Expression;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        try {

            config(['mail.driver' => setting('mail_driver', 'smtp')]);
            config(['mail.host' => setting('mail_host', 'smtp.mailgun.org')]);
            config(['mail.port' => setting('mail_port', 587)]);
            config(['mail.encryption' => setting('mail_encryption', 'tls')]);
            config(['mail.username' => setting('mail_username')]);
            config(['mail.password' => setting('mail_password')]);
            config(['mail.from.address' => setting('mail_from_address')]);
            config(['mail.from.name' => setting('mail_from_name')]);

            config(['services.mailgun.domain' => setting('mailgun_domain')]);
            config(['services.mailgun.secret' => setting('mailgun_secret')]);

            config(['services.sparkpost.secret' => setting('sparkpost_secret')]);
            config(['services.sparkpost.options.endpoint' => setting('sparkpost_options_endpoint')]);

            config(['services.facebook.client_id' => setting('facebook_app_id')]);
            config(['services.facebook.client_secret' => setting('facebook_app_secret')]);
            config(['services.facebook.redirect' => url('login/facebook/callback')]);
            config(['services.twitter.client_id' => setting('twitter_app_id')]);
            config(['services.twitter.client_secret' => setting('twitter_app_secret')]);
            config(['services.twitter.redirect' => url('login/twitter/callback')]);
            config(['services.google.client_id' => setting('google_app_id')]);
            config(['services.google.client_secret' => setting('google_app_secret')]);
            config(['services.google.redirect' => url('login/google/callback')]);

            config(['services.stripe.key' => setting('stripe_key')]);
            config(['services.stripe.secret' => setting('stripe_secret')]);
            Stripe::setApiKey(setting('stripe_key'));
            Stripe::setClientId(setting('stripe_secret'));
            Cashier::useCurrency(Str::lower(setting('default_currency_code', 'USD')), setting('default_currency', '$'));

            config(['services.razorpay.key' => setting('razorpay_key')]);
            config(['services.razorpay.secret' => setting('razorpay_secret')]);

            config(['services.fcm.key' => setting('fcm_key', '')]);

            config(['paypal.mode' => setting('paypal_mode', '0') != '0' ? 'live' : 'sandbox']);
            config(['paypal.currency' => Str::upper(setting('default_currency_code', 'USD'))]);

            config(['paypal.sandbox.username' => setting('paypal_username')]);
            config(['paypal.sandbox.password' => setting('paypal_password')]);
            config(['paypal.sandbox.secret' => setting('paypal_secret')]);
            config(['paypal.sandbox.app_id' => "APP-80W284485P519543T"]);

            config(['paypal.live.username' => setting('paypal_username')]);
            config(['paypal.live.password' => setting('paypal_password')]);
            config(['paypal.live.secret' => setting('paypal_secret')]);
            config(['paypal.live.app_id' => setting('paypal_app_id')]);

            // TODO paypal currency

            config(['app.timezone' => setting('timezone')]);



            Builder::macro('withSum', function ($columns) {
                if (empty($columns)) {
                    return $this;
                }
            
                if (is_null($this->query->columns)) {
                    $this->query->select([$this->query->from.'.*']);
                }
            
                $columns = is_array($columns) ? $columns : func_get_args();
                $columnAndConstraints = [];
            
                foreach ($columns as $name => $constraints) {
                    // If the "name" value is a numeric key, we can assume that no
                    // constraints have been specified. We'll just put an empty
                    // Closure there, so that we can treat them all the same.
                    if (is_numeric($name)) {
                        $name = $constraints;
                        $constraints = static function () {
                            //
                        };
                    }
            
                    $columnAndConstraints[$name] = $constraints;
                }
            
                foreach ($columnAndConstraints as $name => $constraints) {
                    $segments = explode(' ', $name);
            
                    unset($alias);
            
                    if (count($segments) === 3 && Str::lower($segments[1]) === 'as') {
                        [$name, $alias] = [$segments[0], $segments[2]];
                    }
            
                    // Here we'll extract the relation name and the actual column name that's need to sum.
                    $segments = explode('.', $name);
            
                    $relationName = $segments[0];
                    $column = $segments[1];
            
                    $relation = $this->getRelationWithoutConstraints($relationName);
            
                    $query = $relation->getRelationExistenceQuery(
                        $relation->getRelated()->newQuery(),
                        $this,
                        new Expression("sum(`$column`)")
                    )->setBindings([], 'select');
            
                    $query->callScope($constraints);
            
                    $query = $query->mergeConstraintsFrom($relation->getQuery())->toBase();
            
                    if (count($query->columns) > 1) {
                        $query->columns = [$query->columns[0]];
                    }
            
                    // Finally we will add the proper result column alias to the query and run the subselect
                    // statement against the query builder. Then we will return the builder instance back
                    // to the developer for further constraint chaining that needs to take place on it.
                    $column = $alias ?? Str::snake(Str::replaceFirst('.', ' ', $name.'_sum'));
            
                    $this->selectSub($query, $column);
                }
            
                return $this;
            });

        } catch (\Exception $exception) {


        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Stripe::setApiKey(Config::get('services.stripe.secret'));
    }
}