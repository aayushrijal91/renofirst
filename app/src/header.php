<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.jpg" type="image/jpg">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start':

					new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],

				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =

				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);

		})(window, document, 'script', 'dataLayer', 'GTM-K6XH3TW');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6XH3TW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<header>
		<div class="header_topBar">
			<div class="container">
				<div class="row no-gutters justify-content-center justify-content-lg-between align-items-end align-items-md-center">
					<div class="col-7 col-md-auto">
						<a href="./">
							<?= renderImg("logo.png", "logo") ?>
						</a>
					</div>
					<div class="col-auto px-xl-4 px-xxl-5 py-4 py-xl-0 d-lg-none d-xl-block">
						<?= renderImg("accreditation.png", "logo", "px-md-3") ?>
					</div>
					<div class="col-auto col-lg-auto col-xl-auto">
						<div class="row no-gutters header_topBarButtons">
							<div class="col-auto pr-1 pr-md-2">
								<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-dark">
									Call <?= $phone_number ?>
								</a>
							</div>
							<div class="col-auto pl-1 pl-md-2">
								<a href="#form" class="btn btn-block btn-primary">
									Book A No Obligation Inspection
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center d-none d-lg-block d-xl-none pt-5">
					<?= renderImg("accreditation.png", "logo") ?>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container h-100 position-relative">
				<div class="row h-100 align-items-center banner_main">
					<div class="col-12 col-xl-7 px-3">
						<div class="banner_heroHeading">
							Bathroom &amp; Kitchen Remodelling
						</div>
						<div class="banner_subHeading">
							Book A No Obligation Inspection Today
						</div>
						<div class="row no-gutters align-items-center">
							<div class="col-2 col-md-auto pr-2 pr-md-3">
								<?= renderImg("banner-dollar.png", "icons") ?>
							</div>
							<div class="col">
								<div class="banner_subHeadingPricing">Pricing by the job, not by the hour</div>
								<div class="font-roboto pt-2 text-dark-grey banner_subHeadingTagSm">No matter how long the job ends up taking us, you still pay the same price</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-right d-md-none">
				<?= renderImg("banner_sm.png", "background") ?>
			</div>
			<div class="text-right d-none d-md-block d-xl-none">
				<?= renderImg("banner.png", "background") ?>
			</div>
		</div>
	</header>