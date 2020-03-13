<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Group;
use Carbon\Carbon;
use Faker\Provider\Image;
use Flash;
use Response;

use Redirect,DB,Config;
use Datatables;   
use Auth; 

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all()->pluck('name', 'id');
        return view('contacts.create',compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new Contact();
       if($request->hasFile("photo"))
        {
            $validation = $request->validate([
        'photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        
        ]);
            $file = $request->file("photo");
            $images = 'file-' . time() . '.' . $image->getClientOriginalExtension();
            \Image::make($image)->resize(300, 200)->save(storage_path('app/uploads/' . $images));
            // $filename = h::izrand(5).'-'.$file->getClientOriginalName();
            // h::handleUpload($filename,'/upload',$file);
            $data->avatar = $images;
        }
       // $data->avatar = $request->avatar;
       $data->fname = $request->fname;
       $data->lname = $request->lname;
       $data->address = $request->address;
       $data->city = $request->city;
       $data->zip = $request->zip;
       $data->country = $request->country;
       $data->email = $request->email;
       $data->phone = $request->phone;
       $data->note = $request->note;
       $data->group_id = $request->group_id;
       $data->created_at = Carbon::now();
       $data->updated_at = Carbon::now();
       $data->save();
       Flash::success('contact saved successfully.');

        return redirect('/contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rt = Contact::find($id);
        
        if (empty($rt)) {
            Flash::error('contact not found');

            return redirect(route('contacts.index'));
        }

        return view('contacts.show', compact('rt','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = Contact::find($id);
        $groups = Group::all()->pluck('name', 'id');
        if (empty($contacts)) {
            Flash::error('contact not found');

            return redirect(route('contacts.index'));
        }

        return view('contacts.edit', compact('contacts','id','groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Contact::find($id);
        //$data = User::where('id',$id)->first();
        if($request->hasFile("photo"))
        {
            $validation = $request->validate([
        'photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        
        ]);
            $image = $request->file("photo");
            $images = 'file-' . time() . '.' . $image->getClientOriginalExtension();
            // \Image::make($image)->resize(300, 200)->save(storage_path('app/uploads/' . $images));
            $image->move('upload/',$images);
            $data->avatar = $images;
        }
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->zip = $request->zip;
        $data->country = $request->country;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->note = $request->note;
        $data->group_id = $request->group_id;
        $data->created_at = Carbon::now();
        $data->updated_at = Carbon::now();

        $data->save();
        return redirect('/contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Contact::find($id);
      $data->delete();

      return redirect('/contacts');
    }
}
