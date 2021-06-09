<?php
include_once('components/head.php');
?>
<body>
	<?php include_once('components/header.php') ?>
	<main class="main">
		<div class="container-lg py-lg-5 py-md-3 py-2">
			<div class="member-register">
				<div class="_title fw-600 fs-1 text-center">
					<span class='primary-color'>ĐĂNG KÍ THÀNH CÔNG!</span>
				</div>
				<div class="_content py-lg-4 py-md-3 py-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="member-benefit px-lg-4 px-md-3 px-2 py-lg-3 py-md-2 py-1 text-center container-fluid">
				<h3 class="_title fw-600 mb-lg-4 mb-md-3 mb-2">QUYỀN LỢI THÀNH VIÊN</h3>
				<div class="_list-component row-cols-lg-3 row-cols-2 row">
					<?php for ($i=0; $i < 3; $i++) {?> 
						<div class="_component p-md-3 p-2 rounded-10">
							<a href="" class="_img-link">
								<img src="assets/images/membership.png" class="_img img-fluid">
							</a>
							<div class="_content d-flex justify-content-between py-lg-3 py-md-2 py-1">
								<a href="" title="" class="_link link-dark text-decoration-none">Blend Trí tuệ</a>
								<a class="d-inline-block _detail-button px-2 rounded bg-primary-color link-light text-decoration-none" href="">Chi tiết</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<a class="w-lg-25 w-md-50 w-100 mx-auto bg-primary-color text-center py-lg-3 py-2 fw-600 text-decoration-none link-light d-block rounded" href="" data-bs-toggle="modal" data-bs-target="#formLogin">ĐĂNG NHẬP</a>
		</div>
	</main>
	<?php include_once('components/footer.php') ?>
	<?php include_once('components/extension.php') ?>
</body>
<?php include_once('components/script.php') ?>