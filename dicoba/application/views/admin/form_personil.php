
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
              <li class="breadcrumb-item active">Personil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
       <!-- Main content -->
        <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Data Personil</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php echo base_url('C_master2/simpan')?>" enctype="multipart/form-data">
                      <div class="card-body">

                        <div class="form-group">
                        <label for="NAMA_LENGKAP">Jenis Peran</label>                                    
                         <div class="form-select-list">
                          <select class="form-control custom-select-value" name="ID_PERAN" id="ID_PERAN" required>
                          <option value="ID_PERAN">- Pilih Peran -</option>
                              <?php
                              foreach ($peran as $pr) { ?>
                          <option value="<?php echo $pr->ID_PERAN;?>"><?php echo $pr->NAMA_PERAN;?></option>
                                <?php
                                  }
                                ?>
                          </select>
                        </div>
                        </div>
                                                               
                        <div class="form-group">
                          <label for="NAMA_LENGKAP">Nama Lengkap</label>
                          <input type="text" class="form-control" id="NAMA_LENGKAP" name="NAMA_LENGKAP">
                        </div>
                         <div class="form-group">
                          <label for="TANGGAL_LAHIR">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="TANGGAL_LAHIR" name="TANGGAL_LAHIR">
                        </div>
                         <div class="form-group">
                          <label for="ALAMAT">Alamat</label>
                          <input type="text" class="form-control" id="ALAMAT" name="ALAMAT">
                        </div>
                         <div class="form-group">
                          <label for="NO_TELP">No Telp</label>
                          <input type="number" class="form-control" id="NO_TELP" name="NO_TELP">
                        </div>
      <!--                    <div class="form-group">
                          <label for="USERNAME">Username</label>
                          <input type="text" class="form-control" id="USERNAME" placeholder="">
                        </div>
                         <div class="form-group">
                          <label for="PASSWORD">Password</label>
                          <input type="password" class="form-control" id="PASSWORD" placeholder="">
                        </div> -->

                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </section>
<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->