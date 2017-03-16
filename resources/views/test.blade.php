
//////////////// test session ///////////////////////
<?php

$result = "wilawan iblooba onnom";
?>
<form  name="frmMain" action="/redirect" method="POST">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<input type="hidden" name="result" value="<?php echo $result; ?>">
<input type="submit" value="Continute" class = "btn btn-primary">
</form>


///////////////////test ส่งค่าไป step s/////////////////////////


<?php

$result = "0x1dec4dfbba15e81a2d2c8f842c749f3585bbc987a817efed64cf87ba75842216";
 ?>

 <form  name="frmMain" action="/step2" method="POST">
 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
 <input type="text" name="result" value="<?php echo $result; ?>">

     <input type="submit" value="Continute" class = "btn btn-primary">
 </form>
