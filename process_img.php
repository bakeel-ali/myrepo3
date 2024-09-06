<?php
function uploadimg($upload_dir,$file,&$errr)
{
    $oploadOk=1;
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $max_file_size = 2 * 1024 * 1024; // 2 ميجابايت
    if (isset($_FILES[$file]) && !empty($_FILES[$file])) {
        $file_name = $_FILES[$file]['name'];
        $file_path = $upload_dir . basename($file_name);
        $file_tmp = $_FILES[$file]['tmp_name'];
        $check=getimagesize($file_tmp);
        if($check!==false)
        {
            $oploadOk=1;
            
        }
        else{
            $oploadOk=0;
            $errr=" الملف ليس من الصور الحقيقية";
            // return false;
        } 
        if(file_exists($file_path))
        {
            $errr=" الملف موجود بلفعل ";
            $oploadOk=0;
            // return false;
        }
        // تحقق من نوع الملف
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (!in_array($file_type, $allowed_extensions)) {
            // $errr="خطأ: نوع الملف غير مدعوم.";
            $errr="NOT SUPPORTED ";
            $oploadOk=0;
            // return false;
        }
        // تحقق من حجم الملف
        $file_size = $_FILES[$file]['size'];
        if ($file_size > $max_file_size) {
            $oploadOk=0;
            $errr="خطأ: حجم الملف يتجاوز الحد المسموح.";
            // return false;
        }
        if ($oploadOk==0) {
            
            return false;
        }
        else{
            return true;
        } 
                       
        // نقل الملف إلى المجلد المحدد               
    }
    else{
        $errr=" قم بتحميل ملف الصورة";
        return false;
    }
}