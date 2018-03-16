<!-- <!DOCTYPE html>
<html>
<head>
	<title>Bổ sung môn học</title>
</head>
<body> -->
	<form method="post" action="<?php echo base_url('subject/add_subject');?>">
		<table border="1px">
<!-- 			<tr>
				<td> Mã </td>
				<td><input type="text" name="id" value="" readonly> </td>
			</tr> -->
			<tr>
				<td> Tên môn học </td>
				<td><input type="text" name="name" value="" > </td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="" value="Bổ sung"></td>				
			</tr>
		</table>
		
	</form>
<!-- </body>
</html> -->