<?php
include_once('components/head.php');
?>
<body>
	<?php include_once('components/header.php') ?>
	<main class="main">
		<div class="container-lg">
			<div class="container-fluid event-news py-lg-4 py-md-3 py-2">
				<h3 class="event-news__title">Pháp đàm: Tâm & Thiền - Bản chất & Không tông phái</h3>
				<div class="event-news__times-author">
					<span class='fw-600 event-news__author'>Mao Trạch Đông</span>
					|
					<span class='events-news__times fst-italic'>14/03/2021, 8h00</span>
				</div>
				<div class="event-news__content mt-lg-4 mt-md-3 mt-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="container-fluid event-register-form mt-lg-4 mt-md-3 mt-2">
				<form action="" method="get" accept-charset="utf-8" class="row custom-form gy-lg-4 gy-md-3 gy-2">
					<div class="col-6">
						<input type="text" class="form-control py-lg-3 py-md-2 py-1 custom-form__input" placeholder="Họ và đệm">
					</div>
					<div class="col-6">
						<input type="text" class="form-control py-lg-3 py-md-2 py-1 custom-form__input" placeholder="Họ và đệm">
					</div>
					<div class="col-6">
						<input type="text" class="form-control py-lg-3 py-md-2 py-1 custom-form__input" placeholder="Họ và đệm">
					</div>
					<div class="col-6">
						<input type="text" class="form-control py-lg-3 py-md-2 py-1 custom-form__input" placeholder="Họ và đệm">
					</div>
					<div class="col-6">
						<input type="text" class="form-control py-lg-3 py-md-2 py-1 custom-form__input" placeholder="Họ và đệm">
					</div>
					<div class="col-6">
						<input type="text" class="form-control py-lg-3 py-md-2 py-1 custom-form__input" placeholder="Họ và đệm">
					</div>
					<div class="col-12">
						<input type="text" class="form-control py-lg-3 py-md-2 py-1 custom-form__input" placeholder="Họ và đệm">
					</div>
					<button class="col-7 rounded bg-primary-color mx-auto border-0 fw-600 py-3 text-white">
						ĐĂNG KÍ
					</button>
				</form>
			</div>
			<div class="container-fluid ralation-events py-lg-4 py-md-3 py-2">
				<hr>
				<h3 class="_title">Sự kiện liên quan.</h3>
				<div class="row row-cols-md-4 row-cols-2 gx-lg-5 gx-md-3">
					<?php for ($i=0; $i < 4 ; $i++) { ?> 
						<div class="col">
							<div class="news">
								<div class="news__image position-relative">
									<img src="assets/images/news.jpg" class="_img img-fluid w-100">
									<a href="" class="position-absolute d-inline-block text-decoration-none link-light _link py-1 px-2 bg-second">ĐĂNG KÍ</a>
								</div>
								<a href="" class="h5 text-decoration-none link-dark news__title d-block mt-md-2 mt-1">Pháp đàm 1</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</main>
	<?php include_once('components/footer.php') ?>
	<?php include_once('components/extension.php') ?>
</body>
<?php include_once('components/script.php') ?>