<!DOCTYPE html>
<html>
<head>
	<title>Thêm Danh Bạ</title>
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/style.css">
</head>
<body>
	<div id="container">
		<h2>Thêm mới Danh bạ</h2>
		<div id="body">
		<form method="post" action="<?= base_url() ?>contact/save">
		    <div class="input">
		        <label for="">Tên</label>
		        <input type="text" name="name" style="margin-left: 74px;">
		    </div>
		    <div class="input">
		        <label for="">Số điện thoại 1</label>
		        <input type="text" name="phone1" class="text">
		    </div>
		    <div class="input">
		        <label for="">Số điện thoại 2</label>
		        <input type="text" name="phone2" class="text">
		    </div>
		    <div class="input">
		        <label for="">Email</label>
		        <input type="text" name="email" style="margin-left: 61px;">
		    </div>
		    <div class="input">
		        <label for="">Facebook</label>
		        <input type="text" name="fb" style="margin-left: 32px;">
		    </div>
		    <div class="input">
		        <label for="">Company</label>
		        <input type="text" name="company" style="margin-left: 32px;">
		    </div>
		    <button id="btnAdd">Thêm mới</button>
		</form>
		</div>
	</div>
</body>
</html>