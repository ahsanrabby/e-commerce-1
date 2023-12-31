<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\to;

class CategoryController extends Controller
{
    public function index()
    {
        return view ('admin.category.index');
    }

    public function create(Request $request)
    {
        Category::newCategory($request);
//        return $request->all();
        return redirect('/category/manage')->with('message', 'New Category Added  successfully.');
    }

    public function manage()
    {
        return view ('admin.category.manage', ['categories' => Category::all()]);
    }

    public function edit($id)
    {
        return view ('admin.category.edit', ['category' => Category::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Category::updatedCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category info update successfully.');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message', 'Category info delete successfully.');
    }
}
