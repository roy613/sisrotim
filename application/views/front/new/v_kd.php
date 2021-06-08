<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Halaman Artikel</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="<?php echo base_url('blog'); ?>">Artikel</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->
<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- <?php foreach ($artikel as $a) { ?>
                    <div class="post-box">
                        <div class="post-thumb">
                            <?php if ($a->a_sampul != "") { ?>
                                <img src="<?php echo base_url(); ?>gambar/artikel/<?php echo $a->a_sampul ?>" alt="<?php
                                                                                                                    echo $a->a_judul ?>" class="img-fluid">
                            <?php } ?>
                        </div>
                        <div class="post-meta">
                            <h1 class="article-title"><?php echo $a->a_judul ?></h1>
                            <ul>
                                <li>
                                    <span class="ion-ios-person"></span>
                                    <a href="#"><?php echo $a->nama ?></a>
                                </li>
                                <li>
                                    <span class="ion-pricetag"></span>
                                    <a href="#"><?php echo $a->k_nama ?></a>
                                </li>
                                <li>
                                    <span class="ion-ios-time"></span>
                                    <a href="#"><?php echo $a->a_tanggal ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <?php echo $a->a_konten ?>
                        </div>
                    </div>
                <?php } ?> -->
            </div>
            <div class="col-md-4">
                <!-- <?php $this->load->view('frontend/v_sidebar'); ?> -->
            </div>
        </div>
    </div>
</section>