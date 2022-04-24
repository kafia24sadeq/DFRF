<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;

use Systems\Events\SomeEvent;
use Systems\Scopes\OrderScope;



use Youtube;
use Systems\VideoCategory;
use Systems\Video;

use Systems\Http\Requests\VideoFormRequest;


class VideoController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $videos = Video::paginate(16);
      return view('admin.videos.index' , compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $VideoCategory = VideoCategory::all();
        return view('admin.videos.create')->with('VideoCategory', $VideoCategory->pluck('name', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoFormRequest $request)
    {
      $patern=  '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
      // $video = new video(array(
      //   'url'=> $request->url,
      //   'vid'=> $request->vid,
      //   'image_name'=>$request->image_name,
      //   'title'=>$request->title,
      //   'status'=>$request->status,
      //   'video_categories_id'=>$request->video_categories_id,


      // ));

      $video = new Video();
      $video->videoURL =$request->input('url');
      $video->image_name =$request->input('image_name');
      $video->title =$request->input('title');
      $video->video_categories_id =$request->input('video_categories_id');

      $request_youtube_url =$request->input('url');
      if(preg_match($patern,$request_youtube_url ,$match))
      {
          $youtube_id = $match[1];
      $video->videoID =$youtube_id;
      }

      $video->save();

      event(new SomeEvent(['desc'=>$request->title ]));

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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
      $model = Video::find($id);
      $VideoCategory = VideoCategory::select(array('id', 'name'))->get();

      return view('admin.videos.edit')->with(
      ['model'=>$model,'VideoCategory'=>$VideoCategory->pluck('name', 'id')]
    );

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
        $patern=  '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
      if($request->action == 'restore'){
        $video =  Video::withoutGlobalScope(OrderScope::class)->find($id);
        $data = array(
          'status'=> 0,
        );
        $video->update($data);

        return 'true';
      }

      $video =  Video::find($id);

      $videoURl = $video->videoURL;
      if ($request->action == 'delete') {
        $data = array(

          'status'=> 2,
        );
      }else{

          $request_youtube_url =$request->input('url');
          if(preg_match($patern,$request_youtube_url ,$match))
          {
              $youtube_id = $match[1];
              $videoID =$youtube_id;
          }
            if (empty($request->url)){
                $data = array(
                    'url'=> $videoURl,
                    'videoID'=> $videoID,
                    'image_name'=>$request->image_name,
                    'title'=>$request->title,
                    'status'=>$request->status,
                    'video_categories_id'=>$request->video_categories_id,
                );
            }else{
                $data = array(
                    'url'=> $videoURl,
                    'videoID'=> $request->url,
                    'image_name'=>$request->image_name,
                    'title'=>$request->title,
                    'status'=>$request->status,
                    'video_categories_id'=>$request->video_categories_id,
                );
            }

      }

      $video->update($data);


      event(new SomeEvent(['desc'=>$request->title ]));
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
      $video =  Video::withoutGlobalScope(OrderScope::class)->find($id);
      $video->delete($id);
      return 'true' ;
    }
}
