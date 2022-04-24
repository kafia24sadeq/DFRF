<?php

namespace Systems\Http\Controllers\Admin;

use Systems\Company;
use Illuminate\Http\Request;
use Systems\Events\SomeEvent;
use Systems\Http\Requests\CompanyFormRequest;

use Systems\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::paginate(16);
        return view('admin.companies.index' ,compact('company') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company =new Company();
        return view('admin.companies.create', compact('company') );
    }

    /**
     * @param CompanyFormRequest $request
     * @return string
     */
    public function store(CompanyFormRequest $request)
    {
        $company = new Company(array(
            'title'=> $request->title,
            'description'=> $request->description,
            'image_name'=>$request->image_name,
            'location'=> $request->location,
            'status'=> $request->status,

        ));

        $company->save();

        event(new SomeEvent(['desc'=>$request->title]));

        return 'true';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Company::find($id);
        return view('admin.companies.edit' , compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyFormRequest $request, $id)
    {
        $company =  Company::find($id);

        $data = array(
            'title'=> $request->title,
            'description'=> $request->description,
            'image_name'=>$request->image_name,
            'location'=> $request->location,
            'status'=> $request->status,
        );


        $company->update($data);

        //store logs
        event(new SomeEvent(['desc'=>$request->title]));

        return 'true';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company =  Company::find($id);
        $company->delete($id);
        return 'true' ;
    }
}
