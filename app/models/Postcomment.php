<?php

class Postcomment extends Eloquent
{


    public static $rules = array(

        'first_name' => 'required|min:2'
    );
    public $table = 'postcomment';

    public static function validate($data)
    {

        return Validator::make($data, static::$rules);
    }


}


?>