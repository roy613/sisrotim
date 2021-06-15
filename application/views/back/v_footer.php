<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy;2021 Bagian Tata Pemerintahan Sekretariat Daerah <br>Kabupaten Kutai Timur</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    SIMPRONATASA <b>Version</b> 1.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/back/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/back/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>assets/back/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/back/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/back/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/back/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/back/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/back/dist/js/pages/dashboard.js"></script>

<script src="<?php echo base_url(); ?>assets/back/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(function() {
    bsCustomFileInput.init();
  });
</script>

<script>
  // Jquery Dependency

  $("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() {
      formatCurrency($(this), "blur");
    }
  });


  function formatNumber(n) {
    // format number 1000000 to 1,234,567
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  }


  function formatCurrency(input, blur) {
    // appends $ to value, validates decimal side
    // and puts cursor back in right position.

    // get input value
    var input_val = input.val();

    // don't validate empty input
    if (input_val === "") {
      return;
    }

    // original length
    var original_len = input_val.length;

    // initial caret position 
    var caret_pos = input.prop("selectionStart");

    // check for decimal
    if (input_val.indexOf(".") >= 0) {

      // get position of first decimal
      // this prevents multiple decimals from
      // being entered
      var decimal_pos = input_val.indexOf(".");

      // split number by decimal point
      var left_side = input_val.substring(0, decimal_pos);
      var right_side = input_val.substring(decimal_pos);

      // add commas to left side of number
      left_side = formatNumber(left_side);

      // validate right side
      right_side = formatNumber(right_side);

      // On blur make sure 2 numbers after decimal
      if (blur === "blur") {
        right_side += "";
      }

      // Limit decimal to only 2 digits
      right_side = right_side.substring(0, 2);

      // join number by .
      input_val = left_side + "." + right_side;

    } else {
      // no decimal entered
      // add commas to number
      // remove all non-digits
      input_val = formatNumber(input_val);
      input_val = input_val;

      // final formatting

    }

    // send updated string to input
    input.val(input_val);

    // put caret back in the right position
    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
  }
