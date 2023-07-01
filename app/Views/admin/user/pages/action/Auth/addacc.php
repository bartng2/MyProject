
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<h4>Cập nhật tài khoản</h4>
            <hr>
			<!-- Form START -->
			<form class="file-upload" method="POST" action="<?= $url = route_to('store_acc') ?>" enctype="multipart/form-data">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<!-- First Name -->
								<div class="col-md-6">
									<label class="form-label">Mã nhân viên</label>
									<input name="MaUsers" type="text" class="form-control" placeholder="" aria-label="First name">
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Họ tên đầy đủ</label>
									<input name="Hoten" type="text" class="form-control" placeholder="" aria-label="Last name">
								</div>
								<div class="col-md-6">
									<label class="form-label">Giới tính</label>
									<input name="Gioitinh" type="text" class="form-control" placeholder="" aria-label="Last name">
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Chức vụ</label>
									<input name="ChucVu" type="text" class="form-control" placeholder="" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Quyền hạn</label>
									<select name="QuyenHan" class="form-label">
					                  <option value="">Quyền hạn</option>
					                  <option value="USER1">USER1</option>
					                  <option value="USER2">USER2</option>
					                </select>
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Số điện thoại</label>
									<input name="Sdt" type="text" class="form-control" id="inputEmail4">
								</div>
								<!-- Skype -->
								<div class="col-md-6">
									<label class="form-label">Email</label>
									<input name="Email" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Ảnh nhận dạng</label>
									<input name="Anh" type="file" class="form-control" placeholder="">
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
				<div class="gap-3 d-md-flex justify-content-md-center text-center">
					<button type="submit" class="btn btn-primary btn-lg mx-auto d-block">Thêm mới</button>
					<a type="button" href="<?= $url = route_to('list_acc') ?>" class="btn btn-danger btn-lg mx-auto d-block">Hủy</a>
				</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>