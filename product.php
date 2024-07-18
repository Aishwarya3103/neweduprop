<!-- Most Search Section Begin -->
		<section class="most-search spad" id="featured_property_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Featured Properties</h2>
							<p>Check out some of our featured properties</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="Properties">
							<div class="" id="" role="">
								<div class="row">
<?php

	include('config.php');

	$sql = "Select * from listing join seller on listing.seller_id = seller.id";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		$records[] = $row;
		
		?>
		<div class="col-lg-4 col-md-6">
										<div class="listing__item shadow">
											<div class="listing__item__pic set-bg" data-setbg="img/listing/367_thumbnail.jpg">
												<img src="img/listing/list_icon-6.png" alt="">
												<div class="listing__item__pic__tag">Popular</div>
												<div class="listing__item__pic__btns">
													<a href="#"><span class="icon_zoom-in_alt"></span></a>
													<a href="#"><span class="icon_heart_alt"></span></a>
												</div>
											</div>
											<div class="listing__item__text">
												<div class="listing__item__text__inside">
													<h5><?= $row["title"] ?></h5>
													<div class="listing__item__text__rating">
														<div class="listing__item__rating__star">
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star-half_alt"></span>
														</div>
														<h6>$40 - $70</h6>
													</div>
													<ul>
														<li><span class="icon_pin_alt"></span> <?= $row["address"] ?></li>
														<li><span class="icon_phone"></span> (+12) <?= $row["phone_num"] ?></li>
													</ul>
												</div>
												<div class="listing__item__text__info">
													<div class="listing__item__text__info__left">
														<img src="img/listing/list_small_icon-4.png" alt="">
														<span>Check with seller</span>
													</div>
												</div>
											</div>
										</div>
									</div>
		<?php
	  }
	} else {
	  $records = [];
	}
