<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class officeloadController extends Controller
{
    public function index(){
    	return view('admin.officeloan.addofficeloan');
    }

    public function loan(){
    	return view('admin.officeloan.loanoffice');
    }

    public function payment(){
    	return view('admin.officeloan.paymentloan');
    }

    public function manageloan(){
    	return view('admin.officeloan.manageloan');
    }
}
