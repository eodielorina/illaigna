<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/DataTables/media/js/jquery.js');?>"></script>
<script src="<?php echo base_url('assets/DataTables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/DataTables/media/js/dataTables.bootstrap.min.js'); ?>"></script>

<script type="text/javascript" src='DataTables/media/js/jquery.js'></script>
    <script type="text/javascript" src="DataTables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).on("click",".add", function(){
			var test= $(".test").eq(0).clone().show();/*ETAPEE PAR ETAPE*/
			$(".element-wrapper").append(test);
			var html=null,nbr=1;
			var reponse;
			function changer(){
				reponse="";
				for(var i=1;i<nbr;i++){
					if(i<1){
						reponse+=($('#teste'+(i+1)).val());
					}
					else{
						reponse+=(" + "+$('#teste'+(i+1)).val());
					}
				}
				$('.recup').val(reponse);
				alert('ok');
			}
			$('.valider').click(function(){
				nbr=nbr+1;
				html='<input  type="text" name="teste" id="teste'+nbr+'" class="teste" oninput="changer();" >';
				console.log(html);
				$('.form').append(html);});
		});
	</script>
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
 </html>

</body>