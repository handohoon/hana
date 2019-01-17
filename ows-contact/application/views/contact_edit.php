<!DOCTYPE html>
<html>
<head>
	<title>Sửa Danh Bạ</title>
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/style.css">
</head>
<body>
	<div id="container">
		<h2>Cập nhật Danh bạ</h2>
	<div id="body">
     <form method="post" action="<?= base_url() ?>contact/save/<?= $contact_item->id?>">
         <div class="input">
             <label for="">Tên</label>
             <input type="text" name="name" value="<?= $contact_item->name ?>" style="margin-left: 74px;">
         </div>
         <div class="input">
             <label for="">Số điện thoại 1</label>
             <input type="text" name="phone1" value="<?= $contact_item->phone1 ?>">
         </div>
         <div class="input">
             <label for="">Số điện thoại 2</label>
             <input type="text" name="phone2" value="<?= $contact_item->phone2 ?>" >
         </div>
         <div class="input">
             <label for="">Email</label>
             <input type="text" name="email" value="<?= $contact_item->email ?>" style="margin-left: 61px;">
         </div>
         <div class="input">
             <label for="">Facebook</label>
             <input type="text" name="fb" value="<?= $contact_item->fb ?>" style="margin-left: 32px;">
         </div>
         <div class="input">
             <label for="">Company</label>
             <input type="text" name="company" value="<?= $contact_item->company ?>" style="margin-left: 32px;">
         </div>
         <input type="submit" value="Cập nhật" id="btnUpdate"/>
         <input type="button" onclick="remove(<?= $contact_item->id?>)" value="Xóa" id="btnDel"/>
         <a href="<?= base_url() ?>"><button id="btnBack">Quay lại</button></a>
     </form>
	</div>
	</div>
</body>
</html>
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script>
    function remove(id) {
        var isConfirm = confirm("Bạn có chắc muốn xóa không?");
        if (isConfirm) {
            $.get('<?= base_url() ?>contact/del/'+id).then(function(data) {
                if (data == "success")
                    window.location = "http://localhost/ows-contact";
                else
                    alert('Có lỗi xảy ra.');
            })
        }
    }
</script>