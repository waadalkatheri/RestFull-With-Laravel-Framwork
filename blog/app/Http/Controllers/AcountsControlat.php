<?php
/**
 * Created by PhpStorm.
 * User: waad
 * Date: 08/02/2017
 * Time: 20:50
 */

namespace App\Http\Controllers;


use App\Accounts;
use Illuminate\Http\Request;

class AcountsControlat extends Controller
{



    public function insert(Request $request){
        $acount = new Accounts();
        $acount-> name =$request->input("name");
       if ( $acount-> save ()){
            return response()->json(['status'=>'success', 'Data'=> $acount] );

       }else {

           return response()->json(['status'=>'Faild', 'Data'=> $acount] );
       }


    }

    public function getAll(){
        $acount = Accounts::get();
        if ($acount!= null){
            return response()->json(['status'=>'success', 'Data'=> $acount] );

        }else {

            return response()->json(['status'=>'Faild', 'Data'=> $acount] );
        }



    }


    public function getByID($id){
        $acount = Accounts::where('id', $id) ->first();
        if ($acount!= null){
            return response()->json(['status'=>'success', 'Data'=> $acount] );

        }else {

            return response()->json(['status'=>'Faild', 'Data'=> $acount] );
        }


    }


}