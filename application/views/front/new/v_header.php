<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIMPRONATASA| KUTAI TIMUR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/logo.png">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url() ?>assets/f2/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->

    <link href="<?php echo base_url() ?>assets/f2/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/f2/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/f2/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/f2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/f2/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url() ?>assets/f2/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">

    <script>
        function pilkec() {
            $('#kecamatan').modal('show');
        }

        function pildes() {
            $('#desa').modal('show');
        }
        // function pilihan() {
        //     var cam = document.getElementById("kecamatan1").value;

        //     let request = new XMLHttpRequest()
        //     request.open("GET", "<?php echo base_url('welcome/periksa') ?>?kec="+cam);
        //     request.send();
        //     request.onload=()=>{
        //         if(request.status===200){
        //             if((JSON.parse(request.response).status)=="success"){
        //                 document.getElementById("desa").html="<option value="">--Pilih Kecamatan--</option>
        //                     <?php foreach ($aa as $row) { ?>
        //                     <option value="<?php echo $row->mk_id; ?>"><?php echo $row->mk_kec; ?></option>
        //                     <?php } ?>";
        //                 document.getElementById("desa").disabled="false";
        //             }
        //         }
        //     }
        // }
    </script>


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
    <div class="modal fade" id="kecamatan" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
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
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kecamatan">Silahkan Pilih Nama Kecamatan</label>
                            <select class="custom-select" id="kecamatan" name="kecamatan" placeholder="" required>
                                <option value="" selected disabled>--Pilih Kecamatan--</option>
                                <?php foreach ($aa as $row) { ?>
                                    <option value="<?php echo $row->mk_id; ?>"><?php echo $row->mk_kec; ?></option>
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
                    <form method="post" action="" enctype="multipart/form-data">
                        <!-- <div class="form-group">
                            <label for="kecamatan">Silahkan Pilih Nama Kecamatan</label>
                            <select class="custom-select" id="kecamatan1" name="kecamatan" placeholder="" required>
                                <option value="" selected disabled>--Pilih Kecamatan--</option>
                                <?php foreach ($aa as $row) { ?>
                                    <option value="<?php echo $row->mk_id; ?>"><?php echo $row->mk_kec; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desa">Silahkan Pilih Nama Desa</label>
                            <select class="custom-select" id="desa" name="desa" placeholder="" required disabled>
                            </select>
                        </div> -->
                        <!-- <div class="ui selection dropdown" name="kecamatan1" id="kecamatan1">
                            <input type="hidden" id="selected_kecamatan1" name="selected_kecamatan1">
                            <i class="dropdown icon"></i>
                            <div class="default text">--Pilih Kecamatan--</div>
                            <div class="menu">
                                <?php foreach ($aa as $row) { ?>
                                    <option value="<?php echo $row->mk_id; ?>"><?php echo $row->mk_kec; ?></option>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="ui selection dropdown" id="desa">
                            <input type="hidden" id="selected_desa" name="selected_desa">
                            <i class="dropdown icon"></i>
                            <div class="default text" id="default_text">--Pilih Desa--</div>
                            <div class="menu" id="desa_content"></div>
                        </div> -->
                        <div class="form-group">
                        <label for="kecamatan1">Silahkan Pilih Nama Kecamatan</label>
                        <select class="custom-select" id="kecamatan1" name="kecamatan1" placeholder="" required>
                        <option value="" selected disabled>--Pilih Kecamatan--</option>
                        <?php foreach ($aa as $row) { ?>
                                <option <?php echo $kecamatan_selected == $row->mk_id ? 'selected="selected"' : '' ?> 
                                    value="<?php echo $row->mk_id ?>"><?php echo $row->mk_kec ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="desa">Silahkan Pilih Nama Desa</label>
                    <select class="custom-select" id="desa1" name="desa1" placeholder="" required disabled>
                            <option value="">Please Select</option>
                            <?php
                            foreach ($ab as $row) {
                                ?>
                                <!--di sini kita tambahkan class berisi id provinsi-->
                                <option <?php echo $desa_selected == $row->md_kec ? 'selected="selected"' : '' ?> 
                                    class="<?php echo $row->md_kec ?>" value="<?php echo $row->md_id ?>"><?php echo $row->md_desa ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                        <button type="submit" id="save" class="btn btn-primary" style="float: right;">Pilih</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Nav End /-->