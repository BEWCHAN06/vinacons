 <!-- Học viên -->
 <div class="tab-pane fade show active" id="indexadmin.php?act=hocvien" role="tabpanel" aria-labelledby="home-tab">
        
        <!-- form search Học viên -->
        <form action="" method="post">
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
              
             <!-- <?php
            //     foreach ($_SESSION['hocvien'] as $hv  ) {
            //      echo'
            //      <tr>
            //     <td>'.$hv['hovaten'].'</td>
            //     <td>'.$hv['phone'].'</td>
            //     <td>'.$hv['email'].'</td>
            //     <td>'.$hv['tenkhoahoc'].'</td>
            //     <td>'.$hv['datetimee'].'</td>
            //   </tr> 
            //      ';
            //     }
             ?> -->
            </tbody>
          </table>
      </div>
