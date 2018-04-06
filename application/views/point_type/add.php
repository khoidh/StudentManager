<!-- <!DOCTYPE html>
<html>
<head>
	<title>Bổ sung kiểu điểm</title>
</head>
<body> -->
<?php $this->load->view("point_type/head",$this->data);?>

	<form method="post" action="<?php echo base_url('point_type/add_point_type');?>">
		<table border="1px" cellspacing="0" cellpadding="2">
			<tr>
				<td> Mã </td>
				<td><input type="text" name="id" value="" readonly> </td>
			</tr>
			<tr>
				<td> Tên kiểu </td>
				<td><input type="text" name="name" value="" > </td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="" value="Bổ sung"></td>				
			</tr>
		</table>
		
	</form>
<!-- </body>
</html> -->