<?php
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
?>