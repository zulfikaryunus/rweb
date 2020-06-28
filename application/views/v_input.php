<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-sm-6">
		<h2><center>TAMBAH DATA PEMOHON</center></h2>

			<form action="<?php echo site_url('crud/tambah_aksi')?>" method="post">
			<div class="form-group">
				<input type="nama" class="form-control" id="nama" placeholder="Masukkan nama anda" name="nama">
			</div>
			<div class="form-group">
				<input type="nik" class="form-control" id="nik" placeholder="Masukkan NIK anda" name="nik">
			</div>
			<div class="form-group">
				<input type="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat anda" name="alamat">
			</div>
			<div class="form-group">
				<input type="date" class="form-control" id="tanggal" placeholder="Masukkan tanggal antrian" name="tanggal">
			</div>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>
