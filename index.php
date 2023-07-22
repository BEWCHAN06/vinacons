<?php
  include 'view/action.php';
  include 'view/db.php';

    include 'view/header.php';


    if(isset($_GET['act'])){

        switch ($_GET['act']) {
            case 'autocad':
                include 'view/autocad.php';
                break;
            case 'boctachkhoiluong':
                include 'view/boctachkhoiluong.php';
                break;
            case 'civil3d':
                include 'view/civil3d.php';
                break;
            case 'infrawork':
                include 'view/infrawork.php';
                break;
            case 'midascivil':
                include 'view/midascivil.php';
                break;
            case 'naviswork':
                include 'view/naviswork.php';
                break;
            case 'revitnangcao':
                include 'view/revitnangcao.php';
                break;
            case 'revit':
                include 'view/revit.php';
                break;
            case 'tinhocvanphongxaydung':
                include 'view/tinhocvanphongxaydung.php';
                break;
                            
            default:
            include 'view/home.php';
                break;
        }

    }
    else{

        include 'view/home.php';

    }

?>