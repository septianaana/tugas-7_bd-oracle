<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
   $id = $_POST['ID_BARANG'];
  $barang= $_POST['NAMA_BARANG'];
  $JUMLAH = $_POST['JUMLAH_BARANG'];
  $HARGA = $_POST['HARGA_BARANG'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  barang_0217  SET NAMA_BARANG='".$barang."', JUMALAH_BARANG ='".$JUMLAH."', HARGA_BARANG ='".$HARGA."' WHERE  ID_BARANG= '".$id."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Barang berhasil diubah'); window.location.href='barang.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Barang gagal diubah'); window.location.href='barang.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: barang.php'); 
}