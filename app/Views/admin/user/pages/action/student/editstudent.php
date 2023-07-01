
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<h4>Cập nhật hồ sơ sinh viên</h4>
            <hr>
			<!-- Form START -->
			<form class="file-upload" method="POST" action="<?= $url = route_to('update_student') ?>" enctype="multipart/form-data">
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
								<div class="col-md-6">
									<label class="form-label">Giới tính</label>
									    <select name="Gioitinh" class="form-control">
									        <option value="Nam" <?php if ($edit['Gioitinh'] == 'option1') echo 'selected'; ?>><?= $edit['Gioitinh'] ?></option>
									        <option value="Nam" <?php if ($edit['Gioitinh'] == 'option2') echo 'selected'; ?>>Nam</option>
									        <option value="Nữ" <?php if ($edit['Gioitinh'] == 'option3') echo 'selected'; ?>>Nữ</option>
									        
									        <!-- Thêm các option khác tại đây -->
									    </select>
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Lớp</label>
									<input value="<?= $edit['Lop'] ?>" name="Lop" type="text" class="form-control" placeholder="" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Năm nhập học</label>
									<input value="<?= $edit['NamNhapHoc'] ?>" name="NamNhapHoc" type="number" class="form-control" placeholder="" min="2000">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Khóa</label>
									<input value="<?= $edit['Khoas'] ?>" name="Khoas" type="text" class="form-control" id="inputEmail4">
								</div>
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
									<label class="form-label">Tình trạng học tập</label>
									    <select name="TinhTrangHocTap" class="form-control">
									        <option value="Đang theo học" <?php if ($edit['TinhTrangHocTap'] == 'option1') echo 'selected'; ?>><?= $edit['TinhTrangHocTap'] ?></option>
									        <option value="Đã tốt nghiệp" <?php if ($edit['TinhTrangHocTap'] == 'option2') echo 'selected'; ?>>Đã tốt nghiệp</option>
									        
									        <!-- Thêm các option khác tại đây -->
									    </select>
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
										<img height="300" src="images/<?= $edit['Anh'] ?>">
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="gap-3 d-md-flex justify-content-md-center text-center">
					<button type="submit" class="btn btn-primary btn-lg mx-auto d-block">Cập nhật</button>
					<a type="button" href="<?= $url = route_to('list_student') ?>" class="btn btn-danger btn-lg mx-auto d-block">Hủy</a>
				</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>