<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesReturnController extends Controller
{
    //
    public function salesReturn()
    {
        return view('sales-return');
    }
}
