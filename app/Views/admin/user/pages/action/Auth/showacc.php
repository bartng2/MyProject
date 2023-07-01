
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<h4>Thông tin chi tiết hồ sơ sinh viên</h4>
            <hr>
			<!-- Form START -->
			<form class="file-upload" enctype="multipart/form-data">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<!-- First Name -->
								<div class="col-md-6">
									<label class="form-label">Mã nhân viên</label>
									<input value="<?= $show['MaUsers'] ?>" name="MaUsers" type="text" class="form-control" placeholder="" aria-label="First name">
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Họ tên đầy đủ</label>
									<input value="<?= $show['Hoten'] ?>" name="Hoten" type="text" class="form-control" placeholder="" aria-label="Last name">
								</div>
								<div class="col-md-6">
									<label class="form-label">Giới tính</label>
									<input value="<?= $show['Gioitinh'] ?>" name="Gioitinh" type="text" class="form-control" placeholder="" aria-label="Last name">
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Chức vụ</label>
									<input value="<?= $show['ChucVu'] ?>" name="ChucVu" type="text" class="form-control" placeholder="" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Sdt</label>
									<input value="<?= $show['Sdt'] ?>" name="Sdt" type="text" class="form-control" id="inputEmail4">
								</div>
								<!-- Skype -->
								<div class="col-md-6">
									<label class="form-label">Email</label>
									<input value="<?= $show['Email'] ?>" name="Email" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Quyền hạn</label>
									<input value="<?= $show['QuyenHan'] ?>" name="QuyenHan" type="text" class="form-control" placeholder="" min="2000">
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
					<!-- Upload profile -->
					<div class="col-xxl-4">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-1">
								<div class="text-center">
									<div>
										<img height="300" src="Avatar/<?= $show['Anh'] ?>">
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="gap-3 d-md-flex justify-content-md-center text-center">
					<a type="button" href="edit_acc/<?= $show['id'] ?>" class="btn btn-primary btn-lg mx-auto d-block">Cập nhật thông tin</a>
					<a type="button" href="delete_acc/<?= $show['id'] ?>" class="btn btn-danger btn-lg mx-auto d-block">Xóa hồ sơ</a>
				</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>