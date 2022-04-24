<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Systems\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;

use Systems\Http\Requests;
use Systems\Image;
use Systems\Uploads;
use Systems\Writer;
use Intervention;
use Youtube;


class UploadController extends Controller
{

    public function searchImage(Request $request){
        $search = $_POST['selectImage'];
        $image =     Image::where('image_tags', 'LIKE', '%'.$search.'%')->take(10)->get();

        echo "<div class='container-fluid'>" ;
        foreach ($image as $key => $value) {
            echo "  <div class='col-md-1 ' style='cursor:pointer'><img alt='".$value->id."' class='image_insert' src='/photos/".$value->name."' width=100%  /></div>" ;
        }
        echo "</div>" ;


    }




    public function searchWriter(Request $request){

        $search = $_POST['searchWriter'];
        $search = trim($search);
        if(isset($search) && !empty($search)){
            $writers =     Writer::where('name', 'LIKE', '%'.$search.'%')->take(10)->get();
        }
        else{
            echo "<div class='container-fluid'>" ;
            echo "لا توجد نتائج " ;
            echo "</div>" ;
            return "";
        }
        if(count($writers) >1){


            echo "<div class='container-fluid'>" ;
            foreach ($writers as $key => $value) {
                echo "<div class='seclectWriter' style='cursor:pointer;background:#efefef; padding: 5px; overflow: hidden;clear: both;margin-bottom: 10px;'><span>".$value->id."</span><div class='pull-right col-lg-3' style='cursor:pointer'><img class=img-responsive img-thumbnail resized src=".PhotosDir($value->images->name, true , [40,40])." alt=></div>  <p class='col-lg-9' style='cursor:pointer'>".$value->name."</p></div> " ;
            }
            echo "</div>" ;
        }else{
            echo "<div class='container-fluid'>" ;
            echo "لا توجد نتائج " ;
            echo "</div>" ;

        }


    }


    public function getVideoInfo(Request $request){
        $Youtube = Youtube::parseVIdFromURL($_POST['url']);
        $Youtube = Youtube::getVideoInfo($Youtube);
        $json = array(
            'title' => $Youtube->snippet->title,
            'vid' => $Youtube->id,
            'testimage' => $Youtube->snippet->thumbnails->high->url,
            'image' => $Youtube->snippet->thumbnails->high->url,
            //  'message' => 'Uploaded successfully'
        );


        return  response()->json($json);


    }


    public function inliner(){
        return view('admin.jquery.inliner');


    }


    public function image(Request $request){


        $destination_path = 'photos/';
        if ($_FILES['file']['type'] ==  'image/jpeg' or $_FILES['file']['type'] == 'image/gif'  or $_FILES['file']['type'] ==  'image/jpg' or $_FILES['file']['type'] ==  'image/pjpeg' or $_FILES['file']['type'] ==  'image/png'  )  {
            $type = substr($_FILES['file']['type'] , 6);
            if($_FILES['file']['type']=='image/pjpeg'){
                $type = 'jpeg';
            }
            $name = uniqid().".".$type;
            $target_path = $destination_path.$name  ;

            $success = 0;
            if(@move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
                $success = 1;
            }
        }

        $image = Intervention::make($target_path);

        if ($_POST['copyrights']) {
            if ($_POST['transparency']  == 0) {
                $water = Intervention::make(public_path().ThemeHelper().'img/sys/logo.png')->opacity(100);
            }else{
                $transparency = 100 -  $_POST['transparency'];
                $water = Intervention::make(public_path().ThemeHelper().'img/sys/logo.png')->opacity($transparency);
            }
            $image->insert($water, $_POST['copyrights'] , 10, 10);
        }

        $image->save($target_path, 100);

        // $output will be converted into JSON

        if ($success) {

            if(ends_with(URL::previous() , 'images/create')) {
                $image = new Image(array(

                    'caption' => $_POST['image_tags'],
                    'name' => $name,
                    'content' => $_POST['content'],
                    'link' => $_POST['link'],
                    'image_categories_id' => $_POST['imagecategory'],

                ));

                $image->save();
            }

            $json['files'][] = array(
                'name' => $name,
                'id' => '',
                'url' => $target_path,
                'message' => 'Uploaded successfully'
            );
            return  response()->json($json);
        } else {
            $output = array("success" => false, "error" => "Failure!");
        }





        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($output);



    }