?>
		
									<div class="col-lg-4 col-md-6">
										<div class="listing__item shadow">
											<div class="listing__item__pic set-bg" data-setbg="img/listing/152_thumbnail.jpg">
												<img src="img/listing/list_icon-6.png" alt="">
												<div class="listing__item__pic__tag top_rate">Top Rate</div>
												<div class="listing__item__pic__btns">
													<a href="#"><span class="icon_zoom-in_alt"></span></a>
													<a href="#"><span class="icon_heart_alt"></span></a>
												</div>
											</div>
											<div class="listing__item__text">
												<div class="listing__item__text__inside">
													<h5>Pre School</h5>
													<div class="listing__item__text__rating">
														<div class="listing__item__rating__star">
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star-half_alt"></span>
														</div>
														<h6>$40 - $70</h6>
													</div>
													<ul>
														<li><span class="icon_pin_alt"></span> 1012 Vesper Dr. Columbus,
														Georgia(GA), United States</li>
														<li><span class="icon_phone"></span> (+12) 345-678-910</li>
													</ul>
												</div>
												<div class="listing__item__text__info">
													<div class="listing__item__text__info__left">
														<img src="img/listing/list_small_icon-4.png" alt="">
														<span>Check with seller</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="listing__item shadow">
											<div class="listing__item__pic set-bg" data-setbg="img/listing/320_thumbnail.jpg">
												<img src="img/listing/list_icon-6.png" alt="">
												<div class="listing__item__pic__tag">Popular</div>
												<div class="listing__item__pic__btns">
													<a href="#"><span class="icon_zoom-in_alt"></span></a>
													<a href="#"><span class="icon_heart_alt"></span></a>
												</div>
											</div>
											<div class="listing__item__text">
												<div class="listing__item__text__inside">
													<h5>Pre School</h5>
													<div class="listing__item__text__rating">
														<div class="listing__item__rating__star">
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star-half_alt"></span>
														</div>
														<h6>$40 - $70</h6>
													</div>
													<ul>
														<li><span class="icon_pin_alt"></span> 251 Wiley St. Forks,
														Washington(WA), United States</li>
														<li><span class="icon_phone"></span> (+12) 345-678-910</li>
													</ul>
												</div>
												<div class="listing__item__text__info">
													<div class="listing__item__text__info__left">
														<img src="img/listing/list_small_icon-4.png" alt="">
														<span>Check with seller</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="listing__item shadow">
											<div class="listing__item__pic set-bg" data-setbg="img/listing/331_thumbnail.jpg">
												<img src="img/listing/list_icon-6.png" alt="">
												<div class="listing__item__pic__tag">Popular</div>
												<div class="listing__item__pic__btns">
													<a href="#"><span class="icon_zoom-in_alt"></span></a>
													<a href="#"><span class="icon_heart_alt"></span></a>
												</div>
											</div>
											<div class="listing__item__text">
												<div class="listing__item__text__inside">
													<h5>Pre School</h5>
													<div class="listing__item__text__rating">
														<div class="listing__item__rating__star">
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star-half_alt"></span>
														</div>
														<h6>$40 - $70</h6>
													</div>
													<ul>
														<li><span class="icon_pin_alt"></span> 14320 Keenes Mill Rd.
														Cottondale, Alabama(AL), United States</li>
														<li><span class="icon_phone"></span> (+12) 345-678-910</li>
													</ul>
												</div>
												<div class="listing__item__text__info">
													<div class="listing__item__text__info__left">
														<img src="img/listing/list_small_icon-4.png" alt="">
														<span>Check with seller</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="listing__item shadow">
											<div class="listing__item__pic set-bg" data-setbg="img/listing/330_thumbnail.jpg">
												<img src="img/listing/list_icon-6.png" alt="">
												<div class="listing__item__pic__tag top_rate">Top Rate</div>
												<div class="listing__item__pic__btns">
													<a href="#"><span class="icon_zoom-in_alt"></span></a>
													<a href="#"><span class="icon_heart_alt"></span></a>
												</div>
											</div>
											<div class="listing__item__text">
												<div class="listing__item__text__inside">
													<h5>Pre School</h5>
													<div class="listing__item__text__rating">
														<div class="listing__item__rating__star">
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star-half_alt"></span>
														</div>
														<h6>$40 - $70</h6>
													</div>
													<ul>
														<li><span class="icon_pin_alt"></span> 236 Littleton St. New
														Philadelphia, Ohio, United States</li>
														<li><span class="icon_phone"></span> (+12) 345-678-910</li>
													</ul>
												</div>
												<div class="listing__item__text__info">
													<div class="listing__item__text__info__left">
														<img src="img/listing/list_small_icon-4.png" alt="">
														<span>Check with seller</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="listing__item shadow">
											<div class="listing__item__pic set-bg" data-setbg="img/listing/320_thumbnail.jpg">
												<img src="img/listing/list_icon-6.png" alt="">
												<div class="listing__item__pic__tag">Popular</div>
												<div class="listing__item__pic__btns">
													<a href="#"><span class="icon_zoom-in_alt"></span></a>
													<a href="#"><span class="icon_heart_alt"></span></a>
												</div>
											</div>
											<div class="listing__item__text">
												<div class="listing__item__text__inside">
													<h5>Pre School</h5>
													<div class="listing__item__text__rating">
														<div class="listing__item__rating__star">
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star"></span>
															<span class="icon_star-half_alt"></span>
														</div>
														<h6>$40 - $70</h6>
													</div>
													<ul>
														<li><span class="icon_pin_alt"></span> 2604 E Drachman St. Tucson,
														Arizona, United States</li>
														<li><span class="icon_phone"></span> (+12) 345-678-910</li>
													</ul>
												</div>
												<div class="listing__item__text__info">
													<div class="listing__item__text__info__left">
														<img src="img/listing/list_small_icon-4.png" alt="">
														<span>Check with seller</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Most Search Section End -->