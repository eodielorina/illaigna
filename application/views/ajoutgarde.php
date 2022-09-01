 <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-offset-3 col-md-6 content">
 <?php echo form_open('gardes/addgarde');?>
 <h3>Formulaire des gardes:</h3> 
 <div class="col-md-offset-4 ">
  <select name="idpharm" >
              <?php
                    foreach($nompharm as $row){
                  echo '<option value="'.$row->ID_PHARMACIE.'">'.$row->NOM_PHARMACIE.'</option>';
               }
              ?>
             </select>
        </div>
   <div style="width: 300px">
       <label>Date début</label>
       <label style="float: right;">Date fin</label>
       <div class="field_wrapper">
    <div>
      <table class="table table-hover table-bordered display compact cell-border">
      <tr>
            <td><input type="date" name="date1[]" class="date" value=""/></td>
           <td> <input type="date" name="date2[]" class="date" value=""/></td>
      </tr>

  </table>
        
    </div>
    </div>

</div>

        <?php echo anchor("gardes/liste",'ANNULER',['class'=>'btn btn-danger'])?></td>
        <button type="submit" class="btn btn-primary">ENREGISTRER</button>
        <input type="button" value="+" class="btn add_button btn-primary" title="Add field"  ></a>
  
  <?php echo form_close()?>
        </div>
        </div>
        </div>

   <script type="text/javascript">
$(document).ready(function(){
    var maxField = 1000; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><table class="table table-hover table-bordered display compact cell-border"><tr><td><input type="date" name="date1[]" value=""/></td><td><input type="date" name="date2[]" value=""/></td></tr><input type="button" value="X" class="remove_button btn-danger" style="float:right"></div>'; 
    //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
  $test=$(".date");
  if($test=""){
    $(this).remove();
  }
</script>

<style type="text/css">
  label{color: #337AB7
}
</style>
<script type="text/javascript">
  $('document').ready(function(){

  })
</script>