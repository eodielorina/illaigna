<div class="container">	
		<div class="row">
             <div class="col-md-6 col-md-offset-3">
	<?php echo form_open_multipart("publiqueinfo/update/{$record->ID_PUBLIC}",['class'=>'form form-horizontale'] );?>

			<input type="hidden" name="idpub" value=" <?php echo $record->ID_PUBLIC; ?>">

				<input type="hidden" name="iduser" value="<?php echo $user['ID_UTILISATEUR'] ;?>">
			    	<!--<input type="hidden" name="sary" value="<?php echo $record->icone;?>">-->
			
	<!--<<img src="<?php echo base_url($record->icone);?>"style="width: 100px;height: 100px" style="width: 100px;height: 100px">-->
			 		<div class="form-group">
				   			 <label for="exampleFormControlSelect1">Nom service</label>
			
					    		<select class="form-control content" id="exampleFormControlSelect1" name="idservice"  style="width: 300px">
					    	
					      <?php
					       foreach($servpub as $row){

					      	echo '<option value="'.$row->ID_SERVICE.'">'.$row->NOM_SERVICE.'</option>';
					      }
					      ?>
					   		 </select>
				</div>
				 
				 	   	
			<div class="form-group">
				  <label for="exampleFormControlSelect1">Type </label>
			<input class="form-control" type="text" name="papier1" style="width: 300px" value="<?php echo $record->papier1;?>">

			</div>	
			<div class="form-group">
				    <label for="exampleFormControlSelect1">Demarche à suivre</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="etape" style="width: 300px"><?php echo $record->Etape;?></textarea>
			</div>
 			<div class="form-group">
				    <label for="exampleFormControlSelect1">Type </label>
					<input class="form-control" type="text"  name="papier2" style="width: 300px" value="<?php echo $record->papier2;?>">


			</div>
			<div class="form-group">
				    <label for="exampleFormControlSelect1">Demarche à suivre</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="class" style="width: 300px"><?php echo $record->Class;?></textarea>
			</div>
			<div class="form-group">
				    <label for="exampleFormControlSelect1">Type</label>
				<input class="form-control" id="exampleFormControlTextarea1"  name="papier3" style="width: 300px" value="<?php echo $record->papier3;?>">


			</div>					
					
		
			
		<div class="form-group">
				    <label for="exampleFormControlSelect1">Demarche à suivre</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="recup" style="width: 300px"><?php echo $record->DEMARCHE;?></textarea>

		</div>		
			
	
			</div>
			<div class="container">
		<div class="col-md-offset-3 col-md-6" >
			<button type="submit" class="btn btn-primary btn-lg" style="width: 250px">ENREGISTRER</button>
		</div>
			</div>
			
	</form>		

<script type="text/javascript">
	var html=null,nbr=1;
	var reponse;
	function changer(){
		reponse="";
		for(var i=0;i<nbr;i++){
			if(i<1){
				reponse+=($('#teste'+(i+1)).val());
			}
			else{
				reponse+=(" , "+$('#teste'+(i+1)).val());
			}
		}
		$('.recup').val(reponse);
	}
	$('.ajouter').click(function(){
		nbr=nbr+1;
html='<input type="text" name="teste" id="teste'+nbr+'" class="teste form-control " style="width: 300px"  oninput="changer();">';
		console.log(html);
		$('.form').append(html);
	});
</script>
<style type="text/css">
	label{color: #337AB7
;}
</style>