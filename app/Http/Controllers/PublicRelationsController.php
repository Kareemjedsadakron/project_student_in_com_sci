<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicRelations;
class PublicRelationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $publicrelations = PublicRelations::orderBy('id', 'DESC')->paginate(10);
       
            return view('publicrelations/index',compact('publicrelations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("publicrelations/create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //GET ARRAY OF ALL DATA FROM THE PREVIOUS FORM BY NAME ATTRIBUTE
        $item = $request->all();        
        //$item = $request->except(['_method','_token']);
        $publicrelations = PublicRelations::storeItem($item);
        $id = $publicrelations->id;
        return redirect("/publicrelations");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            "publicrelations" => PublicRelations::getItem($id),
            ];
            return view('publicrelations/show',$data);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            "publicrelations" => PublicRelations::getItem($id),
            ];
            return view("publicrelations/edit",$data);
            
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
        //GET ARRAY OF ALL DATA FROM THE PREVIOUS FORM BY NAME ATTRIBUTE
        $item = $request->all();        
        //$item = $request->except(['_method','_token']);
        $publicrelations = PublicRelations::updateItem($id,$item);
        return redirect("/publicrelations");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PublicRelations::destroyItem($id);
        return redirect('/publicrelations');
    }
}
