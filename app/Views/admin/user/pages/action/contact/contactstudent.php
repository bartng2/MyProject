 <div class="row">
          <div class="col-md-12">
            <h4>Thông tin liên hệ sinh viên</h4>
            <hr>
             <div class="d-flex align-items-center">
              <form class="d-flex" method="GET" action="<?= $url = route_to('search_contact') ?>">
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
                        <th>Ngày sinh</th>
                        <th>Quê quán</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <?php if (session()->get('user')['QuyenHan'] == 'ADMIN' || session()->get('user')['QuyenHan'] == 'USER1') : ?>
                        <th>Chức năng</th>
                        <?php endif; ?>
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
                        <td><?= $item['NgaySinh'] ?></td>
                        <td><?= $item['QueQuan'] ?></td>
                        <td><?= $item['Email'] ?></td>
                        <td><?= $item['Sdt'] ?></td>
                        <?php if (session()->get('user')['QuyenHan'] == 'ADMIN' || session()->get('user')['QuyenHan'] == 'USER1') : ?>
                        <td>
                           <a type="button" href="edit_contact/<?= $item['id'] ?>" class="btn btn-primary small-button">Sửa</a>
                        </td>
                        <?php endif; ?>
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
                        <th>Ngày sinh</th>
                        <th>Quê quán</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <?php if (session()->get('user')['QuyenHan'] == 'ADMIN' || session()->get('user')['QuyenHan'] == 'USER1') : ?>
                        <th>Chức năng</th>
                        <?php endif; ?>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              </div>
            </div>
          </div>
