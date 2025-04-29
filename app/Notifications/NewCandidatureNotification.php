<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class NewCandidatureNotification extends Notification
{
    use Queueable;

    public $candidature;

    public function __construct($candidature)
    {
        $this->candidature = $candidature;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
{
    return [
        'candidature_id' => $this->candidature->id,
        'nom' => $this->candidature->nom ?? 'N/A', // Example of null check
        'email' => $this->candidature->email ?? 'N/A',
        'telephone' => $this->candidature->telephone ?? 'N/A', // Ensure telephone is not null
        'created_at' => $this->candidature->created_at,
    ];
}
}
