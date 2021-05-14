<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;;

class ImageController extends Controller
{
    //
    public function create()
    {
        return view('create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'mimes:doc,pdf,docx,zip,png'
    ]);


    if($request->hasfile('image'))
     {
        foreach($request->file('image') as $file)
        {
            $name = time().'.'.$file->extension();
            $file->move(public_path().'/product_image/', $name);  
            $data[] = $name;
            $image= new Image();
            
            $image->image=json_encode($data);
            $image->save();

        
        }
     }


     

    return back()->with('success', 'Data Your files has been successfully added');
}
}
