<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feature_id = feature::where('status', 1)->get();
        $blogs = blog::all();

        return view('backend.blog.index', [
            'feature_id'=>$feature_id,
            'blogs'=>$blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'feature_id'      =>'required',
            'title'         =>'required',
            'image'         =>'',
            'tags'         =>'array',
            'description'   =>'required',
            'define'       =>'required',
        ];

        $validatesData = $request->validate($rules); 
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/blog'), $file_name);
            $validatesData['image'] = $file_name;
        }

        $tagsAsString = implode(',', $validatesData['tags']);
        $validatesData['tags'] = $tagsAsString;
        
        $validatesData['added_by'] = Auth::id(); 

        blog::create($validatesData);
        toast('Add Success','success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $feature_id = feature::where('status', 1)->get();
        $blogs = blog::find($id);
        $tagsAsString = $blogs->tags;
        return view('backend.blog.edit', [
            'blogs'=>$blogs,
            'feature_id'=>$feature_id,
            'tagsAsString'=>$tagsAsString,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'feature_id'      =>'required',
            'title'         =>'required',
            'image'         =>'',
            'tags'         =>'array',
            'description'   =>'required',
            'define'       =>'required',
            'status'=>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/blog'), $file_name);
            $validatesData['image'] = $file_name; 
        }
        if (!isset($validatesData['tags'])) {
            $validatesData['tags'] = [];
        }
        $tagsAsString = implode(',', $validatesData['tags']);
        $validatesData['tags'] = $tagsAsString;

        blog::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        blog::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
