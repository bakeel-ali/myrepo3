<?php
function uploadfile($upload_dir, $file,&$errr)
{

    $oploadok=1;
    $allowed_extensions = ['pdf', 'pptx'];
    $max_file_size = 10 * 1024 * 1024; // 2 ميجابايت
    if (isset($_FILES[$file]) && !empty($_FILES[$file])) {
        $file_name = $_FILES[$file]['name'];
        $file_path = $upload_dir . basename($file_name);
        if (file_exists($file_path)) {
            $errr= " الملف موجود بلفعل ";
            $oploadok=0;
            // return false;
        }
        // تحقق من نوع الملف
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (!in_array($file_type, $allowed_extensions)) {
            // $errr = "خطأ: نوع الملف غير مدعوم.";
            $errr="NOT SUPPORTED ";
            $oploadok=0;
            // return false;
        }
        // تحقق من حجم الملف
        $file_size = $_FILES[$file]['size'];
        if ($file_size > $max_file_size) {
            $errr = "خطأ: حجم الملف يتجاوز الحد المسموح.";
            $oploadok=0;
            // return false;
        }

        // نقل الملف إلى المجلد المحدد   
        // $file_tmp = $_FILES[$file]['tmp_name'];
        if ($oploadok==0) {
            
            return false;
        }
        else{
            return true;
        }         
    }
    else{
        $errr="قم بتحميل الملف";
        return false;
    }
}