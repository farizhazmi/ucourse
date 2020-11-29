<?php 
	include_once 'header.php'
?>
	<style>
		.header-text{
			padding: 150px 0 !important;
		}
		.wrapper-user-profile-picture {
		    position: absolute;
		    top: -70px;
		    width: 200px;
		    height: 200px;
		}

		.wrapper-user-profile-picture .profile-picture-img {
		    width: 100%;
		    border-radius: 20px;
		}

		.wrapper-profile-description .fullname {
		    font-size: 2rem;
		    font-family: 'lato-bold';
		}

		.wrapper-profile-description {
		    padding: 20px 0;
		}

		.wrapper-profile-description .register-date {
		    font-size: 1.2rem;
		}

		.wrapper-profile-description ul {
		    list-style: none;
		    padding: 0;
		    margin: 0;
		    display: flex;
		}

		.nav-tabs .nav-link {
		    font-size: 1.1rem;
		}
		.tab-content {
			padding: 20px 0;
		}
		.wrapper-user-profile-picture #preview-profile-picture {
		    max-width: 100%;
		    object-fit: cover;
		    border-radius: 100%;
		}
		#file-profile-picture {
		    position: absolute;
		    width: 100%;
		    height: 100%;
		    opacity: 0;
		    left: 0;
		    top: 0;
		}
		#file-profile-picture:hover{
			cursor: pointer;
		}

		/* Small devices (landscape phones, 576px and up) */
		@media (max-width: 767px) {
			.wrapper-user-profile-picture {
			    position: relative;
			}
			.wrapper-profile-description {
			    position: relative;
			    top: -43px;
			    text-align: center;
			}
		}
	</style>

	<section class="bg-main-header" style="height: 400px; background: url(../assets/images/bg.jpg) no-repeat center center; background-size: cover;">
		<div class="section-overlay">
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="wrapper-user-profile-picture">
					<img id="preview-profile-picture" src="../assets/images/thumbnail-profile.jpg" />
					<input id="file-profile-picture" onchange="readURL(this)" type="file" name="profile_picture" />
				</div>
			</div>
			<div class="col-md-9">
				<div class="wrapper-profile-description">
					<h4 class="fullname">Fariz Hazmi</h4>
					<p class="register-date">Bergabung sejak 19 Jul 2016 </p>
					<!--<ul>
						<li><span class="material-icons">location_on</span> &nbsp;<span class="location">Kota Medan, Sumatera Utara</span></li>
					</ul>-->
				</div>
			</div>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="course-tab" data-toggle="tab" href="#course" role="tab" aria-controls="course" aria-selected="false">Course</a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							
						</div>
						<div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="course-tab">
							<h4 class="tab-content-title mb-4">Kelas yang anda ikuti</h4>
							<div class="row mb-5">
								<div class="col-md-4">
									<a href="../course.php" class="box-class">
										<div class="thumbnail">
											<img class="full-width" src="../assets/images/thumbnail.jpg" />
										</div>
										<div class="description">
											<h5 class="title">Full-Stack Web Development</h5>
											<div class="review">
												<span class="material-icons yellow">grade</span>
												<span class="material-icons yellow">grade</span>
												<span class="material-icons yellow">grade</span>
											</div>
											<div class="modul-desc">
												<ul>
													<li><span class="material-icons">bookmarks</span> &nbsp; 25 Materi</li>
													<li><span class="material-icons">access_time</span> &nbsp; 10 Jam</li>
												</ul>
											</div>
											<div class="progress">
											 	<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
											</div>
											<p>Every programmer should build a strong foundation in programming.</p>
										</div>
									</a>
								</div>
								<div class="col-md-4">
									<a href="course.php" class="box-class">
										<div class="thumbnail">
											<img class="full-width" src="../assets/images/thumbnail.jpg" />
										</div>
										<div class="description">
											<h5 class="title">Full-Stack Web Development</h5>
											<div class="review">
												<span class="material-icons yellow">grade</span>
												<span class="material-icons yellow">grade</span>
												<span class="material-icons yellow">grade</span>
											</div>
											<div class="modul-desc">
												<ul>
													<li><span class="material-icons">bookmarks</span> &nbsp; 25 Materi</li>
													<li><span class="material-icons">access_time</span> &nbsp; 10 Jam</li>
												</ul>
											</div>
											<div class="progress">
											 	<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
											</div>
											<p>Every programmer should build a strong foundation in programming.</p>
										</div>
									</a>
								</div>
								<div class="col-md-4">
									<a href="course.php" class="box-class">
										<div class="thumbnail">
											<img class="full-width" src="../assets/images/thumbnail.jpg" />
										</div>
										<div class="description">
											<h5 class="title">Full-Stack Web Development</h5>
											<div class="review">
												<span class="material-icons yellow">grade</span>
												<span class="material-icons yellow">grade</span>
												<span class="material-icons yellow">grade</span>
											</div>
											<div class="modul-desc">
												<ul>
													<li><span class="material-icons">bookmarks</span> &nbsp; 25 Materi</li>
													<li><span class="material-icons">access_time</span> &nbsp; 10 Jam</li>
												</ul>
											</div>
											<div class="progress">
											 	<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
											</div>
											<p>Every programmer should build a strong foundation in programming.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php 
	include_once 'footer.php'
?>