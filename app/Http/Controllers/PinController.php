<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PinDetail;
use Validator;
use App\Services\PinDetailService;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class PinController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PinDetailService $pinDetailService)
    {
        $this->pinDetailService = $pinDetailService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$title = 'Generate Pin';
        return view('generate_pin',compact('title'));
    }
    public function getAllUsers(){
        $users = User::select(['users.id','users.user_id','sale_point_members.name'])
                     ->where('type','!=','superadmin')
                    ->leftjoin('sale_point_members','sale_point_members.user_id','users.id')
                    ->orderBy('users.user_id','asc')
                    ->get();
        $response = [];
        if(!empty($users)){
            foreach($users as $user){
                $row['label'] = $user['user_id'].' - '.$user['name'];
                $row['value'] = $user['id'];
                $response[] = $row;
            }
        }
        return response()->json($response);
    }
    public function storePin(Request $request){
         $validator = Validator::make($request->all(), [
            'total_pin' =>'required|min:1',
            'user_id' =>'required',            
        ]);

         if ($validator->fails()) {
        return redirect('/generate-pin')
        ->withErrors($validator)
        ->withInput();
    }

       $result = $this->pinDetailService->store($request);
        if(!empty($result)){
        return redirect('/generate-pin')->with('message','Pin created successfully');
    }else{
        return redirect()->back()->with('error','Please try again');
    }  
    }

    public function list(Request $request){

    $selectData = [
        'pin_details.id',
        'pin_details.pin_no',
        'pin_details.serial_no',
        'pin_details.generated_no',
        'pin_details.user_id',
        'pin_details.status',
        'pin_details.pin_used_date',
        'users.user_id',
     
    ];
    $classes = PinDetail::select($selectData)->join('users','users.id','pin_details.user_id');   
    return DataTables::of($classes)
                    ->addIndexColumn() 
                    ->addColumn('status',function($row){
                        if($row['status'] =='1'){
                            $result = '<button class="btn btn-success btn-sm">Active</button>';
                        }else{
                            $result = '<button class="btn btn-danger btn-sm">InActive</button>';
                        }
                        return $result;
                    })   
                    ->addColumn('pin_used_date',function($row){
                        if($row['pin_used_date'] !='0000-00-00'){
                            $result =  Carbon::parse($row['pin_used_date'])->format('d-m-Y');
                        }else{
                            $result = '-';
                        }
                        return $result;
                    })        
                    ->addColumn('action',function($row){
                        $result = '<button class="btn btn-danger btn-sm">Delete</button>';
                        return $result;
                    })    
                     ->rawColumns(['status','action'])    
                    ->make(true);
} 
}
