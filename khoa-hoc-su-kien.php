<?php
include_once('components/head.php');
?>
<body>
	<?php include_once('components/header.php') ?>
	<main class="main">
		<div class="swiper-container course-event-slider py-5 d-sm-block d-none">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="https://swiperjs.com/demos/images/nature-1.jpg" style="border-radius: 10px" />
				</div>
				<div class="swiper-slide">
					<img src="https://swiperjs.com/demos/images/nature-2.jpg" style="border-radius: 10px" />
				</div>
				<div class="swiper-slide">
					<img src="https://swiperjs.com/demos/images/nature-3.jpg" style="border-radius: 10px" />
				</div>
				<div class="swiper-slide">
					<img src="https://swiperjs.com/demos/images/nature-4.jpg" style="border-radius: 10px" />
				</div>
			</div>
			<div class="swiper-button-next fw-600 rounded-circle"></div>
			<div class="swiper-button-prev fw-600 rounded-circle"></div>
		</div>
		<div class="container-lg py-lg-5 py-md-3 py-2">
			<div class="events course-event-tabs container-fluid py-lg-4 py-md-3 py-2">
				<ul class="nav nav-tabs border-bottom-0 tabs-list-event py-lg-4 py-md-3 py-2 d-flex justify-content-center" id="myTab" role="tablist">
					<li class="nav-item pe-3" role="presentation">
						<button class="nav-link-custom fw-600 bg-transparent text-second fs-1125 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tất cả</button>
					</li>
					<li class="nav-item pe-3" role="presentation">
						<button class="nav-link-custom fw-600 bg-transparent text-second fs-1125" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Khoá học</button>
					</li>
					<li class="nav-item pe-3" role="presentation">
						<button class="nav-link-custom fw-600 bg-transparent text-second fs-1125" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Retreat</button>
					</li>
					<li class="nav-item pe-3" role="presentation">
						<button class="nav-link-custom fw-600 bg-transparent text-second fs-1125" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Pháp đàm</button>
					</li>
					<li class="nav-item pe-3" role="presentation">
						<button class="nav-link-custom fw-600 bg-transparent text-second fs-1125" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Trà đàm</button>
					</li>
					<li class="nav-item pe-3" role="presentation">
						<button class="nav-link-custom fw-600 bg-transparent text-second fs-1125" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Webinar</button>
					</li>
					<li class="nav-item pe-3" role="presentation">
						<button class="nav-link-custom fw-600 bg-transparent text-second fs-1125" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Sự kiện khác</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="container-fluid">
							<div class="row row-cols-sm-2 row-cols-1">
								<?php for ($i=0; $i < 4; $i++) { ?>
									<div class="col course-event__component d-lg-flex d-block py-3 rounded-10">
										<div class="_left-content position-relative ms-lg-5 ms-md-2 ms-0 w-lg-50">
											<a href="" title="" class="d-block _link-img">
												<img src="assets/images/couse-event-comp.jpg" class="_img img-fluid" alt="">
											</a>
											<div class="_times-up bg-primary-color d-inline-block position-absolute text-white p-1">
												<div class="h3">14</div>
												<span>T3, 2021</span>
											</div>
											<a href="" class="_regis-button bg-second py-1 px-2 text-decoration-none link-light d-inline-block position-absolute" title="">ĐĂNG KÍ</a>
										</div>
										<div class="_right-content w-lg-50 py-lg-3 py-1 px-lg-2 px-1 position-relative">
											<a class="_title fw-600 link-dark text-decoration-none" href="">Pháp đàm: Tâm & Thiền - Bản chất & Không tông phái</a>
											<div class="fst-italic _type fs-875 text-secondary">Online</div>
											<div class="_content py-lg-4 py-md-2 py-1">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
											</div>
											<div class="primary-color position-absolute">
											đ25.000</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
				</div>
			</div>
			<div class="register-event w-lg-75 w-100 mx-auto mb-lg-5 mb-md-4 mb-sm-3 mb-2">
				<form action="" method="get" accept-charset="utf-8" class="d-block d-sm-flex">
					<label for="media-center-register" class="_label px-lg-3 px-md-2 px-1 text-light fw-600">Đăng kí nhận thông tin sự kiện mới</label><input type="text" placeholder="Nhập email của bạn tại đây" id='media-center-register' class="_input flex-grow-1 px-lg-3 px-md-2 px-1 w-md-auto w-100">
				</form>
			</div>
			<div class="news container-fluid">
				<div class="row row-cols-sm-2 row-cols-1">
					<?php for ($i=0; $i < 4; $i++) { ?>
						<div class="col course-event__component d-lg-flex d-block py-3 rounded-10">
							<div class="_left-content position-relative ms-lg-5 ms-md-2 ms-0 w-lg-50">
								<a href="" title="" class="d-block _link-img">
									<img src="assets/images/couse-event-comp.jpg" class="_img img-fluid" alt="">
								</a>
								<div class="_times-up bg-primary-color d-inline-block position-absolute text-white p-1">
									<div class="h3">14</div>
									<span>T3, 2021</span>
								</div>
								<a href="" class="_regis-button bg-second py-1 px-2 text-decoration-none link-light d-inline-block position-absolute" title="">ĐĂNG KÍ</a>
							</div>
							<div class="_right-content w-lg-50 py-lg-3 py-1 px-lg-2 px-1 position-relative">
								<a class="_title fw-600 link-dark text-decoration-none" href="">Pháp đàm: Tâm & Thiền - Bản chất & Không tông phái</a>
								<div class="fst-italic _type fs-875 text-secondary">Online</div>
								<div class="_content py-lg-4 py-md-2 py-1">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
								</div>
								<div class="primary-color position-absolute">
								đ25.000</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="row justify-content-md-between justify-content-center">
					<?php for ($i=0; $i < 10; $i++) {?> 
						<a href="" class="_hashtag col text-decoration-none fst-italic">#tradam</a>
					<?php } ?>
				</div>
				<div class="web-pagination text-center mt-lg-4 mt-md-3 mt-2 mb-lg-5 mb-md-3 mb-2">
					<a href="" class="web-pagination__previous"><</a>
					<?php for ($i=1; $i < 6 ; $i++) { ?>
						<a href="" class="web-pagination__page"><?php echo $i ?></a>
					<?php } ?>
					<a href="" class="web-pagination__next">></a>
				</div>
			</div>
			<div class="course-event__regis mx-auto clearfix">
				<div class="_left-side float-start w-50 position-relative d-sm-block d-none">
					<img src="assets/images/regis-comp.jpg" class="_img img-fluid">
					<div class="_content text-light position-absolute ps-xl-5 ps-lg-4 ps-md-3 ps-2">
						<div class="h1 fw-600">ĐĂNG KÍ THÀNH VIÊN</div>
						<div class="_benefit fst-italic mb-xl-4 mb-lg-3 mb-2">Thăng cấp lên thành viên chính thức của Like A Tree để hưởng nhiều quyền lợi hấp dẫn!</div>
						<img src="assets/images/logo small.png" alt="" class="_img img-fluid">
					</div>
				</div>
				<div class="_right-side p-lg-5 p-md-3 px-2 py-4 bg-primary-color w-sm-50 w-100 float-start clearfix">
					<form action="" class="course-event__regis-form">
						<input type="text" placeholder='Tên đăng nhập' class="form-control rounded-pill _input py-xl-4 py-md-2 py-1 ps-4 border-0 py-md-3 py-1 mb-lg-3 mb-2">
						<input type="text" placeholder='Tên đăng nhập' class="form-control rounded-pill _input py-xl-4 py-md-3 py-1 ps-4 border-0 py-md-3 py-1 mb-lg-3 mb-2">
						<input type="text" placeholder='Tên đăng nhập' class="form-control rounded-pill _input py-xl-4 py-md-3 py-1 ps-4 border-0 py-md-3 py-1 mb-lg-3 mb-2">
						<div class="_password-input__wrapper position-relative">
							<input type="password" placeholder='Tên đăng nhập' class="form-control rounded-pill _password-input _input py-xl-4 py-md-3 py-1 ps-4 border-0 py-md-3 py-1 mb-lg-3 mb-2">
							<div class="_eye-icon position-absolute">
								<span class="_show">
									<i class="fas fa-eye text-light"></i>
								</span>
								<span class="_hide d-none">
									<i class="fal fa-eye-slash text-light"></i>
								</span>
							</div>
						</div>
						<button type="submit" class="btn btn-light primary-color fw-600 d-block w-100 py-xl-4 py-md-3 py-1 py-md-3 py-1 rounded-pill">ĐĂNG KÍ</button>
					</form>
					<div class="_problem w-75 float-end text-end text-light fs-875">Bạn đang gặp vấn đề? Liên hệ với chúng mình qua
					likeatreevn@gmail.com</div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once('components/footer.php') ?>
	<?php include_once('components/extension.php') ?>
</body>
<?php include_once('components/script.php') ?>
<script type="text/javascript" charset="utf-8" src="assets/script/components/course-event.js"></script>