    public function updateimage(Request $request){
        $destination_path = 'photos/';
        if ($_FILES['file']['type'] ==  'image/jpeg' or $_FILES['file']['type'] == 'image/gif'  or $_FILES['file']['type'] ==  'image/jpg' or $_FILES['file']['type'] ==  'image/pjpeg' or $_FILES['file']['type'] ==  'image/png'  )  {
            $type = substr($_FILES['file']['type'] , 6) ;
            if($_FILES['file']['type']=='image/pjpeg'){
                $type = 'jpeg';
            }
            $name = uniqid().".".$type;
            $target_path = $destination_path.$name  ;

            $success = 0;
            if(@move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
                $success = 1;
            }

        }
        $image = Intervention::make($target_path);

//        $image = Intervention::make($target_path)->widen(1500);

        if ($_POST['copyrights']) {
            if ($_POST['transparency']  == 0) {
                $water = Intervention::make(public_path().ThemeHelper().'img/sys/logo.png')->opacity(100);
            }else{
                $transparency = 100 -  $_POST['transparency'];
                $water = Intervention::make(public_path().ThemeHelper().'img/sys/logo.png')->opacity($transparency);
            }
            $image->insert($water, $_POST['copyrights'] , 10, 10);
        }

        $image->save($target_path, 100);

        // $output will be converted into JSON

        if ($success) {

            if(ends_with(URL::previous() , 'images/'.$_POST['id'].'/edit')) {


                $image = Image::find($_POST['id']);

                $data = [
                    'image_tags' => $_POST['image_tags'],
                    'name' => $name,
                    'content' => $_POST['content'],
                    'link' => $_POST['link'],
                    'imagecategory' => $_POST['imagecategory']];


                $image->update($data);

            }
            $json['files'][] = array(
                'name' => $name,
                'id' => $image->id,
                'url' => $target_path,
                'message' => 'Uploaded successfully'
            );
            return  response()->json($json);
        } else {
            $output = array("success" => false, "error" => "Failure!");
        }





        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($output);



    }



    public function uploadfile(Request $request){
        $destination_path = 'files/';
        if ($_FILES['file']['type'] ==  'application/pdf' or $_FILES['file']['type'] == 'application/msword'  or $_FILES['file']['type'] ==  'application/vnd.openxmlformats-officedocument.wordprocessingml.document'  ) {
            $type = Input::file('file')->getClientOriginalExtension();
            $name = uniqid() . "." . $type;
            $target_path = $destination_path . $name;

            $success = 0;
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
                $success = 1;
            }

        }


        // $output will be converted into JSON

        if ($success) {

            $upload = new Uploads(array(

                'name' => $_POST['name'],
                'link' => $name ,
                'status' => 0 ,

            ));

            $upload->save();

            $json['files'][] = array(
                'name' => $name,
                'id' => $upload->id,
                'url' => $target_path,
                'message' => 'Uploaded successfully'
            );
            return  response()->json($json);
        } else {
            $output = array("success" => false, "error" => "Failure!");
        }





        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($output);



    }




    public function multiimage(Request $request){
        $destination_path = 'photos/';
        for ($i=0; $i < count($_FILES['files']['name']) ; $i++) {


            if ($_FILES['files']['type'][$i] ==  'image/jpeg' or $_FILES['files']['type'][$i] == 'image/gif'  or $_FILES['files']['type'][$i] ==  'image/jpg' or $_FILES['files']['type'][$i] ==  'image/pjpeg' or $_FILES['files']['type'][$i] ==  'image/png'  )  {
                $type = substr($_FILES['files']['type'][$i] , 6) ;
                if($_FILES['files']['type'][$i]=='image/pjpeg'){
                    $type = 'jpeg';
                }
                $name = uniqid().".".$type;
                $target_path = $destination_path.$name  ;

                $success = 0;
                if(@move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_path)) {
                    $success = 1;
                }

            }

            $image = Intervention::make($target_path)->widen(500);

            if ($_POST['copyrights']) {
                if ($_POST['transparency']  == 0) {
                    $water = Intervention::make(ThemeHelper().'img/sys/logo.png')->opacity(100);
                }else{
                    $transparency = 100 -  $_POST['transparency'];
                    $water = Intervention::make(ThemeHelper().'img/sys/logo.png')->opacity($transparency);
                }
                $image->insert($water, $_POST['copyrights'] , 10, 10);
            }

            $image->save($target_path, 100);

            // $output will be converted into JSON

            if ($success) {

                $image = new Image(array(

                    'image_tags' => $_POST['image_tags'],
                    'name' => $name,
                    'imagecategory' => 1 ,

                ));

                $image->save();

                $json['files'][$i] = array(
                    'name' => $name,
                    'id' => $image->id,
                    'url' => $target_path,
                    'message' => 'Uploaded successfully'
                );
            } else {
                $output = array("success" => false, "error" => "Failure!");
            }



        }

        return  response()->json($json);



        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($output);


    }
    public function tinyUploader(Request $request)
    {

        if ($request->hasFile('file')) {

            /***************************************************
             * Only these origins are allowed to upload images *
             ***************************************************/
            $accepted_origins = array("http://localhost", "http://192.168.1.1", 'https://'.request()->getHttpHost());

            /*********************************************
             * Change this line to set the upload folder *
             *********************************************/
            $imageFolder = '/photos/';

            if (isset($_SERVER['HTTP_ORIGIN'])) {
                // same-origin requests won't set an origin. If the origin is set, it must be valid.
                if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
                    header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
                } else {
                    header("HTTP/1.1 403 Origin Denied");
                    return;
                }
            } else {
                // Notify editor that the upload failed
                header("HTTP/1.1 500 Server Error");
            }

            // Don't attempt to process the upload on an OPTIONS request
            if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
                header("Access-Control-Allow-Methods: POST, OPTIONS");
                return;
            }

            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/photos');
            $image->move($destinationPath, $input['file']);
            echo json_encode(array('location' => request()->getSchemeAndHttpHost() . '/photos/' . $input['file']));

        } else {
            // Notify editor that the upload failed
            header("HTTP/1.1 500 Server Error");

        }
    }
}
