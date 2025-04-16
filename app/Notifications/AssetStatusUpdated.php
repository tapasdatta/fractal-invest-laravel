<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class AssetStatusUpdated extends Notification
{
    use Queueable;

    private $asset;

    /**
     * Create a new notification instance.
     */
    public function __construct($asset)
    {
        $this->asset = $asset;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = route('assets.show', ['asset' => $this->asset->id]);

        return (new MailMessage)
            ->greeting('Hello!')
            ->subject('Your asset is accepted!')
            ->line('We accepted your asset. Now it is in voting phase.')
            ->action('View your asset', $url)
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
