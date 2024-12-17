<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

class ImageController extends Controller
{
    
    public function store_image(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg,gif",
            "pet_id" => "required",
        ]);
        
        

        $imageName = time().'.'.($request->image->extension());
        $request->image->move(public_path('petimages'), $imageName);
        
        $image=new Image();

        $image->pet_id = $request->pet_id;
        $image->path = 'petimages/'.$imageName;

        $image->save();

        return back();
    }

    public function delete_image(Request $request)
    {
        $request->validate([
            "id"=>"required",
            "path"=>"required",
        ]);

        if(file_exists(public_path($request->path))&& Image::where('id', $request->id)->exists())
        {
            unlink(public_path($request->path));
            Image::destroy($request->id);
        }

        return back();
    }
}