</script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": false,
      "lengthChange": true,
      "autoWidth": false,
      "ordering": false,
      "buttons": ["pdf","print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    $("#example3").DataTable({
      "responsive": false,
      "lengthChange": true,
      "autoWidth": false,
      "ordering": true,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $('#tanggal').datetimepicker({
    format: 'L'
  });
</script>

<script>
    function fillData(d_id, d_nomor, status) {

        $('#edit_id').val(d_id);
        $('#edit_nomor').html(d_nomor);
        $('#edit_status').val(status);

        $('#edit').modal('show');


        // $('#status').val(st_status);
        // $('#save').html('Ubah Data');
    }

    function empty() {

        $('#tentang').val("");
        $('#nomor').val("");
        $('#panjang').val("");



        document.getElementById("ceka1").style.display = 'none';
        document.getElementById("ceka2").style.display = 'none';
        document.getElementById("ceka3").style.display = 'none';
        document.getElementById("ceka4").style.display = 'none';
        document.getElementById("cekb1").style.display = 'none';
        document.getElementById("cekb2").style.display = 'none';
        document.getElementById("cekb3").style.display = 'none';
        document.getElementById("cekb4").style.display = 'none';
        document.getElementById("cekc1").style.display = 'none';
        document.getElementById("cekc2").style.display = 'none';
        document.getElementById("cekc3").style.display = 'none';
        document.getElementById("cekc4").style.display = 'none';
        document.getElementById("cekd1").style.display = 'none';
        document.getElementById("cekd2").style.display = 'none';
        document.getElementById("cekd3").style.display = 'none';
        document.getElementById("cekd4").style.display = 'none';
        document.getElementById("ceke1").style.display = 'none';
        document.getElementById("ceke2").style.display = 'none';
        document.getElementById("ceke3").style.display = 'none';
        document.getElementById("ceke4").style.display = 'none';

    }

    function satu() {

        var checkBox = document.getElementById("check1");
        if (checkBox.checked == true) {
            document.getElementById("ceka1").style.display = "block";
            document.getElementById("ceka2").style.display = "block";
            document.getElementById("ceka3").style.display = "block";
            document.getElementById("ceka4").style.display = "block";
        } else {
            document.getElementById("ceka1").style.display = "none";
            document.getElementById("ceka2").style.display = "none";
            document.getElementById("ceka3").style.display = "none";
            document.getElementById("ceka4").style.display = "none";
        }
    }

    function dua() {

        var checkBox = document.getElementById("check2");
        if (checkBox.checked == true) {
            document.getElementById("cekb1").style.display = "block";
            document.getElementById("cekb2").style.display = "block";
            document.getElementById("cekb3").style.display = "block";
            document.getElementById("cekb4").style.display = "block";
        } else {
            document.getElementById("cekb1").style.display = "none";
            document.getElementById("cekb2").style.display = "none";
            document.getElementById("cekb3").style.display = "none";
            document.getElementById("cekb4").style.display = "none";
        }
    }

    function tiga() {

        var checkBox = document.getElementById("check3");
        if (checkBox.checked == true) {
            document.getElementById("cekc1").style.display = "block";
            document.getElementById("cekc2").style.display = "block";
            document.getElementById("cekc3").style.display = "block";
            document.getElementById("cekc4").style.display = "block";
        } else {
            document.getElementById("cekc1").style.display = "none";
            document.getElementById("cekc2").style.display = "none";
            document.getElementById("cekc3").style.display = "none";
            document.getElementById("cekc4").style.display = "none";
        }
    }

    function empat() {

        var checkBox = document.getElementById("check4");
        if (checkBox.checked == true) {
            document.getElementById("cekd1").style.display = "block";
            document.getElementById("cekd2").style.display = "block";
            document.getElementById("cekd3").style.display = "block";
            document.getElementById("cekd4").style.display = "block";
        } else {
            document.getElementById("cekd1").style.display = "none";
            document.getElementById("cekd2").style.display = "none";
            document.getElementById("cekd3").style.display = "none";
            document.getElementById("cekd4").style.display = "none";
        }
    }

    function lima() {

        var checkBox = document.getElementById("check5");
        if (checkBox.checked == true) {
            document.getElementById("ceke1").style.display = "block";
            document.getElementById("ceke2").style.display = "block";
            document.getElementById("ceke3").style.display = "block";
            document.getElementById("ceke4").style.display = "block";
        } else {
            document.getElementById("ceke1").style.display = "none";
            document.getElementById("ceke2").style.display = "none";
            document.getElementById("ceke3").style.display = "none";
            document.getElementById("ceke4").style.display = "none";
        }
    }

    function pilihsatu() {
        var cam = document.getElementById("kec1").value;

        $.ajax({
            url: "<?php echo base_url('home_b/periksa') ?>",
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
                document.getElementById("posisi1").disabled = false;


            }
        });
    }

    function pilihdua() {
        var cam = document.getElementById("kec2").value;

        $.ajax({
            url: "<?php echo base_url('home_b/periksa') ?>",
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
                document.getElementById("desa2").innerHTML = html;
                document.getElementById("desa2").disabled = false;
                document.getElementById("posisi2").disabled = false;


            }
        });
    }

    function pilihtiga() {
        var cam = document.getElementById("kec3").value;

        $.ajax({
            url: "<?php echo base_url('home_b/periksa') ?>",
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
                document.getElementById("desa3").innerHTML = html;
                document.getElementById("desa3").disabled = false;
                document.getElementById("posisi3").disabled = false;


            }
        });
    }

    function pilihempat() {
        var cam = document.getElementById("kec4").value;

        $.ajax({
            url: "<?php echo base_url('home_b/periksa') ?>",
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
                document.getElementById("desa4").innerHTML = html;
                document.getElementById("desa4").disabled = false;
                document.getElementById("posisi4").disabled = false;


            }
        });
    }

    function pilihlima() {
        var cam = document.getElementById("kec5").value;

        $.ajax({
            url: "<?php echo base_url('home_b/periksa') ?>",
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
                document.getElementById("desa5").innerHTML = html;
                document.getElementById("desa5").disabled = false;
                document.getElementById("posisi5").disabled = false;


            }
        });
    }

    function pilihenam() {
        var cam = document.getElementById("kec6").value;

        $.ajax({
            url: "<?php echo base_url('home_b/periksa') ?>",
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
                document.getElementById("desa6").innerHTML = html;
                document.getElementById("desa6").disabled = false;
                document.getElementById("posisi6").disabled = false;


            }
        });
    }

    function pilihtujuh() {
        var cam = document.getElementById("kec7").value;

        $.ajax({
            url: "<?php echo base_url('home_b/periksa') ?>",
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
                document.getElementById("desa7").innerHTML = html;
                document.getElementById("desa7").disabled = false;
                document.getElementById("posisi7").disabled = false;


            }
        });
    }
</script>

</body>

</html>