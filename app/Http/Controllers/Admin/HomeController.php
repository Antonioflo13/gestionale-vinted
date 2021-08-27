<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $local = Http::get('https://api.tomtom.com/search/2/search/Via%20Ravenna.json?query=Ostuni via ravenna&ext=.json&key=ubO6kthk3bpiLfR8uiFmtyF9dnZxYok3');
        $long = $local['results']['0']['position']['lon'];
        return view('admin.home', compact('currentMonth','startMonth','endMonth','totalRevenue', 'long'));
    }
}
