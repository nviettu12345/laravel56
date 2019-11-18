<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('upload_image'))
    {
        function upload_image($filename='',$path='',$request)
        {
            // duong dan anh
            if($path=='')
            {
                $path='upload';
            }
            //lay duong dan anh        
            $file_name=$_FILES[$filename]['name'];
            // thong tin file
                // Lưu file vào thư mục upload với tên là biến $filename
                $request->file($filename)->move($path,$file_name);
            return $file_name;


        }
    }

    if(!function_exists('get_data_user'))
    {
         function get_data_user($type,$field='id')
        {   
          return Auth::guard($type)->user()?Auth::guard($type)->user()->$field:'';
     
        }
    }


?>