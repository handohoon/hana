<!DOCTYPE html>
<html>
<head>
	<title>Danh Bạ</title>
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/style.css">
</head>
<body>
	<div id="container">
    	<h2>Danh bạ</h2>

    	<div id="body">
	        <table>
	            <tr>
	                <th>#</th>
	                <th>Tên</th>
	                <th>Số điện thoại 1</th>	           
	                <th>Số điện thoại 2</th>
	                <th>Email</th>
	                <th>Facebook</th>
	                <th>Company</th>
	                <th></th>
	            </tr>
	            <?php foreach ($contacts as $idx => $item): ?>
			    <tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>" >
			        <td class="center"><?= $idx+1 ?></td>
			        <td><?= $item->name ?></td>
			        <td><?= $item->phone1 ?></td>
			        <td><?= $item->phone2 ?></td>
			        <td><?= $item->email ?></td>
			        <td><?= $item->fb ?></td>
			        <td><?= $item->company ?></td>
			        <td class="center"><a href="<?= base_url() ?>contact/edit/<?= $item->id ?>">Chi tiết</a></td>
			    </tr>
			    <?php endforeach; ?>
	        </table>

        	<a href="<?= base_url() ?>contact/add" class="btn"><button type="button" id="btnAdd">Thêm mới</button></a>
    	</div>

	</div>
</body>
</html>