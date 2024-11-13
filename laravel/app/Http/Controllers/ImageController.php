<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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

        return redirect('/management');
    }
}
