
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<h4>Thêm mới hồ sơ sinh viên</h4>
            <hr>
			<!-- Form START -->
			<form class="file-upload" method="POST" action="<?= $url = route_to('store_student') ?>" enctype="multipart/form-data">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<!-- First Name -->
								<div class="col-md-6">
									<label class="form-label">Mã sinh viên</label>
									<input name="MaSV" type="text" class="form-control" placeholder="" aria-label="First name">
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Họ tên đầy đủ</label>
									<input name="Hoten" type="text" class="form-control" placeholder="" aria-label="Last name">
								</div>
								<div class="col-md-6">
									<label class="form-label">Giới tính</label>
									    <select name="Gioitinh" class="form-control">
									    	<option value="----"></option>
									        <option value="Nam">Nam</option>
									        <option value="Nữ">Nữ</option>
									        
									        <!-- Thêm các option khác tại đây -->
									    </select>
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Lớp</label>
									<input name="Lop" type="text" class="form-control" placeholder="" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Năm nhập học</label>
									<input name="NamNhapHoc" type="number" class="form-control" placeholder="" min="2000">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Khóa</label>
									<input name="Khoas" type="text" class="form-control" id="inputEmail4">
								</div>
								<!-- Skype -->
								<div class="col-md-6">
									<label class="form-label">Ngành</label>
									<input name="Nganh" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Khoa</label>
									<input name="Khoa" type="text" class="form-control" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Năm tốt nghiệp</label>
									<input name="NamTotNghiep" type="number" class="form-control" placeholder="" min="2000">
								</div>
								<div class="col-md-6">
									<label class="form-label">Tình trạng học tập</label>
									    <select name="TinhTrangHocTap" class="form-control">
									    	<option value="----"></option>
									        <option value="Đang theo học">Đang theo học</option>
									        <option value="Đã tốt nghiệp">Đã tốt nghiệp</option>
									        
									        <!-- Thêm các option khác tại đây -->
									    </select>
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
					<a type="button" href="<?= $url = route_to('list_student') ?>" class="btn btn-danger btn-lg mx-auto d-block">Hủy</a>
				</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>