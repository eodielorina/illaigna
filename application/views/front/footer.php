<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/DataTables/media/js/jquery.js');?>"></script>
<script src="<?php echo base_url('assets/DataTables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/DataTables/media/js/dataTables.bootstrap.min.js'); ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" src='DataTables/media/js/jquery.js'></script>
    <script type="text/javascript" src="DataTables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
<script type="text/javascript">
        $(document).ready(function () {

    $('#tab').DataTable({

       
        language: {

            url: "assets/DataTables/media/French.json"

        },
        "ordering": false


    });

});
    </script>

 
</body>
 </html>