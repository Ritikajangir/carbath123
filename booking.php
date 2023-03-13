<?php include "header.php"; ?>

	<section id="heading"  style="background-color:#f2f8fe ;">
		<div class="container app-container">
			<div class="row">
				<div class="col text-center">
					<h1 class="heading-h1">Booking System</h1>
					<div class="row">
						<div class="col-lg-4">
							<span class="number">1</span>
							<p class="number-p">Make an appointment & Bring your car</p>
						</div>
						<div class="col-lg-4">
							<span class="number">2</span>
							<p class="number-p">We give our 5 star rating Services</p>
						</div>
						<div class="col-lg-4">
							<span class="number">3</span>
							<p class="number-p">Pay Online & Get your car</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section id="booking">
		<div class="container app-container">
			<div class="row">
				<div class="col">
					<div class="grid-item">
						<div class="grid-block-content text-center">
							<h2 style="color: #0a2540;">Vehicle Type</h2>	
							<p>Select your vehicle type</p>
						</div>
						<div class="grid-block-content">
							<div class="car">
								<input type="radio" name="car" class="car-input" checked="checked">
								<label><img src="images\full-size.png" class="car-icon"><p>Full-size car</p></label>
							</div>	
							<div class="car">
								<input type="radio" name="car" class="car-input">
								<label><img src="images\mid-size.png" class="car-icon"><p>Mid-size car</p></label>
							</div>
							<div class="car">
								<input type="radio" name="car" class="car-input">
								<label><img src="images\small-size.png" class="car-icon"><p>Small-size car</p></label>
							</div>
							<div class="car">
								<input type="radio" name="car" class="car-input">
								<label><img src="images\pickup-truck.png" class="car-icon"><p>Pickup Truck</p></label>
							</div>
							<div class="car">
								<input type="radio" name="car" class="car-input">
								<label><img src="images\minivan.png" class="car-icon"><p>Minivan</p></label>
							</div>
						</div>
						<div class="grid-block-content text-center">
							<h2 style="color: #0a2540;">Appointment Details</h2>	
							<p>When would you like us to come?</p>
							<div class="mt-5"> 
								<input type="text" name="appointment" placeholder="Select date" class="appointment-box focus-box" id="date">
								<input type="text" name="appointment1" placeholder="Select time" class="appointment-box  focus-box" id="time">
								
							</div>
						</div>

						<div class="grid-block-content text-center">
								<h2 style="color: #0a2540;">Enter Your Details</h2>	
								<p>This information will be used to contact you about your service.</p>
						</div>
						<div class="grid-block-content">	
							<form>
								<div>
									<input type="text" name="name" placeholder="First name" class="appointment-box focus-box">
									<input type="text" name="name" placeholder="Last name" class="appointment-box focus-box">
								</div>
								<div>
									<input type="number" name="number" placeholder="Phone number" class="appointment-box  focus-box">
									<input type="email" name="email" placeholder="Email" class="appointment-box  focus-box">
								</div>
								<div class="text-appointment">
									<input type="text" name="text" placeholder="Make" class="appointment-box focus-box">
									<input type="text" name="text" placeholder="Model" class="appointment-box focus-box">
									<input type="text" name="number" placeholder="Year" class="appointment-box  focus-box" id="year">
								</div>
								<div class="additional-content">
									<textarea name="content" class="appointment-box focus-box" placeholder="Additional Requirements"></textarea>
								</div>
							</form>
							<div class="text-center">
							<p class="appointment-p">Please note that the date and time you requested may not be available. We will contact you within 24 hours to confirm your actual appointment details.</p>
							<button type="submit" class="btn btn-primary appointment-button">Confirm Booking</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include "footer.php"; ?>