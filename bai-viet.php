<?php
include_once('components/head.php');
?>
<body>
	<?php include_once('components/header.php') ?>
	<main class="main">
		<div class="topic__banner bg-dark" style="height: 400px;"></div>
		
		<div class="container-lg py-lg-5 py-md-3 py-2">
			<div class="swiper-container topic__swiper">
				<div class="swiper-wrapper">
					<?php for ($i=0; $i < 3; $i++) { ?> 
						<div class="swiper-slide topic__slide">
							<img src="assets/images/topic in banner.jpg" class="_img img-fluid w-md-100 w-auto">
							<div class="_content px-lg-3 px-md-2 px-1 py-lg-4 py-md-3 py-2 position-absolute top-0 start-0 h-100">
								<span class="_times-up fst-italic">14/03/2021, 8h00</span>
								<p class="_title fw-600">Pháp đàm: Tâm & Thiền - Bản chất & Không tông phái</p>
								<div class="_read-more position-absolute">
									ĐỌC THÊM
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="swiper-button-next px-4 py-3 fs-875 rounded-circle bg-dark text-light fw-600"></div>
				<div class="swiper-button-prev px-4 py-3 fs-875 rounded-circle bg-dark text-light fw-600"></div>
			</div>	
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
										</div>
										<div class="_right-content w-lg-50 py-lg-3 py-1 px-lg-2 px-1 position-relative">
											<a class="_title fw-600 link-dark text-decoration-none" href="">Pháp đàm: Tâm & Thiền - Bản chất & Không tông phái</a>
											<div class="_author-times">
												<span class="_author">Mao Trạch Đông</span>
												|
												<span class="fst-italic fs-875 text-secondary">14/03/2021, 8h00</span>
											</div>
											<div class="_content py-lg-4 py-md-2 py-1">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
											</div>
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
		</div>
	</main>
	<?php include_once('components/footer.php') ?>
	<?php include_once('components/extension.php') ?>
</body>
<?php include_once('components/script.php') ?>
<script type="text/javascript" charset="utf-8" src="assets/script/components/topic.js"></script>