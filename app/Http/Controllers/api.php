<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class api extends Controller
{
    
    public function login(Request $request)
    {
        $row=DB::table('login')->where("username", '=',  $request->username)->where("password", '=',  $request->password)->first();
        if(!is_null($row))
        {
            $result["status"]=1;
            $result["role"]=$row->usertype;
            $result["id"]=$row->login_id;
        }
        else
        {
            $result["status"]=0;          
        }
        return  json_encode($result);

    }





    public function security_profile($id)
    {
        $row=DB::table('user')->where("login_id", '=',  $id)->first();
        
        $result["fname"]=$row->fname;
        $result["lname"]=$row->lname;
        $result["place"]=$row->place;
        $result["phone"]=$row->phone;
        $result["email"]=$row->email;
        
        return  json_encode($result);
    }

    public function police_profile($id)
    {
        $row=DB::table('police')->where("login_id", '=',  $id)->first();
        
        $result["fname"]=$row->fname;
        $result["lname"]=$row->lname;
        $result["place"]=$row->place;
        $result["phone"]=$row->phone;
        $result["email"]=$row->email;
        
        return  json_encode($result);
    }



    public function security_home()
    {

        $row = DB::table('threat')->where("status", '=', "pending")->get();
        
        return  json_encode($row);
    }

    public function police_home()
    {
        $row = DB::table('threat')->where("status", '=', "forwarded")->get();
       

        return  json_encode($result);
    }


    
    public function false_positive($id)
    {
        $affected = DB::table('threat') ->where('id',$id) ->update(['status' => "false"]);


        return  ;
    }


    public function forward($id)
    {
        $result = DB::table('threat') ->where('id',$id) ->update(['status' => "forwarded"]);


        return ;
    }



       

}
