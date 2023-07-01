 <div class="row">
          <div class="col-md-12">
            <h4>Danh sách hồ sơ sinh viên</h4>
            <hr>
             <div class="d-flex align-items-center">
              <form class="d-flex" method="GET" action="<?= $url = route_to('search_ut') ?>">
                <input name="keyword" class="form-control me-1 small-input" type="text" placeholder="Tìm kiếm theo tên, mã sinh viên..." aria-label="Search">
                <button class="btn btn-outline-primary small-button" type="submit">Lọc</button>
              </form>
              
            </div>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i>
                <a type="button" href="<?= $url = route_to('export_v3') ?>" class="btn btn-success small-button mr-auto">Xuất thống kê</a>
                </span>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr class="centered-cell">
                        <th>STT</th>
                        <th>Mã sinh viên</th>
                        <th>Họ và tên</th>
                        <th>Lớp</th>
                        <th>Chế độ ưu tiên</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=0; 
                      if (!empty($result)) : ?>
                        <?php foreach ($result as $item): ?>
                      <tr class="centered-cell">
                        <td><?= ++$i; ?></td>
                        <td><?= $item['MaSV'] ?></td>
                        <td><?= $item['Hoten'] ?></td>
                        <td><?= $item['Lop'] ?></td>
                        <td><?= $item['CheDoUuTien'] ?></td>
                      </tr>
                    </tbody>
                  <?php endforeach; ?>
                <?php else : ?>
              <?php endif; ?>
                    <tfoot>
                      <tr class="centered-cell">
                        <th>STT</th>
                        <th>Mã sinh viên</th>
                        <th>Họ và tên</th>
                        <th>Lớp</th>
                        <th>Chế độ ưu tiên</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              </div>
            </div>
          </div>
