<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //GET KEYWORD FROM URL
      $q = $request->input('q');
      if(!empty($q)){ 
          $Activities = Activities::search($q);
          }else{
          $Activities = Activities::getAll();
          }
  //PACK DATA
      $data = [
          "activities" => $Activities ,
          "q" => $q,    //send $q to display in view
          ];            
          return view('activities/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("activities/create");

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
        $activities = Activities::storeItem($item);
        return redirect("/activities");

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
            "activities" => Activities::getItem($id),
            ];
            return view('activities/show',$data);
            
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
            "activities" => Activities::getItem($id),
            ];
            return view("activities/edit",$data);
            
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
        $activities = Activities::updateItem($id,$item);
        return redirect("/activities/{$id}/edit");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activities::destroyItem($id);
        return redirect('/activities');

    }
}
