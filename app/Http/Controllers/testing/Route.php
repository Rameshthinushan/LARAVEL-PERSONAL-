<?php

namespace App\Http\Controllers\testing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTesting;

class Route extends Controller
{
    public function printMessage() {
        return "this message from controller";
    }

    public function getAllData(){
        // foreach (UserTesting::all() as $userTesting) {
        //     //print_r($userTesting);
        //     echo $userTesting;
        // }
        $userData = UserTesting::where('address', 'jaffna')->first();
        echo $userData;
    }
}
