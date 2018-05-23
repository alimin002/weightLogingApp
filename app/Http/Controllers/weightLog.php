<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Redirect;
use App\Http\Requests;
use App\weight_log;
use Illuminate\Pagination\Paginator;
class weightLog extends Controller
{
    //
		function index(){
				$data=weight_log::orderBy('weight_log.date', 'desc')->paginate(5);
				//print_r($data);
        return view("index")
								->with("data",$data);
		}
		
		function create(){
			 return view("create");
		}
		
		function display($weight_log_id){
			$data=weight_log::where('weight_log.weight_log_id', '=',$weight_log_id)->first();
			 return view("display")
									->with("data",$data);
		}
		
		function edit($weight_log_id){
			$data=weight_log::where('weight_log.weight_log_id', '=',$weight_log_id)->first();
			 return view("edit")
									->with("data",$data);
		}
		
		
		function update(Request $request){
									$weight_log_id=$request["weight_log_id"];
									$data=array("max"=>$request["max"],
															"min"=>$request["min"],												
															"variance"=>$request["variance"]
															);
				$save= weight_log::where("weight_log_id","=",$weight_log_id)
													->update($data);	
				if($save==0){
					$message = "update data failed";
				}else{
					$message = "update data success";
				}				
				return Redirect::to('weight_log')->with('message', $message);
		}
		
		
		function destroy(Request $request){
									$weight_log_id=$request["weight_log_id"];
									$data=array("max"=>$request["max"],
															"min"=>$request["min"],												
															"variance"=>$request["variance"]
															);
				$save= weight_log::where("weight_log_id","=",$weight_log_id)
													     ->delete();	
				if($save==0){
					$message = "Delete data failed";
				}else{
					$message = "Delete data success";
				}				
				return Redirect::to('weight_log')->with('message', $message);
		}
		
		function delete($weight_log_id){
			//echo 1;
			$data=weight_log::where('weight_log.weight_log_id', '=',$weight_log_id)->first();
			 return view("delete")
									->with("data",$data);
		}
		
		function save(Request $request){
						$data=array("date"=>date("Y-m-d"),
										"max"=>$request["max"],
										"min"=>$request["min"],												
										"variance"=>$request["variance"]
										);
				$save= weight_log::insert($data);
				if($save==0){
					$message = "save data failed";
				}else{
					$message = "save data success";
				}				
				return Redirect::to('weight_log')->with('message', $message);
		}
}
