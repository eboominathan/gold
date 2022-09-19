<?php

namespace App\Http\Controllers;

use App\SalepointMaster;
use App\Services\SalepointMasterService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\DataTables;
use DB;

class SalePointMasterController extends Controller
{
   use ResponseTrait;

     /**
     * @var $userService;
     */
     protected $userService;
     private $status = false;
     public $result = [];
    /**
     * Contructor
     *
     * @param  App\Services\UserService  $userService;
     */

    function __construct(SalepointMasterService $salepointMasterService)
    {
     $this->salepointMasterService = $salepointMasterService;
 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $title = 'Sale Point Master';
     return view('sale_point_master',compact('title'));
 }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $rules = [
            'name' => 'required|string|unique:sale_points,name,NULL,id,deleted_at,NULL'    
        ];
        $customMessages = [
            'required' => 'Enter name'
        ];

        $this->validate($request, $rules, $customMessages);
        $result = $this->salepointMasterService->store($request);

        if(!empty($result)){
            $this->success();
            $this->setData("message",'SalePoint Saved Successfully');
        }else{
            $this->failure();
            $this->setData("message",'SalePoint Saving failed');
        }
        return response()->json($this->setResultData()); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SalepointMaster  $salepointMaster
     * @return \Illuminate\Http\Response
     */
    public function show(SalepointMaster $salepointMaster)
    {
         $i = 0;
        $data = Datatables::of(SalepointMaster::all())
          ->addIndexColumn()
        ->addColumn('action', function($row) {
                return '<button class="btn btn-primary btn-sm" 
                onclick="edit_salepoint('.$row->id.')"
                >Edit</button>&nbsp;
                <button class="btn btn-danger btn-sm" 
                onclick="delete_salepoint('.$row->id.')"
                 >Delete</button>';
            })->make(true);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SalepointMaster  $salepointMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = $this->salepointMasterService->getSalepointMasterById($id);    
         if(!empty($result)){
            $this->success();
            $this->setData("data",$result);
            $this->setData("message",'SalePoint fetched Successfully');
        }else{
            $this->failure();
            $this->setData("message",'SalePoint fetching failed');
        }
        return response()->json($this->setResultData());  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SalepointMaster  $salepointMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalepointMaster $salepointMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SalepointMaster  $salepointMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->salepointMasterService->deleteSalepointMasterById($id);    
         if(!empty($result)){
            $this->success();
            $this->setData("data",$result);
            $this->setData("message",'SalePoint deleted Successfully');
        }else{
            $this->failure();
            $this->setData("message",'SalePoint deleting failed');
        }
        return response()->json($this->setResultData()); 
    }





}
