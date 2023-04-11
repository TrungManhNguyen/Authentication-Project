<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $errors=[];
        if(empty(trim($_POST['username'])))
        {
        $errors['username']['required'] = 'Khong duoc de trong ho ten';
        }
        else {
            if(strlen(trim($_POST['username']))<5){
                $errors['username']['min'] = 'Ho ten phai dai hon 5 ky tu';
            }
        }
        if(empty(trim($_POST['password'])))
        {
            $errors['password']['required'] = 'Khong duoc de trong mat khau';
        }
        else {
            if(filter_var(trim($_POST['password'],FILTER_VALIDATE_INT)))
            {
                $errors['password']['invaild'] = 'mat khau phai la so';
            }
    }
    if(empty($errors)){
        echo "validate thanh cong";
    }
        else
            {
                echo '<pre>';
                print_r($errors);
               echo '</pre>';
            }
        }
?>