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
  <center><h2>Edit Data Aduan</h2></center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<div class="form-group">
				<label for="nama">Nama :</label>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" class="form-control" id="nama" placeholder="Masukkan nama anda" name="nama" value="<?php echo $u->nama ?>">
			</div>
			<div class="form-group">
				<label for="nik">NIK :</label>
					<input type="int" class="form-control" id="nik" placeholder="Masukkan Nik anda" name="nik" value="<?php echo $u->nik ?>">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat :</label>
					<input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat anda" name="alamat" value="<?php echo $u->alamat ?>">
			</div>
			<div class="form-group">
				<label for="tanggal">Tanggal Antrian</label>
					<input type="date" class="form-control" id="tanggal" placeholder="Masukkan tanggal antrian" name="tanggal" value="<?php echo $u->tanggal ?>">
			</div>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>