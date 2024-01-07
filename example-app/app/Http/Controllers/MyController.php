<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World รอบที่10ล้าน";
    function _construct()
    {

    }
    public function index(){
        echo $this->myvar;
    }

}
