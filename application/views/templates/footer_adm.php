	
	<script src="<?php echo base_url ('style/assets/js/vendor/jquery-2.1.4.min.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url ('style/assets/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url ('style/assets/js/plugins.js');?>"></script>
    <script src="<?php echo base_url ('style/assets/js/main.js');?>"></script>


    <script src="<?php echo base_url ('style/assets/js/lib/chart-js/Chart.bundle.js');?>"></script>
    <script src="<?php echo base_url ('style/assets/js/dashboard.js');?>"></script>
    <script src="<?php echo base_url ('style/assets/js/widgets.js');?>"></script>
    <script src="<?php echo base_url ('style/assets/js/lib/vector-map/jquery.vmap.js');?>"></script>
    <script src="<?php echo base_url ('style/assets/js/lib/vector-map/jquery.vmap.min.js');?>""></script>
    <script src="<?php echo base_url ('style/assets/js/lib/vector-map/jquery.vmap.sampledata.js');?>"></script>
    <script src="<?php echo base_url ('style/assets/js/lib/vector-map/country/jquery.vmap.world.js');?>"></script>
	
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/datatables.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/dataTables.bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/dataTables.buttons.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/buttons.bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/jszip.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/pdfmake.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/vfs_fonts.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/buttons.html5.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/buttons.print.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/buttons.colVis.min.js');?>"></script>
	<script src="<?php echo base_url ('style/assets/js/lib/data-table/datatables-init.js');?>"></script>
	
	<script src="<?php echo base_url ('style/plugin/dist/summernote-bs4.js');?>"></script>
	


 
   <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
 
	
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
			height: 200,                 // set editor height
			minHeight: null,             // set minimum height of editor
			maxHeight: null,             // set maximum height of editor
			focus: true                  // set focus to editable area after initializing summernote
		});
        $('.summernote2').summernote({
			height: 100,                 // set editor height
			minHeight: null,             // set minimum height of editor
			maxHeight: null,             // set maximum height of editor
			focus: true                  // set focus to editable area after initializing summernote
		});
		
		//datepicker
		$('.datepicker').datepicker({
			autoclose: true,
			format: "dd-mm-yyyy",
			todayHighlight: true,
			orientation: "top auto",
			todayBtn: true 
		});
		

		$('.timepicker').timepicker({
			autoclose:true,
			minuteStep: 5,
			disableFocus: true,
			showMeridian: false,
			icons: {
				up: 'fa fa-chevron-up',
				down: 'fa fa-chevron-down'
			}
		});

    });
</script>
</body>
</html>
