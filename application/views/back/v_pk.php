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

                        <a data-toggle="modal" data-target="#desa" class="btn btn-sm btn-primary" style="float:right" onclick="empty()">Tambah Data Perbup</a>
                        <h4 class="card-title">
                            DATA PERATURAN BUPATI PENETAPAN
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
                                    } else if ($_GET['alert'] == "sukses3") {
                                        echo "<div class='alert alert-success'>Peta Berhasil Di Upload</div>";
                                    }
                                }
                                ?>
                                <?php if (isset($gambar_error)) {
                                    echo "<div style='color:red'>$gambar_error</div>";
                                } ?>
                                <tr>
                                    <th style="width: 2%">NO</th>
                                    <th style="width:23%">NO PERBUP/ TENTANG</th>
                                    <th style="width:27%">KECAMATAN/ DESA(POSISI)</th>
                                    <th>PANJANG GARIS <br> (TOTAL)</th>
                                    <th>GAMBAR PETA</th>
                                    <th style="width:min-content">STATUS</th>
                                    <th style="width:auto">OPSI</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pk as $k) { ?>
                                    <tr style="font-size: 10pt;">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $k->d_nomor; ?>/ <?php echo Ucwords($k->d_tentang); ?></td>
                                        <td><?php echo Ucwords($k->d_kec1) . "/ "; ?><?php echo Ucwords($k->d_desa1) . " (Acuan)"; ?><br>

                                            <?php echo Ucwords($k->d_kec2) . "/ "; ?><?php echo Ucwords($k->d_desa2) . " ("; ?><?php if ($k->d_posisi2 == 1) {
                                                                                                                                    echo "Utara)";
                                                                                                                                } else if ($k->d_posisi2 == 2) {
                                                                                                                                    echo "Selatan)";
                                                                                                                                } else if ($k->d_posisi2 == 3) {
                                                                                                                                    echo "Timur)";
                                                                                                                                } else if ($k->d_posisi2 == 4) {
                                                                                                                                    echo "Barat)";
                                                                                                                                } ?><br>

                                            <?php if ($k->d_kec3 !== null) { ?> <?php echo Ucwords($k->d_kec3); ?>/<?php echo Ucwords($k->d_desa3); ?>(<?php if ($k->d_posisi3 == 1) {
                                                                                                                                                            echo "Utara";
                                                                                                                                                        } else if ($k->d_posisi3 == 2) {
                                                                                                                                                            echo "Selatan";
                                                                                                                                                        } else if ($k->d_posisi3 == 3) {
                                                                                                                                                            echo "Timur";
                                                                                                                                                        } else if ($k->d_posisi3 == 4) {
                                                                                                                                                            echo "Barat";
                                                                                                                                                        } ?>)<br> <?php } ?>

                                            <?php if ($k->d_kec4 != null) { ?> <?php echo Ucwords($k->d_kec4); ?>/<?php echo Ucwords($k->d_desa4); ?>(<?php if ($k->d_posisi4 == 1) {
                                                                                                                                                            echo "Utara";
                                                                                                                                                        } else if ($k->d_posisi4 == 2) {
                                                                                                                                                            echo "Selatan";
                                                                                                                                                        } else if ($k->d_posisi4 == 3) {
                                                                                                                                                            echo "Timur";
                                                                                                                                                        } else if ($k->d_posisi4 == 4) {
                                                                                                                                                            echo "Barat";
                                                                                                                                                        } ?>)<br> <?php } ?>

                                            <?php if ($k->d_kec5 !== null) { ?> <?php echo Ucwords($k->d_kec5); ?>/<?php echo Ucwords($k->d_desa5); ?>(<?php if ($k->d_posisi5 == 1) {
                                                                                                                                                            echo "Utara";
                                                                                                                                                        } else if ($k->d_posisi5 == 2) {
                                                                                                                                                            echo "Selatan";
                                                                                                                                                        } else if ($k->d_posisi5 == 3) {
                                                                                                                                                            echo "Timur";
                                                                                                                                                        } else if ($k->d_posisi5 == 4) {
                                                                                                                                                            echo "Barat";
                                                                                                                                                        } ?>)<br> <?php } ?>

                                            <?php if ($k->d_kec6 !== null) { ?> <?php echo Ucwords($k->d_kec6); ?>/<?php echo Ucwords($k->d_desa6); ?>(<?php if ($k->d_posisi6 == 1) {
                                                                                                                                                            echo "Utara";
                                                                                                                                                        } else if ($k->d_posisi6 == 2) {
                                                                                                                                                            echo "Selatan";
                                                                                                                                                        } else if ($k->d_posisi6 == 3) {
                                                                                                                                                            echo "Timur";
                                                                                                                                                        } else if ($k->d_posisi6 == 4) {
                                                                                                                                                            echo "Barat";
                                                                                                                                                        } ?>)<br> <?php } ?>

                                            <?php if ($k->d_kec7 !== null) { ?> <?php echo Ucwords($k->d_kec7); ?>/<?php echo Ucwords($k->d_desa7); ?>(<?php if ($k->d_posisi7 == 1) {
                                                                                                                                                            echo "Utara";
                                                                                                                                                        } else if ($k->d_posisi7 == 2) {
                                                                                                                                                            echo "Selatan";
                                                                                                                                                        } else if ($k->d_posisi7 == 3) {
                                                                                                                                                            echo "Timur";
                                                                                                                                                        } else if ($k->d_posisi7 == 4) {
                                                                                                                                                            echo "Barat";
                                                                                                                                                        } ?>)<br> <?php } ?>
                                        </td>
                                        <td><?php echo number_format(($k->d_pgaris2 + $k->d_pgaris3 + $k->d_pgaris4 + $k->d_pgaris5 + $k->d_pgaris6 + $k->d_pgaris7),2,',','.'); ?></td>
                                        <td><?php if ($k->d_peta == "") { ?> <a href="javascript:;" onclick="tambahPeta('<?php echo $k->d_id; ?>','<?php echo $k->d_tentang; ?>')" style="font-size: 10pt !important;" class="btn btn-info" title="klik untuk tambah peta"><i class="fas fa-plus-square">Tambah Peta</i></a> <?php } else { ?> <?php echo $k->d_peta;
                                                                                                                                                                                                                                                                                                                                            } ?></td>
                                        <td><?php if ($k->d_status == 1) {
                                                echo "Tampil";
                                            } else {
                                                echo "Tidak Tampil";
                                            } ?> <sup><a href="javascript:;" onclick="fillData('<?php echo $k->d_id; ?>','<?php echo $k->d_tentang; ?>','<?php echo $k->d_status; ?>')" style="font-size: 10pt !important; padding:4px !important" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a></sup> </td>
                                        <td>
                                            <a href="<?php echo base_url() . 'simpan/pk_hapus/' . $k->d_id; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" class="btn btn-danger" style="font-size: 10pt !important; padding:4px !important">
                                                <i class="fa fa-trash" title="Hapus"></i> </a>
                                           
                                        </td>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="desa" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA PERATURAN BUPATI PENETAPAN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url('simpan/pk') ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nomor">NOMOR PERBUP</label>
                                    <input type="text" class="form-control" id="nomor" name="nomor" placeholder="contoh : 3 tahun 2021" required>
                                    <input type="hidden" class="form-control" id="id" name="id">
                                    <input type="hidden" class="form-control" id="jenis" name="jenis" value="1">
                                </div>
                                <div class="form-group">
                                    <label for="tentang">TENTANG PERBUP</label>
                                    <input type="text" class="form-control" id="tentang" name="tentang" placeholder="Input tentang perbup ..." required>
                                </div>

                                <div class="form-group">
                                    <label for="kec1">Kecamatan 1 <b>(ACUAN)</b> </label>
                                    <select class="form-control" name="kec1" id="kec1" onchange="pilihsatu()" required>
                                        <option selected disabled value="">--Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $a) { ?>
                                            <option> <?php echo $a->mk_kec; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="desa1">Desa 1 <b>(ACUAN)</b></label>
                                    <select class="form-control" name="desa1" id="desa1" disabled required>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="kec2">Kecamatan 2</label>
                                    <select class="form-control" name="kec2" id="kec2" onchange="pilihdua()" required>
                                        <option selected disabled value="">--Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $a) { ?>
                                            <option> <?php echo $a->mk_kec; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="desa2">Desa 2</label>
                                    <select class="form-control" name="desa2" id="desa2" disabled required>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="posisi2">Posisi 2 (Posisi dari garis batas)</label>
                                    <select class="form-control" name="posisi2" id="posisi2" disabled required>
                                        <option selected disabled value="">-- Pilih Posisi --</option>
                                        <option value="1">Utara</option>
                                        <option value="2">Selatan</option>
                                        <option value="3">Timur</option>
                                        <option value="4">Barat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="luas">Panjang Garis 2 (km)</label>
                                    <input type="text" class="form-control" data-type="currency" id="p2" name="p2" placeholder="Input panjang tanpa satuan.." required>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="check1" name="cek1" onclick="satu()"> Tambah Desa (3)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="ceka1">
                                    <label for="kec3">Kecamatan 3</label>
                                    <select class="form-control" name="kec3" id="kec3" onchange="pilihtiga()">
                                        <option selected disabled value="">--Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $a) { ?>
                                            <option> <?php echo $a->mk_kec; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" id="ceka2">
                                    <label for="desa3">Desa 3</label>
                                    <select class="form-control" name="desa3" id="desa3" disabled>

                                    </select>
                                </div>
                                <div class="form-group" id="ceka3">
                                    <label for="posisi3">Posisi 3 (Posisi dari garis batas)</label>
                                    <select class="form-control" name="posisi3" id="posisi3" disabled>
                                        <option selected disabled value="">-- Pilih Posisi --</option>
                                        <option value="1">Utara</option>
                                        <option value="2">Selatan</option>
                                        <option value="3">Timur</option>
                                        <option value="4">Barat</option>
                                    </select>
                                </div>
                                <div class="form-group" id="ceka5">
                                    <label for="luas">Panjang Garis 3 (km)</label>
                                    <input type="text" class="form-control" data-type="currency" id="p3" name="p3" placeholder="Input panjang tanpa satuan..">
                                </div>

                                <div class="form-group" id="ceka4">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="check2" onclick="dua()"> Tambah Desa (4)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="cekb1">
                                    <label for="kec4">Kecamatan 4</label>
                                    <select class="form-control" name="kec4" id="kec4" onchange="pilihempat()">
                                        <option selected disabled value="">--Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $a) { ?>
                                            <option> <?php echo $a->mk_kec; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" id="cekb2">
                                    <label for="desa4">Desa 4</label>
                                    <select class="form-control" name="desa4" id="desa4" disabled>

                                    </select>
                                </div>
                                <div class="form-group" id="cekb3">
                                    <label for="posisi4">Posisi 4</label>
                                    <select class="form-control" name="posisi4" id="posisi4" disabled>
                                        <option selected disabled value="">-- Pilih Posisi --</option>
                                        <option value="1">Utara</option>
                                        <option value="2">Selatan</option>
                                        <option value="3">Timur</option>
                                        <option value="4">Barat</option>
                                    </select>
                                </div>
                                <div class="form-group" id="cekb5">
                                    <label for="luas">Panjang Garis 4 (km)</label>
                                    <input type="text" class="form-control" data-type="currency" id="p4" name="p4" placeholder="Input panjang tanpa satuan..">
                                </div>

                                <div class="form-group" id="cekb4">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="check3" onclick="tiga()"> Tambah Desa (5)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="cekc1">
                                    <label for="kec5">Kecamatan 5</label>
                                    <select class="form-control" name="kec5" id="kec5" onchange="pilihlima()">
                                        <option selected disabled value="">--Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $a) { ?>
                                            <option> <?php echo $a->mk_kec; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" id="cekc2">
                                    <label for="desa5">Desa 5</label>
                                    <select class="form-control" name="desa5" id="desa5" disabled>

                                    </select>
                                </div>
                                <div class="form-group" id="cekc3">
                                    <label for="posisi5">Posisi 5</label>
                                    <select class="form-control" name="posisi5" id="posisi5" disabled>
                                        <option selected disabled value="">-- Pilih Posisi --</option>
                                        <option value="1">Utara</option>
                                        <option value="2">Selatan</option>
                                        <option value="3">Timur</option>
                                        <option value="4">Barat</option>
                                    </select>
                                </div>
                                <div class="form-group" id="cekc5">
                                    <label for="luas">Panjang Garis 5 (km)</label>
                                    <input type="text" class="form-control" data-type="currency" id="p5" name="p5" placeholder="Input panjang tanpa satuan..">
                                </div>

                                <div class="form-group" id="cekc4">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="check4" onclick="empat()"> Tambah Desa (6)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="cekd1">
                                    <label for="kec6">Kecamatan 6</label>
                                    <select class="form-control" name="kec6" id="kec6" onchange="pilihenam()">
                                        <option selected disabled value="">--Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $a) { ?>
                                            <option> <?php echo $a->mk_kec; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" id="cekd2">
                                    <label for="desa6">Desa 6</label>
                                    <select class="form-control" name="desa6" id="desa6" disabled>

                                    </select>
                                </div>
                                <div class="form-group" id="cekd3">
                                    <label for="posisi6">Posisi 6</label>
                                    <select class="form-control" name="posisi6" id="posisi6" disabled>
                                        <option selected disabled value="">-- Pilih Posisi --</option>
                                        <option value="1">Utara</option>
                                        <option value="2">Selatan</option>
                                        <option value="3">Timur</option>
                                        <option value="4">Barat</option>
                                    </select>
                                </div>
                                <div class="form-group" id="cekd5">
                                    <label for="luas">Panjang Garis 6 (km)</label>
                                    <input type="text" class="form-control" data-type="currency" id="p6" name="p6" placeholder="Input panjang tanpa satuan..">
                                </div>

                                <div class="form-group" id="cekd4">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="check5" onclick="lima()"> Tambah Desa (7)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="ceke1">
                                    <label for="kec7">Kecamatan 7</label>
                                    <select class="form-control" name="kec7" id="kec7" onchange="pilihtujuh()">
                                        <option selected disabled value="">--Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $a) { ?>
                                            <option> <?php echo $a->mk_kec; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" id="ceke2">
                                    <label for="desa7">Desa 7</label>
                                    <select class="form-control" name="desa7" id="desa7" disabled>

                                    </select>
                                </div>
                                <div class="form-group" id="ceke3">
                                    <label for="posisi7">Posisi 7</label>
                                    <select class="form-control" name="posisi7" id="posisi7" disabled>
                                        <option selected disabled value="">-- Pilih Posisi --</option>
                                        <option value="1">Utara</option>
                                        <option value="2">Selatan</option>
                                        <option value="3">Timur</option>
                                        <option value="4">Barat</option>
                                    </select>
                                </div>
                                <div class="form-group" id="ceke4">
                                    <label for="luas">Panjang Garis 7 (km)</label>
                                    <input type="text" class="form-control" data-type="currency" id="p7" name="p7" placeholder="Input panjang tanpa satuan..">
                                </div>

                                <div class="form-group">
                                    <label>Status Data</label>
                                    <select class="form-control" name="status" id="status" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="1">Tampilkan</option>
                                        <option value="2">Jangan Tampilkan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="filegambar">Dokumen Perbup (pdf)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="filegambar" id="filegambar" required>
                                            <label class="custom-file-label" for="filegambar">Pilih Dokumen</label>
                                        </div>
                                    </div>
                                </div>
                                <p>*Disarankan untuk mengupload dokumen dengan ukuran dibawah 300kb</p>
                            </div>
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

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
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
                <form method="post" action="<?php echo base_url() . 'edit/pk' ?>" enctype="multipart/form-data">
                    <p id="edit_nomor"></p>
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
<div class="modal fade" id="tambahpeta" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
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
                <form method="post" action="<?php echo base_url() . 'simpan/pk_peta' ?>" enctype="multipart/form-data">
                    <h5 id="tambah_tentang"></h5>
                    <div class="form-group">
                    <input type="hidden" class="form-control" id="tambah_id" name="tambah_id">
                        <label for="filegambar">Gambar Peta (jpg|jpeg|png)</label>
                        <div class="input-group">
                            <div class="custom-file">                            
                                <input type="file" class="custom-file-input" name="filegambar" id="filegambar" required>
                                <label class="custom-file-label" for="filegambar">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>
                    <p>*Disarankan untuk mengupload gambar dengan ukuran dibawah 300kb</p>
                    <button type="submit" id="save1" class="btn btn-primary" style="float: right;">Simpan Peta</button>
                </form>
            </div>
        </div>
    </div>
</div>