<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',['url'=> "home" ]);
    }


    public function add_police()
    {
        return view('add_police',['url'=> "add_police" ]);
    }

    public function add_security()
    {
        
        return view('add_security',['url'=> "add_security" ]);
    }


    public function police_list()
    {
        return view('police_list',['url'=> "police_list" ]);
    }


    public function security_list()
    {
        return view('security_list',['url'=> "security_list" ]);
    }

    public static function isRouteActive($url,$css)
    {
        if(strcmp($url,$css)==0)
        {
            echo "active";
            return;
        }
    }
}
