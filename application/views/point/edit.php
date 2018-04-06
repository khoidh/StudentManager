<!-- <!DOCTYPE html>
<html>
<head>
	<title>Sửa điểm học sinh</title>
</head>
<body> -->

<?php $this->load->view("point/head",$this->data);?>

	<form method="post" action="<?php echo base_url('update_point/'.$result->id);?>">
		<table border="1px">
			<tr>
				<td> Mã </td>
				<td><input type="hidden" name="id" value="<?php echo $result->id ?>" > </td>
			</tr>
			<tr>
				<td> Tên học sinh </td>
				<td>
					<!-- <select name="student_id" onChange="combo(this, 'theinput')"> -->
					<select name="student_id" >
						<?php foreach ($student as $item) { ?>
						  <option value="<?php echo $item->id ?>" <?php if($item->id == $result->student_id){echo "selected";} ?> ><?php echo $item->fullname ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td> Môn học </td>
				<td>
					<!-- <select name="subject_id" onChange="combo(this, 'theinput')"> -->
					<select name="subject_id" >
						<?php foreach ($subject as $item) { ?>
						  <option value="<?php echo $item->id ?>" <?php if($item->id == $result->subject_id){echo "selected";} ?> ><?php echo $item->name ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td> Kiểu điểm </td>
				<td>
					<!-- <select name="point_type_id" onChange="combo(this, 'theinput')"> -->
					<select name="point_type_id" >
						<?php foreach ($point_type as $item) { ?>
						  <option value="<?php echo $item->id ?>" <?php if($item->id == $result->point_type_id){echo "selected";} ?> ><?php echo $item->name ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>

			<tr>
				<td> point </td>
				<td><input type="text" name="point" value="<?php echo $result->point ?>" > </td>
			</tr>	
			<tr>
				<td colspan="2"><input type="submit" name="" value="Cập nhật"></td>				
			</tr>
		</table>
		
	</form>
<!-- </body>
</html> -->