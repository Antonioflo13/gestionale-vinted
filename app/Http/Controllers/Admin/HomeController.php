<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;

class HomeController extends Controller
{
    public function index() {
        $currentMonth = Carbon::now()->locale('it_IT');
        $startMonth = Carbon::now()->firstOfMonth();
        $endMonth = Carbon::now()->lastOfMonth();
        $productMonth = Product::whereBetween('created_at',[$startMonth, $endMonth])->get();
        $totalRevenue = 0;
        foreach ($productMonth as $product) {
            $totalRevenue += $product->revenue->revenue;
        }

        return view('admin.home', compact('currentMonth','startMonth','endMonth','totalRevenue'));
    }
}
