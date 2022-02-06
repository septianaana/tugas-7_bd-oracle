<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_barang= $_POST['ID_BARANG'];
  $nama_barang= $_POST['NAMA_BARANG'];
  $jumlah_barang= $_POST['JUMLAH_BARANG'];
  $harga_barang= $_POST['HARGA_BARANG'];

$query = "INSERT INTO barang_0217 (ID_BARANG,NAMA_BARANG,JUMLAH_BARANG,HARGA_BARANG) VALUES ('".$id_barang."','".$nama_barang."','".$jumlah_barang."','".$harga_barang."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='barang.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='barang.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: barang.php'); 
}