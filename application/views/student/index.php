  <!-- <!DOCTYPE html>
<html>
<head>
    <title> Danh sách Học sinh </title>
    <link rel = "stylesheet" type = "text/css" href = "<?php  
    //echo base_url(); ?>assets/css/bootstrap.min.css">
    <script type = 'text/javascript' src = "<?php  
    //echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>   --> 
    <table class="table table-striped">
        <thead>
          <tr>
             <!-- <td> Id </td> -->
            <th scope="col">Tên Học sinh </th>
            <th scope="col">Lớp </th>
            <th scope="col">Hòm thư </th>
            <th scope="col">Địa chỉ </th>
            <th scope="col">Ảnh đại diện </th>  
            <th scope="col">Operation </th> 
          </tr>
        </thead>
        <tbody>
          <?php 
              foreach ($result as $value) { ?>
              <tr>
                <td> <?php echo $value->fullname; ?> </td>
                <td> <?php echo $value->className; ?> </td>
                <td> <?php echo $value->mail; ?> </td>
                <td> <?php echo $value->address; ?> </td>
                <!-- <td> <?php //echo "../upload/images/".$value->image ?> </td> -->

                <td><img src="<?php echo base_url('upload/images/')?><?php echo $value->image ?>" alt="" border=3 height=100 width=100></img></td>

                <td>

                    <a href="<?php echo base_url('student/');?>edit/<?php echo $value->id ?>">Sửa</a><br>
                    <a href="<?php echo base_url('student/');?>delete/<?php echo $value->id ?>">Xóa</a><br>
                    <a href="<?php echo base_url('student/');?>sendMail/<?php echo $value->id ?>">Gửi mail</a>
                </td>
              </tr>
          <?php 
          } ?>
        </tbody>
    </table>

    <a href="<?php echo base_url('student/');?>add">Bổ sung</a>
<!-- 
</body>
</html>