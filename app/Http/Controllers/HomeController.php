<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $threat_count= DB::table('threat')->count();
        $pending_count= DB::table('threat')->where("status", '=', "pending")->count();
        $forwarded_count= DB::table('threat')->where("status", '=', "forwarded")->count();
        $false_count= DB::table('threat')->where("status", '=', "false")->count();
        $resolved_count= DB::table('threat')->where("status", '=', "false")->count();


        return view('home',['url'=> "home", 'threat_count'=> $threat_count , 'pending_count'=> $pending_count, 'forwarded_count'=> $forwarded_count, 'false_count'=> $false_count,  'resolved_count'=> $resolved_count]);
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

        $police = DB::table('police')->get();
        $login = DB::table('login')->where("usertype", '=', "police")->get();
        return view('police_list',['url'=> "police_list",'police'=> $police,'login'=> $login ]);
    }


    public function security_list()
    {
        $user = DB::table('user')->get();
        $login = DB::table('login')->where("usertype", '=', "user")->get();
        return view('security_list',['url'=> "security_list" ,'user'=> $user,'login'=> $login ]);
    }

    public static function isRouteActive($url,$css)
    {
        if(strcmp($url,$css)==0)
        {
            echo "active";
            return;
        }
    }

    public function new_police(Request $request)
    {
        DB::insert('insert into login (username,password,usertype) values (?, ?,? )', [$request->username,$request->password,"police"]);
        $login_row=DB::table('login')->where("username", '=', $request->username)->first();
        $login_id=$login_row->login_id;
        DB::insert('insert into police (login_id,fname,lname,place,phone,email) values (?,?, ?,?, ?, ? )', [$login_id,$request->fname,$request->lname,$request->place,$request->phno,$request->email]);
        $police = DB::table('police')->get();
        $login = DB::table('login')->where("usertype", '=', "police")->get();
        return view('police_list',['url'=> "police_list",'police'=> $police,'login'=> $login ]);
   
    }


    public function new_security(Request $request)
    {
        DB::insert('insert into login (username,password,usertype) values (?, ?,? )', [$request->username,$request->password,"user"]);       
        $login_row=DB::table('login')->where("username", '=', $request->username)->first();
        $login_id=$login_row->login_id;
        DB::insert('insert into user (login_id,fname,lname,place,phone,email) values (?,?, ?,?, ?, ? )', [$login_id,$request->fname,$request->lname,$request->place,$request->phno,$request->email]);
        $user = DB::table('user')->get();
        $login = DB::table('login')->where("usertype", '=', "user")->get();
        return view('security_list',['url'=> "security_list" ,'user'=> $user,'login'=> $login ]);
  }


    public static function getUsername($login,$login_id)
    {
       
        foreach ($login as $login) 
        {
            if (strcmp($login->login_id,$login_id)==0)
            {
                echo $login->username;
            }
        }
          
    }


    public function delete_security($id)
    {

        $del_user= DB::table('user')->where("user_id", '=', $id)->get();
        DB::table('login')->where('login_id', '=', $del_user[0]->login_id)->delete();
        DB::table('user')->where('user_id', '=', $id)->delete();

        $user = DB::table('user')->get();
        $login = DB::table('login')->where("usertype", '=', "user")->get();
        return view('security_list',['url'=> "security_list" ,'user'=> $user,'login'=> $login ]);
    }

    public function delete_police($id)
    {

        $del_police= DB::table('police')->where("police_id", '=', $id)->get();
        DB::table('login')->where('login_id', '=', $del_police[0]->login_id)->delete();
        DB::table('police')->where('police_id', '=', $id)->delete();

        $police = DB::table('police')->get();
        $login = DB::table('login')->where("usertype", '=', "police")->get();
        return view('police_list',['url'=> "police_list" ,'police'=> $police,'login'=> $login ]);

    }




    public function threat_detected()
    {
        $threat = DB::table('threat')->where("status", '=', "pending")->get();
        return view('detected',['url'=> "threat_detected" , 'threat'=> $threat]);


    }




    public function false_positive($id)
    {
        $affected = DB::table('threat') ->where('id',$id) ->update(['status' => "false"]);

        $threat = DB::table('threat')->where("status", '=', "pending")->get();
        return view('detected',['url'=> "threat_detected" , 'threat'=> $threat]);
    }


    public function forward($id)
    {
        $affected = DB::table('threat') ->where('id',$id) ->update(['status' => "forwarded"]);

        $threat = DB::table('threat')->where("status", '=', "pending")->get();
        return view('detected',['url'=> "threat_detected" , 'threat'=> $threat]);
    }

    
    public function threat_forwarded()
    {
        $threat = DB::table('threat')->where("status", '=', "forwarded")->get();
        return view('forwarded',['url'=> "threat_forwarded" , 'threat'=> $threat]);


    }


    public function resolved($id)
    {
        $affected = DB::table('threat') ->where('id',$id) ->update(['status' => "resolved"]);

        $threat = DB::table('threat')->where("status", '=', "forwarded")->get();
        return view('detected',['url'=> "threat_detected" , 'threat'=> $threat]);
    }





}
