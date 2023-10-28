<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class CommentsController extends Controller
{
    private $customer,$comments;
    public function index($id)
    {
        $product = Product::find($id);
        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->customer = '';
        }
        return view ('customer.review.index', [
            'customer' => $this->customer,
            'product' => $product,

        ]);
    }

    public function create(Request $request)
    {
        Comment::newComment($request);
        $product_id = Product::where('id', $request->product_id)->first();
        return redirect()->route('product-detail', ['id' => $product_id]);
//        return $request->all();
        return redirect(url())->back()->with('message', 'Your Public Comments added successfully successfully.');
    }

//    public function manage($id)
//    {
//
//        return view ('website.detail.index', [
//            'comments' => Comment::where('product_id', $id)->orderBy('id', 'desc')->take('3')->get(['id',  'name', 'email', 'comments'])
//        ]);
//
//    }

}
