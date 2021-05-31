<?php
	class database{
		var $host = "localhost";
		var $user = "root";
		var $pass = "root";
		var $db	= "uts_bpwl";
		var $con;

		function __construct(){
			$this->con=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
			mysqli_select_db($this->con, $this->db);
		}

		function tampil_data(){
			$data = mysqli_query($this->con,"SELECT * FROM mahasiswa1036");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($nim, $nama_lengkap, $asal_daerah, $program_studi, $status){
			mysqli_query($this->con, "INSERT INTO mahasiswa1036 VALUES('$nim', '$nama_lengkap', '$asal_daerah', '$program_studi', '$status')");
		}

		function hapus($nim){
			mysqli_query($this->con, "DELETE FROM mahasiswa1036 WHERE nim = '$nim'");
		}

		function edit($nim){
			$data = mysqli_query($this->con,"SELECT * FROM mahasiswa1036 WHERE nim='$nim'");
			while($d = mysqli_fetch_array($data)){
				$hasil[]=$d;
			}
			return $hasil;
		}

        function update($nim, $nama_lengkap, $asal_daerah, $program_studi, $status){
            mysqli_query($this->con, "update mahasiswa1036 set nama_lengkap='$nama_lengkap', asal_daerah='$asal_daerah', program_studi='$program_studi', status='$status' where nim='$nim'");
        }
	}
?>