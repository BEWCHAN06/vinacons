 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css"> -->
  <link rel="stylesheet" href="/fontawesome-free-6.2.1-web/css/all.min.css">
  <link rel="stylesheet" href="adminstyle.css">
  <style>
  body {
    position: relative;
  }
  
  ul.nav-pills {
    top: 176px;
    position: fixed;
  }
  li{
    list-style: none;
  }
  div.col-8 div {
    height: 500px;
  }
  table {
      width: 100%;
      border-collapse: separate; /* Sử dụng border-collapse: separate */
      /* border-spacing: 0 8px; Đặt khoảng cách giữa các ô */
    }
  th{
    background-color:#D9D9D9;
    margin: 0 10px;
  }
  
  th:not(:last-child),
    td:not(:last-child) {
      border-right: 2px solid #ddd; /* Kẻ hở giữa các cột */
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #0F30BF;
    }
    .nav-pills .nav-link {
    background: 0 0;
    border: 0;
    color: #fff;
    border-radius: 0.25rem;
    background-color: #D9D9D9;
    color: #000;
    }
    .tab-pane{
        height: 100vh;
    }

    .nav-link{
        margin: 9px 0;
    }
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid footer-main">
          <div class="navbar-header footer">
            <a class="navbar-brand nameweb" href="#"><img style="width: 100px;"     alt="">VINACONS</a>
            <a class="navbar-brand imgcourse" href="#"><img style="width: 90px;"   src="../img/logo.jpg" alt=""></a>
          </div>
        </div>
    </nav>

    <div class="container-fluid">
        
 
      <div class="row">
        <div class="col-md-2 mb-3">
            <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="indexadmin.php?act=hocvien" role="tab" aria-controls="home" aria-selected="true">Học Viên</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="indexadmin.php?act=tailieu" role="tab" aria-controls="profile" aria-selected="false">Tài Liệu</a>
      </li>
      
    </ul>
        </div>
        <div class="col-md-10">
        <div class="tab-content" id="myTabContent">