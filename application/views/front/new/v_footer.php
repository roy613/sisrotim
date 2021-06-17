<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(<?php echo base_url(); ?>assets/f2/img/a.png)">
  <div class="overlay-mf"></div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright"> Copyright &copy; 2021 Bagian Pemerintahan Sekretariat Daerah <br>Kabupaten Kutai Timur</p>
            <div class="credits">
              <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="<?php echo base_url() ?>assets/f2/lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/jquery/jquery-migrate.min.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/popper/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/counterup/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/counterup/jquery.counterup.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo base_url() ?>assets/f2/lib/typed/typed.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="<?php echo base_url() ?>assets/f2/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="<?php echo base_url() ?>assets/f2/js/main.js"></script>


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
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": false,
    });
  });


</body>

</html>