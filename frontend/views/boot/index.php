<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Page title -->
	<title>VSDocs - most advanced documentation template on ThemeForest</title>
	<!-- Page description -->
	<meta name="description" content="">
	<!-- Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon  -->
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">

	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
	<!-- Include StyleSheets -->
	<link rel="stylesheet" href="css/style.min.css">
	<!-- <link rel="stylesheet" href="css/custom.css"> -->
	<script src="js/modernizr.js"></script>
</head>

<body class="">
<?php $this->beginBody() ?>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Preloader: uncomment this if you want to show a smooth preloader while the page is loading. Don't forget to add the 'js-preload-me' class on the <body> tag. -->
<!-- <div class="preloader js-preloader"><div class="preloader-animation"></div></div>
-->
<!-- End of Preloader -->
<div class="page js-page ">
	<!-- Header -->
	<div class="header header-over large">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-5">
					<!-- Logo Image -->
					<a href="index.html" class="logo-image logo-animated">
						<img src="img/logos/logo.png" alt="logo">
					</a>
					<!-- End of Logo Image -->
					<!-- Languages -->
					<div class="languages  js-languages">
							<span class="language-active js-language-active">English
								<i class="fa fa-angle-down"></i>
							</span>
						<ul class="languages-list js-languages-list">
							<li>
								<a href="#">English</a>
							</li>
							<li>
								<a href="#">Español</a>
							</li>
							<li>
								<a href="#">Deutsch</a>
							</li>
							<li>
								<a href="#">Русский</a>
							</li>
							<li>
								<a href="#">Français</a>
							</li>
						</ul>
					</div>
					<!-- End of Languages -->
				</div>
				<div class="col-md-9 col-sm-6 col-xs-7">
					<!-- Menu -->
					<nav class="right helper">
						<ul class="menu sf-menu js-menu">
							<li>
								<a href="index.html">Home
									<span class="menu-label">NEW</span>
								</a>
								<ul>
									<li>
										<a href="#">One Page Docs</a>
										<ul>
											<li>
												<a href="home-one-page.html">Static Header</a>
											</li>
											<li>
												<a href="home-one-page-header-fixed.html">Sticky Header</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Menu</a>
										<ul>
											<li>
												<a href="index-2.html">Left - Off Canvas</a>
											</li>
											<li>
												<a href="index-3.html">Right - Off Canvas</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Static</a>
										<ul>
											<li>
												<a href="home-subscribe.html">Subscribe</a>
											</li>
											<li>
												<a href="home-web.html">Web App</a>
											</li>
											<li>
												<a href="home-mobile-app.html">Mobile App</a>
											</li>
											<li>
												<a href="home-soft.html">Software</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Video</a>
										<ul>
											<li>
												<a href="index-5.html">Background</a>
											</li>
											<li>
												<a href="home-video-trigger.html">Trigger Simple</a>
											</li>
											<li>
												<a href="home-web-video-trigger.html">Trigger Web</a>
											</li>
											<li>
												<a href="home-app-video-trigger.html">Trigger App</a>
											</li>
											<li>
												<a href="home-soft-video-trigger.html">Trigger Soft</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="index-4.html">Text Rotator</a>
									</li>
									<li>
										<a href="home-with-preloader.html">With Preloader</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Pages</a>
								<ul>
									<li>
										<a href="panels.html">Panels</a>
									</li>
									<li>
										<a href="#">Blog</a>
										<ul>
											<li>
												<a href="blog-grid.html">Blog Grid</a>
											</li>
											<li>
												<a href="blog-list.html">Blog List</a>
											</li>
											<li>
												<a href="article.html">Article</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="faq.html">Faq</a>
									</li>
									<li>
										<a href="notification.html">Notification</a>
									</li>
									<li>
										<a href="tutorial.html">Tutorial</a>
									</li>
									<li>
										<a href="login.html">Login</a>
									</li>
									<li>
										<a href="register.html">Register</a>
									</li>
									<li>
										<a href="404.html">404 Error</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Elements</a>
								<ul>
									<li>
										<a href="buttons.html">Buttons</a>
									</li>
									<li>
										<a href="boxes.html">Boxes</a>
									</li>
									<li>
										<a href="code.html">Code</a>
									</li>
									<li>
										<a href="visual-guide.html">Visual guide</a>
									</li>
									<li>
										<a href="notes.html">Notes</a>
									</li>
									<li>
										<a href="files.html">File tree</a>
									</li>
									<li>
										<a href="media.html">Media</a>
									</li>
									<li>
										<a href="book.html">Book</a>
									</li>
									<li>
										<a href="steps.html">Steps & Tabs</a>
									</li>
									<li>
										<a href="misc.html">Misc</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Layouts</a>
								<ul>
									<li>
										<a href="views.html">Views without sidebar</a>
									</li>
									<li>
										<a href="views-left.html">Views left sidebar</a>
									</li>
									<li>
										<a href="views-right.html">Views right sidebar</a>
									</li>
									<li>
										<a href="#">Full left sidebar</a>
										<ul>
											<li>
												<a href="views-left-full.html">Regular</a>
											</li>
											<li>
												<a href="views-left-full-compact.html">Compact</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Full right sidebar</a>
										<ul>
											<li>
												<a href="views-right-full.html">Regular</a>
											</li>
											<li>
												<a href="views-right-full-compact.html">Compact</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="changelog.html">Changelog</a>
							</li>
							<li>
								<a href="contacts.html">Contacts</a>
							</li>
						</ul>
					</nav>
					<!-- End of Menu -->
				</div>
			</div>
		</div>
	</div>
	<!-- End of Header -->
	<!-- Header Back -->
	<div class="header-back header-back-default header-back-full-page js-full-page">
		<div class="header-back-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Page Info -->
						<div class="page-info helper center">
							<h1 class="page-title">Learn. Create. Impress.</h1>
							<h2 class="page-description">Bring your documentation to the next level.</h2>
						</div>
						<!-- End Page Info -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Header Back -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Promo Title -->
					<div class="promo-title-wrapper helper pt60">
						<h3 class="promo-title" data-icon="&#xe6af"> Unique Features </h3>
						<p class="promo-description"> Amet quis suscipit modi animi quia veniam id, sed nihil? Necessitatibus expedita, velit, itaque tenetur quisquam impedit cumque eum. Dolorum, natus earum. </p>
					</div>
					<!-- End of Promo Title -->
					<div class="row">
						<div class="col-md-6">
							<!-- Box -->
							<div class="box box-small-icon-alt">
								<i class="pe-7s-plugin box-icon"></i>
								<h4 class="box-title">Components</h4>
								<p class="box-description">Dolores, dolore! Iusto veritatis nesciunt quaerat officia eveniet sunt eligendi. Nulla ducimus expedita, voluptas beatae, ipsum itaque.</p>
							</div>
							<!-- End of Box -->
						</div>
						<div class="col-md-6">
							<!-- Box -->
							<div class="box box-small-icon-alt">
								<i class="pe-7s-eyedropper box-icon"></i>
								<h4 class="box-title">Colors</h4>
								<p class="box-description">Architecto tempora id, reprehenderit, aliquam corporis illum in eius vero rem qui reiciendis, dolorem nam iure totam.</p>
							</div>
							<!-- End of Box -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- Box -->
							<div class="box box-small-icon-alt">
								<i class="pe-7s-tools box-icon"></i>
								<h4 class="box-title">Customization</h4>
								<p class="box-description">Nemo, aliquid, alias! A quod doloremque minima porro sequi, facilis velit dolorum iusto assumenda, sed, nemo provident?</p>
							</div>
							<!-- End of Box -->
						</div>
						<div class="col-md-6">
							<!-- Box -->
							<div class="box box-small-icon-alt">
								<i class="pe-7s-cup box-icon"></i>
								<h4 class="box-title">Premium</h4>
								<p class="box-description">Voluptates, rerum, iusto sit, temporibus iure autem vel esse sapiente dolorum nostrum qui dignissimos officiis ea! Possimus.</p>
							</div>
							<!-- End of Box -->
						</div>
					</div>
					<!-- Promo Title -->
					<div class="promo-title-wrapper ">
						<h3 class="promo-title" data-icon="&#xe629"> How it works </h3>
						<p class="promo-description"> Fugit impedit ea eveniet ullam distinctio et quisquam nam laudantium nemo cumque consequuntur magni quis unde voluptates velit temporibus, blanditiis, laboriosam minima. </p>
					</div>
					<!-- End of Promo Title -->
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8 col-sm-12">
							<div class="code-highlight ">
								<span class="js-copy-to-clipboard copy-code">copy</span> <pre><code class="language-javascript js-code">var InteractiveSteps = (function(){
	var steps = $('.js-steps-interactive');

	steps.each(function() {
		var step = $(this);
		var config = config = {
			headerTag: "h4",
		    transitionEffect: "fade",
		    labels: {
		    	current: ''
		    }
		}
		var userConfig = step.data('config');

		$.extend(true, config, userConfig);
		steps.steps(config);
	});
})();
</code></pre></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="background-gradient-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Promo Title -->
						<div class="promo-title-wrapper ">
							<h3 class="promo-title" data-icon="&#xe6c9"> Give it a try </h3>
							<p class="promo-description"> Voluptates repellendus, harum deleniti fuga quod aut! Fugiat laborum repellat sed reprehenderit illum quasi cumque ipsam sint eveniet? Quaerat deleniti, distinctio inventore. </p>
						</div>
						<!-- End of Promo Title -->
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="helper center mb60">
							<a href="#" class="reguest-demo-button button blue stroke rounded button-icon button-icon-right"> request demo
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
						<div class="helper center pb60">
							<img src="http://placehold.it/1700x450" class="image remove-border" alt="macbook and a clock"> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Promo Title -->
					<div class="promo-title-wrapper ">
						<h3 class="promo-title" data-icon="&#xe642"> Use something you like </h3>
						<p class="promo-description"> Voluptates repellendus, harum deleniti fuga quod aut! Fugiat laborum repellat sed reprehenderit illum quasi cumque ipsam sint eveniet? Quaerat deleniti, distinctio inventore. </p>
					</div>
					<!-- End of Promo Title -->
					<!-- Featured Boxes -->
					<ul class="featured-boxes">
						<li class="featured-boxes-item">
							<img src="http://placehold.it/155x155" class="featured-boxes-item-ico" alt="featured-boxes image">
							<h5 class="featured-boxes-item-pretitle">more</h5>
							<h4 class="featured-boxes-item-title">Flexibility</h4>
							<p class="featured-boxes-item-description">Eaque dolores, consectetur doloribus suscipit harum nisi sequi distinctio.</p>
							<a href="#" class="featured-boxes-item-button button blue stroke rounded"> Learn more </a>
						</li>
						<li class="featured-boxes-item">
							<img src="http://placehold.it/155x155" class="featured-boxes-item-ico" alt="featured-boxes image">
							<h5 class="featured-boxes-item-pretitle">more</h5>
							<h4 class="featured-boxes-item-title">Complexity</h4>
							<p class="featured-boxes-item-description">Eaque dolores, consectetur doloribus suscipit harum nisi sequi distinctio.</p>
							<a href="#" class="featured-boxes-item-button button blue stroke rounded"> Learn more </a>
						</li>
						<li class="featured-boxes-item">
							<img src="http://placehold.it/155x155" class="featured-boxes-item-ico" alt="featured-boxes image">
							<h5 class="featured-boxes-item-pretitle">less</h5>
							<h4 class="featured-boxes-item-title">Confusion</h4>
							<p class="featured-boxes-item-description">Eaque dolores, consectetur doloribus suscipit harum nisi sequi distinctio.</p>
							<a href="#" class="featured-boxes-item-button button blue stroke rounded"> Learn more </a>
						</li>
					</ul>
					<!-- End of Featured Boxes -->
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- Video section -->
					<div class="video-section video-section-fullwidth ">
						<img src="img/helpers/play-dark.png" alt="" class="video-section-button-img js-video-trigger" data-video="<iframe src=&quot;https://player.vimeo.com/video/37760134?autoplay=1&quot; width=&quot;500&quot; height=&quot;510&quot; frameborder=&quot;0&quot; webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>"> </div>
					<!-- Endd  of Video section -->
					<!-- Video Trigger Modal -->
					<div class="js-video-trigger-modal video-trigger-modal">
						<div class="js-video-trigger-modal-content video-trigger-modal-content"></div>
					</div>
					<!-- End of Video Trigger Modal -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Promo Title -->
					<div class="promo-title-wrapper ">
						<h3 class="promo-title" data-icon="&#xe6b3"> Our Plans </h3>
						<p class="promo-description"> Ipsam numquam, voluptatem ullam, aspernatur quam molestias in? Quae quam, laudantium fugiat! Placeat odio, tempora eum repellendus mollitia laudantium minima iste a! </p>
					</div>
					<!-- End of Promo Title -->
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<!-- Price List -->
							<div class="price-list">
								<h3 class="price-list-title">Free</h3>
								<p class="price-list-price">$0
									<span class="price-list-price-units">/mo</span>
								</p>
								<ul class="price-list-features">
									<li class="price-list-feature-item "> Nobis animi maxim. </li>
									<li class="price-list-feature-item "> Excepturi corrupti veritati. </li>
									<li class="price-list-feature-item "> Vitae eligendi fug. </li>
									<li class="price-list-feature-item "> Voluptas, numqua. </li>
									<li class="price-list-feature-item feature-is-disabled"> </li>
									<li class="price-list-feature-item feature-is-disabled"> </li>
									<li class="price-list-feature-item feature-is-disabled"> </li>
									<li class="price-list-feature-item feature-is-disabled"> </li>
								</ul>
								<a href="#" class="price-list-button">Select Plan</a>
							</div>
							<!-- End of Price List -->
						</div>
						<div class="col-md-4 col-sm-6">
							<!-- Price List -->
							<div class="price-list">
								<h3 class="price-list-title">Standard</h3>
								<p class="price-list-price">$10
									<span class="price-list-price-units">/mo</span>
								</p>
								<ul class="price-list-features">
									<li class="price-list-feature-item "> Nobis animi maxim. </li>
									<li class="price-list-feature-item "> Excepturi corrupti veritati. </li>
									<li class="price-list-feature-item "> Vitae eligendi fug. </li>
									<li class="price-list-feature-item "> Voluptas, numqua. </li>
									<li class="price-list-feature-item "> Nemo enim. </li>
									<li class="price-list-feature-item feature-is-disabled"> </li>
									<li class="price-list-feature-item feature-is-disabled"> </li>
									<li class="price-list-feature-item feature-is-disabled"> </li>
								</ul>
								<a href="#" class="price-list-button">Select Plan</a>
							</div>
							<!-- End of Price List -->
						</div>
						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<!-- Price List -->
							<div class="price-list">
								<h3 class="price-list-title">Pro</h3>
								<p class="price-list-price">$29
									<span class="price-list-price-units">/mo</span>
								</p>
								<ul class="price-list-features">
									<li class="price-list-feature-item "> Nobis animi maxim. </li>
									<li class="price-list-feature-item "> Excepturi corrupti veritati. </li>
									<li class="price-list-feature-item "> Vitae eligendi fug. </li>
									<li class="price-list-feature-item "> Voluptas, numqua. </li>
									<li class="price-list-feature-item "> Nemo enim. </li>
									<li class="price-list-feature-item "> Dolore optio expedit. </li>
									<li class="price-list-feature-item "> Odit tenetur. </li>
									<li class="price-list-feature-item "> Vitae omnis eni. </li>
								</ul>
								<a href="#" class="price-list-button">Select Plan</a>
							</div>
							<!-- End of Price List -->
						</div>
					</div>
					<!-- Promo Title -->
					<div class="promo-title-wrapper ">
						<h3 class="promo-title" data-icon="&#xe661"> Brands using VSDocs </h3>
						<p class="promo-description"> Asperiores beatae, sequi consequatur a nobis expedita quis nulla quaerat nostrum aperiam corrupti eum voluptatibus quae aut neque error iusto, repellat dolor. </p>
					</div>
					<!-- End of Promo Title -->
					<!-- Brands -->
					<ul class="brands ">
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
						<li class="brand-item">
							<a href="#" class="brand-item-link">
								<img src="http://placehold.it/300x100" class="brand-item-image" alt="brand logo"> </a>
						</li>
					</ul>
					<!-- End of Brands -->
					<!-- Promo Title -->
					<div class="promo-title-wrapper ">
						<h3 class="promo-title" data-icon="&#xe668"> Testimonials </h3>
						<p class="promo-description"> Reiciendis quasi ipsum, expedita soluta hic, minima voluptates deserunt odio temporibus obcaecati amet, culpa vel. Beatae, quisquam! </p>
					</div>
					<!-- End of Promo Title -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- Testimonials -->
							<div class="testimonial">
								<div class="testimonial-photo-wrapper">
									<img src="http://placehold.it/128x128" class="testimonial-photo" alt="Person&#39;s Photo"> </div>
								<h4 class="testimonial-name">Andrew Desmith</h4>
								<p class="testimonial-text">Facere dolores a ex ratione ut ipsa pariatur dicta dolorum distinctio deleniti aspernatur eius, sint, quia reprehenderit.</p>
							</div>
							<!-- End of Testimonials -->
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- Testimonials -->
							<div class="testimonial">
								<div class="testimonial-photo-wrapper">
									<img src="http://placehold.it/128x128" class="testimonial-photo" alt="Person&#39;s Photo"> </div>
								<h4 class="testimonial-name">Amado Winning</h4>
								<p class="testimonial-text">Temporibus enim qui optio quod facere, voluptatem id, itaque tempore necessitatibus aut voluptas iste numquam mollitia! Ipsa, velit.</p>
							</div>
							<!-- End of Testimonials -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- Testimonials -->
							<div class="testimonial">
								<div class="testimonial-photo-wrapper">
									<img src="http://placehold.it/128x128" class="testimonial-photo" alt="Person&#39;s Photo"> </div>
								<h4 class="testimonial-name">Myles Graziosi</h4>
								<p class="testimonial-text">Veniam impedit pariatur veritatis libero ex, nostrum unde quia, qui voluptate et aliquam expedita porro esse ullam!</p>
							</div>
							<!-- End of Testimonials -->
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- Testimonials -->
							<div class="testimonial">
								<div class="testimonial-photo-wrapper">
									<img src="http://placehold.it/128x128" class="testimonial-photo" alt="Person&#39;s Photo"> </div>
								<h4 class="testimonial-name">Matt Waack</h4>
								<p class="testimonial-text">Id quasi beatae sequi sint necessitatibus? Sapiente repudiandae, maiores. Deserunt tempore alias fugit molestias, dicta qui perspiciatis.</p>
							</div>
							<!-- End of Testimonials -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call to Action -->
		<div class="call-to-action helper mt60">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="call-to-action-title"> Got a minute? Join us, it's free! </h3>
						<p class="call-to-action-description"> Dolorem sint neque dolores, soluta et vitae dignissimos harum ut adipisci obcaecati. </p>
						<div class="call-to-action-buttons">
							<a href="#" class="call-to-action-button">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Call to Action -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Promo Title -->
					<div class="promo-title-wrapper promo-title-no-icon">
						<h3 class="promo-title" data-icon="&#xe6af"> FAQ </h3>
						<p class="promo-description"> Error perferendis, harum optio at sequi odit voluptate repudiandae. Natus placeat ipsam, veniam, maiores facere odio alias nisi repellat! Debitis, animi assumenda? </p>
					</div>
					<!-- End of Promo Title -->
					<div class="row">
						<div class="col-md-4">
							<!-- FAQ Grid -->
							<div class="faq-grid">
								<h4 class="faq-grid-question">Where do I get an overview?</h4>
								<p class="faq-grid-answer">Ex amet velit autem eius at necessitatibus alias nulla expedita quas quibusdam. Iusto sed dolores ut, fugiat omnis minus, ab! Nihil odit, saepe tempore illo nisi voluptas tenetur quae inventore unde nesciunt.</p>
							</div>
							<!-- End of FAQ Grid -->
						</div>
						<div class="col-md-4">
							<!-- FAQ Grid -->
							<div class="faq-grid">
								<h4 class="faq-grid-question">How do I request a feature?</h4>
								<p class="faq-grid-answer">Dicta quisquam totam est error deserunt mollitia, saepe natus cum temporibus a aliquam magnam consectetur, impedit eligendi? Dolore laborum, culpa, esse, optio ut dicta unde veniam ab a quisquam provident nisi! Nostrum.</p>
							</div>
							<!-- End of FAQ Grid -->
						</div>
						<div class="col-md-4">
							<!-- FAQ Grid -->
							<div class="faq-grid">
								<h4 class="faq-grid-question">How do I update?</h4>
								<p class="faq-grid-answer">Consectetur quae eveniet ab ipsa velit, veniam aliquam dolor quos dolore. Maxime vitae recusandae, quam tempore perspiciatis magni odit asperiores cumque incidunt, blanditiis architecto, facere iure dolores nesciunt illo laborum quaerat!</p>
							</div>
							<!-- End of FAQ Grid -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="helper center">
								<a href="faq.html" class="faq-grid-show-more">View all
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer class="js-footer-is-fixed">
		<!-- Footer Extended -->
		<div class="footer-extended">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-extended-container">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-4">
									<div class="footer-extended-menu">
										<h5 class="footer-extended-menu-title">About</h5>
										<ul class="footer-extended-menu-list">
											<li>
												<a href="#">Our Vision</a>
											</li>
											<li>
												<a href="#">Technologies</a>
											</li>
											<li>
												<a href="#">Newsletter</a>
											</li>
											<li>
												<a href="#">Blog</a>
											</li>
											<li>
												<a href="#">Contact Us</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-4">
									<div class="footer-extended-menu">
										<h5 class="footer-extended-menu-title">Downloads</h5>
										<ul class="footer-extended-menu-list">
											<li>
												<a href="#">All releases</a>
											</li>
											<li>
												<a href="#">Source code</a>
											</li>
											<li>
												<a href="#">Platforms</a>
											</li>
											<li>
												<a href="#">License</a>
											</li>
											<li>
												<a href="#">Terms of Use</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-4">
									<div class="footer-extended-menu">
										<h5 class="footer-extended-menu-title">Docs</h5>
										<ul class="footer-extended-menu-list">
											<li>
												<a href="#">Docs</a>
											</li>
											<li>
												<a href="#">Beginner's Guide</a>
											</li>
											<li>
												<a href="#">FAQ</a>
											</li>
											<li>
												<a href="#">Non-English Docs</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="clearfix visible-xs-block"></div>
								<div class="col-md-2 col-sm-2 col-xs-4">
									<div class="footer-extended-menu">
										<h5 class="footer-extended-menu-title">Community</h5>
										<ul class="footer-extended-menu-list">
											<li>
												<a href="#">Diversity</a>
											</li>
											<li>
												<a href="#">Mailing Lists</a>
											</li>
											<li>
												<a href="#">Wiki</a>
											</li>
											<li>
												<a href="#">Merchandise</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-8">
									<div class="footer-extended-menu">
										<h5 class="footer-extended-menu-title">Subscribe</h5>
										<ul class="socials-footer">
											<li>
												<a href="#" class="socials-footer-link">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#" class="socials-footer-link">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#" class="socials-footer-link">
													<i class="fa fa-youtube-play"></i>
												</a>
											</li>
											<li>
												<a href="#" class="socials-footer-link">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
											<li>
												<a href="#" class="socials-footer-link">
													<i class="fa fa-google-plus"></i>
												</a>
											</li>
											<li>
												<a href="#" class="socials-footer-link">
													<i class="fa fa-github-alt"></i>
												</a>
											</li>
										</ul>
										<div class="subscribe-form-block-footer">
											<form action="#">
												<input type="text" name="email" id="subscribe-email-footer" class="subscribe-input-footer" placeholder="Email address">
												<button class="subscribe-button-footer">
													<i class="fa fa-angle-right"></i>
												</button>
											</form>
										</div>
										<p class="text-footer">For any questions contact us at:
											<a href="mailto:support@vsart.me" target="_top">support@vsart.me</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Footer Extended -->
		<!-- Footer Default -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="footer-logo-wrapper">
							<!-- Logo Image -->
							<a href="index.html" class="logo-image ">
								<img src="img/logos/logo.png" alt="logo">
							</a>
							<!-- End of Logo Image -->
							<!-- Slogan -->
							<p class="slogan"> Learn.
								<br>Create.
								<br>Impress. </p>
							<!-- End of Slogan -->
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="footer-wrapper">
							<!-- Scroll top -->
							<span class="scroll-top js-scroll-top">
									<i class="fa fa-angle-up"></i>
								</span>
							<!-- End of Scroll top -->
							<!-- Version -->
							<div class="docs-version js-docs-version">
								<span class="docs-current-version js-docs-current-version">v3.5</span>
								<ul class="js-docs-version-list">
									<li>
										<a href="#">1.0</a>
									</li>
									<li>
										<a href="#">1.5</a>
									</li>
									<li>
										<a href="#">2.5</a>
									</li>
									<li>
										<a href="#">3.0</a>
									</li>
									<li>
										<a href="#">3.1</a>
									</li>
								</ul>
							</div>
							<!-- End of Version -->
							<!-- Footer Menu -->
							<ul class="footer-menu helper right">
								<li>
									<a href="#"> About us </a>
								</li>
								<li>
									<a href="#"> Privacy Policy </a>
								</li>
								<li>
									<a href="#"> Terms & Condotions </a>
								</li>
								<li>
									<a href="#"> My account </a>
								</li>
								<li>
									<a href="#"> Support service </a>
								</li>
							</ul>
							<!-- End of Footer Menu -->
							<!-- Copyright -->
							<p class="copyright helper right">
								<a href="http://vsart.me">VSArt</a>, all rights reserved. 2016 &copy; </p>
							<!-- End of Copyright -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Footer Default -->
	</footer>
	<!-- End of Footer -->
</div>
<script src="js/all.js"></script>
<script src="js/custom.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
 -->
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>