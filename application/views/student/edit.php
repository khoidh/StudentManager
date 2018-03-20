<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--	<title>Sửa thông tin sinh viên</title>-->
<!--</head>-->
<!--<body> -->

	<form  method="post" enctype="multipart/form-data" action="<?php echo base_url('student/edit/'.$result->id);?>">

		<table class ="" border="1px">
			<tr>
				<td> Mã </td>
				<td><input type="text" name="id" value="<?php echo $result->id ?>" readonly> </td>
			</tr>
			<tr>
				<td> Tên </td>
				<td><input type="text" name="fullname" value="<?php echo $result->fullname ?>" > </td>
			</tr>		
			<tr>
				<td> classname </td>
				<td>
					<!-- <select name="thelist" onChange="combo(this, 'theinput')"> -->
					<select name="class_id" onChange="combo(this, 'theinput')">
						<?php foreach ($class as $item) { ?> 
						  <option value="<?php echo $item->id ?>" <?php if($item->id == $result->class_id){echo "selected";} ?>><?php echo $item->name ?></option>

						<?php } ?>
					</select>
					<!-- <input type="text" name="name" value="<?php echo $result->name ?>" > --> 
				</td>
			</tr>
			<tr>
				<td> Mail </td>
				<td><input type="text" name="mail" value="<?php echo $result->mail ?>" > </td>
			</tr>
			<tr>
				<td> Địa chỉ </td>
				<td><input type="text" name="address" value="<?php echo $result->address ?>" > </td>
			</tr>
			<tr>
				<td> Ảnh đại diện </td>				
				<td>
 					<input type="file" name="image" id="getFile" value="<?php echo base_url('upload/images/')?><?php echo $result->image ?>">

<!--  					<label  style="display:block;" onclick="document.getElementById('getFile').click()"><img src="<?php 
//echo base_url('upload/images/')?><?php 
//echo $result->image ?>">Choose Image</label >
  					<input  type="file" name="image" id="getFile"  style="display:none" >   -->
				</td>
				<!-- <td><input type="text" name="image" value="<?php 
				//echo $result->image ?>" > </td> -->
			</tr>
			<tr>
				<td colspan="2"><input type="submit"  value="Cập nhật"></td>				
			</tr>
		</table>
		
	</form>
<!-- </body>
</html>