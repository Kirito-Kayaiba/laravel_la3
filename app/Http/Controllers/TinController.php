<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    //nạp view home
    public function getHome(){
        return view('home');
    }
    //tham số của tin, nạp view chitiet
    public function chitiet($id=0){
        $tin = \DB::table('tin')->where('id',$id)->first();
        $data = ['id' => $id,'tin' => $tin];
        return view("chitiet",$data);
    }
    //tintrongloai : tham số là $idLT , nạp view tintrongloai
    public function getTintrongloai($idLT=0){
        $listtin = \DB::table('tin')->where('idLT',$idLT)->get();
        $data = ['idLT' => $idLT,'listtin' => $listtin];
        return view('tintrongloai',$data);
    }
}
