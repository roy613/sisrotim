<body id="page-top">

<script>
        function pilkec() {
            $('#kec').modal('show');
        }

        function pildes() {
            $('#desa').modal('show');
        }

        function pilihan() {
            var cam = document.getElementById("kecamatan1").value;
            // var id=$(this).val();
            $.ajax({
                url: "<?php echo base_url('welcome/periksa') ?>",
                method: "POST",
                data: {
                    cam: cam
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    // var a = "<option selected disabled">-- Silahkan Pilih Desa --</option>";
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option>' + data[i].md_desa + '</option>';
                    }
                    // document.getElementById("desa1").innerHTML = a.concat(html);
                    document.getElementById("desa1").innerHTML = html;
                    document.getElementById("desa1").disabled = false;


                }
            });
        }
    </script>

    
    <style>
        table {
            width: 100%;
            font-size: small;
        }

        th {
            background-color: skyblue;
            padding: 7px !important;
            text-align: center;
            vertical-align: middle !important;
        }

        td {
            padding: 4px !important;
            text-align: center;
        }

        li {
            font-size: small;
            color: black;
            margin-left: 8px;
            margin-right: 8px;

        }

        li:hover {
            background-color: skyblue !important;
        }

        #kesepakatan {
            background-color: #FAFAD2;
        }

        #penetapan {
            background-color: #8FBC8F;
        }

        #sengketa {
            background-color: #FA8072;
        }
    </style>


    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a href="<?php echo base_url(); ?>" class="navbar-brand js-scroll" href="#page-top">
                <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt="" height="30px" class="mr-2">SIMPRONATASA</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="<?php echo base_url() . 'welcome/protas'; ?>">Progres Batas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="javascript:;" onclick="pilkec()">Kecamatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="javascript:;" onclick="pildes()">Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <div class="modal fade" id="kec" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
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
                    <form method="post" action="<?php echo base_url() . 'welcome/kecamatan' ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kecamatan">Silahkan Pilih Nama Kecamatan</label>
                            <select class="custom-select" id="kecamatan" name="kecamatan" placeholder="" required>
                                <option value="" selected disabled>--Pilih Kecamatan--</option>
                                <?php foreach ($aa as $row) { ?>
                                    <option><?php echo $row->mk_kec; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <button type="submit" id="save" class="btn btn-primary" style="float: right;">Pilih</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="desa" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
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
                    <form method="post" action="<?php echo base_url() . 'welcome/desa' ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kecamatan">Silahkan Pilih Nama Kecamatan</label>
                            <select class="custom-select" id="kecamatan1" name="kecamatan" placeholder="" onchange="pilihan()" required>
                                <option selected disabled value="">--Pilih Kecamatan--</option>
                                <?php foreach ($aa as $row) { ?>
                                    <option><?php echo $row->mk_kec; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desa1">Silahkan Pilih Nama Desa</label>
                            <select class="custom-select" id="desa1" name="desa1" placeholder="" required disabled>
                            </select>
                        </div>
                        <button type="submit" id="save" class="btn btn-primary" style="float: right;">Pilih</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Nav End /-->




    <div class="intro intro-single route bg-image">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Progress Batas</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url() . 'welcome/protas'; ?>">Progres Batas</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#" style="color:grey">Kecamatan <?php echo ucwords($ab); ?></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->
    <!--/ Section Blog-Single Star /-->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <?php foreach ($aq as $row) { ?>
                                                <img src="<?php echo base_url(); ?>gambar/peta_kecamatan/<?php echo $row->mk_peta; ?>" class="img-fluid rounded b-shadow-a" alt="Peta Kutim">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">

                                            <?php foreach ($aq as $row) { ?>
                                                <p><span class="title-s">Kecamatan : </span><?php echo Ucwords($row->mk_kec) ?></p>
                                                <?php if ($row->mk_luas != 0) { ?> <p><span class="title-s">Luas: </span> <span><?php echo number_format (($row->mk_luas),3,',','.'); ?> km<sup>2</sup></span></p><?php } ?>
                                                <p><span class="title-s">Ibukota: </span> <span><?php echo $row->mk_ibukota ?></span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="skill-mf">
                                    <span>Total Segmen</span> <span class="pull-right"><?php echo $row->mk_segmen ?> Segmen</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Penetapan</span> <span class="pull-right"><?php echo number_format($p); ?> Segmen (<?php echo number_format($p / $row->mk_segmen * 100); ?> %)</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo number_format($p / $row->mk_segmen * 100); ?>%" aria-valuenow="<?php echo number_format($p / $row->mk_segmen * 100); ?>" aria-valuemin="0" aria-valuemax="100" id="penetapan"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="skill-mf">
                                    <span>Kesepakatan</span> <span class="pull-right"><?php echo number_format($k); ?> Segmen (<?php echo number_format($k / $row->mk_segmen * 100); ?> %)</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo number_format($k / $row->mk_segmen * 100); ?>%" aria-valuenow="<?php echo number_format($k / $row->mk_segmen * 100); ?>" aria-valuemin="0" aria-valuemax="100" id="kesepakatan"></div>
                                    </div>
                                    <span>Sengketa</span> <span class="pull-right"><?php echo number_format($s); ?> Segmen (<?php echo number_format($s / $row->mk_segmen * 100); ?> %)</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width:<?php echo number_format($s / $row->mk_segmen * 100); ?>%" aria-valuenow="<?php echo number_format($s / $row->mk_segmen * 100); ?>" aria-valuemin="0" aria-valuemax="100" id="sengketa"></div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            BATAS-BATAS
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        Sebelah Utara
                                    </p>
                                    <div style="overflow-x:auto;">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%" rowspan="2">No</th>
                                                    <th rowspan="2">Desa</th>
                                                    <th colspan="2">Berbatasan Dengan</th>
                                                    <th style="width:14%" rowspan="2">Panjang Garis (km)</th>
                                                    <th style="width:15%" rowspan="2">Progres</th>
                                                    <th style="width:10%" rowspan="2">Action</th>
                                                </tr>
                                                <tr>
                                                    <th style="width:20%">Desa</th>
                                                    <th style="width:20%">Kecamatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $cam = $ab;
                                                $no = 1;
                                                foreach ($qq as $row) { ?>
                                                    <tr>
                                                    <?php if (($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) || ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) || ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) || ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) || ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) || ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) || ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) || ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) || ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) || ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) || ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) || ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2))  { ?>
                                                            <td> <?php echo $no++; ?></td>

                                                            <td><?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) {echo $row->d_desa1 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) {echo $row->d_desa1 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) {echo $row->d_desa2 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) {echo $row->d_desa3 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) {echo $row->d_desa4 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) {echo $row->d_desa5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) {echo $row->d_desa6 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) {echo $row->d_desa7 . "<br>";} ?> 
                                                            </td>
                                                            <td>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) {echo $row->d_desa2 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) {echo $row->d_desa3 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) {echo $row->d_desa4 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) {echo $row->d_desa5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) {echo $row->d_desa6 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) {echo $row->d_desa7 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) {echo $row->d_desa1 . "<br>";} ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) {echo $row->d_kec2 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) {echo $row->d_kec3 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) {echo $row->d_kec4 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) {echo $row->d_kec5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) {echo $row->d_kec6 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) {echo $row->d_kec7 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) {echo $row->d_kec1 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) {echo $row->d_kec1 . "<br>";} ?>
                                                            </td>

                                                            <td> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) {echo number_format (($row->d_pgaris2),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) {echo number_format (($row->d_pgaris3),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) {echo number_format (($row->d_pgaris4),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) {echo number_format (($row->d_pgaris5),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) {echo number_format (($row->d_pgaris6),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) {echo number_format (($row->d_pgaris7),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) {echo number_format (($row->d_pgaris2),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) {echo number_format (($row->d_pgaris3),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) {echo number_format (($row->d_pgaris4),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) {echo number_format (($row->d_pgaris5),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) {echo number_format (($row->d_pgaris6),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) {echo number_format (($row->d_pgaris7),2,',','.') . " km<br>"; } ?>
                                                            </td>
                                                            <td><?php if ($row->d_jenis == 1) {
                                                                    echo "Penetapan";
                                                                } else if ($row->d_jenis == 2) {
                                                                    echo "Kesepakatan";
                                                                } else {
                                                                    echo "Sengketa";
                                                                }
                                                                ?></td>
                                                            <td>
                                                                <div class="btn-group" role="group" style="float: right; margin-right:15px">
                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:lightskyblue; color:black"> <i class="fa fa-download"> Unduh</i>
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <?php if ($row->d_jenis == 1) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/perbup/' . $row->d_perbup; ?>" style="color:black">Peraturan Bupati</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_penetapan/' . $row->d_peta; ?>" style="color:black">Gambar Peta</a></li>
                                                                        <?php } else if ($row->d_jenis == 2) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/ba_k/' . $row->d_perbup; ?>" style="color:black">BA Kesepakatan</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_kesepakatan/' . $row->d_peta; ?>" style="color:black">Peta Kesepakatan</a></li>
                                                                        <?php } else if ($row->d_jenis == 3) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/ba_s/' . $row->d_perbup; ?>" style="color:black">BA Sengketa</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_sengketa/' . $row->d_peta; ?>" style="color:black">Peta Areal Sengketa</a></li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        <?php }  ?>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="lead">
                                        Sebelah Selatan
                                    </p>
                                    <div style="overflow-x:auto;">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%" rowspan="2">No</th>
                                                    <th rowspan="2">Desa</th>
                                                    <th colspan="2">Berbatasan Dengan</th>
                                                    <th style="width:14%" rowspan="2">Panjang Garis (km)</th>
                                                    <th style="width:15%" rowspan="2">Progres</th>
                                                    <th style="width:10%" rowspan="2">Action</th>
                                                </tr>
                                                <tr>
                                                    <th style="width:20%">Desa</th>
                                                    <th style="width:20%">Kecamatan</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                <?php $cam = $ab;
                                                $no = 1;
                                                foreach ($qq as $row) { ?>
                                                    <tr>
                                                    <?php if (($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) || ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) || ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) || ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) || ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) || ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) || ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) || ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) || ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) || ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) || ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) || ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1))  { ?>
                                                            <td> <?php echo $no++; ?></td>

                                                            <td><?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) {echo $row->d_desa1 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) {echo $row->d_desa1 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) {echo $row->d_desa2 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) {echo $row->d_desa3 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) {echo $row->d_desa4 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) {echo $row->d_desa5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) {echo $row->d_desa6 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) {echo $row->d_desa7 . "<br>";} ?> 
                                                            </td>
                                                            <td>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) {echo $row->d_desa2 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) {echo $row->d_desa3 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) {echo $row->d_desa4 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) {echo $row->d_desa5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) {echo $row->d_desa6 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) {echo $row->d_desa7 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) {echo $row->d_desa1 . "<br>";} ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) {echo $row->d_kec2 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) {echo $row->d_kec3 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) {echo $row->d_kec4 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) {echo $row->d_kec5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) {echo $row->d_kec6 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) {echo $row->d_kec7 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) {echo $row->d_kec1 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) {echo $row->d_kec1 . "<br>";} ?>
                                                            </td>

                                                            <td> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 2) {echo number_format (($row->d_pgaris2),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 2) {echo number_format (($row->d_pgaris3),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 2) {echo number_format (($row->d_pgaris4),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 2) {echo number_format (($row->d_pgaris5),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 2) {echo number_format (($row->d_pgaris6),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 2) {echo number_format (($row->d_pgaris7),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 1) {echo number_format (($row->d_pgaris2),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 1) {echo number_format (($row->d_pgaris3),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 1) {echo number_format (($row->d_pgaris4),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 1) {echo number_format (($row->d_pgaris5),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 1) {echo number_format (($row->d_pgaris6),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 1) {echo number_format (($row->d_pgaris7),2,',','.') . " km<br>"; } ?>
                                                            </td>
                                                            <td><?php if ($row->d_jenis == 1) {
                                                                    echo "Penetapan";
                                                                } else if ($row->d_jenis == 2) {
                                                                    echo "Kesepakatan";
                                                                } else {
                                                                    echo "Sengketa";
                                                                }
                                                                ?></td>
                                                            <td>
                                                                <div class="btn-group" role="group" style="float: right; margin-right:15px">
                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:lightskyblue; color:black"> <i class="fa fa-download"> Unduh</i>
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <?php if ($row->d_jenis == 1) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/perbup/' . $row->d_perbup; ?>" style="color:black">Peraturan Bupati</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_penetapan/' . $row->d_peta; ?>" style="color:black">Gambar Peta</a></li>
                                                                        <?php } else if ($row->d_jenis == 2) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/ba_k/' . $row->d_perbup; ?>" style="color:black">BA Kesepakatan</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_kesepakatan/' . $row->d_peta; ?>" style="color:black">Peta Kesepakatan</a></li>
                                                                        <?php } else if ($row->d_jenis == 3) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/ba_s/' . $row->d_perbup; ?>" style="color:black">BA Sengketa</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_sengketa/' . $row->d_peta; ?>" style="color:black">Peta Areal Sengketa</a></li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        <?php }  ?>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="lead">
                                        Sebelah Timur
                                    </p>
                                    <div style="overflow-x:auto;">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%" rowspan="2">No</th>
                                                    <th rowspan="2">Desa</th>
                                                    <th colspan="2">Berbatasan Dengan</th>
                                                    <th style="width:14%" rowspan="2">Panjang Garis (km)</th>
                                                    <th style="width:15%" rowspan="2">Progres</th>
                                                    <th style="width:10%" rowspan="2">Action</th>
                                                </tr>
                                                <tr>
                                                    <th style="width:20%">Desa</th>
                                                    <th style="width:20%">Kecamatan</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                <?php $cam = $ab;
                                                $no = 1;
                                                foreach ($qq as $row) { ?>
                                                    <tr>
                                                    <?php if (($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) || ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) || ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) || ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) || ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) || ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) || ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) || ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) || ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) || ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) || ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) || ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4))  { ?>
                                                            <td> <?php echo $no++; ?></td>

                                                            <td><?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) {echo $row->d_desa1 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) {echo $row->d_desa1 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) {echo $row->d_desa2 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) {echo $row->d_desa3 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) {echo $row->d_desa4 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) {echo $row->d_desa5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) {echo $row->d_desa6 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) {echo $row->d_desa7 . "<br>";} ?> 
                                                            </td>
                                                            <td>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) {echo $row->d_desa2 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) {echo $row->d_desa3 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) {echo $row->d_desa4 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) {echo $row->d_desa5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) {echo $row->d_desa6 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) {echo $row->d_desa7 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) {echo $row->d_desa1 . "<br>";} ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) {echo $row->d_kec2 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) {echo $row->d_kec3 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) {echo $row->d_kec4 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) {echo $row->d_kec5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) {echo $row->d_kec6 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) {echo $row->d_kec7 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) {echo $row->d_kec1 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) {echo $row->d_kec1 . "<br>";} ?>
                                                            </td>

                                                            <td> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) {echo number_format (($row->d_pgaris2),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) {echo number_format (($row->d_pgaris3),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) {echo number_format (($row->d_pgaris4),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) {echo number_format (($row->d_pgaris5),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) {echo number_format (($row->d_pgaris6),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) {echo number_format (($row->d_pgaris7),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) {echo number_format (($row->d_pgaris2),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) {echo number_format (($row->d_pgaris3),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) {echo number_format (($row->d_pgaris4),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) {echo number_format (($row->d_pgaris5),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) {echo number_format (($row->d_pgaris6),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) {echo number_format (($row->d_pgaris7),2,',','.') . " km<br>"; } ?>
                                                            </td>
                                                            <td><?php if ($row->d_jenis == 1) {
                                                                    echo "Penetapan";
                                                                } else if ($row->d_jenis == 2) {
                                                                    echo "Kesepakatan";
                                                                } else {
                                                                    echo "Sengketa";
                                                                }
                                                                ?></td>
                                                            <td>
                                                                <div class="btn-group" role="group" style="float: right; margin-right:15px">
                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:lightskyblue; color:black"> <i class="fa fa-download"> Unduh</i>
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <?php if ($row->d_jenis == 1) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/perbup/' . $row->d_perbup; ?>" style="color:black">Peraturan Bupati</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_penetapan/' . $row->d_peta; ?>" style="color:black">Gambar Peta</a></li>
                                                                        <?php } else if ($row->d_jenis == 2) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/ba_k/' . $row->d_perbup; ?>" style="color:black">BA Kesepakatan</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_kesepakatan/' . $row->d_peta; ?>" style="color:black">Peta Kesepakatan</a></li>
                                                                        <?php } else if ($row->d_jenis == 3) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/ba_s/' . $row->d_perbup; ?>" style="color:black">BA Sengketa</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_sengketa/' . $row->d_peta; ?>" style="color:black">Peta Areal Sengketa</a></li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        <?php }  ?>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="lead">
                                        Sebelah Barat
                                    </p>
                                    <div style="overflow-x:auto;">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%" rowspan="2">No</th>
                                                    <th rowspan="2">Desa</th>
                                                    <th colspan="2">Berbatasan Dengan</th>
                                                    <th style="width:14%" rowspan="2">Panjang Garis (km)</th>
                                                    <th style="width:15%" rowspan="2">Progres</th>
                                                    <th style="width:10%" rowspan="2">Action</th>
                                                </tr>
                                                <tr>
                                                    <th style="width:20%">Desa</th>
                                                    <th style="width:20%">Kecamatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $cam = $ab;
                                                $no = 1;
                                                foreach ($qq as $row) { ?>
                                                    <tr>
                                                        <?php if (($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) || ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) || ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) || ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) || ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) || ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) || ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) || ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) || ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) || ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) || ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) || ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3))  { ?>
                                                        
                                                       
                                                            <td> <?php echo $no++; ?></td>

                                                            <td><?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) {echo $row->d_desa1 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) {echo $row->d_desa1 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) {echo $row->d_desa2 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) {echo $row->d_desa3 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) {echo $row->d_desa4 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) {echo $row->d_desa5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) {echo $row->d_desa6 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) {echo $row->d_desa7 . "<br>";} ?> 
                                                            </td>
                                                            <td>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) {echo $row->d_desa2 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) {echo $row->d_desa3 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) {echo $row->d_desa4 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) {echo $row->d_desa5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) {echo $row->d_desa6 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) {echo $row->d_desa7 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) {echo $row->d_desa1 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) {echo $row->d_desa1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) {echo $row->d_desa1 . "<br>";} ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) {echo $row->d_kec2 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) {echo $row->d_kec3 . "<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) {echo $row->d_kec4 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) {echo $row->d_kec5 . "<br>";} ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) {echo $row->d_kec6 . "<br>";} ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) {echo $row->d_kec7 . "<br>";} ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) {echo $row->d_kec1 . "<br>";} ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) {echo $row->d_kec1 . "<br>";} ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) {echo $row->d_kec1 . "<br>";} ?>
                                                            </td>

                                                            <td> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 4) {echo number_format (($row->d_pgaris2),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 4) {echo number_format (($row->d_pgaris3),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 4) {echo number_format (($row->d_pgaris4),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 4) {echo number_format (($row->d_pgaris5),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 4) {echo number_format (($row->d_pgaris6),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec1 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 4) {echo number_format (($row->d_pgaris7),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec2 == $ab && $row->d_ket2 == 1 && $row->d_posisi2 == 3) {echo number_format (($row->d_pgaris2),2,',','.') . " km<br>"; } ?>
                                                                <?php if ($row->d_kec3 == $ab && $row->d_ket3 == 1 && $row->d_posisi3 == 3) {echo number_format (($row->d_pgaris3),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec4 == $ab && $row->d_ket4 == 1 && $row->d_posisi4 == 3) {echo number_format (($row->d_pgaris4),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec5 == $ab && $row->d_ket5 == 1 && $row->d_posisi5 == 3) {echo number_format (($row->d_pgaris5),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec6 == $ab && $row->d_ket6 == 1 && $row->d_posisi6 == 3) {echo number_format (($row->d_pgaris6),2,',','.') . " km<br>"; } ?> 
                                                                <?php if ($row->d_kec7 == $ab && $row->d_ket7 == 1 && $row->d_posisi7 == 3) {echo number_format (($row->d_pgaris7),2,',','.') . " km<br>"; } ?>
                                                            </td>
                                                            <td><?php if ($row->d_jenis == 1) {
                                                                    echo "Penetapan";
                                                                } else if ($row->d_jenis == 2) {
                                                                    echo "Kesepakatan";
                                                                } else {
                                                                    echo "Sengketa";
                                                                }
                                                                ?></td>
                                                            <td>
                                                                <div class="btn-group" role="group" style="float: right; margin-right:15px">
                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:lightskyblue; color:black"> <i class="fa fa-download"> Unduh</i>
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <?php if ($row->d_jenis == 1) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/perbup/' . $row->d_perbup; ?>" style="color:black">Peraturan Bupati</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_penetapan/' . $row->d_peta; ?>" style="color:black">Gambar Peta</a></li>
                                                                        <?php } else if ($row->d_jenis == 2) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/ba_k/' . $row->d_perbup; ?>" style="color:black">BA Kesepakatan</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_kesepakatan/' . $row->d_peta; ?>" style="color:black">Peta Kesepakatan</a></li>
                                                                        <?php } else if ($row->d_jenis == 3) { ?>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'dokumen/ba_s/' . $row->d_perbup; ?>" style="color:black">BA Sengketa</a></li>
                                                                            <li><a target="_blank" href="<?php echo base_url() . 'gambar/peta_sengketa/' . $row->d_peta; ?>" style="color:black">Peta Areal Sengketa</a></li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        <?php }  ?>
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
            </div>
        </div>
    </section>