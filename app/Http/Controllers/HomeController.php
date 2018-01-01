<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repo\HomeRepo;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct(HomeRepo $home_repo) {
        $this->homeRepo = $home_repo;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results=$this->homeRepo->showMain();
        
        return view('front.home.main', compact('results'));
    }
    public function loadResult()
    {
        $results=$this->homeRepo->loadResult();
        
        return view('front.home.result', compact('results'));
    }
    public function searchResult()
    {
        $result=$this->homeRepo->searchResult();
        
        return view('front.home.result_search', compact('result'));
    }
}
