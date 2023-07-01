
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
									<label class="form-label">Mã sinh viên</label>
									<input value="<?= $show['MaSV'] ?>" name="MaSV" type="text" class="form-control" placeholder="" aria-label="First name">
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
									<label class="form-label">Lớp</label>
									<input value="<?= $show['Lop'] ?>" name="Lop" type="text" class="form-control" placeholder="" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Năm nhập học</label>
									<input value="<?= $show['NamNhapHoc'] ?>" name="NamNhapHoc" type="number" class="form-control" placeholder="" min="2000">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Khóa</label>
									<input value="<?= $show['Khoas'] ?>" name="Khoas" type="text" class="form-control" id="inputEmail4">
								</div>
								<!-- Skype -->
								<div class="col-md-6">
									<label class="form-label">Ngành</label>
									<input value="<?= $show['Nganh'] ?>" name="Nganh" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Khoa</label>
									<input value="<?= $show['Khoa'] ?>" name="Khoa" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Năm tốt nghiệp</label>
									<input value="<?= $show['NamTotNghiep'] ?>" name="NamTotNghiep" type="number" class="form-control" placeholder="" min="2000">
								</div>
								<div class="col-md-6">
									<label class="form-label">Tình trạng học tập</label>
									<input value="<?= $show['TinhTrangHocTap'] ?>" name="TinhTrangHocTap" type="text" class="form-control" placeholder="">
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
										<img height="300" src="images/<?= $show['Anh'] ?>">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>