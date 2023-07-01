<div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
             <?php if (session()->get('user')['QuyenHan'] == 'ADMIN') : ?>
            <li>
              <a href="<?= $url = route_to('home') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Trang chủ</span>
              </a>
            </li>
            <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <a href="<?= $url = route_to('list_student') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Quản lí hồ sơ sinh viên</span>
              </a>
            </li>
             <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <a href="<?= $url = route_to('add_student') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Thêm hồ sơ sinh viên</span>
              </a>
            </li>
            <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <a href="<?= $url = route_to('list_acc') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Quản lí tài khoản</span>
              </a>
            </li>
            <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <?php endif; ?>
            <?php if (session()->get('user')['QuyenHan'] == 'USER1') : ?>
            <li>
              <a href="<?= $url = route_to('home') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Trang chủ</span>
              </a>
            </li>
            <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <a href="<?= $url = route_to('list_student') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Quản lí hồ sơ sinh viên</span>
              </a>
            </li>
             <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <a href="<?= $url = route_to('add_student') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Thêm hồ sơ sinh viên</span>
              </a>
            </li>
            <?php endif; ?><li>
            <?php if (session()->get('user')['QuyenHan'] == 'USER2') : ?>
              <a href="<?= $url = route_to('home') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Trang chủ</span>
              </a>
            </li>
            <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <a href="<?= $url = route_to('list_student') ?>" class="nav-link px-3 active">
                <span class="me-2"><i></i></span>
                <span>Quản lí hồ sơ sinh viên</span>
              </a>
            </li>
            <?php endif; ?><li>
            </ul>
        </nav>
      </div>
    </div>