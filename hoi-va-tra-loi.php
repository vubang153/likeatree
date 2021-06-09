<?php
include_once('components/head.php');
?>
<body>
	<?php include_once('components/header.php') ?>
	<main class="main">
		<div class="QA__banner bg-dark" style="height: 400px"></div>
		<div class="container-md">
			<div class="row pt-4 QA">
				<div class="col-lg-8 col-12">
					<?php for ($i=0; $i < 8; $i++) { ?>
						<div class="QA__quest mb-lg-4 mb-md-3 mb-2">
							<div class='QA__quest__title bg-second text-light px-lg-4 px-md-3 px-2 py-lg-3 py-md-2 py-1 rounded-10 fw-600 position-relative'>
								<span class="_title">Lorem ipsum dolor sit amet, consectetur?</span>
								<span class="_extend ms-4 d-inline-block position-absolute">
									<i class="far fa-plus _show"></i>
									<i class="far fa-minus _hide"></i>
								</span>
							</div>
							<div class="QA__quest__content px-lg-3 px-md-2 px-1">
								<div class="primary-color _title py-lg-3 py-md-2 py-1">TRẢ LỜI:</div>
								<div class="_content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ete. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ete
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="col-lg-4 col-12">
					<form action="" method="get" accept-charset="utf-8" class="form-qa rounded-10 py-3 px-md-4 px-3 text-center">
						<h4 class="_title fw-600 primary-color">ĐẶT CÂU HỎI CHO CHÚNG TÔI</h4>
						<textarea class="_content w-100 form-control my-1 rounded-10 _input" name="content" rows="10" placeholder="Nhập nội dung câu hỏi"></textarea>
						<input type="text" name="name" class="_name form-control my-1 _input  rounded-10 py-3" placeholder="Họ và tên">
						<input type="number" name="number" class="_number form-control my-1 _input rounded-10 py-3" placeholder="Số điện thoại">
						<button class="btn btn-primary-color w-100 mt-2 py-lg-4 py-md-3 py-2 rounded-10 fs-1125 fw-600">GỬI CÂU HỎI</button>
					</form>
				</div>
			</div>
		</div>
	</main>
	<?php include_once('components/footer.php') ?>
	<?php include_once('components/extension.php') ?>
</body>
<?php include_once('components/script.php') ?>
<script type="text/javascript" charset="utf-8" src="assets/script/components/QA.js"></script>