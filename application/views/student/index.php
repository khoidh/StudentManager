
<?php $this->load->view("student/head",$this->data);?>
<?php //var_dump($class);   ?>

<div class="wrapper">
    <form class="widget" action="<?php echo base_url() . 'student/index1'; ?>" method="post">
        <select class="form-control" name="field">
            <option selected="selected" disabled="disabled" value="">Filter By</option>
            <option value="fullname">Họ tên</option>
            <option value="className">Lớp</option>
            <option value="mail">Hòm thư</option>
        </select>
        <input class="form-control" type="text" name="search" value="" placeholder="Search...">
        <input class="button blueB" type="submit" name="filter" value="Go">
    </form>
</div>

<div class="wrapper">
    <div class="widget">

        <div class="title">
            <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
            <h6>Danh sách học sinh</h6>
            <div class="num f12">Tổng số: <b><?php echo $total;?></b></div>
        </div>

        <form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
<!-- filter -->
                <thead class="filter"><tr><td colspan="9">
                        <form class="list_filter form" action="" method="post">
                            <table cellpadding="0" cellspacing="0" width="100%"><tbody>

                                <tr>
                                    <td class="label" style="width:60px;"><label for="filter_id">Họ tên</label></td>
                                    <td class="item"><input name="fullname" value="" id="filter_id" type="text" style="width:95px;"></td>

                                    <td class="label" style="width:60px;"><label for="filter_type">Lớp</label></td>
                                    <td class="item">
                                        <select name="className">

                                            <option value=""></option>
                                            <?php foreach ($class as $item){ ?>
                                                <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                                            <?php  }?>

                                        </select>
                                    </td>

                                    <td class="label" style="width:60px;"><label for="filter_user">Hòm thư</label></td>
                                    <td class="item"><input name="mail" value="" id="filter_user" class="tipS" type="text" original-title="Nhập mã thành viên"></td>

                                    <td class="label" style="width:60px;"><label for="filter_user">Địa chỉ</label></td>
                                    <td class="item"><input name="address" value="" id="filter_user" class="tipS" type="text" original-title="Nhập mã thành viên"></td>

                                    <td colspan="2" style="width:60px">
<!--                                    <input type="submit" class="button blueB" value="Lọc">-->
                                        <button type="button" class="button blueB"
                                                onclick="myFunction()">Lọc</button>

                                    <input type="reset" class="basic" value="Reset" onclick="window.location.href = 'index.php/admin/product_order.html'; ">
                                    </td>

                                </tr>


                                </tbody></table>
                        </form>
                    </td></tr></thead>

<!-- end filter -->
                <thead>
                <tr>
                    <td style="width:10px;"><img src="<?php echo public_url()?>/admin/images//icons/tableArrows.png" /></td>
                    <td style="width:80px;">Họ và tên</td>
                    <td>Lớp</td>
                    <td>Hòm thư </td>
                    <td>Địa chỉ </td>
                    <td>Ảnh đại diện </td>
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

                        <td> <?php echo $value->fullname; ?> </td>
                        <td> <?php echo $value->className; ?> </td>
                        <td> <?php echo $value->mail; ?> </td>
                        <td> <?php echo $value->address; ?> </td>
                        <!-- <td> <?php //echo "../upload/images/".$value->image ?> </td> -->

                        <td><img src="<?php echo base_url('upload/images/')?><?php echo $value->image ?>" alt="" border=3 height=100 width=100></img></td>


                        <td class="option">
                            <a href="<?php echo base_url('student/');?>edit/<?php echo $value->id ?>" title="Chỉnh sửa" class="tipS ">
                                <img src="<?php echo public_url()?>/admin/images//icons/color/edit.png" />
                            </a>

                            <a href="<?php echo base_url('student/');?>delete/<?php echo $value->id ?>" title="Xóa" class="tipS verify_action" >
                                <img src="<?php echo public_url()?>/admin/images//icons/color/delete.png" />
                            </a>

                            <br>
                            <a href="<?php echo base_url('student/');?>sendMail/<?php echo $value->id ?>">Gửi mail</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </form>
    </div>
</div>


<script>
    function myFunction() {
        alert(<?php echo $class ?>);

    }
</script>