<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
 $id= $_POST['ID_BARANG'];
  $namabrg= $_POST['NAMA_BARANG'];
  $jumlahbrg= $_POST['JUMLAH_BARANG'];
  $hargabrg= $_POST['HARGA_BARANG'];

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  barang_0217  SET  ID_BARANG = '".$id."', NAMA_BARANG  = '".$namabrg."', JUMLAH_BARANG  = '".$jumlahbrg.", HARGA_BARANG  = '".$hargabrg."' WHERE ID_BARANG ='".$id."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data transaksi berhasil diubah'); window.location.href='barang.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data transaksi gagal diubah'); window.location.href='barang.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: barang.php'); 