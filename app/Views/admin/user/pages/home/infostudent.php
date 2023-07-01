<div class="row">
          <div class="col-md-12">
            <h4>Quản lí sinh viên</h4>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100" onclick="window.location.href = '<?= $url = route_to('view_contact') ?>';">
              <div class="card-body py-5">Thông tin liên hệ</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100" onclick="window.location.href = '<?= $url = route_to('view_totnghiep') ?>';">
              <div class="card-body py-5">Thông tin tốt nghiệp</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100" onclick="window.location.href = '<?= $url = route_to('view_uutien') ?>';">
              <div class="card-body py-5">Thông tin chế độ ưu tiên</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100" onclick="window.location.href = '<?= $url = route_to('view_ht') ?>';">
              <div class="card-body py-5">Thông tin tình trạng học tập</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>