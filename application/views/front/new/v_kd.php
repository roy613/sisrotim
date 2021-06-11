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
                url : "<?php echo base_url('welcome/periksa') ?>",
                method : "POST",
                data : {cam: cam},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var a = "<option selected disabled>-- Silahkan Pilih Desa --</option>";
                    var i;
                    for(i=0; i<data.length; i++){                        
                        html += '<option>'+data[i].md_desa+'</option>';
                    }
                    document.getElementById("desa1").innerHTML=a.concat(html);
                    document.getElementById("desa1").disabled=false;
                   
                     
                }
            });

            // let request = new XMLHttpRequest()
            // request.open("GET", "<?php echo base_url('welcome/periksa') ?>?kec="+cam);
            // request.send();
            // request.onload=()=>{
            //     if(request.status===200){

            //         if((JSON.parse(request.response).status)=="success"){
            //             document.getElementById("desa").html="<option value="">--Pilih Kecamatan--</option>
            //                 <?php foreach ($aa as $row) { ?>
            //                 <option value="<?php echo $row->mk_id; ?>"><?php echo $row->mk_kec; ?></option>
            //                 <?php } ?>";
            //             document.getElementById("desa").disabled="false";
            //         }
            //     }
            // }
        }
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
                    <form method="post" action="<?php echo base_url() . 'welcome/kecamatan' ?>" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="kecamatan">Silahkan Pilih Nama Kecamatan</label>
                        <select class="custom-select" id="kecamatan1" name="kecamatan" placeholder="" onchange="pilihan()" required>
                            <option selected disabled>--Pilih Kecamatan--</option>
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
                                            <p><span class="title-s">Kabupaten </span>Kutai Timur</p>
                                            <p><span class="title-s">Luas: </span> <span>35.748 km<sup>2</sup></span></p>
                                            <p><span class="title-s">Ibukota: </span> <span>Sangatta Utara</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Progress Penataan Batas Desa di Kutai Timur</p>
                                    <span>Total Segmen</span> <span class="pull-right">10 Segmen</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Total Segmen Yang Telah Ditetapkan</span> <span class="pull-right">3 Segmen (30 %)</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Total Segmen Yang Belum Ditetapkan</span> <span class="pull-right">7 Segmen (70 %)</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Target Tahun 2021</span> <span class="pull-right">3 Segmen (30 %)</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
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