<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Master</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Master</a></li>
              <li class="breadcrumb-item active">Peran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
       <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Data Personil</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  enctype="multipart/form-data" >
                  <div class="card-body">
                    <div id="toolbar" class="col-md-2">
                      <a href="<?php echo base_url('C_master2')?>" class="btn btn-primary btn-block mb-2">Tambah Data</a>
                    </div>
                  </div>
                  <!-- /.card-body -->
                   <div class="row">
                                            <div class="col-12">
                                              <div class="card">
                                                <div class="card-header">
                                                  <h3 class="card-title">Responsive Hover Table</h3>

                                                  <div class="card-tools">
                                                    <div class="input-group input-group-sm" style="width: 150px;">
                                                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                      <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0">
                                                  <table class="table table-hover">
                                                  <thead>
                                                    <th>No</th>
                                                    <th>ID PERSONIL</th>
                                                    <th>ID PERAN</th>
                                                    <th>NAMA LENGKAP</th>
                                                    <th>TANGGAL LAHIR</th>
                                                    <th>ALAMAT</th>
                                                    <th>NO TELP</th>
                                                  </thead>

                                                  <tbody>
                                                    <?php
                                                    $nourut=1;
                                                    foreach ($personil as $pers) {
                                                      ?>
                                                      <tr>
                                                        <td><?php echo $nourut++;?></td>
                                                        <td><?php echo $pers->ID_PERSONIL;?></td>
                                                        <td><?php echo $pers->ID_PERAN;?></td>
                                                        <td><?php echo $pers->NAMA_LENGKAP;?></td>
                                                        <td><?php echo $pers->TANGGAL_LAHIR;?></td>
                                                        <td><?php echo $pers->ALAMAT;?></td>
                                                        <td><?php echo $pers->NO_TELP;?></td>
                                                      </tr>
                                                      <?php
                                                    }
                                                    ?>
                                                  </tbody>
                                                </table>

                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
