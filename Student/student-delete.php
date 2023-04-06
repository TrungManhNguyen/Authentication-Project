<?php
if (!empty($_POST['delete']))
{
    require("/students.php");
    $studentID = isset($_POST['studentID']) ? $_POST['studentID'] : '';
deleteStudent($studentID);
}
header("Location: /student-list.php");

?>