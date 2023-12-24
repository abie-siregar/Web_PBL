<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/22eeb81f80.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('dashboard') ?>">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SIKERMA</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('listpengajuan?type=PBL') ?>">
            <i class="bi bi-mortarboard-fill"></i>
            <span>Pengajuan PBL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('listpengajuan?type=Magang') ?>">
            <i class="bi bi-mortarboard-fill"></i>
            <span>Pengajuan Magang</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('listpengajuan?type=KerjaSama') ?>">
            <i class="bi bi-mortarboard-fill"></i>
            <span>Pengajuan Kerja Sama</span>
          </a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('dosen') ?>">
            <i class="bi bi-mortarboard-fill"></i>
            <span>Dosen</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('mahasiswa') ?>">
            <i class="bi bi-mortarboard-fill"></i>
            <span>Mahasiswa</span>
          </a>
        </li>
      </ul>
      <!-- End of Sidebar -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
            </form>
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <!-- Nav Item - Alerts -->
              <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Nav Item - User Information -->
              
            </ul>
          </nav>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <div class="modal" id="myModal">
              <div class="container">
                <!-- Outer Row -->
                <div class="row justify-content-center">
                  <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                      <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="p-5">
                              <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Dosen</h1>
                              </div>
                              <form class="user" action="<?= base_url('index.php/dosen/tambah') ?>" method="POST">
                                <div class="form-group">
                                  <input type="text" name="nidn" id="nidn" class="form-control form-control-user" placeholder="NIDN">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="nama" id="nama" class="form-control form-control-user" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="jurusan" id="jurusan" class="form-control form-control-user" placeholder="Jurusan">
                                </div>
                                <div class="form-group">
                                  <input type="email" name="email" id="email" class="form-control form-control-user" placeholder="Email">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                                    Login
                                </a> -->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">List Dosen</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <button type="button" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#myModal"> Tambah Data </button>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th> </th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody> <?php
                if (is_array($lstdosen) || is_object($lstdosen)){
                    foreach ($lstdosen as $dosen): ?> <tr>
                        <td> <?= $dosen->nidn; ?> </td>
                        <td> <?= $dosen->nama; ?> </td>
                        <td> <?= $dosen->jurusan; ?> </td>
                        <td> <?= $dosen->email; ?> </td>
                        <td> <a href="<?= site_url('dosen/edit?nidn=' . $dosen->nidn); ?>" class="btn btn-info btn-sm">Edit</a> </td>
                        <td> <button class="btn btn-danger btn-sm" onclick="confirmDelete('<?= $dosen->nidn; ?>')">Delete</button> </td>
                      </tr> <?php endforeach;
                } 
                 ?> </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2023</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
  </body>
</html>

<script>
    function confirmDelete(nidn) {
        if (confirm('Apakah Anda yakin ingin menghapus dosen ini?')) {
            window.location.href = '<?= base_url('index.php/dosen/hapus?nidn=') ?>' + nidn;
        }
    }
</script>