<?php
use App\Offer;
use App\Models\Order;
use App\Events\OfferEvent;
use App\Events\OrderEvent;
use App\Notifications\NewOffer;
use App\Notifications\NewOrder;
use Illuminate\Support\Facades\Route;

Route::prefix('driver')->group(function () {
    Route::post('login', 'API\Driver\UserAPIController@login');
    Route::post('register', 'API\Driver\UserAPIController@register');
    Route::post('send_reset_link_email', 'API\UserAPIController@sendResetLinkEmail');
    Route::get('user', 'API\Driver\UserAPIController@user');
    Route::get('logout', 'API\Driver\UserAPIController@logout');
    Route::get('settings', 'API\Driver\UserAPIController@settings');
});

Route::prefix('manager')->group(function () {
    Route::post('login', 'API\Manager\UserAPIController@login');
    Route::post('register', 'API\Manager\UserAPIController@register');
    Route::post('send_reset_link_email', 'API\UserAPIController@sendResetLinkEmail');
    Route::get('user', 'API\Manager\UserAPIController@user');
    Route::get('logout', 'API\Manager\UserAPIController@logout');
    Route::get('settings', 'API\Manager\UserAPIController@settings');
});


Route::post('login', 'API\UserAPIController@login');
Route::post('register', 'API\UserAPIController@register');
Route::post('send_reset_link_email', 'API\UserAPIController@sendResetLinkEmail');
Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('user', 'API\UserAPIController@user');
Route::post('logout', 'API\UserAPIController@logout');
Route::get('settings', 'API\UserAPIController@settings');

Route::resource('fields', 'API\FieldAPIController');
Route::resource('categories', 'API\CategoryAPIController');
Route::resource('markets', 'API\MarketAPIController');

Route::resource('faq_categories', 'API\FaqCategoryAPIController');
Route::get('products/categories', 'API\ProductAPIController@categories');
Route::resource('products', 'API\ProductAPIController');



Route::get('products-by-category/{category}', 'API\ProductAPIController@productsByCategory');
Route::get('featured-by-category/{category}', 'API\ProductAPIController@featuredProductsByCategory');
Route::get('best-sellers-by-category/{category}', 'API\ProductAPIController@bestSellersProductsByCategory');
Route::get('new-arrivals-by-category/{category}', 'API\ProductAPIController@newArrivalsProductsByCategory');
Route::get('top-ads', 'API\AdApiController@topAds');
Route::get('bottom-ads', 'API\AdApiController@bottomAds');
Route::get('offer', 'API\OfferController@offers');


Route::get('best-sellers-categories', 'API\ProductAPIController@bestSellersCategories');

Route::resource('galleries', 'API\GalleryAPIController');
Route::resource('product_reviews', 'API\ProductReviewAPIController');


Route::resource('faqs', 'API\FaqAPIController');
Route::resource('market_reviews', 'API\MarketReviewAPIController');
Route::resource('currencies', 'API\CurrencyAPIController');
Route::resource('slides', 'API\SlideAPIController')->except([
    'show'
]);

Route::resource('option_groups', 'API\OptionGroupAPIController');

Route::resource('options', 'API\OptionAPIController');



Route::middleware('auth:api')->group(function () {
    Route::group(['middleware' => ['role:client']], function () {

        Route::get('get-addresses', 'API\AddressApiController@getAddresses')->name('get-addresses');
        Route::post('add-addresses', 'API\AddressApiController@createAddresses')->name('add-addresses');
        Route::patch('edit-addresses/{id}', 'API\AddressApiController@UpdateAddresses')->name('edit-addresses');
        Route::delete('delete-addresses/{id}', 'API\AddressApiController@deleteAddresses')->name('delete-addresses');

        

        Route::post('add-cart', 'API\CartAPIController@store');
        Route::get('get-cart', 'API\CartAPIController@getCart');
        Route::get('get-unread-notifications', 'API\UserAPIController@getUnreadNotifications');
        Route::post('read-notification', 'API\UserAPIController@mark_as_read_notification');
        Route::post('delete-cart', 'API\CartAPIController@deleteCart')->name('delete-cart');

        Route::get('add-noti',function(){
            $user = auth()->user();
            $order = Order::findOrFail(1);
            $offer = Offer::findOrFail(1);
            


            event(new OrderEvent($order, 'تحرك طلبك إليك ونحن في انتظار طلبك التالي'));
            $user->notify(new NewOrder($order));


           
            event(new OfferEvent($offer, 'هناك عرض من البان زاهر جديده'));

            $user->notify(new NewOffer($offer));
        });




    });

});    

Route::middleware('auth:api')->group(function () {
    Route::group(['middleware' => ['role:driver']], function () {
        Route::prefix('driver')->group(function () {
            Route::resource('orders', 'API\OrderAPIController');
            Route::resource('notifications', 'API\NotificationAPIController');
            Route::post('users/{id}', 'API\UserAPIController@update');
            Route::resource('faq_categories', 'API\FaqCategoryAPIController');
            Route::resource('faqs', 'API\FaqAPIController');
        });
    });
    Route::group(['middleware' => ['role:manager']], function () {
        Route::prefix('manager')->group(function () {
            Route::post('users/{id}', 'API\UserAPIController@update');
            Route::get('users/drivers_of_market/{id}', 'API\Manager\UserAPIController@driversOfMarket');
            Route::get('dashboard/{id}', 'API\DashboardAPIController@manager');
            Route::resource('markets', 'API\Manager\MarketAPIController');
            Route::resource('notifications', 'API\NotificationAPIController');
        });
    });
    Route::post('users/{id}', 'API\UserAPIController@update');

    Route::resource('order_statuses', 'API\OrderStatusAPIController');

    Route::get('payments/byMonth', 'API\PaymentAPIController@byMonth')->name('payments.byMonth');
    Route::resource('payments', 'API\PaymentAPIController');

    Route::get('favorites/exist', 'API\FavoriteAPIController@exist');
    Route::resource('favorites', 'API\FavoriteAPIController');

    Route::resource('orders', 'API\OrderAPIController');

    Route::resource('product_orders', 'API\ProductOrderAPIController');

    Route::resource('notifications', 'API\NotificationAPIController');

    Route::get('carts/count', 'API\CartAPIController@count')->name('carts.count');
    
  

    Route::resource('delivery_addresses', 'API\DeliveryAddressAPIController');

    Route::resource('drivers', 'API\DriverAPIController');

    Route::resource('earnings', 'API\EarningAPIController');

    Route::resource('driversPayouts', 'API\DriversPayoutAPIController');

    Route::resource('marketsPayouts', 'API\MarketsPayoutAPIController');

    Route::resource('coupons', 'API\CouponAPIController')->except([
        'show'
    ]);

    Route::post('uploads/store', 'API\UploadAPIController@store');
    Route::post('uploads/clear', 'API\UploadAPIController@clear');

  
});
Route::post('contactus', 'API\Contactcontroller@send');