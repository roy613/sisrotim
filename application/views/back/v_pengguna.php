<!-- body -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                
                <a data-toggle="modal" data-target="#fp" class="btn btn-sm btn-primary" style="float:right" onclick="empty()">Tambah Akun Pengguna</a>
                <h4>
                  PENGGUNA
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <div class="row">
              <div class="col-12 table-responsive" style="overflow-x:auto">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                    <?php
                    if (isset($_GET['alert'])) {
                      if ($_GET['alert'] == "sukses") {
                        echo "<div class='alert alert-success'>Data Berhasil di Tambah!</div>";
                      } else if ($_GET['alert'] == "warning") {
                        echo "<div class='alert alert-danger'>Data Berhasil di Hapus</div>";
                      } else if ($_GET['alert'] == "sukses1") {
                        echo "<div class='alert alert-success'>Data Berhasil di Ubah</div>";
                      }
                    }
                    ?>
                    <?php if (isset($gambar_error)) {
                      echo "<div style='color:red'>$gambar_error</div>";
                    } ?>
                    <tr style="background-color: #0066ff; color: white">
                      <th width="1%">NO</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th width="10%">OPSI</th>
                    </tr>

                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($guna as $p) {
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $p->nama; ?></td>
                        <td><?php echo $p->username; ?></td>                        
                        <td><?php echo $p->pass; ?></td>
                        <td>
                          <a href="<?php echo base_url() . 'home_b/p_hapus/' . $p->p_id; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" class="btn btn-danger
btn-sm"> <i class="fa fa-trash"> Hapus</i> </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="fp" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Akun Pengguna</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form method="post" action="<?php echo base_url('home_b/p_aksi') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan nama pengguna ..">
                  <span style="color: red;"><?php echo form_error('nama'); ?></span>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Masukkan username pengguna..">
                  <span style="color: red;"><?php echo form_error('username'); ?></span>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Masukkan password anda..">
                  <span style="color: red;"><?php echo form_error('password'); ?></span>
                </div>                
              </div>
              <div class="box-footer">
                <input type="submit" style="float:right" class="btn btn-sm btn-primary" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>