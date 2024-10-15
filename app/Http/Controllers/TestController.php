<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function customerRetrive(){
        $customers = Customer::all();
        return response()->json($customers);
    }

    public function supplierRetrive(){
        $suppliers = Supplier::all();
        return response()->json($suppliers);
    }
    public function categoryRetrive(){
        $categories = Category::all();
        return response()->json($categories);
    }
    public function unitRetrive(){
        $units = Unit::all();
        return response()->json($units);
    }
    public function productRetrive(){
        $products = Product::all();
        return response()->json($products);
    }
    // public function productRetrive(){
    //     $products = Unit::all();
    //     return response()->json($products);
    // }
}
