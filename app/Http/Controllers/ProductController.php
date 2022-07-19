<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('name')->paginate(15);
        return view('product.index',['products' => $products]);
    }

    public function store(Request $request){
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'stock' => $request->stock
        ]);
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->stream();
            \Storage::disk('public')->put('products/'.$fileName, $img, 'public');
            $product->image = $fileName;
            $product->save();
        }
        return redirect()->back();
    }
}
