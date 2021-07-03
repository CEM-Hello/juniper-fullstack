<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CocktailItem;
use App\Models\CocktailCategory;

class CocktailItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $items = CocktailItem::paginate(10);

        return view('admin/cocktail-items/all', [
            'items' => $items
        ]);
    }
    public function create(){
        $categories = CocktailCategory::All();
        return view('admin/cocktail-items/create', [
            'categories' => $categories
        ]);
    }
    public function store(){
        // return request()->all();
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
        ]);
        $item = new CocktailItem();
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = request('image_url');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();

       
        return redirect('/admin/cocktail-items');
    }
    public function edit($id){
        $item = CocktailItem::find($id);
        $categories = CocktailCategory::All();
        
        return view('admin/cocktail-items/edit', [
            'item' => $item,
            'categories' => $categories
        ]);
    }
    public function update($id){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required'],
            'category_id' => ['required', 'integer'],
        ]);
        
        $item = CocktailItem::find($id);
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = request('image_url');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();

        return redirect('/admin/cocktail-items');

    }
    public function delete($id){
        $item = CocktailItem::find($id);
        $item->delete();
        return redirect('/admin/cocktail-items');
    }
}
