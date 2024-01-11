<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PointOfSaleController extends Controller
{
    //
    public function pointofSale()
    {
        return view('point-of-sale');
    }
}
