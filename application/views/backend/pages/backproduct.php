<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<!-- Page header -->
			<div class="mb-1">
				<h3 class="mb-0 ">Tambah Produk</h3>

			</div>
		</div>
	</div>
	<div>
		<!-- row -->
		<div class="row">
			<form action="<?= base_url('Backend/BackProduct/plus') ?>" method="post" enctype="multipart/form-data">
				<div class="col-lg-12 col-12">
					<!-- card -->
					<div class="card mb-4">
						<!-- card body -->
						<div class="card-body">
							<div>
								<!-- input -->
								<div class="mb-3">
									<label class="form-label">Nama Produk</label>
									<p>Masukan nama produk (Nama produk tidak bisa diubah setelah produk ditambahkan)</p>
									<input type="hidden" class="form-control" placeholder="Isi nama produk" name="store_name" value="<?php foreach ($usertoko as $row) {
																																			echo $row['store_name'];
																																		} ?>">
									<input type="hidden" class="form-control" placeholder="Isi nama produk" name="telp" value="<?= $this->session->userdata('telp') ?>">
									<input type="text" class="form-control" placeholder="Isi nama produk" name="name">
								</div>
								<!-- input -->
								<div>
									<label class="form-label">Deskripsi Produk</label>
									<p>Masukan deskripsi produk</p>
									<textarea class="form-control" name="description" placeholder="Isi deskripsi produk" id="floatingTextarea2" style="height: 100px"></textarea>
								</div>
							</div>
						</div>
					</div>
					<!-- card -->
					<div class="card mb-4">
						<!-- card body -->
						<div class="card-body">
							<div>
								<div class="mb-4">
									<!-- heading -->
									<h5 class="mb-1">Gambar Produk</h5>
									<p>Masukan gambar produk (Minimal 1 gambar) (Maksimal ukuran gambar adalah 10MB)</p>
									<!-- input -->
									<input name="picture1" type="file" class="form-control">
									<p class="m-2">Gambar 1 (*wajib)</p>
									<input name="picture2" type="file" class="form-control">
									<p class="m-2">Gambar 2 (opsional)</p>
									<input name="picture3" type="file" class="form-control">
									<p class="m-2">Gambar 3 (opsional)</p>
									<input name="picture4" type="file" class="form-control">
									<p class="m-2">Gambar 4 (opsional)</p>
								</div>
							</div>
						</div>
					</div>
					<!-- card -->
					<div class="card mb-4">
						<!-- card body -->
						<div class="card-body">
							<div>
								<div class="mb-3">
									<label class="form-label">Stok Produk</label>
									<p>Masukan stok produk</p>
									<input type="Number" name="stock" class="form-control" placeholder="Isi stok produk">
								</div>
								<div class="mb-3">
									<label class="form-label">Kondisi Produk</label>
									<p>Masukan data sesuai dengan kondisi produk</p>
									<!-- select menu -->
									<select class="form-select" name="condition_product" aria-label="Default select example">
										<option value="new" selected="">Baru</option>
										<option value="used">Bekas</option>
									</select>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Preorder Produk</label>
								<p>Pilih iya, jika produk butuh waktu pengiriman lebih lama</p>
								<!-- select menu -->
								<select class="form-select" name="preorder" aria-label="Default select example">
									<option value="No" selected="">Tidak</option>
									<option value="Yes">Iya</option>
								</select>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="card mb-4">
						<!-- card body -->
						<div class="card-body">
							<!-- input -->
							<div class="mb-3">
								<label class="form-label">Harga Produk</label>
								<p>Masukan harga produk (*satuan)</p>
								<input type="Number" name="price" class="form-control" placeholder="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-12 row">
					<div class="col-md-6"></div>
					<div class="col-md-3">
						<div class="d-grid">
							<a class="btn btn-outline-primary">
								Batal
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<!-- button -->
						<div class="d-grid">
							<button type="submit" class="btn btn-primary">
								Buat Produk
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>