<?php 
include 'database.php';
$db = new database (); //isi dengan deklarasi method

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama'],$_POST['alamat'],$_POST['usia']);

 	 //panggil method input dari class database
 	header("location:tampil.php");
 
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']); 

 	//mysqli_query($this->conn, "DELETE FROM user WHERE  id= '$id'");
 	//panggil method hapus dari class database
	header("location:tampil.php");
 
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
 	//mysqli_query($this->conn, "UPDATE user SET nama=$nama, alamat=$alamat,usia=$usia WHERE id='$id' ");

 	 //panggil method update dari class database
 	header("location:tampil.php");
 }
?>