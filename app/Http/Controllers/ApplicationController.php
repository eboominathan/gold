<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApplicationService;

class ApplicationController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
     public  function __construct(ApplicationService $applicationService)
  {
     $this->applicationService = $applicationService;
 }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$title = 'Application Form';
        $userId = $this->applicationService->getUserId();
        return view('application_form',compact('title','userId'));
    }
}
