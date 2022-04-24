<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;
use Systems\Applicant;
use Systems\Http\Requests\ApplicationFormRequest;
use Systems\Http\Requests\MailFormRequest;
use Systems\Mail;

class MailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mails.show');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('mails.create');
    }

    /**
     * @param MailFormRequest $request
     * @return string
     */
    public function store(ApplicationFormRequest $request)
    {

    //    dd($request->all());
//        $mail = New Mail([
//            'name' => $request->name,
//            'message' => $request->message,
//            'email' => $request->email,
//            'source' => $request->source,
//            'phone' => $request->phone,
//            'governorate' => $request->governorate,
//            'whatsapp' => $request->whatsapp,
//            'type' => $request->type,
//            'ip' => "",
//            'code' => "",
//            'status' => 1,
//        ]);
//
////        dd($mail);
//        $mail->save();
//
//        return 'true';
        
        $applicant =new Applicant();
        $applicant->name = $request->name;
        $applicant->email = $request->email;
        // $applicant->source = $request->source;
        $applicant->phone = $request->phone;
        // $applicant->governorate = $request->governorate;
        // $applicant->whatsapp = $request->whatsapp;
        // $applicant->type = $request->type;
        $applicant->message = $request->message;
        $applicant->save();
        return 'true';
       return redirect('/mails/create')->with('status','message is sent successfully');


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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
