<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invoiceController extends Controller
{
    public function index() {
    	return view('admin.invoice.invoiceNew', get_defined_vars());
    }

    public function pos() {
    	return view('admin.invoice.invoicePos', get_defined_vars());
    }
}
