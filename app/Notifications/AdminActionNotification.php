<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminActionNotification extends Notification
{
    use Queueable;

    private $message;

    /**
     * Crée une nouvelle instance de notification.
     *
     * @param string $message Le message à envoyer
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Définir les canaux de livraison (ici, base de données).
     */
    public function via($notifiable)
    {
        return ['database']; // Stocke la notification dans la table `notifications`
    }

    /**
     * Format des données pour la base de données.
     */
    public function toArray($notifiable)
    {
        return [
            'message' => $this->message,
            'timestamp' => now()->toDateTimeString(),
        ];
    }
}
