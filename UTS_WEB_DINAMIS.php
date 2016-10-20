<?php error_reporting(0); ?>
<html>
	<header>
		<title>UTS Website Dinamis</title>
		<style>
				body		{font: normal 12px Comic Sans MS; text-align: center;}
				#wrapper	{margin: 0px auto; width: 800px;}
				#jawaban1	{width: 800px; text-align: justify;}
				h2			{color : red;}
				h3			{font: normal 12px aharoni;}
		</style>
	</header>
	<body>
	<div id="wrapper">
		<div id="jawaban1">
			<h2>Tampilan Jawaban Nomor 1 :</h2>
			<?php 
				$paragraf="Orang mukmin adalah sebaik-baik makhluk dalam memanfaatkan dunia. Baginya, dunia bukanlah tempat untuk mencari kepuasan lahiriyah
				semata, karena ada hal yang lebih penting dari sekedar kesenangan duniawi. Menurutnya, kebahagiaan tidak terletak pada materi, namun lebih pada 
				ketentraman hati. Yaitu hati yang disirami oleh cahaya keimanan, hati yang tersentuh oleh panggilan ilahi. Itulah sumber kebahagiaan. 
				Oleh karena itu, ia tidak memandang dunia sebagai tujuan utama hidupnya. Dunia adalah tempat baginya untuk menyusun dan merencanakan 
				hari esoknya yang lebih cerah. Ketika manusia tertunduk lesu menyesali apa yang telah mereka lakukan dengan muka pucat kebingungan mencari - cari 
				suaka dan pertolongan, ia dengan 'gagah' menegakkan wajahnya karena mendapatkan apa yang dulu dijanjikan. Ketika manusia satu persatu dihinakan di 
				hadapan seluruh makhluk sebagai akibat atas apa yang telah diperbuat, ia dengan tenangnya menghadapi semua itu tanpa rintangan. Ya, itulah hari 
				perhitungan atau dalam istilah syar'i <i>\"Yaumul Hisab\"</i>. Hari ditimbangnya amalan manusia. Dan hal itu semua tidak akan terjadi kecuali 
				karena ia menjadikan dunia bukan sebagai tujuan utamanya. (sumber : muslim.or.id)";
				echo "<p>$paragraf</p>";
				echo "<form method=\"post\" action=\"UTS_WEB_DINAMIS.php\" name=\"no1\">";
				echo "Kata Yang Dicari : <input type=\"paragraf\" name=\"key\" required=\"required\" /> <input type=\"submit\" name=\"hitung\" value=\"Hitung\" />";
				echo "</form>";
					if($_POST['hitung'])
					{
						$key=$_POST['key'];
						echo "Jumlah Kata *$key* Sebanyak = ";
						echo substr_count(strtoupper($paragraf), strtoupper($key));
					}
			?>
			<br/>
			<br/>
			<br/>
			<br/>
			<h2>Tampilan Jawaban Nomor 2 :</h2>
			<?php 
				$kitab="Riyadus Sholihin,Minhajul Muslim,Tafsir Ibnu Katsir,Siroh Nabawiyah";
				echo $kitab;
				echo "<br/>";
				echo "<br/>";
				echo "TAMPILAN DROPDOWN LIST";
				echo "<br/>";
			?>
			<br/>
			<select name="jawaban2">
				<?php
					$data=explode(',',$kitab);
					$jumlah_kitab=count($data);
					for($n=0;$n<$jumlah_kitab;$n++)
					{
						echo "<option value=\"$n\">$data[$n]</option>";
					}
				?>
			</select>
			<br/>
			<br/>
			<br/>
			<br/>
			<h2>Tampilan Jawaban Nomor 3 :</h2>
			<?php
				$kendaraan=array(
								  "Roda Dua" =>array (
												       "Sepeda Motor" =>array("Kawasaki"=>3, "Honda"=>4, "Suzuki"=>6, "Yamaha"=>4),
													   "Sepeda Onthel"=>array("Octagon"=>7, "Polygon"=>9)
													 ),
								  "Roda Empat"=>array(
													   "Bus"=>array("Fuso"=>11, "Umo"=>12, "Huge"=>33),
													   "Truk"=>array("Mitsubishi"=>5, "Hyundai"=>8),
													   "Sedan"=>array("Vios"=>23, "Camry"=>1)
													  )
								);
				echo "<div class=\"temp_kend\">";
					foreach($kendaraan as $jeniskendaraan => $jumlahroda)
					{
						echo "<div class=\"\">";
						echo "<h3>$jeniskendaraan</h3>";
						foreach($jumlahroda as $jumroda => $stok)
						{
							echo "<div class=\"\">";
							echo "<b>$jumroda</b>";
							foreach($stok as $namakendaraan => $merk)
							{
								echo "<div class=\"\">";
								echo "* $namakendaraan ($merk)";
								echo "</div>";
							}
							echo "<div class=\"clear\"></div>";
							echo "</div>";
						}
						echo "<div class=\"clear\"></div>";
						echo "</div>";
					}
					echo "<div class=\"clear\"></div>";
				echo "</div>";
			?>
		</div>
	</div>
	</body>
</html>