<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orders;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        $userCount = User::count();
        $serviceCount = Service::count();
        $orderCount = Order::count();

        return view('admin.dashboard', compact('userCount', 'serviceCount', 'orderCount'));
    }
    
}
