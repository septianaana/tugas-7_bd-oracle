<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    AplikasiKu
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
       <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          AplikasiKu
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="barang.php">
              <i class="material-icons">person</i>
              <p>Data Barang</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="pelanggan.php">
              <i class="material-icons">person</i>
              <p>Data Pelanggan</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="pegawai.php">
              <i class="material-icons">person</i>
              <p>Data Pegawai</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="supplier.php">
              <i class="material-icons">person</i>
              <p>Data Supplier</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="transaksi.php">
              <i class="material-icons">person</i>
              <p>Data Transaksi</p>
            </a>
          </li>
        </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
           <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
      <!--- tambah data -->
              <form class="form-horizontal" action="add_barang.php" method="post">
               <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="">ID PEGAWAI</label>
                  <input type="text" class="form-control" name="ID_PEGAWAI" placeholder="ID_PEGAWAI">
                </div>
                <div class="form-group col-md-6">
                  <label for="">NAMA PEGAWAI</label>
                  <input type="text" class="form-control" name="NAMA_PEGAWAI" placeholder="NAMA_PEGAWAI">
                </div>
                <div class="form-group col-md-6">
                  <label for="">ALAMAT PEGAWAI</label>
                  <input type="text" class="form-control" name="ALAMAT_PEGAWAI" placeholder="ALAMAT_PEGAWAI">
                </div>
                <div class="form-group col-md-6">
                  <label for="">NO_PEGAWAI</label>
                  <input type="text" class="form-control" name="NO_PEGAWAI" placeholder="NO_PEGAWAI">
                </div> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label"></label>
                  <div class="col-sm-6">
                    <input type="submit" name="submit" class="btn btn-sm btn-success" value="Simpan">           
                  </div>
                </div>
              </form>
       
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Pegawai</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID Pegawai
                        </th>
                        <th>
                          Nama Pegawai
                        </th>
                        <th>
                          Alamat Pegawai
                        </th>
                         <th>
                        No. Tlp Pegawai
                        </th>
                        
                        <th>
                          Opsi
                        </th>
                      </thead>
                      <tbody>
                        <?php 
		include 'koneksi.php';
    $stid = oci_parse($koneksi, 'SELECT * from pegawai_0217');

    oci_execute($stid);

    while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
      ?>
                        <tr>                          
                          <td>
                            <?php echo $d['ID_PEGAWAI']; ?>
                          </td>
                          <td>
                            <?php echo $d['NAMA_PEGAWAI']; ?>
                          </td>
                          <td>
                            <?php echo $d['ALAMAT_PEGAWAI']; ?>
                          </td>
                           <td>
                            <?php echo $d['NO_PEGAWAI']; ?>
                          </td>
                          
                          <td class="td-actions">
						  <a href="pegawai_update.php?id=<?= $d['ID_PEGAWAI'] ?>">
                            <button type="button" rel="tooltip" class="btn btn-success">
                              <i class="material-icons">edit</i>
                            </button></a>
							<a href="delete.php?id=<?= $d['ID_PEGAWAI'] ?>" 
							onclick="return confirm('Anda yakin akan menghapus data ini?')">
                            <button type="button" rel="tooltip" class="btn btn-danger">
                              <i class="material-icons">close</i>
                            </button></a>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
		}
		?>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>