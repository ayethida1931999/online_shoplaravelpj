<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Subcategory;
use App\Category;

class PageController extends Controller
{
    public function mainfun($value='')
    {   
    $discountItems = Item::where('discount','>',0)->take(5)->get();
    $brands = Brand::take(5)->get();
    $categories = Category::take(5)->get();

    return view('main',compact('discountItems','brands','categories'));

    }

    public function loginfun($value='')
    {
        return view('login');
    }
    
    public function registerfun($value='')
    {
        return view('register');
    }

    public function brandfun($id)
    {
       $brand = Brand::find($id);
    return view('brand',compact('brand'));
    }

    public function itemdetailfun($id)
    {
        $item = Item::find($id);
    return view('itemdetail',compact('item'));
    }

    public function promotionfun($value='')
    {
       return view('promotion');
    }

    public function shoppingcartfun($value='')
    {
        return view('shoppingcart');
    }

    public function subcategoryfun($id)
    {
        $subcategory=Subcategory::find($id);
        return view('subcategory',compact('subcategory'));
    }
    function showItemdetail(){
        return view('itemdetail');
    }
    public function category($id)
  {
    $category = Category::find($id);
    return view('category',compact('category'));
  }
  public function filteritems($id)
  {
    $subcategory = Subcategory::find($id);
    $subcategory->setRelation('items', $subcategory->items()->paginate(3));
    return view('filteritems',compact('subcategory'));
  }

}
