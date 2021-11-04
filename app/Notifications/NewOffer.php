<?php

namespace App\Notifications;

use App\Offer;
use FontLib\Table\Type\name;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class NewOffer extends Notification
{
    use Queueable;
    /**
     * @var Offer
     */
    private $offer;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Offer $offer)
    {
        //
        $this->offer = $offer;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

 
    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
    //   dd($this->offer['id']);
        return [
            'type'      => 'offer',
            'offer_id'  => $this->offer['id'],
        ];
    }
}