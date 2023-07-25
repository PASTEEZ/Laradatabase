<?php

namespace App\Http\Controllers;

use App\Models\CsMemberData;
 
use Illuminate\Http\Request;

class CsmemberDataController extends Controller
{
  public function index(){
return view('create', ['members_lists'=> CsMemberData::all()]);

  }



    public function create(Request $request){
      $csmember_list = new CsMemberData;
      //$data = $request->input();
      //$csmember_list->first_name =  $data['first_name'];
      
      $csmember_list->first_name = $request->input('first_name');
      $csmember_list->save();

//Log::info(json_decode($request->all()));
return redirect('/');
    }
}
      /*  $rules = [
		'first_name' => 'required|string|min:3|max:255',
			'city_name' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$student = new CsMemberData;
        $student->first_name = $data['first_name'];
        $student->last_name = $data['last_name'];
				$student->city_name = $data['city_name'];
				$student->email = $data['email'];
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
   // public function store(Request $request)
   // {
        //
   // }

    /**
     * Display the specified resource.
     */
   // public function show(CsMemberData $csMemberData)
   // {
        //
   // }

    /**
     * Show the form for editing the specified resource.
     */
   // public function edit(CsMemberData $csMemberData)
   // {
        //
   // }

    /**
     * Update the specified resource in storage.
     */
   // public function update(Request $request, CsMemberData $csMemberData)
   // {
        //
  //  }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(CsMemberData $csMemberData)
    //{
        //
   

