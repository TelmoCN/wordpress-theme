<?php
	/*
	*	The main template file
	*/
?>

	<?php get_header() ?>

		<div class="container-fluid text-center py-5">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h3>Welcome to Tranquil Spa</h3>
					<img src="./images/divider-purple.png" alt="divider" class="w-25">
				</div>
			</div>
			<div class="row mt-4 d-flex justify-content-around">
				<div class="col-sm-3">
					<img src="./images/makeup.jpg" alt="Makeup" class="card-img-top rounded-circle">
					<div class="card-body">
						<p class="card-text">Hair &amp; make up</p>
					</div>
				</div>
				<div class="col-sm-3">
					<img src="./images/candles.jpg" alt="Candles Image" class="card-img-top rounded-circle">
					<div class="card-body">
						<p class="card-text">Spa Facilities</p>
					</div>
				</div>
				<div class="col-sm-3">
					<img src="./images/retreat.jpg" alt="Retreat Image" class="card-img-top rounded-circle">
					<div class="card-body">
						<p class="card-text">Take a Tour</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid text-center bg-dark py-5">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h3 class="text-light">Latest Spa Offers</h3>
					<img src="./images/divider-silver.png" alt="divider" class="pb-4 w-25">
				</div>
			</div>
			<div class="row">

				<div class="col-sm-4">
					<div class="card">
						<h4 class="card-header py-5">
							Family Swim Package <span class="font-weight-bold">$60</span>
						</h4>
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<p>Our most popular swim package, great value for families or groups of up to 12 people</p>
							</blockquote>
						</div>
						<ul class="list-group">
							<li class="list-group-item font-italic">Up top 12 people</li>
							<li class="list-group-item font-italic">Private Sessions</li>
							<li class="list-group-item font-italic">Swim Lessons also available</li>
							
						</ul>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card">
						<h4 class="card-header py-5">
							For the Bride <span class="font-weight-bold">$40</span>
						</h4>
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<p>Our wedding packages are perfect for your big day. We can cater for groups large or small</p>
							</blockquote>
						</div>
						<ul class="list-group">
							<li class="list-group-item font-italic">Hair &amp; make up</li>
							<li class="list-group-item font-italic">Groups of any size</li>
							<li class="list-group-item font-italic">Champagne &amp; cocktails available</li>
							
						</ul>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card">
						<h4 class="card-header py-5">
							Weekend Pass <span class="font-weight-bold">$60</span>
						</h4>
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<p>Take full advantage of all the facilities we ahve to offer with our unlimited weekend pass</p>
							</blockquote>
						</div>
						<ul class="list-group">
							<li class="list-group-item font-italic">Pool &amp; sauna</li>
							<li class="list-group-item font-italic">Full use of our Gym</li>
							<li class="list-group-item font-italic">Includes 2 treatments per person</li>
							
						</ul>
					</div>
				</div>
			</div> <!-- Row -->
		</div> <!-- Container -->

		<!-- About Us Section -->
		<div class="container-fluid py-5 text-center bg-light">
			<div class="row">
				<div class="col-sm-6 offset-md-3">
					<h3>About us</h3>
					<img src="./images/divider-purple.png" alt="divider" class="w-25">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col">
					<p class="text-center">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Non doloremque repudiandae consequuntur! Asperiores praesentium ducimus maiores dolore vel perspiciatis id fuga nemo, officiis hic corrupti alias similique, eius rem quia?
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Non doloremque repudiandae consequuntur! Asperiores praesentium ducimus maiores dolore vel perspiciatis id fuga nemo, officiis hic corrupti alias similique, eius rem quia?
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Non doloremque repudiandae consequuntur! Asperiores praesentium ducimus maiores dolore vel perspiciatis id fuga nemo, officiis hic corrupti alias similique, eius rem quia?
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Non doloremque repudiandae consequuntur! Asperiores praesentium ducimus maiores dolore vel perspiciatis id fuga nemo, officiis hic corrupti alias similique, eius rem quia?
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Non doloremque repudiandae consequuntur! Asperiores praesentium ducimus maiores dolore vel perspiciatis id fuga nemo, officiis hic corrupti alias similique, eius rem quia?
					</p>
				</div>
			</div>
		</div>

		<!-- PRICE LIST SECTION -->
		<div class="container-fluid py-5 bg-dark">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center">
					<h3 class="text-light">Price List</h3>
					<img src="./images/divider-silver.png" alt="divider" class="pb-4 w-25">
				</div>
			</div>
			<div class="row my-4">
				<div class="col-sm-8">
					<img src="./images/massage.jpg" alt="massage picture">
				</div>
				<div class="col-sm-4">
					<h4 class="title text-center">Massages</h4>
					<ul class="list-group list-group-flush text-light">
						<li class="list-group-item">Massage 1 <em>-$10</em></li>
						<li class="list-group-item">Massage 2 <em>-$10</em></li>
						<li class="list-group-item">Massage 3 <em>-$10</em></li>
						<li class="list-group-item">Massage 4 <em>-$10</em></li>
						<li class="list-group-item">Massage 5 <em>-$10</em></li>
					</ul>
				</div>
			</div>

			<div class="row my-4">
				<div class="col-sm-4">
					<h4 class="title text-center">Facials</h4>
					<ul class="list-group list-group-flush text-light">
						<li class="list-group-item">Facial 1 <em>-$10</em></li>
						<li class="list-group-item">Facial 2 <em>-$10</em></li>
						<li class="list-group-item">Facial 3 <em>-$10</em></li>
						<li class="list-group-item">Facial 4 <em>-$10</em></li>
						<li class="list-group-item">Facial 5 <em>-$10</em></li>
					</ul>
				</div>
				<div class="col-sm-8">
					<img src="./images/facial.jpg" alt="facial image">
				</div>
			</div>

			<div class="row my-4">
				<div class="col-sm-8">
					<img src="./images/cosmetics.jpg" alt="cosmetics picture">
				</div>
				<div class="col-sm-4">
					<h4 class="title text-center">Hair &amp; make up</h4>
					<ul class="list-group list-group-flush text-light">
						<li class="list-group-item">Hair 1 <em>-$10</em></li>
						<li class="list-group-item">Hair 2 <em>-$10</em></li>
						<li class="list-group-item">Hair 3 <em>-$10</em></li>
						<li class="list-group-item">Hair 4 <em>-$10</em></li>
						<li class="list-group-item">Hair 5 <em>-$10</em></li>
					</ul>
				</div>
			</div>
		</div> <!-- Container -->

		<!-- Footer Section -->
		<?php get_footer() ?>
