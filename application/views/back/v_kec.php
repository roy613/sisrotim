<script>
  function fillData(st_id, st_nama, st_jabatan, st_motto, st_nohp) {
    $('#id').val(st_id);     
    $('#nama').val(st_nama);   
    $('#jabatan').val(st_jabatan);   
    $('#motto').val(st_motto);   
    $('#nohp').val(st_nohp);   
    
    // $('#status').val(st_status);
    // $('#save').html('Ubah Data');
    $('#struktur').modal('show');
  }

  function empty()
  {
    $('#id').val("");   
    $('#nama').val("");   
    $('#jabatan').val("");   
    $('#motto').val("");   
    $('#nohp').val("");  
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
                    <a data-toggle="modal" data-target="#struktur" class="btn btn-sm btn-primary" style="float:right" onclick="empty()">Tambah Anggota</a>
                    <h4>
                      MASTER DATA KECAMATAN
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
                          <th style="">TOTAL SEGMEN</th>
                          <th style="">PETA</th>
                          <th style="width:14%">STATUS</th>
                          <th style="width:9%">OPSI</th>
                        </tr>

                      </thead>
                      <!-- <tbody>
                        <?php
                        $no = 1;
                        foreach ($sk as $k) { ?>
                          <tr style="font-size: 10pt;">
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $k->st_nama; ?></td>
                            <td><?php echo $k->st_jabatan; ?></td>
                            <td><?php echo $k->st_motto; ?></td>
                            <td><?php echo $k->st_foto; ?></td>
                            <td><?php echo $k->st_nohp; ?></td>
                            <td>
                              <a href="<?php echo base_url() . 'simpan/s_hapus/' . $k->st_id; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" class="btn btn-danger" style="font-size: 10pt !important; padding:4px !important">
                                <i class="fa fa-trash" title="Hapus"></i> </a>
                                <a href="javascript:;" onclick="fillData('<?php echo $k->st_id; ?>','<?php echo $k->st_nama; ?>','<?php echo $k->st_jabatan; ?>','<?php echo $k->st_motto; ?>','<?php echo $k->st_nohp; ?>')" class="btn btn-warning " style="font-size: 10pt !important; padding:4px !important" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            </td>
                          <?php } ?>
                      </tbody> -->
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="struktur" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
          <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header bg-dark">
                <h5 class="modal-title" id="exampleModalLabel">Struktur Organisasi Kelurahan Teluk Lingga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form method="post" action="<?php echo base_url('simpan/struktur_kel') ?>" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="judul">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama.." required>
                      <input type="hidden" class="form-control" id="status" name="status" value="1">
                      <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                      <label for="jabatan">Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Input jabatan.." required>
                    </div>
                    <div class="form-group">
                      <label for="motto">Motto</label>
                      <input type="text" class="form-control" id="motto" name="motto" placeholder="Input motto hidup..">
                    </div>
                    <div class="form-group">
                      <label for="nohp">Nomor Handphone</label>
                      <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Input nomor hp..">
                    </div>                    
                    <div class="form-group">
                      <label for="filegambar">Foto</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="filegambar" id="filegambar" required>
                          <label class="custom-file-label" for="filegambar">Pilih Foto</label>
                        </div>
                      </div>
                    </div>
                    <p>*Foto yang di upload harus dengan format .png atau .jpeg atau .jpg <br> *Disarankan untuk mengupload foto dengan ukuran dibawah 300kb</p>
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

