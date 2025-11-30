<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class BookingNotifications extends Notification
{
    use Queueable;

    protected $doctor;
    protected $request;

    public function __construct($doctor, $request)
    {
        $this->doctor = $doctor;
        $this->request = $request;
    }

    /**
     * Notification channels
     */
    public function via(object $notifiable): array
    {
        return ['database','Broadcast']; 
    }

    /**
     * Data saved in notifications table
     */
    public function toDatabase(object $notifiable): array
    {
        return [
            'format' => 'filament',
               'title' => 'New Booking: Patient ' 
               . $this->request 
               . ' with Dr. ' 
               . $this->doctor->name,
            'message' => 'A new booking has been created by ' 
                        . $this->request 
                        . ' with doctor ' 
                        . $this->doctor->name 
                        . ' (specialty: ' 
                        . $this->doctor->specialty 
                        . ')',
            'user_id' => Auth::id(),
        ];
    }

    /**
     * Optional
     */
    public function toArray(object $notifiable): array
    {
        return $this->toDatabase($notifiable);
    }

    public function toBroadcast($notifiable){
        return new BroadcastMessage($this->toDatabase($notifiable));
    }
}
