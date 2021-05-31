<?php
	include "config.php";
	$db = new database();

	$aksi = $_GET['aksi'];
	if ($aksi == "tambah") {
		$db->input($_POST['nim'], $_POST['nama_lengkap'], $_POST['asal_daerah'], $_POST['program_studi'], $_POST['status']);
		header('location:index.php');
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['nim']);
		header('location:index.php');
	}elseif ($aksi == "update"){
		$db->update($_POST['nim'], $_POST['nama_lengkap'], $_POST['asal_daerah'], $_POST['program_studi'], $_POST['status']);
		header('location:index.php');
	}
?>