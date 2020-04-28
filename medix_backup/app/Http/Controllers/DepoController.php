<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DepoController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin',['except' =>'test']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depos = DB::select("select * from depos ");

       // return view('dashboard.pages.manage_members',['members'=>$members]);
        return view('dashboard.pages.manage_depos',['depos'=>$depos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.add_depo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validating membership form fields
            $this-> validate($request,[
            'place_name' => 'required|unique:depos,placename',

        ]);

        $placename = $request->get('place_name');
        $timestamp = now();
         $news = DB::insert('insert into depos(placename,created_at) value(?,?)',[$placename,$timestamp]);



        if($news){
            $red = redirect('admin/depos/')->with('success','workplace succefully added');

        }else {
            $red = redirect('admin/depos/add')->with('danger','Input data failed ');
        }

        return $red;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $depos = DB::select('select * from depos where id=?',[$id]);

        return view('dashboard.pages.edit_depo',['depos'=> $depos]);
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
         $this-> validate($request,[
            'place_name' => 'required',
           


        ]);

         $placename =  $request->get('place_name');
          $timestamp = now();
         $checkrecordexxists = DB::select('select * from depos where  placename=?',[$placename]);

        $rowcountnic= count($checkrecordexxists);

        if($rowcountnic==0){
			   $workplaces = DB::update('update depos set placename= ? ,  updated_at = ? where id = ? ',
        [$placename,$timestamp,$id]);

       if($workplaces) {
            $red = redirect('admin/depos')->with('success','Depo has been updated');



       }else {

         $red = redirect('depos/edit/',$id)->with('danger','Error update please try again');
       }
			
		}else{
			  $red = redirect('admin/depos')->with('danger','Error Record Already Exists');
		}

        

       return $red;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $news = DB::delete('delete from depos where id =?',[$id]);
         $red = redirect('admin/depos');
         return $red;
    }

     public function deleteAll(Request $request){
         $this-> validate($request,[
            'ids' => 'required',

        ]);

        $ids = $request->get('ids');
        $dbs = DB::delete('delete from depos where id in ('.implode(",",$ids).')');
        return redirect('admin/depos');

    }
}
