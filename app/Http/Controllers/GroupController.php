<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Carbon\Carbon;
use Flash;
use Response;

use Redirect,DB,Config;
use Datatables;   
use Auth; 

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new Group();
       $data->name = $request->name;
       $data->created_at = Carbon::now();
       $data->updated_at = Carbon::now();
       $data->save();
       Flash::success('group saved successfully.');

        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groups = Group::find($id);
        
        if (empty($groups)) {
            Flash::error('group not found');

            return redirect(route('groups.index'));
        }

        return view('groups.show', compact('groups','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groups = Group::find($id);
        
        if (empty($groups)) {
            Flash::error('group not found');

            return redirect(route('groups.index'));
        }

        return view('groups.edit', compact('groups','id'));
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
        $data = Group::find($id);
        //$data = User::where('id',$id)->first();
        $data->name = $request->name;
        $data->updated_at = Carbon::now();

        $data->save();
        return redirect('/groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Group::find($id);
      $data->delete();

      return redirect('/groups');
    }
}
