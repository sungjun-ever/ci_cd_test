<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function isTest()
    {
        return true;
    }

    public function isTest2()
    {
        return false;
    }
}
