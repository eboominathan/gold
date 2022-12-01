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


}
