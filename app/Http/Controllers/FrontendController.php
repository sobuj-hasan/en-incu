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
        $data['products'] = Product::where('status', 1)->latest()->limit(40)->get();
        return view('index', $data);
    }

    public function product_details($slug){
        $data['product_details'] = Product::where('slug', $slug)->firstOrFail();
        $data['related_products'] = Product::where('category_id', $data['product_details']->category_id)->where('id', '!=', $data['product_details']->id)->get();
        return view('product_details', $data);
    }

    public function shop(){
        $data['category'] = Category::latest()->limit(20)->get();
        $data['products'] = Product::where('status', 1)->inRandomOrder()->limit(80)->get();
        $data['new_arrivals'] = Product::where('status', 1)->latest()->limit(30)->get();
        return view('shop', $data);
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

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            Subscribe::create($request->except('_token') + [
                'user_id' => $user_id,
            ]);
        } else {
            Subscribe::create($request->except('_token'));
        }
        Notify::success('Successfully Subscribed', 'Congrats, Dear');
        return back();
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
