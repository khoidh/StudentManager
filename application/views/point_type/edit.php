<!-- <!DOCTYPE html>
<html>
<head>
	<title>Sửa kiểu điểm</title>
</head>
<body> -->
<?php $this->load->view("point_type/head",$this->data);?>

	<form method="post" action="<?php echo base_url('point_type/update/'.$result->id);?>">
		<table border="1px">
			<tr>
				<td> id </td>
				<td><input type="text" name="id" value="<?php echo $result->id ?>" readonly> </td>
			</tr>
			<tr>
				<td> classname </td>
				<td><input type="text" name="name" value="<?php echo $result->name ?>" > </td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="" value="Cập nhật"></td>				
			</tr>
		</table>
		
	</form>
<!-- </body>
</html> -->