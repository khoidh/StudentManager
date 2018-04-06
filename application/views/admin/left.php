<div id="leftSide" style="padding-top:30px;">

    <!-- Account panel -->

    <div class="sideProfile">
        <a href="#" title="" class="profileFace"><img width="40" src="<?php echo public_url()?>/admin/images/user.png"></a>
        <span>Xin chào: <strong>admin!</strong></span>
        <span>Đàm Huy Khởi</span>
        <div class="clear"></div>
    </div>
    <div class="sidebarSep"></div>
    <!-- Left navigation -->

    <ul id="menu" class="nav">

        <li class="home">

            <a href="<?php echo base_url('home/index') ?>" class="active" id="current">
                <span>HOME</span>
                <strong></strong>
            </a>

        </li>
        <li class="account">

            <a href="<?php echo base_url('student/index') ?>" class="exp inactive">
                <span>Quản lý học sinh</span>
                <strong>2</strong>
            </a>

            <ul class="sub" style="display: none;">
                <li>
                    <a href="<?php echo base_url('student/index') ?>">
                        Danh sách học sinh							</a>
                </li>
                <li>
                    <a href="<?php echo base_url('student/add') ?>">
                        Thêm mới học sinh							</a>
                </li>
            </ul>

        </li>
        <li class="product">

            <a href="<?php echo base_url('classManager/index') ?>" class="exp inactive">
                <span>Quản lý lớp học</span>
                <strong>2</strong>
            </a>

            <ul class="sub" style="display: none;">
                <li>
                    <a href="<?php echo base_url('classManager/index') ?>">
                        Danh sách lớp học							</a>
                </li>
                <li>
                    <a href="<?php echo base_url('classManager/add') ?>">
                        Bổ sung lớp học mới							</a>
                </li>
            </ul>

        </li>
        <li class="account">

            <a href="<?php echo base_url('subject/index') ?>" class="exp inactive">
                <span>Quản lý môn học</span>
                <strong>2</strong>
            </a>

            <ul class="sub" style="display: none;">
                <li>
                    <a href="<?php echo base_url('subject/index') ?>">
                        Danh sách môn học							</a>
                </li>
                <li>
                    <a href="<?php echo base_url('subject/add') ?>">
                        Bổ sung môn học mới							</a>
                </li>
            </ul>

        </li>
        <li class="support">

            <a href="<?php echo base_url('point/index') ?>" class="exp inactive">
                <span>Quản lý điểm</span>
                <strong>2</strong>
            </a>

            <ul class="sub" style="display: none;">
                <li>
                    <a href="<?php echo base_url('point/index') ?>">
                        Danh sách điểm							</a>
                </li>
                <li>
                    <a href="<?php echo base_url('point/add') ?>">
                        Nhập điểm cho học sinh						</a>
                </li>
            </ul>

        </li>

    </ul>

</div>
<div class="clear"></div>


