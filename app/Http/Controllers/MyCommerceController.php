<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;


class MyCommerceController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'categories' => Category::all(),
            'products' => Product::orderBy('id', 'desc')->take('8')->get(['id', 'category_id', 'name', 'selling_price', 'image'])
        ]);
    }

    public function category($id)
    {
//        return 'ok';
        return view('website.category.index', [
            'products' => Product::where('category_id', $id)->orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($id)
    {

        $product = Product::where('id', $id)->first();
        $comment = Comment::where('product_id', $product->id)->orderBy('id', 'desc')->take('3')->get();
        return view('website.detail.index', [
            'product' => $product,
            'cmt' => $comment,
        ]);
    }

    public function search(Request $request)
    {
        $data = Product::
        where('name', 'like','%'.$request->input('query').'%')
            ->get();
        return view('website.search',['products'=>$data]);
    }
}

