<!-- <!DOCTYPE html>
<html>
<head>
	<title> Danh sách lớp học </title>
	<link rel = "stylesheet" type = "text/css" href = "<?php 
  //echo base_url(); ?>assets/css/bootstrap.min.css">
	<script type = 'text/javascript' src = "<?php 
  // echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>

<body> -->

   <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Class</th>
        <th scope="col">Function</th>
      </tr>
    </thead>
    <tbody>
      <?php 
          // $row_index=0;
          foreach ($result as $value) { ?>
          <tr>
            <!-- <td scope="row"> <?php $row_index ?> </th> -->
            <td> <?php echo $value->id; ?> </td>
            <td> <?php echo $value->name; ?> </td>
            <td>
                <a href="<?php echo base_url('classManager/');?>edit/<?php echo $value->id ?>">Sửa</a>
                <a href="<?php echo base_url('classManager/');?>delete/<?php echo $value->id ?>">Xóa</a>
            </td>
          </tr>
      <?php 
          // $row_index++ ;
      } ?>
    </tbody>
   </table>

    <a href="<?php echo base_url('classManager/');?>add">Bổ sung</a>
<!-- </body>
</html> -->