  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>

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
              <div class="small-box bg-info">
                <div class="inner">
                  <h3></h3>
                  <p>xxxxxx</p>
                </div>
                <div class="icon">
                <i class="fas fa-archive"></i>
                </div>                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3></h3>
                  <p>xxxxxx</p>
                </div>
                <div class="icon">
                <i class="far fa-file-image"></i>
                </div>                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3></h3>
                  <p>xxxxxxx</p>
                </div>
                <div class="icon">
                  <i class="far fa-file-archive"></i>
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
                <div class="row">
                  <div class="title">
                    <h5>
                      xxxxxxxxx
                    </h5>
                  </div>
                  <div class="col-12 table-responsive">
                    <table class="table table-bordered table-striped" style="font-size: 10pt">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <!-- <?php
                        $no = 1;
                        foreach ($st as $k) { ?>
                          <tr style="font-size: 10pt;">
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $k->s_pemohon; ?></td>
                            <td><?php echo $k->s_nomor; ?></td>
                            <td><?php echo $k->s_p1; ?> -> <?php echo tgl_indo($k->s_t1); ?> <br><?php if($k->s_p2!==""){echo ($k->s_p2). "->".tgl_indo($k->s_t2); } ?><br><?php if($k->s_p3!==""){echo ($k->s_p3). "->".tgl_indo($k->s_t3); } ?><br><?php if($k->s_p4!==""){echo ($k->s_p4). "->".tgl_indo($k->s_t4); } ?></td>
                            <td><?php echo $k->s_status; ?></td>                            
                            <td><?php echo $k->s_ket; ?></td>                            
                          <?php } ?> -->
                      </tbody>
                    </table>
                    <div class="link" style="text-align:right ;">
                      <a href="<?php echo base_url() . 'home_b/status'; ?>">
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
      </section>
    </div>
  </div>
  <!-- /.content-wrapper -->