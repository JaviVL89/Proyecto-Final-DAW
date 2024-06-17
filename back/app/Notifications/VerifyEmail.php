<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;
use Illuminate\Notifications\Messages\MailMessage;

class VerifyEmail extends VerifyEmailBase
{
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject(__('Verifica tu Email'))
            ->greeting(__('Bienvenido a CustomAcademy'))
            ->line(__('Por favor, pulsa en el siguiente botón para verificar tu email.'))
            ->action(__('Verificar email'), $verificationUrl)
            ->line(__('Saludos,'))
            ->salutation(__('El equipo de soporte') . ' de ' . config('app.name'));
    }
}

