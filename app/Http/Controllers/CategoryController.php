<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            "title" => "required|min:3",
            "image" => "required|image|mimes:pnp,jpg,jpeg|max:2048"
        ]);
        if($request->has("image")){
            $file = $request->image;
            $imageName = "image/categories/" . time() . "_" .  $file->getClientOriginalName();
            $file->move(public_path("images/categories"), $imageName);

            $title = $request->title;
            Category::create([
                "title" => $title,
                "slug" =>  Str::slug($title),
                "image" => $imageName,
            ]);
            return redirect()->route("category.create")
                    ->withSuccess("category added");
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('Admin\category\edit')->with([

            "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $this->validate($request,[
            "title" => "required|min:3",
        ]);
        $title = $request->title;
        $category->update([
            "title" => $title,
            "slug" =>  Str::slug($title),
        ]);
        return redirect()->route("Admin.categories")
                ->withSuccess("category added added");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();

        return redirect()->route("admin.categories");
    }
}
