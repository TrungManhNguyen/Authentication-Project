<?php
    mysqli_connect($host, $user, $password, $database, $port, $socket).
    $conn = mysqli_connect('localhost', 'root', 'vertrigo', 'demo') or die ('Không thể kết nối tới database');
    $sql = 'SELECT * FROM CUSTOMERS';
    $result = mysqli_query($conn, $sql);
    if (!$result){
        die ('Câu truy vấn bị sai');
    }
     
    while ($row = mysqli_fetch_assoc($result)){
        var_dump($row);
    }
     
    // Xóa kết quả khỏi bộ nhớ
    mysqli_free_result($result);
     
    // Sau khi thực thi xong thì ngắt kết nối database
    mysqli_close($conn);
?>