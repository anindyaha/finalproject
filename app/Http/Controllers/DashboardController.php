<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\User;
use App\Models\Category;
use App\Models\Mobil;
use App\Models\Rent_log;
=======
>>>>>>> 8677526cd426ffce45cd3ac5b0174d4914a20555

class DashboardController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $userCount = User::count();
        $categoryCount = Category::count();
        $mobilCount = Mobil::count();
        $rentalCount = Rent_log::count();
        return view('dashboard', ['user_count' => $userCount, 'category_count' => $categoryCount, 
        'mobil_count' => $mobilCount, 'rent_count'=> $rentalCount ]);
=======
        return view('dashboard');
>>>>>>> 8677526cd426ffce45cd3ac5b0174d4914a20555
    }
}
