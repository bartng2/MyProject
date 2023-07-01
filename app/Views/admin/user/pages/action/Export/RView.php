
        <div class="row">
          <div class="col-md-12">
            <h4>Thống kê - Báo cáo</h4>
            <hr>
          </div>
        </div>
         <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100" onclick="window.location.href = '<?= $url = route_to('list_view') ?>';">
              <div class="card-body py-5">Thống kê hồ sơ sinh viên</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100" onclick="window.location.href = '<?= $url = route_to('list_tn') ?>';">
              <div class="card-body py-5">Báo cáo tốt nghiệp</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100" onclick="window.location.href = '<?= $url = route_to('list_ut') ?>';">
              <div class="card-body py-5">Thống kê danh sách ưu tiên</div>
              <div class="card-footer d-flex">
                Truy cập
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
     