<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

 
class DataController extends Controller
{
    
    public function readData(){
        
        
        // if(file_exists('c://read.json')){
        // $content=File::get('c://read.json');
        //     echo $content;
        // }else{
        //     echo "File not exist";
        // }
        $jsonString = File::get('uploads/read.json');
        $data = json_decode($jsonString, true);

    }

    public function updateData(Request $request){
        
        $newJsonString = json_encode($input);
        file_put_contents('uploads/json/jsonFile.json', $newJsonString);
    }

}

