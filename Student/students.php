<?php
    session_start();
    function getALLstudents()
    {
        return isset($_SESSION['students']) ? $_SESSION['students'] : array();
    }

    function getStudent($studentId)
    {
        $students= getAllstudents();
        foreach( $students as $item)
        {
            if($item['student_id']==$studentId)
             return $item;
        }
        return array();
    }
     function deleteStudent($studentId)
     {
        $students= getAllstudents();
        foreach( $students as $key => $item)
        {
            if($item['student_id']==$studentId)
            unset($students[$key]);
        }
     }
     $_SESSION ['students']=$students;
     return $students;

     function updateStudent($studentId, $studentName, $studentEmail)
     {
        $students= getAllstudents();
        $new_student = array(
            'student_id' => $studentId,
            'student_name' => $studentName,
            'student_email' => $studentEmail
        );
        $updateStudent_action= false;
        foreach($students as $key =>$item )
        {
            if($item['student_id'] == $studentId)
            {
                $students[$key]=$new_student;
                $updateStudent_action = true;
            }
        }
        if(!$updateStudent_action){
            $students[]= $new_student;
        }
        $_SESSION['students']= $students;
        return $students;
     }


?>