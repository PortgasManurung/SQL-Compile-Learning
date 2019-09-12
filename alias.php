<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Alias</title>
	</head>
	
	<body>
		<nav>
			<a class="logo" href="index.php"><img src="img/logo.png"></a>
			<div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
			<ul>
				<li><a href="sandbox.php">SQL Sandbox</a></li>
			</ul>
		</nav>
		<main>
			<div class="row">
				<aside class="col-20">
					<ul>
						<li><a href="index.php">Halaman Utama</a></li>
						<li><a href="select.php">SELECT Statement</a></li>
						<li><a href="where.php">Kondisi WHERE</a></li>
						<li><a href="distinct.php">Distinct</a></li>
						<li><a href="andornot.php">And, Or, Not</a></li>
						<li><a href="orderby.php">Order By</a></li>
						<li><a href="like.php">Like</a></li>
						<li><a href="in.php">In</a></li>
						<li><a href="between.php">Between</a></li>
						<li class="active">Alias</li>
						<li><a href="sandbox.php">SQL Sandbox</a></li>
					</ul>
				</aside>
				<div id="content" class="col-80">
					<h1>Alias</h1>
					<div class="btn-ctr">
						<a href="between.php" class="btn left"><i class="fa fa-chevron-left"></i>Materi Sebelumnya</a>
						<a href="sandbox.php" class="btn right">SQL Sandbox<i class="fa fa-chevron-right"></i></a>
					</div>
					<div class="line"></div>
					<section>
						<h2>Alias</h2>
						<p>Alias digunakan untuk memberikan tabel ataupun kolom dalam tabel nama lain.</p>
						<p>Alias biasanya digunakan untuk membuat nama kolom lebih mudah untuk dibaca</p>
						<h3>Sintax dasar</h3>
						<div class="syntax">
							<div class="syntax-inner">
								<p>SELECT column_name AS alias_name
								<br>FROM table_name;</p>
							</div>
						</div>
						<div class="syntax">
							<div class="syntax-inner">
								<p>SELECT column_name(s)
								<br>FROM table_name AS alias_name;</p>
							</div>
						</div>
					</section>
					
					<div class="line"></div>
					<section id="example">
						<h2>Contoh Query</h2>
						<p>Tabel contoh merupakan tabel barang dengan struktur dan isi di bawah ini</p>
						<table>
							<tr>
								<th>ID</th>
								<th>Nama</th>
								<th>Jenis</th>
								<th>Stok</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Teh Botol X</td>
								<td>Minuman</td>
								<td>50</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Wafer Y</td>
								<td>Makanan</td>
								<td>40</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Air Mineral Z</td>
								<td>Minuman</td>
								<td>100</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Roti Tawar D</td>
								<td>Makanan</td>
								<td>25</td>
							</tr>
						</table>
						<p>Di bawah ini merupakan contoh query Alias, silahkan ubah query jika anda ingin mencoba sendiri</p>
						<div id="sandbox">
							<textarea id="theQuery"rows="5" cols="33">SELECT ID AS Identitas, Nama AS Name
FROM barang;</textarea>
							<button id="exec" class="btn">EKSEKUSI</button>
						</div>
						<h2>Hasil Query</h2>
					</section>
					<div class="btn-ctr">
						<a href="between.php" class="btn left"><i class="fa fa-chevron-left"></i>Materi Sebelumnya</a>
						<a href="sandbox.php" class="btn right">SQL Sandbox<i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>