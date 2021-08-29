<!-- 
Author : Abdul Yamin
Title  : Tugas 6 - Implementasi User Interface
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Implementasi User Interface</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="kotak">
		<span class="judul">
			<h4>KALKULATORKU</h4>
			<hr>
		</span>
		<form method="post">
			<input class="inputan" type="number" name="nilai1" placeholder="Nilai 1" required>	
			<input class="inputan" type="number" name="nilai2" placeholder="Nilai 2" required>
			<div class="area-tombol">
				<button type="submit" name="tambah" class="tombol">+</button>
				<button type="submit" name="kurang" class="tombol">-</button>
				<button type="submit" name="kali" class="tombol">*</button>
				<button type="submit" name="bagi" class="tombol">/</button>
			</div>		
		</form>

		<!-- haisil perhitungan -->
		<div class="hasil-hitung">
				<?php 
				// membuat fungsi penjumlahan
				function FungsiTambah($nilai1,$nilai2){
				$tambah = $nilai1+$nilai2;
				return $tambah; // kembalikan hasil tambah
				}
				// membuat fungsi pengurangan
				function FungsiKurang($nilai1,$nilai2){
				$kurang = $nilai1-$nilai2;
				return $kurang; // kembalikan hasil kurang
				}

				// membuat fungsi perkalian
				function FungsiKali($nilai1,$nilai2){
				$kali = $nilai1*$nilai2;
				return $kali; // kembalikan hasil kali
				}

				// membuat fungsi pembagian
				function FungsiBagi($nilai1,$nilai2){
				$bagi = $nilai1/$nilai2;
				return $bagi; // kembalikan hasil bagi
				}

				// ===== PROSES JIKA TOMBOL DI KLIK ===
				// jika tombol tambah di klik
				if (isset($_POST['tambah'])) {
				// panggil hasil dari fungsi FungsiTambah()
				echo "<p>Hasil Penjumlahan Adalah :<p><b>".FungsiTambah($_POST['nilai1'],$_POST['nilai2'])."</b>"; 
				}
				// jika tombol kurang di klik
				if (isset($_POST['kurang'])) {
				// panggil hasil dari fungsi FungsiKurang()
				echo "<p>Hasil Pengurangan Adalah :<p><b>".FungsiKurang($_POST['nilai1'],$_POST['nilai2'])."</b>"; 
				}
				// jika tombol kali di klik
				if (isset($_POST['kali'])) {
				// panggil hasil dari fungsi FungsiKali()
				echo "<p>Hasil Perkalian Adalah :<p><b>".FungsiKali($_POST['nilai1'],$_POST['nilai2'])."</b>"; 
				}
				// jika tombol bagi di klik
				if (isset($_POST['bagi'])) {
				// panggil hasil dari fungsi FungsiBagi()
				echo "<p>Hasil Pembagian Adalah :<p><b>".FungsiBagi($_POST['nilai1'],$_POST['nilai2'])."</b>"; 
				}

				?>
	
		</div>
		<p class="author">
			By Abdul Yamin
		</p>

	</div>

</body>
</html>
