<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<!-- Header Start -->
		<nav class="navbar bg-body-tertiary">
			<div class="container">
				<a class="navbar-brand" href="#">SJA - Kualitas Biji Kopi</a>
			</div>
		</nav>
	<!-- Header End -->

	<!-- Body Content Start -->
		<div class="content">
			<div class="container">
				<div class="header-content">
					<h1>Penentuan Kualitas Biji Kopi</h1>
					<div class="divider"></div>
					<div class="header-content-body">
						<p>Tentutakan kualitas biji kopi Mu</p>
					</div>
				</div>
				<div class="form-body">
					<form action="<?= base_url('Welcome/Kualitas');?>" method="post">
						<div class="kriteria1">
							<p>Warna dari biji kopi</p>
							<select name="kriteria1" id="kriteria1">
								<option selected> -- Warna --</option>
								<?php foreach ($show as $s) : ?>
									<?php if ($s['kode_id'] == 1):?>
										<option class="inputForm" value="<?= $s['point']?>"><?= $s['kode'], ' - ', $s['keterangan'];?></option>
									<?php endif?>
								<?php endforeach ; ?>
							</select>
						</div>
						<div class="kriteria2">
							<p>Warna dari biji kopi</p>
							<select name="kriteria2" id="kriteria2">
								<option selected> -- Warna --</option>
								<?php foreach ($show as $s) : ?>
									<?php if ($s['kode_id'] == 2):?>
										<option class="inputForm" value="<?= $s['point']?>"><?= $s['kode'], ' - ', $s['keterangan'];?></option>
									<?php endif?>
								<?php endforeach ; ?>
							</select>
						</div>
						<div class="kriteria3">
							<p>Warna dari biji kopi</p>
							<select name="kriteria3" id="kriteria3">
								<option selected> -- Warna --</option>
								<?php foreach ($show as $s) : ?>
									<?php if ($s['kode_id'] == 3):?>
										<option class="inputForm" value="<?= $s['point']?>"><?= $s['kode'], ' - ', $s['keterangan'];?></option>
									<?php endif?>
								<?php endforeach ; ?>
							</select>
						</div>
						<div class="kriteria4">
							<p>Warna dari biji kopi</p>
							<select name="kriteria4" id="kriteria4">
								<option selected> -- Warna --</option>
								<?php foreach ($show as $s) : ?>
									<?php if ($s['kode_id'] == 4):?>
										<option class="inputForm" value="<?= $s['point']?>"><?= $s['kode'], ' - ', $s['keterangan'];?></option>
									<?php endif?>
								<?php endforeach ; ?>
							</select>
						</div>
						<div class="kriteria5">
							<p>Warna dari biji kopi</p>
							<select name="kriteria5" id="kriteria5">
								<option selected> -- Warna --</option>
								<?php foreach ($show as $s) : ?>
									<?php if ($s['kode_id'] == 5):?>
										<option class="inputForm" value="<?= $s['point']?>"><?= $s['kode'], ' - ', $s['keterangan'];?></option>
									<?php endif?>
								<?php endforeach ; ?>
							</select>
						</div>
						<div class="kriteria6">
							<p>Warna dari biji kopi</p>
							<select name="kriteria6" id="kriteria6">
								<option selected> -- Warna --</option>
								<?php foreach ($show as $s) : ?>
									<?php if ($s['kode_id'] == 6):?>
										<option class="inputForm" value="<?= $s['point']?>"><?= $s['kode'], ' - ', $s['keterangan'];?></option>
									<?php endif?>
								<?php endforeach ; ?>
							</select>
						</div>
						<div class="button mt-2">
							<button type="reset">Reset</button>
							<button>Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!-- Body Content End -->

	<!-- Script Js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>