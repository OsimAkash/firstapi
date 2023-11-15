<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function first(Request $request )  {
        return \response()->json(
            ['msg'=> 'Hello World']
        );
    }


    public function login(Request $request )  {
        
        if ($request->login) {
            
            $uname = $request->uname;
            $pass  = $request->pass;

            return \response()->json(['username'=>$uname, 'password'=>$pass]);

        }

    }


}
