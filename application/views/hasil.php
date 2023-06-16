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
                <div class="body-content">
                    <p>Hasil dari perhitungan kualitas biji kopi anda mendapatkan : <h4><?= $hasil ?></h4> Point</p>
                    <p>Grade Kopi anda adalah <h4>
                        <?php if ($hasil > 350) : ?>
                            <p>Grade Kopi 1 - 2</p>
                        <?php endif?>
                        <?php if ($hasil < 350) : ?>
                            <p>Grade Kopi 3 - 4</p>
                        <?php endif?>
                        <?php if ($hasil < 300) : ?>
                            <p>Grade Kopi 5 - 6</p>
                        <?php endif?>
                    </h4></p>
                </div>
                <div class="footer-content">
                    <a href="<?= base_url('Welcome')?>"><button>Kembali</button></a>
                </div>
            </div>
        </div>
	<!-- Body Content End -->

	<!-- Script Js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>