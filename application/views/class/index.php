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

<?php $this->load->view("class/head",$this->data);?>

<div class="wrapper">
    <div class="widget">

        <div class="title">
            <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
            <h6>Danh sách lớp học</h6>
            <div class="num f12">Tổng số: <b><?php echo $total;?></b></div>
        </div>

        <form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
                <thead>
                <tr>
                    <td style="width:10px;"><img src="<?php echo public_url()?>/admin/images//icons/tableArrows.png" /></td>
                    <td style="width:80px;">Mã lớp</td>
                    <td>Tên lớp</td>
                    <td style="width:100px;">Hành động</td>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <td colspan="7">
                        <div class="list_action itemActions">
                            <a href="#submit" id="submit" class="button blueB" url="user/del_all.html">
                                <span style='color:white;'>Xóa hết</span>
                            </a>
                        </div>

                        <div class='pagination'>
                        </div>
                    </td>
                </tr>
                </tfoot>

                <tbody>
                <!-- Filter -->

                <?php
                foreach ($result as $value) : ?>
                    <tr>
                        <td><input type="checkbox" name="id[]" value="<?php echo $value->id?>" /></td>

                        <td> <?php echo $value->id; ?> </td>
                        <td> <?php echo $value->name; ?> </td>

                        <td class="option">
                            <a href="<?php echo base_url('student/');?>edit/<?php echo $value->id ?>" title="Chỉnh sửa" class="tipS ">
                                <img src="<?php echo public_url()?>/admin/images//icons/color/edit.png" />
                            </a>

                            <a href="<?php echo base_url('student/');?>delete/<?php echo $value->id ?>" title="Xóa" class="tipS verify_action" >
                                <img src="<?php echo public_url()?>/admin/images//icons/color/delete.png" />
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </form>
    </div>
</div>


