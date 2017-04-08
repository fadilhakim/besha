</div>
<!-- END wrapper -->
<script>
            var resizefunc = [];
</script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('admin-assets/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/detect.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/fastclick.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/jquery.slimscroll.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/jquery.blockUI.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/waves.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/wow.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/jquery.nicescroll.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/jquery.scrollTo.min.js') ?>"></script>

        <!--Morris Chart
		<script src="<?php echo base_url('admin-assets/plugins/morris/morris.min.js') ?>"></script>
		<script src="<?php echo base_url('admin-assets/plugins/raphael/raphael-min.js') ?>"></script>
        -->

        <!-- Datatables-->
        <script src="<?php echo base_url('admin-assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/dataTables.bootstrap.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/dataTables.buttons.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/buttons.bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/jszip.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/pdfmake.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/vfs_fonts.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/buttons.html5.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/buttons.print.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/dataTables.fixedHeader.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/dataTables.keyTable.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/dataTables.responsive.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/responsive.bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/datatables/dataTables.scroller.min.js') ?>"></script>


        <!-- Counter Up  -->
        <script src="<?php echo base_url('admin-assets/plugins/waypoints/lib/jquery.waypoints.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/plugins/counterup/jquery.counterup.min.js') ?>"></script>

        <!-- Dashboard init -->
        <!-- <script src="<?php echo base_url('admin-assets/pages/jquery.dashboard.js') ?>"></script> -->
        <!-- Plugin JS -->
        <script src="<?php echo base_url('admin-assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('admin-assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('admin-assets/plugins/bootstrap-sweetalert/sweet-alert.min.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/pages/jquery.sweet-alert.init.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/pages/jquery.datatables.init.js') ?>"></script>
        <!-- App js -->
        <script src="<?php echo base_url('admin-assets/js/jquery.core.js') ?>"></script>
        <script src="<?php echo base_url('admin-assets/js/jquery.app.js') ?>"></script>

      

        <script type="text/javascript">
        //Bootstrap-MaxLength
            $('input#defaultconfig').maxlength()

            $('input#thresholdconfig').maxlength({
                threshold: 20
            });

            $('input#moreoptions').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-danger"
            });

            $('input#alloptions').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-danger",
                separator: ' out of ',
                preText: 'You typed ',
                postText: ' chars available.',
                validate: true
            });

            $('textarea#textarea').maxlength({
                alwaysShow: true
            });

            $('input#placement').maxlength({
                alwaysShow: true,
                placement: 'top-left'
            });

            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>

        <?php if (isset($page_section) == 'discount' || isset($page_section) == 'event') { ?>
            <!-- date picker js -->
            <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.simple-dtpicker.js') ?>"></script>
            <script> $(function(){$('*[name=start_date]').appendDtpicker();});</script>
            <script> $(function(){$('*[name=expired_date]').appendDtpicker();});</script>
        <?php } ?>
</body>

</html>