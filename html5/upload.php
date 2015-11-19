<?php 
if(!empty($_FILES['form'])){
	move_uploaded_file($FILES['form']['tmp_name'],$FILES['form']['name']);
}
?>
<meta charset="utf-8" />
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="ff" />
	<input type="submit" value="上传" />
</form>