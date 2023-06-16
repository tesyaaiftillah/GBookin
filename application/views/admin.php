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
				<a class="navbar-brand" href="#">SJA Admin - Kualitas Biji Kopi</a>
			</div>
		</nav>
	<!-- Header End -->

	<!-- Body Content Start -->
		<div class="content">
			<div class="container">
				<div class="header-content">
					<h1>List Penentuan Kualitas Biji Kopi</h1>
				</div>
				<div class="body-content">
                    <style>
                        table,th,tr,td{
                            border : solid black 1px;
                            width : 25em;
                        }
                    </style>
                        <table>
                            <tr>
                                <th>Kode</th>
                                <th>Keterangan</th>
                            </tr>
                            <?php foreach ($show as $s) : ?>
                            <tr>
                                <td><?= $s['kode']?></td>
                                <td><?= $s['keterangan']?></td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                <div class="button-pagi">
                    <?php echo $this->pagination->create_links();?>
                </div>
				</div>
				<div class="footer-content">
					<hr>
                    <h1>Tambah Data Kriteria</h1>
                    <div class="gap"></div>
                    <form action="" method="post">
                        <div class="form-tambah">
                            <div class="kode">
                                <p>Kode</p>
                                <input type="text">
                            </div>
                            <div class="keterangan">
                                <p>Keterangan</p>
                                <input type="text">
                            </div>
                            <input type="submit" value="submit">
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