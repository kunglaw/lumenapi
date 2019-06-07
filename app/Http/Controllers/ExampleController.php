<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Response;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function generateKey() {
        return str_random(32);
    }

    public function fooExample() {

    }

    public function getUser($id) {
        return "User id => ".$id;
    }

    public function response() {

        $data["status"] = "success";
        return (new Response($data, 201))
            ->header("Content-Type","application/json");
    }

    //
}
