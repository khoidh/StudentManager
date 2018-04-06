<!-- <!DOCTYPE html>
<html>
<head>
	<title>Bổ sung thông tin điểm</title>
</head>
<body> -->
<?php $this->load->view("point/head",$this->data);?>

	<!-- <form method="post" action="<?php echo base_url('point/add');?>"> -->
	<form method="post" action="<?php echo base_url('point/add_point');?>">
		<table border="1px">
			<tr>
				<td> Tên học sinh </td>
				<td>
					<!-- <select name="thelist" onChange="combo(this, 'theinput')"> -->
					<select name="student_id" >
						<?php foreach ($student as $item) { ?>
						  <option value="<?php echo $item->id ?>"><?php echo $item->fullname ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td> Môn học </td>
				<td>
					<!-- <select name="thelist" onChange="combo(this, 'theinput')"> -->
					<select name="subject_id" >
						<?php foreach ($subject as $item) { ?>
						  <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td> Kiểu điểm </td>
				<td>
					<!-- <select name="thelist" onChange="combo(this, 'theinput')"> -->
					<select name="point_type_id" >
						<?php foreach ($point_type as $item) { ?>
						  <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td> Điểm </td>
				<td><input type="text" name="point" value="" > </td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="" value="Bổ sung"></td>				
			</tr>
		</table>
		
	</form>
<!-- </body>
</html> -->