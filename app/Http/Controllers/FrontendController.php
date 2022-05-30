<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Billing;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subscribe;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\MultipleImage;
use App\Models\ContactFormSubmit;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['restaurants'] = Restaurant::where('status', 1)->latest()->limit(20)->get();
        $data['foods'] = Product::where('status', 1)->latest()->limit(40)->get();
        return view('index', $data);
    }

    public function product_details(){
        // $data['single_food'] = Product::where('slug', $slug)->first();
        // $data['multipleimage'] = MultipleImage::where('product_id', $data['single_food']->id)->get();
        // $data['related_products'] = Product::where('category_id', $data['single_food']->category_id)->where('id', '!=', $data['single_food']->id)->get();
        return view('product_details');
    }

    public function shop(){
        return view('shop');
    }

    public function administration(){
        return view('administration');
    }
    
    public function media_center(){
        return view('media-center');
    }

    // public function search_result(Request $request)
    // {

    //     $query = Product::query();
    //     if ($request->search_data) {
    //         $data['search_data'] = $request->search_data;
    //         $query          = $query->where('name', 'like', "%$request->search_data%")
    //                                 ->orWhere('price', "$request->search_data");
    //     }
    //     $data['search_results'] = $query->where('status', 1)->limit(12)->get();

    //     return view('search_result', $data);
    // }

    public function cart(){
        return view('cart');
    }

    public function contact(){
        return view('contact');
    }
    
    public function about(){
        return view('about');
    }

    public function privacy_policy(){
        return view('privacy-policy');
    }
    
    public function contactmessage(Request $request){
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        ContactFormSubmit::create($request->all());
        Notify::success('Message successfully Submited', 'Success');
        return back();
    }

    
    function checkout()
    {
        if (!Auth::user()) {
            Notify::error('Login first !', 'error');
            return redirect()->route('login');
        }

        $data['countb']  = Billing::where('user_id', Auth::user()->id)->count();
        $data['billing'] = Billing::where('user_id', Auth::user()->id)->first();


        return view('checkout', $data);
    }
    
    
    
    
    
}