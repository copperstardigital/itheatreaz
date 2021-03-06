<?php

namespace App\Itheatre\Mailers;

abstract class Mailer {

    public function sendToItc($view, $data, $subject) {
        return \Mail::send($view, $data, function($message) use($subject) {
           $message->to(env('ITHEATRE_EMAIL'))
               ->subject($subject);
        });
    }
}