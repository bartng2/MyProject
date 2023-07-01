
        <div class="row">
          <div class="col-md-12">
            <h4>Trang chủ</h4>
            <h8>Chào mừng đến với hệ thống Quản lí hồ sơ sinh viên</h8>
            <hr>
          </div>
        </div>
         <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100" onclick="window.location.href = '<?= $url = route_to('index_infor') ?>';">
              <div class="card-body py-5">HỒ SƠ SINH VIÊN</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100" onclick="window.location.href = '<?= $url = route_to('tk_view') ?>';">
              <div class="card-body py-5">THỐNG KÊ - BÁO CÁO</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
     