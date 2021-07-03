<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CocktailCategory;

class CocktailCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = CocktailCategory::paginate(10);

        return view('admin/cocktail-categories/all', [
            'categories' => $categories
        ]);
    }
    public function create(){
        return view('admin/cocktail-categories/create');
    }
    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'string']
        ]);
        $category = new CocktailCategory();
        $category->title = request('title');
        $category->image_url = request('image_url');
        $category->save();

       
        return redirect('/admin/cocktail-categories');
    }
    public function edit($id){
        $category = CocktailCategory::find($id);
        
        return view('admin/cocktail-categories/edit', [
            'category' => $category
        ]);
    }
    public function update($id){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'string']
        ]);
        
        $category = CocktailCategory::find($id);
        $category->title = request('title');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('/admin/cocktail-categories');

    }
    public function delete($id){
        $category = CocktailCategory::find($id);
        $category->delete();
        return redirect('/admin/cocktail-categories');
    }
}
