<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleReturnController extends Controller
{
    //
    public function saleReturn()
    {
        return view('sale-return');
    }
}
