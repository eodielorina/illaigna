 <div class="container">
  <div class="row">
           <div class="col-md-6 col-md-offset-3">
  <?php echo form_open("gardes/update/{$record->ID_GARDE}",['class'=>'form-horizontale'] );?>
   <input type="hidden" name="idgarde" value=" <?php echo $record->ID_GARDE; ?>">

         <div class="test" >
          <div style="width: 300px">

           <select name="idpharm" style="float: right;">
          <?php
                  foreach($nompharm as $row){
              echo '<option value="'.$row->ID_PHARMACIE.'">'.$row->NOM_PHARMACIE.'</option>';
           }
          ?>
        </select>
      </div>
          <div style="width: 300px">
        <table border="1" class="table table-hover table-bordered display compact cell-border">
        <th>Date début</th>
        <th>Date fin</th>
                <tr>
                <td><input type="date" name="date1" value="<?php echo $record->Date_debut;?>"></td>
                 <td> <input type="date" name="date2" value="<?php echo $record->Date_fin;?>" ></td>
                </tr>
          </table>
      </div>
   <button type="submit" class="btn btn-primary btn-lg" style="width: 300px">ENREGISTRER</button>
		</div>
     </div>
	<?php echo form_close()?>
	<script type="text/javascript">
		$("document").ready(function(){
		});
	</script>
  <style type="text/css">
  th{color: #337AB7
}