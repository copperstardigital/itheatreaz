<?php

namespace App\Itheatre\Validators;

class EmailValidator extends Validator {

    static $rules = array(
        'email' => 'required|email'
    );
}
