<body id="page-top">

    <script>
        function pilkec() {
            $('#kec').modal('show');
        }

        function pildes() {
            $('#des').modal('show');
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
<style>
    table{
        width:100%; 
        font-size:small;
    }
    th{
        background-color: skyblue;
        padding: 7px !important;
        text-align: center;
        vertical-align: middle !important;
    }
    td{
        padding: 4px !important;
        text-align: center;
    }

    li{
        font-size: small;
        color: black;
        margin-left: 8px;
        margin-right: 8px;
        
    }
    li:hover{
        background-color: skyblue !important;
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

    <div class="modal fade" id="des" tabindex="-1" aria-labelledby="exampleModalLabel" a data-backdrop="static" data-keyboard="false" aria-hidden="true">
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
                                    <option <?php echo $kecamatan_selected == $row->mk_id ? 'selected="selected"' : '' ?> value="<?php echo $row->mk_id ?>"><?php echo $row->mk_kec ?></option>
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
                                    
                                    <option <?php echo $desa_selected == $row->md_kec ? 'selected="selected"' : '' ?> class="<?php echo $row->md_kec ?>" value="<?php echo $row->md_id ?>"><?php echo $row->md_desa ?></option>
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
                        <a href="<?php echo base_url(). 'welcome/protas'; ?>">Progress Batas</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="#" style="color:grey">Kecamatan</a>
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
                                    <div class="about-info">

                                        <?php foreach ($aq as $row) { ?>
                                            <p><span class="title-s">Kecamatan : </span><?php echo Ucwords($row->mk_kec) ?></p>
                                            <p><span class="title-s">Luas: </span> <span><?php echo $row->mk_luas ?><sup>2</sup></span></p>
                                            <p><span class="title-s">Ibukota: </span> <span><?php echo $row->mk_ibukota?></span></p>
                                        
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
                                <span>Kesepakatan</span> <span class="pull-right"><?php echo number_format($aaa); ?> Segmen (<?php echo number_format($aaa/$row->mk_segmen*100); ?> %)</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?php echo number_format($aaa/$row->mk_segmen*100); ?>%" aria-valuenow="<?php echo number_format($aaa/$row->mk_segmen*100); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="skill-mf">
                                <span>Penetapan</span> <span class="pull-right"><?php echo number_format($aaa); ?> Segmen (<?php echo number_format($aaa/$row->mk_segmen*100); ?> %)</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?php echo number_format($aaa/$row->mk_segmen*100); ?>%" aria-valuenow="<?php echo number_format($aaa/$row->mk_segmen*100); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>Sengketa</span> <span class="pull-right"><?php echo $row->mk_segmen ?> Segmen</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                                            <th style="width:5%">No</th>
                                            <th style="width:15%">Jenis Batas</th>
                                            <th style="width:20%">Desa</th>
                                            <th>Berbatasan Dengan<br> Desa(Kecamatan)</th>
                                            <th style="width:10%">Panjang Garis</th>
                                            <th style="width:10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $cam = $ab; $no=1; foreach($qq as $row) {?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php if ($row->d_jenis == 1) {
                                                echo "Penetapan" ;} else if ($row->d_jenis == 2) {
                                                    echo "Kesepakatan";} else {
                                                        echo "Sengketa";
                                                    }?></td>
                                            <td><?php if ($row->d_kec1==$ab && $row->d_posisi1=="selatan"){
                                                echo $row->d_desa1 .",";
                                            } ?> <?php if ($row->d_kec2==$ab && $row->d_posisi2=="selatan"){
                                                echo $row->d_desa2 .",";
                                             }?><?php if ($row->d_kec3==$ab && $row->d_posisi3=="selatan"){
                                                echo $row->d_desa3 .",";
                                             }?> <?php if ($row->d_kec4==$ab && $row->d_posisi4=="selatan"){
                                                echo $row->d_desa4 .",";
                                             }?> <?php if ($row->d_kec5==$ab && $row->d_posisi5=="selatan"){
                                                echo $row->d_desa5 .",";
                                             }?> <?php if ($row->d_kec6==$ab && $row->d_posisi6=="selatan"){
                                                echo $row->d_desa6 .",";
                                             }?> <?php if ($row->d_kec7==$ab && $row->d_posisi7=="selatan"){
                                                echo $row->d_desa7 .",";
                                             }?></td>
                                            <td><?php if ($row->d_kec1!=$ab && $row->d_posisi1=="utara"){
                                                echo $row->d_desa1 ." (".$row->d_kec1."),";
                                            }?> <?php if ($row->d_kec2!=$ab && $row->d_posisi2=="utara"){
                                                echo $row->d_desa2 ." (".$row->d_kec2."), <br>";
                                             }?> <?php if ($row->d_kec3!=$ab && $row->d_posisi3=="utara"){
                                                echo $row->d_desa3 ." (".$row->d_kec3."), <br>";
                                             }?> <?php if ($row->d_kec4!=$ab && $row->d_posisi4=="utara"){
                                                echo $row->d_desa4 ." (".$row->d_kec4."), <br>";
                                             }?> <?php if ($row->d_kec5!=$ab && $row->d_posisi5=="utara"){
                                                echo $row->d_desa5 ." (".$row->d_kec5."), <br>";
                                             }?> <?php if ($row->d_kec6!=$ab && $row->d_posisi6=="utara"){
                                                echo $row->d_desa6 ." (".$row->d_kec6."), <br>";
                                             }?> <?php if ($row->d_kec7!=$ab && $row->d_posisi7=="utara"){
                                                echo $row->d_desa7 ." (".$row->d_kec7."),";
                                             }?></td>                                            
                                                                                    
                                            <td><?php echo $row->d_pgaris;?></td>
                                            <td>
                                                <div class="btn-group" role="group" style="float: right; margin-right:15px">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:lightskyblue; color:black"> <i class="fa fa-download"> Unduh</i>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                    <?php if ($row->d_jenis == 1) { ?>
                                                        <li><a href="" style="color:black">Peraturan Bupati</a></li>
                                                        <li><a href="" style="color:black">Gambar Peta</a></li>
                                                       <?php } else if ($row->d_jenis == 2) { ?>
                                                        <li><a href="" style="color:black">BA Kesepakatan</a></li>
                                                        <li><a href="" style="color:black">Peta Kesepakatan</a></li>
                                                        <?php } else if ($row->d_jenis == 3) { ?>
                                                            <li><a href="" style="color:black">BA Sengketa</a></li>
                                                        <li><a href="" style="color:black">Peta Areal Sengketa</a></li>
                                                        <?php }?>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php }?>                                        
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