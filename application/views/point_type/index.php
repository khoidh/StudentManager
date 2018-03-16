<!-- <!DOCTYPE html>
<html>
<head>
	<title> Danh sách kiểu điểm</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>

<body>
 -->
   <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Mã</th>
        <th scope="col">Tên kiểu</th>
        <th scope="col">Function</th>
      </tr>
    </thead>
    <tbody>
      <?php 
          foreach ($result as $value) { ?>
          <tr>
            <!-- <td scope="row"> <?php $row_index ?> </th> -->
            <td> <?php echo $value->id; ?> </td>
            <td> <?php echo $value->name; ?> </td>
            <td>
                <a href="<?php echo base_url('point_type/');?>edit/<?php echo $value->id ?>">Sửa</a>
                <a href="<?php echo base_url('point_type/');?>delete/<?php echo $value->id ?>">Xóa</a>
            </td>
          </tr>
      <?php 
      } ?>
    </tbody>
   </table>

    <a href="<?php echo base_url('point_type/');?>add">Bổ sung</a>
<!-- </body>
</html> -->