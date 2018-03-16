
<!DOCTYPE html>
<html>
<head>
	<title>Layout master</title>

<?php $this->load->view('admin/head')?>

</head>
<body class="fix-header fix-sidebar">
	<!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <div id="main-wrapper">
    	<?php $this->load->view('admin/sidebar')?>
		<div class="page-wrapper">
			<!-- content -->

		<?php $this->load->view($page)?>

		</div>
    </div>
    	<?php $this->load->view('admin/script')?>

</body>

</html>