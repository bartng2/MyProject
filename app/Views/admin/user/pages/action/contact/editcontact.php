
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<h4>Thêm mới tài khoản</h4>
            <hr>
			<!-- Form START -->
			<form class="file-upload" method="POST" action="<?= $url = route_to('update_contact') ?>" enctype="multipart/form-data">
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
									<label class="form-label">Ngày sinh</label>
									<input value="<?= $edit['NgaySinh'] ?>" name="NgaySinh" type="date" class="form-control" placeholder="" aria-label="Last name">
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">QueQuan</label>
									<input value="<?= $edit['QueQuan'] ?>" name="QueQuan" type="text" class="form-control" placeholder="" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Email</label>
									<input value="<?= $edit['Email'] ?>" name="Email" type="text" class="form-control" placeholder="">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Số điện thoại</label>
									<input value="<?= $edit['Sdt'] ?>" name="Sdt" type="text" class="form-control" id="inputEmail4">
								</div>
								<!-- Skype -->
							</div> <!-- Row END -->
						</div>
					</div>
				<div class="gap-3 d-md-flex justify-content-md-center text-center">
					<button type="submit" class="btn btn-primary btn-lg mx-auto d-block">Cập nhật</button>
					<a type="button" href="<?= $url = route_to('view_contact') ?>" class="btn btn-danger btn-lg mx-auto d-block">Hủy</a>
				</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>