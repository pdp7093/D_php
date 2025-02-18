<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlbumController extends Controller
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
    public function create()
    {
        //
        return view('admin.add_album');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'cover_image'=>'required|image',
            'release_date'=>'required'
        ]);
        $insert =new album;

        $insert->name=$request->name;
        //Image Upload
        $file=$request->file('cover_image');
        $filename=time().'_img.'.$request->file('cover_image')->getClientOriginalExtension();
        $file->move('admin/image/album/',$filename);
        $insert->cover_image=$filename;
        
        $insert->release_date=$request->release_date;
        
        $insert->save();
        Alert::success('Album Add','Album Add Sucess');
        return redirect('/ManageAlbum');
    }

    /**
     * Display the specified resource.
     */
    public function show(album $album)
    {
        //Show all Album
        $data=album::all();
        return view('admin.manage_album',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(album $album,$id)
    {
        $data=album::find($id);
        return view('admin.edit_album',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, album $album,$id)
    {
        //
        $data=album::find($id);
        $data->name=$request->name;
        if($request->hasFile('cover_image')) 
        {
            unlink('admin/image/album/'.$data->img);
            $file=$request->file('cover_image');		
            $filename=time().'_img.'.$request->file('cover_image')->getClientOriginalExtension();
            $file->move('admin/image/album/',$filename);  // use move for move image in public/images
            $data->img=$filename;
        }
        $data->release_date=$request->release_date;
        $data->update();
        Alert::success('Update Success', "Album Update Successful");
        return redirect('/ManageAlbum');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(album $album,$id)
    {
        //
        $data=album::find($id)->delete();
        Alert::success('Delete Success','Album Delete Successfully ');
        return redirect('/ManageAlbum');
    }
}
