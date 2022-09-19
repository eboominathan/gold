<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SalepointMemberService;
use App\Traits\ResponseTrait;  
use Yajra\DataTables\DataTables;
use App\SalePointMember;
use DB;
use Validator;
use Carbon\Carbon;

class SalePointMemberController extends Controller
{

  function __construct(SalepointMemberService $salepointMemberService)
  {
     $this->salepointMemberService = $salepointMemberService;
 }


 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function add()
 {
    $title = 'Sale Point Member Add';
    return view('sale_point_member_add',compact('title'));
}

public function storeSalepointMember(Request $request)
{   

    $validator = Validator::make($request->all(), [
        'email' => 'required|unique:users',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect('/sale-point-member/create')
        ->withErrors($validator)
        ->withInput();
    }


    $result = $this->salepointMemberService->store($request);
    if(!empty($result)){
        return redirect('/sale-point-member/create')->with('message','SalePoint Member created successfully');
    }else{
        return redirect()->back()->with('error','Please try again');
    }   

}

public function list(Request $request){

    $selectData = [
        'sale_point_members.id',
        'sale_point_members.name',
        'users.sale_point_id',
        'users.hidden',
        'sale_point_members.date',
        'sale_point_members.sponsor_id',
        'sale_point_members.address',
        'sale_point_members.mobile',
        
        'users.email',
    ];
    $classes = SalePointMember::select($selectData)->join('users','users.id','sale_point_members.user_id')->get();
    return DataTables::of($classes)
        ->addIndexColumn()
          // ->filter(function ($instance) use ($request) {
            
            // if (request()->has('date_from') && !empty($request['date_from'])) {

            //         $date = Carbon::createFromFormat('d-m-Y', $request['date_from'])->format('Y-m-d');                    
            //             $instance->where(DB::raw('DATE(date)'),$date);
            //         }
            //         if (request()->has('month_from') && !empty($request['month_from'])) {
            //         $date = Carbon::createFromFormat('M', $request['month_from'])->format('m');
            //             $instance->where(DB::raw('Month(date)'),$date);
            //         }

    // })
    ->make(true);

} 

}
