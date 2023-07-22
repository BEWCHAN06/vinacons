<?php

    include 'headeradmin.php';

    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'hocvien':
                include 'hocvienadmin.php';
                break;
            
                case 'tailieu':
                    include 'tailieadmin.php';
                    break;
            default:
            include 'hocvienadmin.php';
                break;
        }
    }
     include 'tailieadmin.php';
?>