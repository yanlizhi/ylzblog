<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?> 
<!-- <?php //echo form_open('contents/create'); ?> -->
<form action="http://192.168.1.107:81/index.php/contents/create" method="post" accept-charset="utf-8">
	<label for="title">Title</label>
	<input type="input" name="title"/><br/>
	<label for="text">Text</label>
	<textarea name="text"></textarea><br/>
	<input type="submit" name="submit" value="Create blogs item"/>
</form>
