<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

//Auth
use Illuminate\Support\Facades\Auth;

//Model
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Gallery;


class PageAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('product::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    //Page categories in cms
    public function pageCategories(){
        $name       = "categories";
        $categories = Category::paginate(10);
        return view('product::admin.categories',
        ['profile'=> Auth::user(), 'list'=>$categories, 'name' => $name]);
    }

    //Page products in cms
    public function pageProducts(){
        $products = Product::all()->toArray();
        $gallerys = Gallery::all()->toArray();
        $name     = "products";
        return view('product::admin.products',
        ['profile'=> Auth::user(), 'list'=>$products, 'gallerys'=>$gallerys, 'name' => $name]);
    }

    //Page gallerys in cms
    public function pageGallerys(){
        $gallerys   = Gallery::all()->toArray();
        $categories = Category::all()->toArray();
        $name       = "gallerys";
        return view('product::admin.gallerys',
        ['profile'=> Auth::user(), 'list'=>$gallerys, 'categories'=>$categories, 'name' => $name]);
    }
}
