<header class="header" style="background-color: rgba(0,0,0,.9)">
	<nav class="container-fluid d-flex py-lg-0 py-2 px-lg-3 px-sm-1">
		<a href="" class="header-logo d-block me-auto py-lg-2" title="">
			<img src="assets/images/header-logo.png" alt="" class="img-fluid _img">
		</a>
		<div class="menu-wrapper">
			<a href="" class="d-block d-lg-none py-2">
				<img src="assets/images/header-logo.png" alt="" class="img-fluid _img mx-auto d-block">
			</a>
			<ul class="menu">

				<?php for ($i=0; $i < 5 ; $i++) { 
					?>
					<li><a href="">SẢN PHẨM</a></li>
				<?php } ?>
			</ul>
			<div class="header_btns-auth d-sm-none d-block mt-2">
				<a href="" class="btn btn-outline-light btn-register d-block rounded-0 my-2" data-bs-toggle="modal" data-bs-target="#formLogin">ĐĂNG NHẬP</a>
				<a href="" class="btn btn-outline-light btn-login d-block rounded-0">ĐĂNG NHẬP</a>
			</div>
		</div>
		<div class="header-rightside d-flex py-3 ms-xl-3 justify-content-lg-start justify-content-between">
			<form action="" method="get" class="header-searchform px-lg-2 px-1 rounded-pill bg-gray-opacity outline-all-0 mb-0 py-1 me-lg-0 me-lg-4 me-sm-2 me-1 d-flex justify-content-end">
				<input type="text" name="keyword" class="_keyword  border-0 bg-transparent py-1 text-white ps-lg-2 ps-xl-3 ps-1 w-75"><button type="submit" name='submit' class="_submit border-0 bg-transparent"><i class="fal fa-search text-white"></i></button>
			</form>
			<div class="header__access-button ms-lg-2 d-flex justify-content-between">
				<a href="" class="toggle-search btn btn-primary-color py-2 text-white fs-1350rem me-2 d-lg-block d-xl-none d-none"><i class="fal fa-search text-white"></i></a>
				<a href="" class="btn btn-outline-light me-2 btn-register d-sm-inline d-none" data-bs-toggle="modal" data-bs-target="#formLogin">ĐĂNG NHẬP</a>
				<a href="" class="btn btn-primary-color btn-login d-sm-inline d-none">ĐĂNG NHẬP</a>
				<a href="" class="toggle-menu d-lg-none btn btn-primary-color py-2 text-white fs-1350rem ms-2"><i class="far fa-bars"></i></a>
			</div>
		</div>
	</nav>
</header>