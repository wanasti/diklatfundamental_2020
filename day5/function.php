<?php
	function jalan(){
	echo 'Mobil jalan';}
	
	function berhenti(){
	echo 'Mobil berhenti';}
	
	function ganti_gigi($gigi){
	echo 'Mobil ganti gigi ke '.$gigi;}
	
	function penjumlahan($a,$b){
		$c = $a + $b;
	return 'hasil penjumlahan '.$a.' dan '.$b.' adalah '.$c;}
	
	function pengurangan($a,$b){
		$c = $a - $b;
	return 'hasil pengurangan '.$a.' dan '.$b.' adalah '.$c;}
	
	function kali($a,$b){
		$c = $a * $b;
	return 'hasil kali '.$a.' dan '.$b.' adalah '.$c;}
	
		function bagi($a,$b){
		$c = $a / $b;
	return 'hasil kali '.$a.' dan '.$b.' adalah '.$c;}
	
	$x = 25;
	$y = 5;
	$hasil = penjumlahan($x,$y);
	echo $hasil;
<br/>
	$hasil = pengurangan($x,$y);
	echo $hasil;

	$hasil = kali($x,$y);
	echo $hasil;

	$hasil = bagi($x,$y);
	echo $hasil;