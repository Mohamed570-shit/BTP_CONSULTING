<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // ✅ إعلان المتغيرات هنا
    public $name;
    public $email;
    public $subject;
    public $messageContent;
    public $fromCompany;
    public $companyName;

    public function __construct($name, $email, $subject, $messageContent, $fromCompany = 'non', $companyName = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->messageContent = $messageContent;
        $this->fromCompany = $fromCompany;
        $this->companyName = $companyName;
    }

    public function build()
    {
        return $this->subject("Message: {$this->subject}")
                    ->view('mail.test-email')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'subject' => $this->subject,
                        'messageContent' => $this->messageContent,
                        'fromCompany' => $this->fromCompany,
                        'companyName' => $this->companyName,
                    ]);
    }
}