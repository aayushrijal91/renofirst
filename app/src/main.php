<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="about">
	<div class="container-fluid">
		<div class="row justify-content-end">
			<div class="col-lg-6">
				<div class="h5 fw-700 text-white line-height-3">Bathroom &amp; Kitchen Renovations &amp; Remodelling</div>
				<div class="about_description">
					<p>Most people tend to put bathroom & kitchen renovations on the backburner when planning any home improvement projects. This primarily happens because they believe that renovating these spaces is a complicated and costly proposition. The neglect and delay in making minor bathroom or kitchen plumbing upgrades can prove to be expensive in the long term.</p>
					<p>We at RenoFirst are a leading company in this industry. Over the years, we have handled a significant amount of bathroom & kitchen renovations, and we offer the best services at the most affordable price points.</p>
					<p>Bathrooms and kitchens see a significant amount of wear and tear. All the features and installations are exposed to water, steam and, heat and dirt, and these conditions can affect your bathroom or kitchen’s condition and appearance over time. We at RenoFirst Plumbing are creative, skilled, knowledgeable, and experienced in all aspects of bathroom and kitchen remodelling.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="form" id="form">
	<div class="container">
		<div class="form_container">
			<div class="row justify-content-center">
				<div class="col-lg-6 px-md-0 d-none d-md-block">
					<?= renderImg("form.png", "background", "w-100 h-100") ?>
				</div>
				<div class="col-12 col-md px-md-0">
					<div class="form_main">
						<div class="fw-900 text-center h5 line-height-1">Book Now &amp; Save</div>
						<div class="h11 fw-800 text-center pb-md-4 pb-lg-0">Simply fill in the form below & we’ll get back to you ASAP</div>
						<form action="./src/form" method="POST" enctype="multipart/form-data" class="pt-3">
							<input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
							<div class="row no-gutters justify-content-between">
								<div class="col-12">
									<div class="input-group">
										<input id="input_name" class="form-control border-0 rounded-0" type="text" placeholder="Full Name" name="name" required>
									</div>
								</div>
								<div class="col-12 mt-2">
									<div class="input-group">
										<input id="input_phone" class="form-control border-0 rounded-0" type="tel" placeholder="Phone Number" name="phone" required>
									</div>
								</div>
								<div class="col-12 mt-2">
									<div class="input-group">
										<input id="input_email" class="form-control border-0 rounded-0" type="email" placeholder="Email Address" name="email" required>
									</div>
								</div>
								<div class="col-12 mt-2">
									<div class="input-group">
										<select name="service" class="form-control rounded-0 border-0" required>
											<option value="" disabled selected>Service Required</option>
											<option>Hydronic Room Heating</option>
											<option>Hydronic Under Floor Heating</option>
											<option>Hydronic Boiler</option>
											<option>Heat Pumps</option>
											<option>Boilers </option>
											<option>Radiators</option>
											<option>Heated Towel Rails</option>
											<option>Trench</option>
											<option>Thermostat</option>
										</select>
									</div>
								</div>
								<div class="col-12 mt-2">
									<div class="input-group">
										<input id="input_information" class="form-control border-0 rounded-0" type="text" placeholder="Further Information (optional)" name="message">
									</div>
								</div>
								<div class="col-8 pt-4">
									<div class="row no-gutters align-items-center">
										<div class="col-auto pr-3">
											<?= renderImg("lock.png", "icons") ?>
										</div>
										<div class="col text-grey">
											<div class="h18 fw-700">Your Privacy is Our Priority</div>
											<div class="h19 fw-500">Your information will remain private &amp; secure</div>
										</div>
									</div>
								</div>
								<div class="col-4 pt-4">
									<button type="submit" class="btn bg-primary btn-block text-white rounded-2 fw-600 h13">Book Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-12 px-md-0 d-md-none">
					<?= renderImg("form_sm.png", "background", "form_imgSm") ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__ . '/footer.php'; ?>