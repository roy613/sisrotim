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
                    <li class="breadcrumb-item active">
                        <a href="#" style="color:grey">Progress Batas</a>
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
                                        
                                        <?php foreach ($qq as $row) { ?>
                                            <p><span class="title-s">Kecamatan : </span>Sangkulirang</p>
                                        <?php } ?>
                                        <p><span class="title-s">Luas: </span> <span>35.748 km<sup>2</sup></span></p>
                                        <p><span class="title-s">Ibukota: </span> <span>Benua Baru Ulu</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill-mf">
                                <span>Total Segmen</span> <span class="pull-right">10 Segmen</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>Total Segmen Yang Telah Ditetapkan</span> <span class="pull-right">3 Segmen (30 %)</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
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
                                <table id="" class="table table-bordered table-hover " style="width:100%;">
                                    <thead style="background-color: skyblue;">
                                        <tr>
                                            <th style="text-align: center; width:5%">No</th>
                                            <th style="text-align: center; width:15%">Jenis Batas</th>
                                            <th style="text-align: center; width:20%">Batas di Desa</th>
                                            <th style="text-align: center;">Berbatasan Dengan</th>
                                            <th style="text-align: center; width:10%">Panjang Garis</th>
                                            <th style="text-align: center; width:10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Penetapan</td>
                                            <td>Maloy</td>
                                            <td>Desa Kaliorang Kec. Kaliorang <br> Desa Bukit Makmur Kec. Kaliorang</td>
                                            <td>100 Meter</td>
                                            <td>
                                                <div class="btn-group" role="group" style="float: right; margin-right:15px">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:lightskyblue; color:black"> <i class="fa fa-download"> Unduh</i>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="" style="color:black">Peraturan Bupati</a></li>
                                                        <li><a href="" style="color:black">Gambar Peta</a></li>
                                                    </ul>
                                                </div>
                                                <!-- <a target="_blank" href="" class="btn btn-success btn-sm">
                                                    <i class="fa fa-download"> Unduh</i>
                                                </a> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sengketa</td>
                                            <td>Benua Baru Ilir</td>
                                            <td>Desa Bukit Makmur Kec. Kaliorang</td>
                                            <td>100 Meter</td>
                                            <td>
                                                <div class="btn-group" role="group" style="float: right; margin-right:15px">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:lightskyblue; color:black"> <i class="fa fa-download"> Unduh</i>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="" style="color:black">Berita Acara</a></li>
                                                        <li><a href="" style="color:black; font-size:small !important">Gambar Areal Sengketa</a></li>
                                                    </ul>
                                                </div>
                                                <!-- <a target="_blank" href="" class="btn btn-success btn-sm">
                                                    <i class="fa fa-download"> Unduh</i>
                                                </a> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>