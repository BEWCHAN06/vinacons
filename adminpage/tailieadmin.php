
    <!-- Tài Liệu -->
    <div class="tab-pane fade" id="indexadmin.php?act=tailieu" role="tabpanel" aria-labelledby="profile-tab">
                <div style="display: flex;" class="">


                        <h2 style="width: 27%;" class="header__admin">Chủ đề</h2>
                        <h2 style="    width: 73%;" class="header__admin">Tài Liệu</h2>
                </div>
            

                <div class="content__tailieu">

                    <!-- start -->
 
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-3">
                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="tab1-tab" data-toggle="pill" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Tab 1</a>
                          </div>
                          <button class="btn btn-primary mt-3" id="addTabBtn">Thêm Chủ Đề</button>
                        </div>
                        <div class="col-9">
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                              Content 1
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="addTabModal" tabindex="-1" role="dialog" aria-labelledby="addTabModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addTabModalLabel">Add Tab</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="text" id="tabNameInput" class="form-control" placeholder="Enter tab name">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveTabBtn">Save</button>
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