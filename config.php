<?php

function hitung($jarak) {
	return $jarak * 5000;
}

function tulis($data) {
	$jarak = $data["jarak"];
	$total = hitung($jarak) . "\n";

	$cetak = $jarak ."|".$total;

	$pesanan = fopen("inputan.txt","a");
	fwrite($pesanan, $cetak);
	fclose($pesanan);
}