<script>
  function fillData(mk_id, mk_kec, mk_ibukota, mk_luas, mk_segmen, mk_status) {
    
    $('#id').val(mk_id);
    $('#nama').val(mk_kec);
    $('#ibukota').val(mk_ibukota);
    $('#luas').val(mk_luas);
    $('#segmen').val(mk_segmen);
    // $('#status').innerHTML('<option selected value ="mk_status">''</option>');
    $('#kec').modal('show');


    // $('#status').val(st_status);
    // $('#save').html('Ubah Data');
  }

  function empty() {
    $('#id').val("");
    $('#nama').val("");
    $('#ibukota').val("");
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
      <div class="row">
        <div class="col-12">
          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <a data-toggle="modal" data-target="#kec" class="btn btn-sm btn-primary" style="float:right" onclick="empty()">Tambah Data Kecamatan</a>
                <h4>
                  DATA KECAMATAN
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <div class="row">
              <div class="col-12 table-responsive" style="overflow-x:auto">
                <table id="example2" class="table table-bordered table-striped">
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
                      <th style="">IBUKOTA</th>
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
                    foreach ($kec as $k) { ?>
                      <tr style="font-size: 10pt;">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $k->mk_kec; ?></td>
                        <td><?php echo $k->mk_ibukota; ?></td>
                        <td><?php echo $k->mk_luas; ?></td>
                        <td><?php echo $k->mk_segmen; ?></td>
                        <td><?php echo $k->mk_peta; ?></td>
                        <td><?php if ($k->mk_ket == 1 ){
                          echo "Tampil";} else{
                            echo "Tidak Tampil";
                        } ?></td>
                        <td>
                          <a href="<?php echo base_url() . 'simpan/k_hapus/' . $k->mk_id; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" class="btn btn-danger" style="font-size: 10pt !important; padding:4px !important">
                            <i class="fa fa-trash" title="Hapus"></i> </a>
                          <a href="javascript:;" onclick="fillData('<?php echo $k->mk_id; ?>','<?php echo $k->mk_kec; ?>','<?php echo $k->mk_ibukota; ?>','<?php echo $k->mk_luas; ?>','<?php echo $k->mk_segmen; ?>','<?php echo $k->mk_ket; ?>')" class="btn btn-warning " style="font-size: 10pt !important; padding:4px !important" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        </td>
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
    <div class="modal fade" id="kec" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLabel">INPUT DATA KECAMATAN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form method="post" action="<?php echo base_url('simpan/kecamatan') ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="judul">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama.." required>                  
                  <input type="hidden" class="form-control" id="id" name="id">
                </div>
                <div class="form-group">
                  <label for="ibukota">Ibukota</label>
                  <input type="text" class="form-control" id="ibukota" name="ibukota" placeholder="Input ibukota.." required>
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
                  <label>Status Data Kecamatan</label>
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