<body id="page-top">
    <script>
        function pilkec() {
            $('#kec').modal('show');
        }

        function pildes() {
            $('#desa').modal('show');
        }

        function penetapan() {
            $('#datapenetapan').modal('show');
        }

        function kesepakatan() {
            $('#datakesepakatan').modal('show');
        }

        function sengketa() {
            $('#datasengketa').modal('show');
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
                    // var a = "<option selected disabled>-- Silahkan Pilih Desa --</option>";
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

        #sengketa:hover {
            background-color: grey;
        }

        #kesepakatan:hover {
            background-color: grey;
        }

        #penetapan:hover {
            background-color: grey;
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

    <!-- modal desa -->
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
    <!-- modal desa end -->

    <!--/ Nav End /-->

    <div class="intro intro-single route bg-image">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Progres Batas</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#" style="color:grey">Progres Batas</a>
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
                                            <img src="<?php echo base_url() ?>assets/front1/img/b1.jpeg" class="img-fluid rounded b-shadow-a" alt="Peta Kutim">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info" style="margin-top: -10px;">
                                            <p><span class="title-s">Kabupaten Kutai Timur</span><br>
                                                <span class="title-s">Luas: </span>35.748 km<sup>2</sup><br>
                                                <span class="title-s">Ibukota: </span> Sangatta Utara<br>
                                                <span class="title-s">Jumlah Kecamatan: </span> 18 Kecamatan<br>
                                                <span class="title-s">Jumlah Kelurahan: </span> 139 Desa<br>
                                                <span class="title-s">Jumlah Desa: </span> 2 Kelurahan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Progress Penataan Batas Desa di Kutai Timur</p>
                                    <span>Total Segmen</span> <span class="pull-right">10 Segmen</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <a href="javascript:;" onclick="penetapan()" title="Lihat Data Penetapan">
                                        <span>Penetapan</span> <span class="pull-right">3 Segmen (30 %)</span>
                                        <div class="progress">
                                            <div class="progress-bar" id="penetapan" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </a>
                                    <a href="javascript:;" onclick="kesepakatan()" title="Lihat Data Kesepakatan">
                                        <span>Kesepakatan</span> <span class="pull-right">7 Segmen (70 %)</span>
                                        <div class="progress">
                                            <div class="progress-bar" id="kesepakatan" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </a>
                                    <a href="javascript:;" onclick="sengketa()" title="Lihat Data Sengketa">
                                        <span>Sengketa</span> <span class="pull-right">3 Segmen (30 %)</span>
                                        <div class="progress">
                                            <div class="progress-bar" id="sengketa" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            PROGRESS PENATAAN BATAS DESA
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu mejikuhibinu
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- datapenetapan -->
    <div class="modal fade" id="datapenetapan" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt="" height="30px" class="mr-2">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">SIMPRONATASA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        <u><b>DAFTAR PENETAPAN BATAS DESA</b></u>
                    </p>
                    <div style="overflow-x:auto;">
                        <table id="example2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width:5%" rowspan="2">No</th>
                                    <th rowspan="2">Desa</th>
                                    <th rowspan="2">Kecamatan</th>
                                    <th colspan="2">Berbatasan Dengan</th>
                                </tr>
                                <tr>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pbp as $row) { ?>
                                    <tr>
                                        <td> <?php echo $no++; ?></td>
                                        <td> <?php echo $row->d_desa1; ?> </td>
                                        <td> <?php echo $row->d_kec1; ?> </td>
                                        <td>
                                            <?php if ($row->d_desa2 !== null) {
                                                echo $row->d_desa2 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa3 !== null) {
                                                echo $row->d_desa3 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa4 !== null) {
                                                echo $row->d_desa4 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa5 !== null) {
                                                echo $row->d_desa5 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa6 !== null) {
                                                echo $row->d_desa6 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa7 !== null) {
                                                echo $row->d_desa7 . "<br>";
                                            } ?>
                                        </td>
                                        <td>
                                            <?php if ($row->d_kec2 !== null) {
                                                echo $row->d_kec2 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec3 !== null) {
                                                echo $row->d_kec3 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec4 !== null) {
                                                echo $row->d_kec4 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec5 !== null) {
                                                echo $row->d_kec5 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec6 !== null) {
                                                echo $row->d_kec6 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec7 !== null) {
                                                echo $row->d_kec7 . "<br>";
                                            } ?>
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

    <!-- datapenetapan end -->
    <!-- datakesepakatan -->
    <div class="modal fade" id="datakesepakatan" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt="" height="30px" class="mr-2">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">SIMPRONATASA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        <u><b>DAFTAR KESEPAKATAN BATAS DESA</b></u>
                    </p>
                    <div style="overflow-x:auto;">
                        <table id="tabel2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width:5%" rowspan="2">No</th>
                                    <th rowspan="2">Desa</th>
                                    <th rowspan="2">Kecamatan</th>
                                    <th colspan="2">Berbatasan Dengan</th>
                                </tr>
                                <tr>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($ksp as $row) { ?>
                                    <tr>
                                        <td> <?php echo $no++; ?></td>
                                        <td> <?php echo $row->d_desa1; ?> </td>
                                        <td> <?php echo $row->d_kec1; ?> </td>
                                        <td>
                                            <?php if ($row->d_desa2 !== null) {
                                                echo $row->d_desa2 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa3 !== null) {
                                                echo $row->d_desa3 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa4 !== null) {
                                                echo $row->d_desa4 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa5 !== null) {
                                                echo $row->d_desa5 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa6 !== null) {
                                                echo $row->d_desa6 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa7 !== null) {
                                                echo $row->d_desa7 . "<br>";
                                            } ?>
                                        </td>
                                        <td>
                                            <?php if ($row->d_kec2 !== null) {
                                                echo $row->d_kec2 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec3 !== null) {
                                                echo $row->d_kec3 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec4 !== null) {
                                                echo $row->d_kec4 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec5 !== null) {
                                                echo $row->d_kec5 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec6 !== null) {
                                                echo $row->d_kec6 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec7 !== null) {
                                                echo $row->d_kec7 . "<br>";
                                            } ?>
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
    <!-- datakesepakatan end -->
    <!-- datasengketa -->
    <div class="modal fade" id="datasengketa" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt="" height="30px" class="mr-2">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">SIMPRONATASA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        <u><b>DAFTAR SENGKETA BATAS DESA</b></u>
                    </p>
                    <div style="overflow-x:auto;">
                        <table id="tabel3" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width:5%" rowspan="2">No</th>
                                    <th rowspan="2">Desa</th>
                                    <th rowspan="2">Kecamatan</th>
                                    <th colspan="2">Berbatasan Dengan</th>
                                </tr>
                                <tr>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($skt as $row) { ?>
                                    <tr>
                                        <td> <?php echo $no++; ?></td>
                                        <td> <?php echo $row->d_desa1; ?> </td>
                                        <td> <?php echo $row->d_kec1; ?> </td>
                                        <td>
                                            <?php if ($row->d_desa2 !== null) {
                                                echo $row->d_desa2 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa3 !== null) {
                                                echo $row->d_desa3 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa4 !== null) {
                                                echo $row->d_desa4 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa5 !== null) {
                                                echo $row->d_desa5 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa6 !== null) {
                                                echo $row->d_desa6 . "<br>";
                                            } ?>
                                            <?php if ($row->d_desa7 !== null) {
                                                echo $row->d_desa7 . "<br>";
                                            } ?>
                                        </td>
                                        <td>
                                            <?php if ($row->d_kec2 !== null) {
                                                echo $row->d_kec2 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec3 !== null) {
                                                echo $row->d_kec3 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec4 !== null) {
                                                echo $row->d_kec4 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec5 !== null) {
                                                echo $row->d_kec5 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec6 !== null) {
                                                echo $row->d_kec6 . "<br>";
                                            } ?>
                                            <?php if ($row->d_kec7 !== null) {
                                                echo $row->d_kec7 . "<br>";
                                            } ?>
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
    <!-- datasengketa end -->