<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddStudent;
use App\Member;
use PDF;

class AddStudentController extends Controller
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

        //METHOD : 2 SHORT
        //NOT EMPTY = HAVE SOME KEYWORD in $q
            $Addstudent = ( !empty($q) ) ? 
            Addstudent::search($q) : 
            Addstudent::getAll();

        //PACK DATA
            $data = [
            "addstudent" => $Addstudent ,
            "q" => $q,    //send $q to display in view
            ];
            return view('addstudent/index',$data);
            
    }
    
    public function list(Request $request)
    {
        $member = Member::All();
        $page=10;
        //GET KEYWORD FROM URL
        $q = $request->get('q');
        if(!empty($q)){
            $Addstudent = Addstudent::where('number','LIKE',"%$q%")
                ->orWhere('name','LIKE',"%$q%")
                ->orWhere('lastname','LIKE',"%$q%")
                ->paginate($page);
        } else{
            $Addstudent = Addstudent::paginate($page);
        }
       
            return view('/layouts/list',compact('Addstudent','member'));
          
            
    }
    public function listPDF()
    {
        $data = [
            "addstudent" => Addstudent::getAll() ,
            ];
            $pdf = PDF::loadView('myPDF  ',$data);
            return $pdf->stream('myPDF',$data); //แบบนี้จะ stream มา preview
            //return $pdf->download('test.pdf'); //แบบนี้จะดาวโหลดเลย
              //return $pdf->download('itsolutionstuff.pdf');
            //return view('/myPDF.pdf',$data);
            
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("addstudent/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = $request->all();        
        $addstudent = Member::storeItem($item);
        $id = $addstudent->id;
        return redirect("/addstudent"); 
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
            "addstudent" => Addstudent::getItem($id),
            ];
            return view('addstudent/show',$data);
            
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
            "addstudent" => Addstudent::getItem($id),
            ];
            return view("addstudent/edit",$data);
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
        $member = member::all();
        $item = $request->all();        
        $addstudent = Addstudent::updateItem($id,$item);
        return redirect("/addstudent/{$id}/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        addstudent::destroyItem($id);
        return redirect('/addstudent');
    }
}