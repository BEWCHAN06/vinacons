<?php
session_start();
ob_start();

include('../view/db.php');

// Truy vấn bảng học viên
$query = "SELECT * FROM tblhocvien";
$result = mysqli_query($con, $query);

// Lấy dữ liệu từ kết quả truy vấn
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Đưa dữ liệu vào session
$_SESSION['hocvien'] = $data;

// Truy vấn để lấy danh sách chủ đề từ cơ sở dữ liệu
$querychude = "SELECT * FROM tbl_chude";
$resultchude = mysqli_query($con, $querychude);

// Kiểm tra và lấy dữ liệu từ kết quả truy vấn
$datachude = array();
if (mysqli_num_rows($resultchude) > 0) {
  $datachude = mysqli_fetch_all($resultchude, MYSQLI_ASSOC);
}

// Kiểm tra xem có dữ liệu được gửi từ form không
if (isset($_POST['chude_ten'])) {
  $chude_ten = $_POST['chude_ten'];

  // Thực hiện truy vấn để chèn tên chủ đề vào cơ sở dữ liệu
  $sql = "INSERT INTO tbl_chude (tentabs,idchude) VALUES ('$chude_ten','$chude_ten')";

  if (mysqli_query($con, $sql)) {
    echo "Chủ đề đã được thêm thành công!";
  } else {
    echo "Lỗi: " . mysqli_error($con);
  }
}
?>

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css"> -->
  <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css">
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


    .row {
    display: flex;
  }

  .cell {
    padding: 5px;
     
    border: 1px solid black;
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
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Học Viên</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tài Liệu</a>
      </li>
      
    </ul>
        </div>
    
    <div class="col-md-10">
        <div class="tab-content" id="myTabContent">
        <!-- Học viên -->
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        
        <!-- form search Học viên -->
        <!-- <form action="" method="post">
                    <div class="action__hocvien">


                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="hocvienhomnay" id="" value="checkedValue" >
                       Học viên Hôm Nay
                      </label>
                    </div>

                    <div class="">
                        <input type="date" name="datehocvien" id="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="searchtheotenhocvien" placeholder="Nhập tên học viên">
                        <button type="submit" class="search-button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                     
                        </button>
                      </div>
                </div>
            </form> -->
            <form action="" method="post">
    <div class="action__hocvien">
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="hocvienhomnay" id="hocvienhomnay" value="checkedValue">
                Học viên Hôm Nay
            </label>
        </div>
        <div class="">
            <input type="date" name="datehocvien" id="">
        </div>
        <div class="form-group">
            <input type="text" name="searchtheotenhocvien" placeholder="Nhập tên học viên">
            <button type="submit" class="search-button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </div>
</form>
           <!--  -->
        <h2 class="header__admin">Học Viên</h2>
      
        <!-- table hoc vien -->
        <table style="width: 100%;text-align: center;">
            <thead>
              <tr>
                <th>Tên</th>
                <th>Số điện thoại </th>
                <th>Email </th>
                <th>Tên Khóa Học </th>
                <th>Ngày Đăng Kí</th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <td>Data 4</td>
                <td>Data 5</td>
              </tr> -->
              
             <?php
                foreach ($_SESSION['hocvien'] as $hv  ) {
                 echo'
                 <tr>
                <td>'.$hv['hovaten'].'</td>
                <td>'.$hv['phone'].'</td>
                <td>'.$hv['email'].'</td>
                <td>'.$hv['tenkhoahoc'].'</td>
                <td>'.$hv['datetimee'].'</td>
              </tr> 
                 ';
                }
             ?>
            </tbody>
          </table>
      </div>


    <!-- Tài Liệu -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div style="display: flex;" class="">


                        <h2 style="width: 27%;" class="header__admin">Chủ đề</h2>
                        <h2 style="    width: 73%;" class="header__admin">Tài Liệu</h2>
                </div>
            

                <div class="content__tailieu">

                    <!-- start -->
 
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-3">

                          <!-- tab chủ đề -->
                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="tab1-tab" data-toggle="pill" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Tab 1</a>
                          </div>
                          <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#addTabModal" id="addTabBtn">Thêm Chủ Đề</button>



                        </div>
                        <div class="col-9">

                        <!-- nội dung tabs tài liệu -->
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">

                       
                              
                               <div class="table">
                                      <div class="row">
                                        <div style="width:30%"  class="cell">Tiêu đề cột 1</div>
                                        <div style="width:70%" class="cell">Tiêu đề cột 2</div>
                                      </div>

                                      <button type="button" data-toggle="modal" data-target="#modelId" class="w-100 mt-2 btn btn-primary">Thêm tài liệu</button>


                                        <!-- Button trigger modal -->
                                         
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Thêm tài liệu form</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body">
                                                  <form action="" method="post">

                                                     <div>
                                                          <label for="">Tên tài liệu</label>
                                                            <input type="text" name="tentailieu" id="">
                                                     </div>
                                                    
                                                     <div>
                                                          <label for="">Nội dung tài liệu</label>
                                                          <input type="text" name="noidungtailieu" id="">

                                                     </div>
                                                     
                                                      <input type="submit" value="Lưu">

                                                  </form>
                                              </div>
                                             
                                            </div>
                                          </div>
                                        </div>
                               </div>

                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    
                    <!-- Modal tên chủ đề  -->
                    
                    
                      
                      <div class="modal fade" id="addTabModal" tabindex="-1" role="dialog" aria-labelledby="addTabModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="addTabModalLabel">Thêm Chủ Đề Mới</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form id="addTabForm">
                                          <div class="form-group">
                                              <label for="chude_ten">Tên chủ đề:</label>
                                              <input type="text" class="form-control" id="chude_ten" name="chude_ten" required>
                                          </div>
                                      </form>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                      <button type="button" class="btn btn-primary" id="saveTabBtn">Lưu</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                    <!-- end -->


                    
                </div>
            </div>
        </div>
      </div>

    </div>
 

    <!-- script hoc vien page  -->
    <script>
        $(document).ready(function() {
          // Biến lưu trữ dữ liệu ban đầu
          var originalData = <?php echo json_encode($_SESSION['hocvien']); ?>;
          var currentData = originalData;

          // Hiển thị dữ liệu ban đầu khi trang được tải lần đầu
          displayData(currentData);

          // Sử dụng jQuery để theo dõi sự kiện khi checkbox được thay đổi
          $('#hocvienhomnay').on('change', function() {
            // Lấy giá trị checkbox (true nếu được chọn, false nếu không)
            var isChecked = $(this).is(':checked');

            // Nếu checkbox được chọn, lọc dữ liệu mới từ dữ liệu ban đầu
            if (isChecked) {
              currentData = originalData.filter(function(hv) {
                var ngayDangKy = new Date(hv.datetimee);
                var homNay = new Date();
                return ngayDangKy.toDateString() === homNay.toDateString();
              });
            } else {
              // Ngược lại, hiển thị dữ liệu ban đầu
              currentData = originalData;
            }

            // Hiển thị dữ liệu đã lọc hoặc dữ liệu ban đầu
            displayData(currentData);
          });

          // Sử dụng jQuery để theo dõi sự kiện khi ngày tháng được chọn
          $('input[name="datehocvien"]').on('change', function() {
            var selectedDate = $(this).val();

            // Nếu ngày tháng được chọn thì lọc dữ liệu mới từ dữ liệu ban đầu
            if (selectedDate !== '') {
              currentData = originalData.filter(function(hv) {
                var ngayDangKy = new Date(hv.datetimee);
                var inputDate = new Date(selectedDate);
                return ngayDangKy.toDateString() === inputDate.toDateString();
              });
            } else {
              // Ngược lại, hiển thị dữ liệu ban đầu
              currentData = originalData;
            }

            // Hiển thị dữ liệu đã lọc hoặc dữ liệu ban đầu
            displayData(currentData);
          });

          // Sử dụng jQuery để theo dõi sự kiện "keyup" của input "searchtheotenhocvien"
          $('input[name="searchtheotenhocvien"]').on('keyup', function() {
            var searchValue = $(this).val().trim().toLowerCase();

            // Nếu giá trị tìm kiếm không rỗng
            if (searchValue !== '') {
              // Lọc dữ liệu theo giá trị tìm kiếm
              currentData = originalData.filter(function(hv) {
                var tenHocVien = hv.hovaten.toLowerCase();
                return tenHocVien.includes(searchValue);
              });
            } else {
              // Nếu giá trị tìm kiếm rỗng, hiển thị dữ liệu ban đầu
              currentData = originalData;
            }

            // Hiển thị dữ liệu đã lọc hoặc dữ liệu ban đầu
            displayData(currentData);
          });

          // Hàm hiển thị dữ liệu lên bảng
          function displayData(data) {
            $('tbody').empty();

            data.forEach(function(hv) {
              var row = '<tr>' +
                '<td>' + hv.hovaten + '</td>' +
                '<td>' + hv.phone + '</td>' +
                '<td>' + hv.email + '</td>' +
                '<td>' + hv.tenkhoahoc + '</td>' +
                '<td>' + hv.datetimee + '</td>' +
              '</tr>';
              $('tbody').append(row);
            });
          }
        });
    </script>
    


    <!-- script tailieu page -->
   
    <script>
        $(document).ready(function () {
            // Hiển thị các tabs từ dữ liệu chủ đề
            function displayTabs(data) {
                data.forEach(function (chude) {
                    var tabId = 'tab' + chude.id;
                    var tabTitle = chude.tentabs;

                    // Thêm tab vào danh sách tabs
                    $('#v-pills-tab').append('<a class="nav-link" id="' + tabId + '-tab" data-toggle="pill" href="#' + tabId + '" role="tab" aria-controls="' + tabId + '" aria-selected="false">' + tabTitle + '</a>');

                    // Thêm nội dung của tab mới
                    $('#v-pills-tabContent').append('<div class="tab-pane fade" id="' + tabId + '" role="tabpanel" aria-labelledby="' + tabId + '-tab">Nội dung của tab ' + tabTitle + '</div>');
                });
            }

            // Gọi hàm hiển thị tabs
            displayTabs(<?php echo json_encode($datachude); ?>);

            // Sự kiện khi nhấp vào nút "Save" trên modal
            $('#saveTabBtn').on('click', function () {
                var chude_ten = $('#chude_ten').val();

                if (chude_ten !== '') {
                    // Gửi dữ liệu tên chủ đề đến trang hiện tại (dùng location.href) để thêm chủ đề mới vào cơ sở dữ liệu
                    $.ajax({
                        type: 'POST',
                        url: location.href,
                        data: { chude_ten: chude_ten },
                        success: function (response) {
                            alert(response); // Hiển thị thông báo thành công hoặc lỗi
                            // Tải lại trang để cập nhật danh sách tabs
                            location.reload();
                        },
                        error: function () {
                            alert('Đã xảy ra lỗi khi thêm chủ đề!');
                        }
                    });
                } else {
                    alert('Vui lòng nhập tên chủ đề!');
                }
            });
        });
    </script>
</body>
</html>
