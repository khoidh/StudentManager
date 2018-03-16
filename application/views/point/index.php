<!-- <!DOCTYPE html>
<html>
<head>
	<title> Quản lý điểm </title>
	<link rel = "stylesheet" type = "text/css" href = "<?php 
	//echo base_url(); ?>assets/css/bootstrap.min.css">
	<script type = 'text/javascript' src = "<?php 
	//echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body> -->

	<table class="table table-striped">
	    <thead>
	      <tr>
	      	<!-- <td> Id </td> -->
			<th scope="col">Học sinh </th>
			<th scope="col">Môn học </th>
<!-- 			<?php 
	          	foreach ($point_type as $value) { ?>
	          		<th scope="col"><?php echo $value->name; ?> </th>
	        <?php 
	      	} ?> -->
	      	<th scope="col">điểm </th>	
	      	<th scope="col">điểm </th>	
			<th scope="col">Operation </th>	
	      </tr>
	    </thead>

		<tbody>
	      <?php 
	          // $row_index=0;
	          foreach ($result as $value) { ?>
	          <tr>
	            <td> <?php echo $value->fullname; ?> </td>
	            <td> <?php echo $value->subject_name; ?> </td>
	            <td> <?php echo $value->point_type_name; ?> </td>
	            <td> <?php echo $value->point; ?> </td>
	            <td>
	                <a href="<?php echo base_url('point/');?>edit/<?php echo $value->id ?>">Sửa</a>
	                <a href="<?php echo base_url('point/');?>delete/<?php echo $value->id ?>">Xóa</a>
	            </td>
	          </tr>
	      <?php 
	          // $row_index++ ;
	      } ?>
	    </tbody>
	   

	</table>

    <a href="<?php echo base_url('point/');?>add">Bổ sung</a>
<!-- 
</body>
</html> -->