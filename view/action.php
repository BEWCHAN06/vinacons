<?php

    include('db.php');
// them du lieu
    if(isset($_POST['hovaten'])){

        $hovaten=$_POST['hovaten'];
        $sophone=$_POST['sophone'];
        $email=$_POST['email'];
        $tenkh=$_POST['tenkh'];
        // $date=$_POST['ngayhientai'];
        $date= date('Y-m-d');

      

        $result =mysqli_query($con,"INSERT INTO tblhocvien (hovaten,phone,email,tenkhoahoc,datetimee) VALUES ('$hovaten','$sophone',
        '$email','$tenkh','$date')");

        echo '<script>
       
        
        var ngayHienTai = new Date();
        var ngay = ngayHienTai.getDate();
        var thang = ngayHienTai.getMonth()+1;
        var nam = ngayHienTai.getFullYear();
        var loc = (nam+"-"+thang+"-"+ngay)
          alert(loc);
        
        </script>';
    }

    ?>