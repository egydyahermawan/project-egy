<?php

class database{

	var $host ="localhost";
	var $uname ="root";
	var $pass ="";
	var $db = "uts_crud";
	var $con;

	function __construct(){
		$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con, $this->db);
	}
	<!--mahasiswa1044 = nama table dengan 4 digit terakhir NIM--> 
	function tampil_data(){
		$data = mysqli_query($this->con,"SELECT * FROM mahasiswa1044");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($nim,$nama,$asaldaerah,$studi,$status){
		mysqli_query($this->con,"INSERT INTO mahasiswa1044 VALUES('$nim','$nama','$asaldaerah','$studi','$status')");
	}
	function hapus($nim){
		mysqli_query($this->con,"DELETE FROM mahasiswa1044 WHERE NIM='$nim'");
	}
	function edit($nim){
		$data = mysqli_query($this->con,"SELECT * FROM mahasiswa1044 WHERE NIM='$nim'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($nim,$nama,$asaldaerah,$studi,$status){
		mysqli_query($this->con,"UPDATE mahasiswa1044 SET NIM='$nim', Nama_Lengkap= '$nama', Asal_Daerah='$asaldaerah',
		Program_Studi='$studi', Status='$status' WHERE NIM= '$nim'");
	}
}
?>
