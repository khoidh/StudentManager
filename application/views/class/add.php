<!-- <!DOCTYPE html>
<html>
<head>
	<title>Bổ sung lớp học</title>
</head>
<body> -->
<?php $this->load->view("class/head",$this->data);?>

	<form method="post" action="<?php echo base_url('classmanager/add_class');?>">
		<table border="1px">
			<tr>
				<td> Mã lớp </td>
				<td><input type="text" name="id" value="" readonly> </td>
			</tr>
			<tr>
				<td> Tên lớp </td>
				<td><input type="text" name="name" value="" > </td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="" value="Bổ sung"></td>				
			</tr>
		</table>
		
	</form>
<!-- </body>
</html> -->