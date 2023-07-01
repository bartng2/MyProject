
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<h4>Thêm mới tài khoản</h4>
            <hr>
			<!-- Form START -->
			<form class="file-upload" method="POST" action="<?= $url = route_to('update_acc') ?>" enctype="multipart/form-data">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<!-- First Name -->
								<input type="hidden" name="id" value="<?= $edit['id'] ?>">
								<div class="col-md-6">
									<label class="form-label">Mã nhân viên</label>
									<input value="<?= $edit['MaUsers'] ?>" name="MaUsers" type="text" class="form-control" placeholder="" aria-label="First name">
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Họ tên đầy đủ</label>
									<input value="<?= $edit['Hoten'] ?>" name="Hoten" type="text" class="form-control" placeholder="" aria-label="Last name">
								</div>
								<div class="col-md-6">
								<label class="form-label">Giới tính</label>
								    <select name="Gioitinh" class="form-control">
								        <option value="Loại 1" <?php if ($edit['Gioitinh'] == 'option1') echo 'selected'; ?>><?= $edit['Gioitinh'] ?></option>
								        <option value="Loại 2" <?php if ($edit['Gioitinh'] == 'option2') echo 'selected'; ?>>Nữ</option>
								        
								        <!-- Thêm các option khác tại đây -->
								    </select>
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Chức vụ</label>
									<input value="<?= $edit['ChucVu'] ?>" name="ChucVu" type="text" class="form-control" placeholder="" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Quyền hạn</label>
									    <select name="QuyenHan" class="form-control">
									        <option value="Loại 1" <?php if ($edit['QuyenHan'] == 'option1') echo 'selected'; ?>><?= $edit['QuyenHan'] ?></option>
									        <option value="Loại 2" <?php if ($edit['QuyenHan'] == 'option2') echo 'selected'; ?>>USER2</option>
									        
									        <!-- Thêm các option khác tại đây -->
									    </select>
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Số điện thoại</label>
									<input value="<?= $edit['Sdt'] ?>" name="Sdt" type="text" class="form-control" id="inputEmail4">
								</div>
								<!-- Skype -->
								<div class="col-md-6">
									<label class="form-label">Email</label>
									<input value="<?= $edit['Email'] ?>" name="Email" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Mật khẩu đăng nhập</label>
									<input value="<?= $edit['MatKhauDangNhap'] ?>" name="MatKhauDangNhap" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Ảnh nhận dạng</label>
									<input value="<?= $edit['Anh'] ?>" name="Anh" type="file" class="form-control" placeholder="">
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
					<div class="col-xxl-4">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-1">
								<div class="text-center">
									<div>
										<img height="300" src="Avatar/<?= $edit['Anh'] ?>">
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="gap-3 d-md-flex justify-content-md-center text-center">
					<button type="submit" class="btn btn-primary btn-lg mx-auto d-block">Cập nhật</button>
					<a type="button" href="<?= $url = route_to('list_acc') ?>" class="btn btn-danger btn-lg mx-auto d-block">Hủy</a>
				</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>