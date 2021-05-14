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
