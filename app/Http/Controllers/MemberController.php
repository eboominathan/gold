<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MemberService;
use App\Traits\ResponseTrait;  
use Yajra\DataTables\DataTables;
use App\Member;
use DB;
use Validator;
use Carbon\Carbon;

class MemberController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
      public  function __construct( MemberService $memberService)
      {
       $this->memberService = $memberService;
   }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$title = 'Members';
        return view('members',compact('title'));
    }
    public function address()
    {
        $title = 'Members Address';
        return view('members_address',compact('title'));
    }
    public function add()
    {
        $title = ' Member Add';
        return view('member_add',compact('title'));
    }

    public function storeMember(Request $request)
    {   

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/member/create')
            ->withErrors($validator)
            ->withInput();
        }


        $result = $this->memberService->store($request);
        if(!empty($result)){
            return redirect('/member/create')->with('message','Member created successfully');
        }else{
            return redirect()->back()->with('error','Please try again');
        }   

    }
    public function list(Request $request){

        $selectData = [
            'members.id',
            'members.name',
            'members.member_id',
            'users.hidden',
            'members.date',
            'members.sponsor_id',
            'members.stock_point_id',
            'members.address',
            'members.mobile',
            'users.email',
        ];
        $classes = Member::select($selectData)->join('users','users.id','members.user_id');
        if (request()->has('date_from') && !empty($request['date_from'])) {

            $date = Carbon::createFromFormat('d-m-Y', $request['date_from'])->format('Y-m-d');                    
            $classes->where(DB::raw('DATE(date)'),$date);
        }
        if (request()->has('month_from') && !empty($request['month_from'])) {
            $date = Carbon::createFromFormat('m-Y', $request['month_from'])->format('m');
            $classes->where(DB::raw('Month(date)'),$date);
        }
        return DataTables::of($classes)
        ->addIndexColumn()         
        ->make(true);

    } 
}
