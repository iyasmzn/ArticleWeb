<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include './assets/link.php'; ?>
</head>
<body>
	<div id="cover-box">
		<div class="navbar row">
			<div class="col-md-6 text-left p-2 pl-5 m-0">
				<a href=""><span class="logo-1">MY</span><span class="logo-2">Article</span></a>
			</div>
			<div class="col-md-6 text-left m-0">
				<div class="navbar-menu row text-josefin">
					<div class="col-sm-2 text-center menu-hover"><a href="#" class="py-4">HOME</a></div>
					<div class="col-sm-2 text-center menu-hover"><a href="#" class="py-4">BLOG</a></div>
					<div class="col-sm-2 text-center menu-hover"><a href="#" class="py-4">ABOUT</a></div>
					<div class="col-sm-2 text-center menu-hover"><a href="#" class="py-4">GALLERY</a></div>
					<div class="col-sm-3 text-center menu-hover p-3"><div><a href="#" class="btn btn-md btn-outline-light text-tomato-hover pt-2">CONTACT US</a></div></div>
					<div class="col-sm-1 text-center menu-hover"><a href="#" class="py-4"><i class="fas fa-search"></i></a></div>
				</div>
			</div>
		</div>
		<div class="cover-bg">
			<div class="cover-bg-1 ">
				<div style="width: 100%;height: 100%;">
					<div style="width: 50%" class="p-5">
						<div class="" style="padding-top: 100px">
							<a href="#" class="big-logo" style="font-size: 3em;"><span class="logo-1" style="border-radius: 0 20px;">MY</span><span class="logo-2" style="">Article</span></a>							
							<p class="text-light text-alata" style="text-indent: 40px;padding-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a href="" style="display: inline-block;"><img style="width: 160px" src="assets/images/play-app_store-vertical.png"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="cover-bg-2 ">
				<div style="width: 100%;height: 100%;">
					<div style="width: 100%;padding: 5% 25%">
						<div class="cover-card-2 text-center">
							<div class="text-pacifico badge badge-danger"><i>Latest News</i></div>
							<p style="font-size: 0.6em;">10 munites ago</p>						
							<div class="card-2-box-1"><div></div></div>

							<h1 class="text-anton pt-2" style="color:gray">Car Accident in XXXX Road!</h1>

							<p class="text-alata">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo...</p>
							<a href="#" class="btn btn-md btn-outline-danger">READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="cover-bg-1 ">
				<div style="width: 100%;height: 100%;">
					<div style="width: 50%" class="p-5">
						<div class="" style="padding-top: 100px">
							<h1 class="text-anton text-light" style="font-size: 4em;">CONTACT US!</h1>
							<p class="text-light text-alata" style="text-indent: 40px;padding-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a href="" style="display: inline-block;"><img style="width: 160px" src="assets/images/play-app_store-vertical.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="start-button">
			<a href="" onclick="$('#container').animatescroll({scrollSpeed:1700,easing:'easeInOutSine'});" class="btn btn-outline-light btn-lg started px-5"><i class="fas fa-chevron-down"></i></a>

		</div>
	</div>
	<div class="head-newss container-fluid py-3 pb-5 px-5">
			<h1 class="text-left text-anton text-tomato mt-5 py-3" style="font-weight: bold">HOT ARTICLES!</h1>
			<?php include './partials/hot-news-carousel.php'; ?>
	</div>
	<div class="container-fluid p-3 py-5" style="background-color: #fff">
		<div class="w-100">
			<div class="row ml-1" style="">
				<div class="news-dashboard col-md-8">
					<div class="news-dashboard-content shadowes hovered-img-scale">asd</div>
				</div>
				<div class="col-md-4">
					<?php include './partials/sidebar.php'; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer">
		<div class="row text-light p-4">
			<div class="col-lg-4 p-2 pt-4 ">
				<a href=""><span class="logo-1" style="color: #951700;">MY</span><span class="logo-2">Article</span></a>
				<p class="pt-4 text-alata" style="text-indent: 50px;line-height: 2;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>

				<h3 class="text-josefin">FOLLOW US</h3>
				<span style="font-size: 2.5em;letter-spacing: 0.5vw">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-github"></i>
					<i class="fab fa-google-plus"></i>
					<i class="fab fa-facebook"></i>
				</span>
			</div>
			<div class="col-lg-4 p-2 pt-4 ">
				<h3 class="text-josefin">TAG</h3>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#NEWS</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#LATEST</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#NEW</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#RACE</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#PROJECT</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#DONT</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#WASTE</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#YOUR</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#TIME</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#FOOTBALL</a>
				<a href="" class="btn btn-md m-1 btn-outline-light" style="border-radius: 0px;">#SOCCER</a>

				<h3 class="text-josefin pt-3">RELATED ARTICLE</h3>
					<a class="text-light text-alata" href="">~ New Branding</a><br>
					<a class="text-light text-alata" href="">~ How To Build Some Virus</a><br>
					<a class="text-light text-alata" href="">~ I Don't Know Again</a>

			</div>
			<div class="col-lg-4 p-2 pt-4 ">
				<h3 class="text-josefin">CONTACT US</h3>
				<p class="text-alata" style="text-indent: 50px;line-height: 2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				<span class="text-alata">
					<a style="font-size: 1.5em;color: white" href="">
						<i class="fab fa-whatsapp"></i> <span>+62 822 2331 8719</span>
					</a><br>
					<a style="font-size: 1.5em;color: white" href="">
						<i class="fas fa-phone"></i> <span>+62 822 2331 8719</span>
					</a><br>
					<a style="font-size: 1.5em;color: white" href="">
						<i class="fas fa-envelope"></i> <span>myArticle@gmail.com</span>
					</a><br>
					<a style="font-size: 1.5em;color: white" href="">
					</a><br>
				</span>
			</div>
		</div>
	</div>
	<div class="container-fluid foooter text-center p-3 text-light" style="background: black;">
		<span class="text-josefin">Copyright &copy;Iyasmzn 2020</span>
	</div>
	<!-- Script -->
	<?php include './assets/script.php'; ?>
</body>
</html>