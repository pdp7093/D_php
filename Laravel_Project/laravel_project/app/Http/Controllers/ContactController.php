<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class ContactController extends Controller
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
        return view('website.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Form Validation
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);
        //Insert Data

        $insert = new contact;
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->subject = $request->subject;
        $insert->message = $request->message;
        $insert->save();
        Alert::success('Insert Success', 'Message Deliverd Successfully');
        return redirect('/Contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        $data = contact::all();

        return view('admin.manage_contact', ["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact, $id)
    {
        //
        $data = contact::find($id)->delete();
        Alert::success('Delete Success', 'Contact Delete Successfully');
        return redirect('/Manage_Contact');
    }
    //----------------------------------------API Function--------------------------------------------
    public function show_contact(contact $contact)
    {
        $data = contact::all();
        return response()->json([
            "status" => 200,
            "Contact" => $data
        ]);
    }

    public function delete_contact(contact $contact,$id)
    {
        $data=contact::find($id)->delete();
        return response()->json([
            "status"=>200,
            "message"=>"Delete Success"
        ]);
    }
    public function api_create_contact(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);
        if ($validated->fails()) {
            return [
                'success' => 0,
                'message' => $validated->messages()
            ];
        } else {
            //Insert Data

            $insert = new contact;
            $insert->name = $request->name;
            $insert->email = $request->email;
            $insert->subject = $request->subject;
            $insert->message = $request->message;
            $insert->save();

            return response()->json([
                'status'=>200,
                "message"=>"Contact Insert Successfully"
            ]);
        }
    }

  
}


