<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function sellerdashboard()
    {
        return view('layouts.seller');
    }

    public function productquantity()
    {
        return view('components.sellercomponents.sellerregister');
    }

    public function seller_dashboard_main()
    {
        return view('components.sellercomponents.sellerdashboardmain');
    }
}
