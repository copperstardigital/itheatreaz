<?php


Form::macro('textField', function($name, $label, $default) {
    return '<div class="form-group"><label for="' . $name . '">' . $label . '</label><input type="text" name="' . $name . '" class="form-control" id="' . $name . '" value="' . $default . '"/></div>';
});

Form::macro('textBox', function($name, $label, $default) {
    return '<div class="form-group"><label for="' . $name . '">' . $label . '</label><textarea name="' . $name . '" class="form-control" id="' . $name . '" rows="7">' . $default . '</textarea></div>';
});

Form::macro('submitButton', function($value, $class) {
   return '<button type="submit" class="btn btn-' . $class . ' pull-right">' . $value . '</button>';
});