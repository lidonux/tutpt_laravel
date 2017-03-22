<?php

namespace tutpt\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use tutpt\App\Http\Controllers;

class TestController extends Controller
{
    //
    public function index(){
        echo "<br>Test Controller.</br>";
    }
}
