<?php

namespace App\Http\Controllers;

use App\Museum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MuseumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("museums.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("museums.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
        ];
        $messages = [
            'name.required' => 'El campo "Name" es obligatorio',
            'description.required' => 'El campo "Description" es obligatorio',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            flash("We couldn't save your museum :(")->error();
            return redirect()->action('MuseumsController@create')
                ->withErrors($validator)
                ->withInput();
        }

        $museum = new Museum();
        $museum->name = $request->input('name');
        $museum->description = $request->input('description');
        $museum->phone = "";
        $museum->rating = 4.8;
        $museum->address = "";
        $museum->hours = "";

        $museum->save();
        flash('Your museum has been saved!')->success();
        return redirect()->action('MuseumsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
