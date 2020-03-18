<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\AddStudent;

class MemberController extends Controller
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
            $Member = Member::search($q);
            }else{
            $Member = Member::getAll();
            }
    //PACK DATA
        $data = [
            "member" => $Member ,
            "q" => $q,    //send $q to display in view
            ];            
            return view('member/index',$data);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("member/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//[เพิ่มแล้วบันทึก]
    {
        

        $item = $request->all();        
        $member = Member::storeItem($item);
        $id = $member->id;
        return redirect("/member/{$id}/edit");        

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
            "member" => Member::getItem($id),
            ];
            return view('member/show',$data);
            
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
            "member" => Member::getItem($id),
            ];
            return view("member/edit",$data);
            
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        if ($request->hasFile('file')) {
            $requestData['file'] = $request->file('file')->store('uploads'); //Store file to Storage/App/Uploads
            }
        $patch = Member::findOrFail($id); //find User data to upload file
        $patch->update($requestData); //Use this for update data to Storage
        return redirect("/member/{$id}");
    }
        
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        member::destroyItem($id);
        return redirect('/member');
    }
        
}
