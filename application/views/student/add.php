<?php $this->load->view("student/head",$this->data);?>

<div class="wrapper">
    <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('student/add/');?>">
        <table border="1px">
            <tr>
                <td> Tên học sinh </td>
                <td><input type="text" name="fullname" value=""> </td>
            </tr>
            <tr>
                <td> Lớp học </td>
                <td>
                    <!-- <select name="thelist" onChange="combo(this, 'theinput')"> -->
                    <select name="class_id" >
                        <?php foreach ($class as $item) { ?>
                            <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                        <?php } ?>
                    </select>
                    <!-- <input type="text" name="name" value="<?php echo $result->name ?>" >  -->
                </td>
            </tr>
            <tr>
                <td> Hòm thư </td>
                <td><input type="text" name="mail" value=""> </td>
            </tr>
            <tr>
                <td> Địa chỉ </td>
                <td><input type="text" name="address" value=""> </td>
            </tr>
            <tr>
                <td> Ảnh đại diện </td>
                <!-- <td><input type="text" name="image" value=""> </td> -->
    <!--            <td><input type="file" name="image" id="getFile" value=""></td>-->
                <td><input type="file" name="image" id="getFile" value=""></td>
            </tr>


            <tr>
                <td colspan="2"><input type="submit" name="" value="Bổ sung"></td>
            </tr>
        </table>

    </form>
</div>
<div class="clear mt30"></div>