<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bootstrap Datepicker di Codeigniter</title>
    </head>

    <!-- file bootstrap css yang digunakan-->

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


    <body>

    </body>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url() ?>assets/jquery-1.11.0.js"></script>


    <!--file include Bootstrap js dan datepickerbootstrap.js-->

    <script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

    <!-- Fungsi datepickier yang digunakan -->
    <script type="text/javascript">
        $('.datepicker').datetimepicker({
            language: 'id',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    </script> 

</html>
