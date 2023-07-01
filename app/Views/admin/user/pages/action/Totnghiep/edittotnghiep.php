
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<h4>Cập nhật hồ sơ sinh viên</h4>
            <hr>
			<!-- Form START -->
			<form class="file-upload" method="POST" action="<?= $url = route_to('update_totnghiep') ?>" enctype="multipart/form-data">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<!-- First Name -->
								<input type="hidden" name="id" value="<?= $edit['id'] ?>">
								<div class="col-md-6">
									<label class="form-label">Mã sinh viên</label>
									<input value="<?= $edit['MaSV'] ?>" name="MaSV" type="text" class="form-control" placeholder="" aria-label="First name">
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Họ tên đầy đủ</label>
									<input value="<?= $edit['Hoten'] ?>" name="Hoten" type="text" class="form-control" placeholder="" aria-label="Last name">
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Lớp</label>
									<input value="<?= $edit['Lop'] ?>" name="Lop" type="text" class="form-control" placeholder="" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<!-- Skype -->
								<div class="col-md-6">
									<label class="form-label">Ngành</label>
									<input value="<?= $edit['Nganh'] ?>" name="Nganh" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Khoa</label>
									<input value="<?= $edit['Khoa'] ?>" name="Khoa" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Năm tốt nghiệp</label>
									<input value="<?= $edit['NamTotNghiep'] ?>" name="NamTotNghiep" type="number" class="form-control" placeholder="" min="2000">
								</div>
								<div class="col-md-6">
								    <label class="form-label">Xếp loại tốt nghiệp</label>
								    <select name="XepLoaiTotNghiep" class="form-control">
								        <option value="" <?php if ($edit['XepLoaiTotNghiep'] == 'option1') echo 'selected'; ?>><?= $edit['XepLoaiTotNghiep'] ?></option>
								        <option value="Giỏi" <?php if ($edit['XepLoaiTotNghiep'] == 'option1') echo 'selected'; ?>>Giỏi</option>
								        <option value="Khá" <?php if ($edit['XepLoaiTotNghiep'] == 'option2') echo 'selected'; ?>>Khá</option>
								        <option value="Trung bình" <?php if ($edit['XepLoaiTotNghiep'] == 'option3') echo 'selected'; ?>>Trung bình</option>
								        <!-- Thêm các option khác tại đây -->
								    </select>
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
				<div class="gap-3 d-md-flex justify-content-md-center text-center">
					<button type="submit" class="btn btn-primary btn-lg mx-auto d-block">Cập nhật</button>
					<a type="button" href="<?= $url = route_to('view_totnghiep') ?>" class="btn btn-danger btn-lg mx-auto d-block">Hủy</a>
				</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>