<?php

function flash($message , $level='info'){
    session()->flash('flash_message',$message);
    session()->flash('flash_message_level',$level);
}
/**
 * Created by PhpStorm.
 * User: zaraki
 * Date: 10/2/18
 * Time: 8:52 PM
 */
