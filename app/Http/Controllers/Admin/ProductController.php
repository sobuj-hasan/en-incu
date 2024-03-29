<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MultipleImage;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\fileExists;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->limit(40)->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $restaurants = Restaurant::get();
        return view('admin.products.create', compact('categories', 'restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => ['required', 'numeric'],
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'price' => ['required', 'string', 'numeric'],
            'sell_price' => ['required', 'string', 'numeric'],
            'stock' => ['required', 'numeric'],
            'short_description' => ['required', 'string' ],
            'long_description' => ['required', 'string' ],
            'status' => ['required'],
            'image' => 'required | mimes:jpg,jpeg,png,gif,svg,webp|max:2000',
        ]);
        $slug = Str::slug($request->name) . '-' . Str::random(5);
        $product = Product::create($request->all() + [
            'user_id' => Auth::id() ?? '',
            'slug' => $slug,
        ]);

        if ($request->hasFile('image')) {
            $image_path = $this->upload($request->file('image'), "products", $product->id);
            $product->update([
                'image' => $image_path
            ]);
        }
        Notify::success('Product has been added !', 'Success');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $multiple_image = MultipleImage::where('product_id', $product->id)->get();
        return view('admin.products.show', compact('product', 'multiple_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => ['required', 'numeric'],
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'price' => ['required', 'string', 'numeric'],
            'sell_price' => ['required', 'string', 'numeric'],
            'stock' => ['required', 'numeric'],
            'short_description' => ['required', 'string'],
            'long_description' => ['required', 'string'],
            'status' => ['required'],
            'image' => 'mimes:jpg,jpeg,png,gif,svg,webp|max:2000',
        ]);
        $slug = Str::slug($request->name) . '-' . Str::random(5);
        $product->update($request->except('image', 'image_name') + [
            'slug' => $slug,
        ]);

        if ($request->hasFile('image')) {
            $image_path = $this->upload($request->file('image'), "products", $product->id);
            $product->update([
                'image' => $image_path
            ]);
        }
        Notify::success('Product has been updated!', 'Success');
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->deleteWith('image');
        Notify::Success('Product Deleted', 'Deleted');
        return back();
    }
}
