<?php
namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Http\Requests\pageFormRequest;

use Systems\PollOption;
use Systems\Scopes\OrderScope;


use Systems\Events\SomeEvent;


use Systems\Poll;



class PollsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      $data = PollsQuestions::all();
//      return view('admin.polls.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//      return view('admin.polls.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//      $page = new Poll(array(
//        'question'=> $request->question,
//        'status'=> $request->status,
//      ));
//
//      $page->save();
//
//
//      for ($i = 1 ; $i <= 10 ; $i++){
//
//          $field_presenter = 'option'.$i;
//          if (empty(trim($request->$field_presenter))){
//              continue ;
//          }
//            $options = new PollOption([
//          'name'=> $request->$field_presenter,
//          'poll_id'=>$page->id,
//      ]);
//            $options->save();
//      }
//
//
//      event(new SomeEvent(['desc'=>$request->title]));
//
//      return 'true';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = PollsQuestions::find($id);
        $options = PollOption::where('poll_id' , $id )->get()->toArray();
//      dd($options);
        return view('polls.show', compact('model' , 'options' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $model = PollsQuestions::find($id);
      $options = PollOption::where('poll_id' , $id )->get()->toArray();
//      dd($options);
      return view('admin.polls.edit', compact('model' , 'options' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {




              PollOption::where('id', $request->radio )->increment('votes');



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
      $page =  Page::withoutGlobalScope(OrderScope::class)->find($id);
      $page->delete($id);
      return 'true' ;
    }
}
