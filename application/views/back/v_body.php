  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Summary</h1>

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-4 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo number_format($pk); ?></h3>
                  <p>PERBUP PENETAPAN</p>
                </div>
                <div class="icon">
                  <i class="fas fa-gavel"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo number_format($bk); ?></h3>
                  <p>BA KESEPAKATAN</p>
                </div>
                <div class="icon">
                  <i class="far fa-calendar-check"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo number_format($bs); ?></h3>
                  <p>BA SENGKETA</p>
                </div>
                <div class="icon">
                  <i class="far fa-calendar-times"></i>
                </div>

              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="invoice p-3 mb-3">
                <div class="card">
                  <!-- title row -->
                  <div class="card-header">
                    <h4 class="card-title">
                      DATA PERBUP PENETAPAN (3 TERBARU)
                    </h4>
                  </div>
                  <div class="card-body" style="overflow-x:auto">
                    <table class="table table-bordered table-striped table-responsive">
                      <thead>
                        <tr>
                          <th style="width: 2%">NO</th>
                          <th style=" width:23%">NO PERBUP/ TENTANG</th>
                          <th style=" width:27%">KECAMATAN/ DESA(POSISI)</th>
                          <th>PANJANG GARIS <br> TOTAL</th>
                          <th style="width:auto">STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($pks as $k) { ?>
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
                            <td><?php echo number_format(($k->d_pgaris2 + $k->d_pgaris3 + $k->d_pgaris4 + $k->d_pgaris5 + $k->d_pgaris6 + $k->d_pgaris7), 2, ',', '.'); ?></td>

                            <td><?php if ($k->d_status == 1) {
                                  echo "Tampil";
                                } else {
                                  echo "Tidak Tampil";
                                } ?> </td>
                          <?php } ?>
                      </tbody>
                    </table>
                    <div class="link" style="text-align:right ;">
                      <a href="<?php echo base_url() . 'home_b/pk'; ?>">
                        <p>
                          lihat selengkapnya >>>
                        </p>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <!-- title row -->
                  <div class="card-header">
                    <h4 class="card-title">
                      DATA BERITA ACARA KESEPAKATAN (3 TERBARU)
                    </h4>
                  </div>
                  <div class="card-body" style="overflow-x:auto">
                    <table class="table table-bordered table-striped table-responsive">
                      <thead>
                        <tr>
                          <th style="width: 2%">NO</th>
                          <th style=" width:23%">NO PERBUP/ TENTANG</th>
                          <th style=" width:27%">KECAMATAN/ DESA(POSISI)</th>
                          <th>PANJANG GARIS <br> TOTAL</th>
                          <th style="width:auto">STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($bks as $k) { ?>
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
                            <td><?php echo number_format(($k->d_pgaris2 + $k->d_pgaris3 + $k->d_pgaris4 + $k->d_pgaris5 + $k->d_pgaris6 + $k->d_pgaris7), 2, ',', '.'); ?></td>

                            <td><?php if ($k->d_status == 1) {
                                  echo "Tampil";
                                } else {
                                  echo "Tidak Tampil";
                                } ?></td>
                          <?php } ?>
                      </tbody>
                    </table>
                    <div class="link" style="text-align:right ;">
                      <a href="<?php echo base_url() . 'home_b/bk'; ?>">
                        <p>
                          lihat selengkapnya >>>
                        </p>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <!-- title row -->
                  <div class="card-header">
                    <h4 class="card-title">
                      DATA BERITA ACARA SENGKETA (3 TERBARU)
                    </h4>
                  </div>
                  <div class="card-body" style="overflow-x:auto">
                    <table class="table table-bordered table-striped table-responsive">
                      <thead>
                        <tr>
                          <th style="width: 2%">NO</th>
                          <th style=" width:23%">NO PERBUP/ TENTANG</th>
                          <th style=" width:27%">KECAMATAN/ DESA(POSISI)</th>
                          <th>PANJANG GARIS</th>
                          <th style="width:auto">STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($bss as $k) { ?>
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
                            <td><?php echo number_format(($k->d_pgaris2 + $k->d_pgaris3 + $k->d_pgaris4 + $k->d_pgaris5 + $k->d_pgaris6 + $k->d_pgaris7), 2, ',', '.'); ?></td>

                            <td><?php if ($k->d_status == 1) {
                                  echo "Tampil";
                                } else {
                                  echo "Tidak Tampil";
                                } ?></td>
                          <?php } ?>
                      </tbody>
                    </table>
                    <div class="link" style="text-align:right ;">
                      <a href="<?php echo base_url() . 'home_b/bs'; ?>">
                        <p>
                          lihat selengkapnya >>>
                        </p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  </section>
  </div>
  </div>
  <!-- /.content-wrapper -->