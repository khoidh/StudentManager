<!-- <!DOCTYPE html>
<html>
<head>
	<title>edit lass</title>
</head>
<body> -->

	<form method="post" action="<?php echo base_url('update_subject/'.$result->id);?>">
		<table border="1px">
			<tr>
				<td> Mã </td>
				<td><input type="text" name="id" value="<?php echo $result->id ?>" readonly> </td>
			</tr>
			<tr>
				<td> Tên môn học </td>
				<td><input type="text" name="name" value="<?php echo $result->name ?>" > </td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="" value="Cập nhật"></td>				
			</tr>
		</table>
		
	</form>
<!-- </body>
</html> -->