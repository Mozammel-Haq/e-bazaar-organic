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
        $categoriesAll = Category::all();

        $featured_categories = Category::featured()->get();
        $featured_products = Product::with('images', 'variants', 'category')->where('is_featured', true)->orderBy('name')->limit(8)->get();

        // latest products
        $latest_products1 = Product::with('images', 'variants')->orderBy('created_at', 'desc')->limit(3)->get();
        $latest_products2 = Product::with('images', 'variants')->orderBy('created_at', 'desc')->limit(3)->skip(3)->get();

        // Top rated Products
        $top_rated_products1 = Product::with('images', 'variants')->withAvg('reviews', 'rating')->orderByDesc('reviews_avg_rating')->limit(3)->get();
        $top_rated_products2 = Product::with('images', 'variants')->withAvg('reviews', 'rating')->orderByDesc('reviews_avg_rating')->limit(3)->skip(3)->get();

        // Best Selling products
        $best_selling_products1 = Product::with('images', 'variants')->withCount('orderItems')->orderByDesc('order_items_count')->limit(3)->get();
        $best_selling_products2 = Product::with('images', 'variants')->withCount('orderItems')->orderByDesc('order_items_count')->limit(3)->skip(3)->get();

        return view('pages.public.home', compact('categories', 'featured_products', 'featured_categories', 'categoriesAll', 'latest_products1', 'latest_products2', 'top_rated_products1', 'top_rated_products2', 'best_selling_products1', 'best_selling_products2'));
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
