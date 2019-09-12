<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Like</title>
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
						<li class="active">Like</li>
						<li><a href="in.php">In</a></li>
						<li><a href="between.php">Between</a></li>
						<li><a href="alias.php">Alias</a></li>
						<li><a href="sandbox.php">SQL Sandbox</a></li>
					</ul>
				</aside>
				<div id="content" class="col-80">
					<h1>Like</h1>
					<div class="btn-ctr">
						<a href="orderby.php" class="btn left"><i class="fa fa-chevron-left"></i>Materi Sebelumnya</a>
						<a href="in.php" class="btn right">Materi Selanjutnya<i class="fa fa-chevron-right"></i></a>
					</div>
					<div class="line"></div>
					<section>
						<h2>Like</h2>
                        <p>Like digunakan untuk mencari data dari database dengan membandingkan "String" yang diset, dengan membandingkan susunan karakternya.</p>
                        <p>Like artinya mencari apakah didalam tabel itu mengandung sebuah string tertentu, dan Not like adalah mencari data yang tidak mengandung String tertentu.</p>
						<h3>Sintax dasar</h3>
						<div class="syntax">
							<div class="syntax-inner">
								<p>SELECT kolom1, kolom2, ... FROM nama_tabel WHERE nama_Kolom LIKE nilai_pembanding[ESCAPE CHAR]</p>
                            </div>
						</div>
                    </section>
                    <div class="line"></div>
					<section>
						<h2>Not Like</h2>
						<p>Not Like sama seperti like, hanya saja yang diambil yang diluar kondisi.</p>
						<h3>Sintax dasar</h3>
						<div class="syntax">
                            <div class="syntax-inner">
								<p>SELECT kolom1, kolom2, ... FROM nama_tabel WHERE nama_Kolom NOT LIKE nilai_pembanding[ESCAPE CHAR]</p>
							</div>
						</div>
                    </section>
                    <div class="line"></div>
                    <section>
						<h2>ESPACE CHAR</h2>
                        <p>Terdapat 2 Escape character/Wildcard yang digunakan yaitu '%' dan '_'.</p>
                        <p>Dimana '_' Mewakili 1 buah karakter sembarang.</p>
                        <p>Dan '%' mewakili nol atau lebih karakter sembarang.</p>
						<h3>Sintax dasar</h3>
						<div class="syntax">
							<div class="syntax-inner">
								<p>SELECT kolom1, kolom2, ... FROM nama_tabel WHERE nama_kolom '%s'</p>
							</div>
						</div>
                    </section>
                    <div class="line"></div>
                    <section>
						<h2>Penempatan ESPACE CHAR</h2>
                        <p>Escape char bisa ditempatkan sebelum dan sesudah nilai_pembanding, yang dimana penenpatan tersebut memiliki artinya masing masing.</p>
                        <p>Saat ditempatkan didepan seperti '%s' maka artinya mencari data dalam kolom tertentu yang huruf terakhirnya adalah s dan huruf didepan s bebas, kalau ditempatkan dibelakang 's%' maka akan mencari isi dalam kolom database yang huruf pertamnya s dan setelahnya bebas.</p>
                        <p>Perlu di ingat penggunaan Escape character tidak wajib digunakan jika menggunakan SQL like atau NOT like, jika anda butuh data yang spesifik anda dapat menghilangkan Escape Charnya.</p>
                        <p>Dibawah Merupakan contoh '_e%' artinya mencari data dengan huruf ke 2 e dan setelahnya bebas.</p>
						<h3>Sintax dasar</h3>
						<div class="syntax">
							<div class="syntax-inner">
								<p>SELECT kolom1, kolom2, ... FROM nama_tabel WHERE nama_kolom '_e%'</p>
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
						<p>Di bawah ini merupakan contoh query LIKE, silahkan ubah query jika anda ingin mencoba sendiri</p>
						<div id="sandbox">
							<textarea id="theQuery"rows="5" cols="33" required>select nama from barang where nama like '_e%'</textarea>
							<button id="exec" class="btn">EKSEKUSI</button>
						</div>
						<h2>Hasil Query</h2>
					</section>
					<div class="btn-ctr">
						<a href="orderby.php" class="btn left"><i class="fa fa-chevron-left"></i>Materi Sebelumnya</a>
						<a href="in.php" class="btn right">Materi Selanjutnya<i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>