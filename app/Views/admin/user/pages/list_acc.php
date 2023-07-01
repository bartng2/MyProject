
         <div class="row">
        </div>
        <div class="row">
          <div class="col-md-12">
            <h4>Quản lí tài khoản</h4>
            <hr>
             <div class="d-flex align-items-center">
            </div>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i>
                    <a type="button" href="<?= $url = route_to('add_acc') ?>" class="btn btn-success small-button mr-auto">Thêm tài khoản</a>
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
                        <th>Mã nhân viên</th>
                        <th>Họ và tên</th>
                        <th>Chức vụ</th>
                        <th>Chức năng</th>
                      </tr>
                    </thead>
                    <?php
                    $i = 0; 
                    foreach($userAcc as $item): ?>
                    <tbody>
                      <tr class="centered-cell">
                        <td><?= ++$i ?></td>
                        <td><?= $item['MaUsers'] ?></td>
                        <td><?= $item['Hoten'] ?></td>
                        <td><?= $item['ChucVu'] ?></td>
                        <td>
                          <a href="show/<?= $item['id'] ?>" type="button" class="btn btn-primary small-button">Xem</a>
                          <a href="edit_acc/<?= $item['id'] ?>" type="button" class="btn btn-secondary small-button">Sửa</a>
                          <a href="delete_acc/<?= $item['id'] ?>" type="button" class="btn btn-danger small-button">Xóa</a>
                        </td>
                      </tr>
                    </tbody>
                  <?php endforeach; ?>
                    <tfoot>
                      <tr class="centered-cell">
                        <th>STT</th>
                        <th>Mã nhân viên</th>
                        <th>Họ và tên</th>
                        <th>Chức vụ</th>
                        <th>Chức năng</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
   