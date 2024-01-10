<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World รอบที่10ล้าน";
    function _construct() //myConstruct
    {

    }
    public function index(){
        $data = ['var_a' => 'Multiplication Table'];
        return view('home'); //เรียก viwe จาก folder
        //return view('welcome');
        //echo $this->myvar;
    }
    public function store(Request $req){
        $data['input'] = $req->input('input');
        return view('myroute', $data);
    }

}
