<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function _construct(){
        $this->middleware("guest");

    }
    public  function  index(){
        return "HELLO WORLD";
    }

}


