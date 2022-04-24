<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;
use Systems\Company;
use Systems\Product;

class AllCompanyController extends Controller
{
    public function index()
    {
        $company = Company::paginate(6);
        
        return view('companies.index',compact('company'));
    }

    public function show($id)
    {
        $company = Company::findOrfail($id);
        $products = Product::where("company_id","=", $id)->paginate(10);

        return view('companies.show',compact('company','products'));
    }
}
