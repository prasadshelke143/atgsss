<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ATGController extends Controller
{
    function insert(Request $req)
    {
    	$validation = $req->validate([
    		'firstName' => 'required|max:20',
    		'Email'     => 'required|Email|unique:atg',
    		'Pincode'   => 'required|numeric|digits:6'
    	]);

    	$firstName =$req->input('firstName');
    	$Email =$req->input('Email');
    	$Pincode =$req->input('Pincode');

    	$data = array('firstName' =>$firstName ,'Email' =>$Email , 'Pincode' =>$Pincode);

    	DB::table('atg')->insert($data);
    	echo "Data Saved to Database";
    }
}
