<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coming Soon 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/logo.png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/new/comingsoon_03/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/new/comingsoon_03/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/new/comingsoon_03/css/main.css">
    <!--===============================================================================================-->
</head>

<body>


    <div class="bg-img1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url(<?php echo base_url(); ?>assets/f2/img/b1.jpeg);">
        <div class="wsize1 bor1 bg1 p-t-175 p-b-45 p-l-15 p-r-15 respon1">
            <div class="wrappic1">
                <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt="" height="70px" class="mr-2"><br><br>
                <h3>SIMPRONATASA</h3>
            </div>

            <p class="txt-center m1-txt1 p-t-33 p-b-68">
                APLIKASI SEDANG DALAM PROSES PEMBUATAN
            </p>

            <div class="wsize2 flex-w flex-c hsize1 cd100">
                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 days">35</span>
                    <span class="s1-txt1">Days</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 hours">17</span>
                    <span class="s1-txt1">Hours</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 minutes">50</span>
                    <span class="s1-txt1">Minutes</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 seconds">39</span>
                    <span class="s1-txt1">Seconds</span>
                </div>
            </div>

            

        </div>
    </div>





    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/countdowntime/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/vendor/countdowntime/countdowntime.js"></script>
    <script>
        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeYear: 2021,
            endtimeMonth: 06,
            endtimeDate: 30,
            endtimeHours: 09,
            endtimeMinutes: 0,
            endtimeSeconds: 0,
            timeZone: "Asia/Jakarta"
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/new/comingsoon_03/js/main.js"></script>

</body>

</html>