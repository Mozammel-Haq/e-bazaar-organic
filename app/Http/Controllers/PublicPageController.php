<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function index()
    {
        $categories = Category::limit(11)->orderBy('name')->get();
        $featured_categories = Category::featured()->get();
        $featured_products = Product::with('images', 'variants', 'category')->where('is_featured', true)->orderBy('name')->limit(8)->get();
        return view('pages.public.home', compact('categories', 'featured_products', 'featured_categories'));
    }
    public function products()
    {
        return view('pages.public.products');
    }

    public function product($id)
    {
        return view('pages.public.product');
    }

    public function blogs()
    {
        return view('pages.public.blogs');
    }
    public function blog($id)
    {
        return view('pages.public.blog');
    }

    public function contact()
    {
        return view('pages.public.contact');
    }
}
