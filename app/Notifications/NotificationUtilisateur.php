<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificationUtilisateur extends Notification
{
    use Queueable;

    //Ici, je créé la variable user 
    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //Dans la variable user, je lui mets la valeur $user qui correspond aux différentes données d'utilisateur dans la base de données
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //Ce code va permettre de mettre en place le système en utilisant la base de donnée
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */


    public function toArray($notifiable)
    {
        return [
            //Ici, je récupère l'id, le nom, et la photo de l'utilisateur qui consulte le profil
            'user_name' => $this -> user -> name,
            'user_id'  => $this -> user -> id,
            'user_photo'  => $this -> user -> profile_photo_path   
        ];
    }
}
