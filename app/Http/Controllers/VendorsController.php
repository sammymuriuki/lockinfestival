<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\VendorProduct;

class VendorsController extends Controller
{
    public function getVendors(){
        $vendors = Vendor::where('type', 'vendor')->get();
        return view('vendors', ['vendors'=>$vendors]);
    }
    public function getVendorProducts($vendorSlug){
        $vendor = Vendor::where('slug', $vendorSlug)->first();
        if($vendor){
           // return view('vendor-products', ['movie'=>$movie]);
           // get the products
           $products = VendorProduct::where('vendor_id', $vendor->id)->get();
           return view('vendor-products')->with(['products'=>$products, 'vendor'=> $vendor]);
        }
        return view('404notfound');
    }
    public function getPhotographers(){
        $vendors = Vendor::where('type', 'photographer')->get();
        return view('photographers', ['vendors'=>$vendors]);
    }
    public function getPhotographerGallery($vendorSlug){
        $vendor = Vendor::where('slug', $vendorSlug)->where('type', 'photographer')->first();
        if($vendor){
           // return view('vendor-products', ['movie'=>$movie]);
           // get the products
           $products = VendorProduct::where('vendor_id', $vendor->id)->get();
           return view('vendor-products')->with(['products'=>$products, 'vendor'=> $vendor]);
        }
        return view('404notfound');
    }
    public function getNairobiDesignWeek(){
        return view('nairobi-design-week');
    }
}
