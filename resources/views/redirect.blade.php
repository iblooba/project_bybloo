
<form  name="frmMain" action="/redirect" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<input type="text" class="form-control" name="price" value="400">
<input type="text" class="form-control" name="priceeeee" value="800">

</form>
<script>
document.getElementsByTagName("form")[0].submit();
</script>
