<?php

namespace App\Itheatre\Mailers;

class ContactMailer extends Mailer {
    public function contact($user) {
        $user = (object) $user;

        $subject = 'Message from '.  $user->name . ', iTheatre Collaborative';
        $view = 'emails.general.contact';
        $data = [
            'subject' => $subject,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'comments' => $user->comments
        ];

        return $this->sendToItc($view, $data, $subject);
    }
}