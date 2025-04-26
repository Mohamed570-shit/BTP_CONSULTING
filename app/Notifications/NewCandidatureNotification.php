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
        'nom' => $this->candidature->nom, // Make sure this is not null
        'email' => $this->candidature->email,
        'created_at' => $this->candidature->created_at,
    ];
}
    }
