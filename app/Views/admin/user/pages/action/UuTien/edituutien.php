
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<h4>Cập nhật hồ sơ sinh viên</h4>
            <hr>
			<!-- Form START -->
			<form class="file-upload" method="POST" action="<?= $url = route_to('update_uutien') ?>" enctype="multipart/form-data">
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
								    <label class="form-label">Chế độ ưu tiên</label>
								    <select name="CheDoUuTien" class="form-control">
								        <option value="" <?php if ($edit['CheDoUuTien'] == 'option1') echo 'selected'; ?>><?= $edit['CheDoUuTien'] ?></option>
								        <option value="Loại 1" <?php if ($edit['CheDoUuTien'] == 'option1') echo 'selected'; ?>>Loại 1</option>
								        <option value="Loại 2" <?php if ($edit['CheDoUuTien'] == 'option2') echo 'selected'; ?>>Loại 2</option>
								        <option value="Loại 3" <?php if ($edit['CheDoUuTien'] == 'option3') echo 'selected'; ?>>Loại 3</option>
								        <!-- Thêm các option khác tại đây -->
								    </select>
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
				<div class="gap-3 d-md-flex justify-content-md-center text-center">
					<button type="submit" class="btn btn-primary btn-lg mx-auto d-block">Cập nhật</button>
					<a type="button" href="<?= $url = route_to('view_uutien') ?>" class="btn btn-danger btn-lg mx-auto d-block">Hủy</a>
				</div>
				</div> <!-- Row END -->

				<!-- Social media detail -->
				<!-- button -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>