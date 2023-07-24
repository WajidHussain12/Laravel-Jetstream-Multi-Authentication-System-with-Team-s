<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Exists;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->name;
        $user->password = $request->name;
        $user->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }




    // Manually Defined Functions

    public function adminregister()
    {
        return view("components.admincomponents.adminregister");
    }

    public function adminmaindashboard()
    {
        return view("components.admincomponents.admindashboardmain");
    }
    public function registeradminslist()
    {
        return view("components.admincomponents.adminslist");
    }

    public function admininbox()
    {
        return view("components.admincomponents.admininbox");
    }

    public function adminaddcategory()
    {
        return view("components.admincomponents.adminaddcategory");
    }


    public function adminshowcategory()
    {
        return view("components.admincomponents.adminshowcategory");
    }

    public function regcategory(Request $request)
    {
        $category = new Category();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->name = $request->input('category_name');
        $category->slug = $request->input('category_slug');
        $category->meta_title = $request->input('category_meta_title');
        $category->meta_description = $request->input('category_meta_description');
        $category->meta_keywords = $request->input('category_meta_keywords');
        $category->description = $request->input('category_description');
        $category->status = $request->input('category_status') == True ? '1' : '0';
        $category->popular = $request->input('category_popular') == True ? '1' : '0';
        $category->save();
        return redirect()->route('adminshowcategory')->with('status', 'Category Added Successfully');
    }



    public function categorylistshow()
    {
        $category = Category::all();
        return view('components.admincomponents.adminshowcategory', compact('category'));
    }

    public function categoryedit($id)
    {
        $category = Category::find($id);
        return view('components.admincomponents.admineditcategory', compact('category'));
    }

    public function updatecategory(Request $request, $id)
    {
        $category = Category::find($id);


        if ($request->hasFile('image')) {

            $path = 'assets/uploads/category/' . $category->image;
            if (File::Exists($path)) {
                File::delete($path);
            }


            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->name = $request->input('category_name');
        $category->slug = $request->input('category_slug');
        $category->meta_title = $request->input('category_meta_title');
        $category->meta_description = $request->input('category_meta_description');
        $category->meta_keywords = $request->input('category_meta_keywords');
        $category->description = $request->input('category_description');
        $category->status = $request->input('category_status') == True ? '1' : '0';
        $category->popular = $request->input('category_popular') == True ? '1' : '0';
        $category->update();
        return redirect()->route('adminshowcategory')->with('status', 'Category Updated Successfully');
    }


    public function deletecategory($id)
    {
        $category = Category::find($id);

        if($category->image)
        {
            $path = 'assets/uploads/category/' . $category->image;
            if (File::Exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect()->route('adminshowcategory')->with('status_delete','Category Deleted SuccessFully');
    }
}
