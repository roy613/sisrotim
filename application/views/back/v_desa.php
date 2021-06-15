<script>
  function fillData(md_id, md_kec, md_desa, md_luas, md_segmen, md_status) {

    $('#id').val(md_id);
    $('#nama').val(md_desa);
    $('#luas').val(mk_luas);
    $('#segmen').val(mk_segmen);
    // $('#status').innerHTML('<option selected value ="mk_status">''</option>');
    $('#desa').modal('show');


    // $('#status').val(st_status);
    // $('#save').html('Ubah Data');
  }

  function empty() {
    $('#id').val("");
    $('#nama').val("");
    $('#luas').val("");
    $('#segmen').val("");
    $('#status').val("");
  }
</script>

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

      <div class="col-12">
        <!-- Main content -->
        <div class="card">
          <!-- title row -->
          <div class="card-header">
            <a data-toggle="modal" data-target="#desa" class="btn btn-sm btn-primary" style="float:right" onclick="empty()">Tambah Data Desa</a>
            <h4 class="card-title">
              DATA DESA
            </h4>

            <!-- /.col -->
          </div>

          <div class="card-body" style="overflow-x:auto">
            <table id="example1" class="table table-bordered table-striped table-hover table-responsive">
              <thead>
                <?php
                if (isset($_GET['alert'])) {
                  if ($_GET['alert'] == "sukses") {
                    echo "<div class='alert alert-success'>Data Berhasil di Tambah!</div>";
                  } else if ($_GET['alert'] == "gagal") {
                    echo "<div class='alert alert-danger'>Data Berhasil DiHapus</div>";
                  } else if ($_GET['alert'] == "sukses1") {
                    echo "<div class='alert alert-success'>Data Berhasil Di Ubah</div>";
                  }
                }
                ?>
                <?php if (isset($gambar_error)) {
                  echo "<div style='color:red'>$gambar_error</div>";
                } ?>
                <tr style="background-color: #0066ff; color: white; font-size:10pt">
                  <th style="width: 2%">NO</th>
                  <th style="width:15%">KECAMATAN</th>
                  <th style="">DESA</th>
                  <th style="">LUAS</th>
                  <th style="">TOTAL SEGMEN</th>
                  <th style="">PETA</th>
                  <th style="width:14%">STATUS</th>
                  <th style="width:9%">OPSI</th>
                </tr>

              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($desa as $k) { ?>
                  <tr style="font-size: 10pt;">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $k->md_kec; ?></td>
                    <td><?php echo $k->md_desa; ?></td>
                    <td><?php echo $k->md_luas; ?></td>
                    <td><?php echo $k->md_segmen; ?></td>
                    <td><?php echo $k->md_peta; ?></td>
                    <td><?php if ($k->md_ket == 1) {
                          echo "Tampil";
                        } else {
                          echo "Tidak Tampil";
                        } ?><sup><a href="javascript:;" onclick="editdata('<?php echo $k->md_id; ?>','<?php echo $k->md_desa; ?>')"  style="font-size: 10pt !important; padding:4px !important" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a></sup></td>
                    <td>
                      <a href="<?php echo base_url() . 'simpan/d_hapus/' . $k->md_id; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" class="btn btn-danger" style="font-size: 10pt !important; padding:4px !important">
                        <i class="fa fa-trash" title="Hapus"></i> </a>
                      <a href="javascript:;" onclick="fillData('<?php echo $k->md_id; ?>','<?php echo $k->md_kec; ?>','<?php echo $k->md_desa; ?>','<?php echo $k->md_luas; ?>','<?php echo $k->md_segmen; ?>','<?php echo $k->md_ket; ?>')" class="btn btn-warning " style="font-size: 10pt !important; padding:4px !important" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    </td>
                  <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="desa" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA Desa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="<?php echo base_url('simpan/desa') ?>" enctype="multipart/form-data">
          <div class="card-body">

            <div class="form-group">
              <label for="kecamatan">Kecamatan</label>
              <select class="form-control" name="kecamatan" id="kecamatan" required>
                <option selected disabled>-- Pilih Kecamatan --</option>
                <?php foreach ($kec as $a) { ?>
                  <option> <?php echo $a->mk_kec; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group">
              <label for="judul">Nama Desa</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama.." required>
              <input type="hidden" class="form-control" id="id" name="id">
            </div>
            <div class="form-group">
              <label for="luas">Luas km<sup>2</sup></label>
              <input type="text" class="form-control" data-type="currency" id="luas" name="luas" placeholder="Input luas tanpa satuan.." required>
            </div>
            <div class="form-group">
              <label for="segmen">Jumlah Segmen</label>
              <input type="text" data-type="currency" class="form-control" id="segmen" name="segmen" placeholder="Input jumlah segmen.." required>
            </div>
            <div class="form-group">
              <label>Status Data Desa</label>
              <select class="form-control" name="status" id="status" required>
                <option value="">-- Pilih Status --</option>
                <option value="1">Tampilkan</option>
                <option value="2">Jangan Tampilkan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="filegambar">Gambar Peta Indikatif (jpg, jpeg, png)</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="filegambar" id="filegambar">
                  <label class="custom-file-label" for="filegambar">Pilih Gambar</label>
                </div>
              </div>
            </div>
            <p>*Disarankan untuk mengupload foto dengan ukuran dibawah 300kb</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" id="save" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

</section>
</div>

<div class="modal fade" id="editstatus" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt="" height="30px" class="mr-2">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">SIMPRONATASA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() . 'edit/desa' ?>" enctype="multipart/form-data">
                    <p id="edit_cam"></p>
                    <div class="form-group">
                        <label for="edit_status">Ubah Status Data</label>
                        <input type="hidden" class="form-control" id="edit_id" name="edit_id">
                        <select class="form-control" name="edit_status" id="edit_status" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="1">Tampilkan</option>
                            <option value="2">Jangan Tampilkan</option>
                        </select>
                    </div>
                    <button type="submit" id="save1" class="btn btn-primary" style="float: right;">Pilih</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  function editdata(mk_id, mk_kec) {

$('#edit_id').val(mk_id);
$('#edit_cam').html(mk_kec);

$('#editstatus').modal('show');


}
</script>