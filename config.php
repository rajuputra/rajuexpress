<?php

function hitung($jarak) {
	return $jarak * 5000;
}

function tulis($data) {
	$nama = $data["nama"];
	$jarak = $data["jarak"];
	$total = hitung($jarak) . "\n";

	$cetak = $nama."|".$jarak ."|".$total;

	$pesanan = fopen("inputan.txt","a");
	fwrite($pesanan, $cetak);
	fclose($pesanan);
}
