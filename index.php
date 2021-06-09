<?php
include_once('components/head.php');
?>
<body>
	<?php include_once('components/header.php') ?>
	<?php include_once('components/main-slider.php') ?>
	<main class="main">
		<div class="container-lg">
			<div class="row _introduce text-white">
				<div class="col-6 d-lg-block d-none">
					<img src="assets/images/introduce-tree.jpg" alt="" class="_img img-fluid">
				</div>
				<div class="s-content col-lg-6 col-12 pt-lg-4 pt-sm-2 pt-0 bg-second px-lg-4">
					<p class="fw-bold">LIKE A TREE</p>
					<p class="h2 fw-bold">Thật thà - Trí tuệ - Tươi mát</p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="looking-for row d-block">
				<p class="fs-875 _sub-title">
					WHAT ARE YOU LOOKING FOR?
				</p>
				<h4 class="_title fw-bold">Bạn đang tìm kiếm điều gì?</h4>
				<div class="swiper-container looking-for-slider">
					<div class="swiper-wrapper py-lg-5" style="height: auto;">
						<?php for ($i=0; $i < 5 ; $i++) {?>
							<div class="_component swiper-slide d-block py-5 px-3 text-center">
								<a href="" class="d-block _img-link" title="">
									<img src="assets/images/introduce-tree.jpg" alt="" class="_img img-fluid">
								</a>
								<p class="h5 _title fw-600 mt-lg-3 mt-2">Khai vấn cá nhân</p>
								<div class="_content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<a href="" class="_btn-detail bg-primary-color link-light d-inline-block px-2 py-1 text-decoration-none rounded">Chi tiết</a>
							</div>	
						<?php } ?>
					</div>
					<div class="swiper-button-next text-dark"></div>
					<div class="swiper-button-prev text-dark"></div>
				</div>
			</div>
			<div class="events container-fluid py-lg-4 py-md-3 py-2">
				<div class="_titles">
					<p class="fs-875 _sub-title">
						EVENT SCHEDULE
					</p>
					<h4 class="_title fw-bold">Sự kiện.</h4>
				</div>
				<ul class="nav nav-tabs tabs-list-event py-lg-4 py-md-3 py-2" id="myTab" role="tablist">
					<li class="nav-item pe-3" role="presentation">
						<button class="nav-link-custom fw-600 px-0 py-2 bg-transparent active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<table class="table fs-6 events__list">
							<tbody>
								<?php for ($i=0; $i < 4 ; $i++) {?> 
									<tr>
										<th scope="row">8:00 pm - 10:00 pm (13/01/2021)</th>
										<td class="fw-600">Pháp đàm: Tâm & Thiền - Bản chất & Không tông phái</td>
										<td>Mai Xuân Sang</td>
										<td class="fw-600"><a href="" class="text-decoration-none link-dark">Chi tiết</a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="advisers container-fluid py-lg-4 py-md-3 py-2">
				<div class="_titles center-lg-pos-element top-0">
					<p class="fs-875 _sub-title">
						HUMANS OF LIKE A TREE
					</p>
					<h4 class="_title fw-bold">Đội ngũ cố vấn.</h4>
				</div>
				<div class="row row-cols-lg-4 row-cols-2 advisers__list">
					<div class="col _adviser">
						<a href="" class="_img-link">
							<img src="assets/images/adviser.jpg" alt="" class="_img img-fluid w-100">
						</a>
						<div class="px-lg-4 px-md-3 px-2 _adviser__content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</div>
					</div>
					<div class="col _adviser align-self-lg-center">
						<a href="" class="_img-link">
							<img src="assets/images/adviser.jpg" alt="" class="_img img-fluid w-100">
						</a>
						<div class="px-lg-4 px-md-3 px-2 _adviser__content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</div>
					</div>
					<div class="col _adviser align-self-lg-center">
						<a href="" class="_img-link">
							<img src="assets/images/adviser.jpg" alt="" class="_img img-fluid w-100">
						</a>
						<div class="px-lg-4 px-md-3 px-2 _adviser__content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</div>
					</div>
					<div class="col _adviser">
						<a href="" class="_img-link">
							<img src="assets/images/adviser.jpg" alt="" class="_img img-fluid w-100">
						</a>
						<div class="px-lg-4 px-md-3 px-2 _adviser__content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</div>
					</div>
					<div class="col _adviser">
						<a href="" class="_img-link">
							<img src="assets/images/adviser.jpg" alt="" class="_img img-fluid w-100">
						</a>
						<div class="px-lg-4 px-md-3 px-2 _adviser__content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</div>
					</div>
					<div class="col _adviser align-self-lg-center">
						<a href="" class="_img-link">
							<img src="assets/images/adviser.jpg" alt="" class="_img img-fluid w-100">
						</a>
						<div class="px-lg-4 px-md-3 px-2 _adviser__content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</div>
					</div>
					<div class="col _adviser align-self-lg-center">
						<a href="" class="_img-link">
							<img src="assets/images/adviser.jpg" alt="" class="_img img-fluid w-100">
						</a>
						<div class="px-lg-4 px-md-3 px-2 _adviser__content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</div>
					</div>
					<div class="col _adviser">
						<a href="" class="_img-link">
							<img src="assets/images/adviser.jpg" alt="" class="_img img-fluid w-100">
						</a>
						<div class="px-lg-4 px-md-3 px-2 _adviser__content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						</div>
					</div>
				</div>
			</div>
			<div class="partners container-fluid py-lg-4 py-md-3 py-2">
				<p class="fs-875 _sub-title">
					PARTNERS
				</p>
				<h4 class="_title fw-bold mb-lg-4 mb-md-3 mb-2">Đơn vị đồng hành.</h4>
				<div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
					<div class="col _partner">
						<img src="assets/images/label.png" alt="" class="img-fluid _img">
					</div>
					<div class="col _partner">
						<img src="assets/images/label.png" alt="" class="img-fluid _img">
					</div>
					<div class="col _partner">
						<img src="assets/images/label.png" alt="" class="img-fluid _img">
					</div>
					<div class="col _partner">
						<img src="assets/images/label.png" alt="" class="img-fluid _img">
					</div>
					<div class="col _partner">
						<img src="assets/images/label.png" alt="" class="img-fluid _img">
					</div>
				</div>
			</div>
			<div class="news container-fluid py-lg-5 py-md-3 py-2">
				<div class="_titles">
					<p class="fs-875 _sub-title">
						BLOGS/NEWS
					</p>
					<h4 class="_title fw-bold">Bài viết.</h4>
				</div>
				<div class="row row-cols-sm-2 row-cols-1">
					<?php for ($i=0; $i < 4; $i++) {?> 
						<div class="col">
							<div class="row">
								<div class="col-lg-6 col-12">
									<a href="" class="_img-link d-block bg-danger">
										<img src="assets/images/news.jpg" alt="" class="_img img-fluid">
									</a>
								</div>
								<div class="col-lg-6 col-12 news__content p-xl-3 px-lg-2">
									<p class="fs-1125 fw-600 _title">Trà đàm 3: Ứng dụng luật nhân quả trong kinh doanh</p>
									<div class="_content mb-lg-3 mb-2">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</div>
									<a href="" class="show-detail link-dark text-decoration-none">Chi tiết</a>
								</div>
							</div>
						</div>	
					<?php } ?>
				</div>
			</div>
			<div class="media-center container-fluid">
				<div class="_titles">
					<p class="fs-875 _sub-title">
						MEDIA CENTER
					</p>
					<h4 class="_title fw-bold">Bài viết.</h4>
				</div>
				<div class="media-center__wrapper py-lg-4 py-md-3 py-2">
					<div class="media-center__list d-grid">
						<?php for ($i=0; $i < 8 ; $i++) { 
							echo "<div class='item item-".$i."'>
							<p class='h4'>TRÀ ĐÀM 3</p>
							<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...</div>
							</div>";
						} ?>
					</div>
				</div>
				<div class="_register-event w-lg-75 w-100 mx-auto">
					<form action="" method="get" accept-charset="utf-8" class="d-block d-flex">
						<label for="media-center-register" class="_label px-lg-3 px-md-2 px-1 text-light fw-600">Đăng kí nhận thông tin sự kiện mới</label><input type="text" placeholder="Nhập email của bạn tại đây" id='media-center-register' class="_input flex-grow-1 px-lg-3 px-md-2 px-1">
					</form>
				</div>
			</div>
			<div class="testimontials container-fluid">
				<div class="row">
					<div class="col-6 d-md-block d-none">
						<img src="assets/images/introduce-tree.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-6 col-12">
						<div class="_titles mb-lg-4 mb-md-3 md-2">
							<p class="fs-875 _sub-title">
								TESTIMONIALS
							</p>
							<h4 class="_title fw-bold">Cảm nhận khách hàng.</h4>
						</div>
						<div class="testimontials__slider py-lg-3 py-2">
							<div class="_slider position-relative p-md-4 p-2">	
								<?php for ($i=1; $i <= 4; $i++) { ?>
									<div class="testimontials__slide" slide-id= <?php echo $i ?>>
										<div class="_content mb-md-2 mb-1">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</div>
										<div class="_customer d-flex align-items-end">
											<div class="_left">
												<p class="fw-600">Like A Tree</p>
												<span>Customer</span>
											</div>
											<div class="_right ms-auto">
												<img src="assets/images/customer-img.png">
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="_navigation d-lg-block d-flex justify-content-center">
								<?php for ($i=1; $i <= 4 ; $i++) {?>
									<a href="" class="_item" data-slide=<?php echo $i ?>></a>
								<?php }  ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once('components/footer.php') ?>
	<?php include_once('components/extension.php') ?>
</body>
<?php include_once('components/script.php') ?>