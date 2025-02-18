<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\song;
use getID3;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=song::all();
        return view('website.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $albums=album::all();
        return view('admin.add_music',['albums'=>$albums]);
    }
    public function album()
    {
        //
        $albums=album::all();
        return view('website.album',['albums'=>$albums]);
    }
    public function view($id)
    {
        //
        $data=album::find($id);
        $song=song::where('album_id',$id)->get();
        return view('website.single-album',['data'=>$data],['songs'=>$song]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'album_id' => 'required|exists:albums,id',
            'song_name' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'file' => 'required|mimes:mp3|max:10240', // MP3 file
            'song_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);
    
        //  MP3 File Upload (Public Folder)
        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $destinationPath = public_path('admin/songs/');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }
        $file->move($destinationPath, $fileName);
        $filePath = 'admin/songs/' . $fileName;
    
        //  Song Image Upload
        if ($request->hasFile('song_image')) {
            $image = $request->file('song_image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $imagePath = 'admin/song_images/' . $imageName;
            $image->move(public_path('admin/song_images/'), $imageName);
        } else {
            $imagePath = null; // Agar koi image nahi hai toh null store kare
        }
    
        //  MP3 Duration Fetch using getID3
        $getID3 = new \getID3();
        $fileInfo = $getID3->analyze(public_path($filePath));
        $durationSeconds = isset($fileInfo['playtime_seconds']) ? round($fileInfo['playtime_seconds']) : 0;
        $duration = $durationSeconds > 0 ? gmdate("H:i:s", $durationSeconds) : "00:00:00";
    
        //  Save to Database
        Song::create([
            'album_id' => $request->album_id,
            'song_name' => $request->song_name,
            'artist' => $request->artist,
            'file_path' => $filePath,
            'song_image' => $imageName, // Store image path
            'duration' => $duration
        ]);
    
        
        Alert::success('Music Add','Music Add Successfully');
        return redirect()->back()->with('success', 'Song Uploaded Successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(song $song)
    {
        //
        $data=song::all();
        return view('admin.manage_music',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(song $song,$id)
    {
        //
        //$data=song::find($id);
        $data=song::join('albums','albums.id','=','songs.album_id')
                ->where('songs.id',$id)
                ->first(['songs.*','albums.name']);
        return view('admin.edit_music',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, song $song,$id)
    {
        //
        $data=song::find($id);
        $data->song_name=$request->song_name;
        $data->artist=$request->artist;
        if($request->hasFile('image')) 
        {
           // unlink('admin/song_images/'.$data->img);
            $file=$request->file('image');		
            $filename=time().'_img.'.$request->file('image')->getClientOriginalExtension();
            $file->move('admin/song_images/',$filename);  // use move for move image in public/images
            $data->song_image=$filename;
        }
        //$data->release_date=$request->release_date;
        $data->update();
        Alert::success('Update Success', "Album Update Successful");
        return redirect('/ManageMusic');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(song $song,$id)
    {
        //
        $data=song::find($id)->delete();
        Alert::success('Delete Success','Song Delete Successfully');
        return redirect('/ManageMusic');
    }
}
