<?php include 'header.php'; ?>

	<a class="cd-nav-trigger cd-text-replace" href="#primary-nav">Menu<span aria-hidden="true" class="cd-icon"></span></a>
	<a class="cd-nav-trigger2 project-open" href="http://<?= $_SERVER['HTTP_HOST']; ?>/logout.php" title="Log Keluar"><span aria-hidden="true" class="cd-icon"></span></a>

	<style>
		img {
			height: 250px;
			width: 350;
			border-radius: 5px;
			border: 2px solid #CCC;
			box-shadow: 5px 5px 5px #888888;
		}


	</style>

	<div class="cd-projects-container">
		<ul class="cd-projects-previews">
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Profil</h2>
						<p>Maklumat Profil Anda</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Akaun</h2>
						<p>Maklumat Akaun/Kewangan Anda</p>
					</div>
				</a>
			</li>
			
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Subsidi</h2>
						<p>Maklumat Subsidi Anda</p>
					</div>
				</a>
			</li>
			
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>NKEA</h2>
						<p>Maklumat NKEA Anda</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Lain-lain</h2>
						<p>Maklumat Lain</p>
					</div>
				</a>
			</li>



		</ul> <!-- .cd-projects-previews -->

		<ul class="cd-projects">
			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Profil</h2>
						<p>Maklumat Profil Anda</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<?php include 'profile.php'; ?>
				</div>
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Akaun</h2>
						<p>Maklumat Akaun/Kewangan Anda</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<?php include 'account.php'; ?>
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Subsidi</h2>
						<p>Maklumat Subsidi Anda</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<?php include 'subsidi.php'; ?>
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>NKEA</h2>
						<p>Maklumat NKEA Anda</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<?php include 'nkea.php'; ?>
				</div> <!-- .cd-project-info -->
			</li>


			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Lain-lain</h2>
						<p>Maklumat Tambahan</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<?php include 'lain.php' ?>
				</div> <!-- .cd-project-info -->
			</li>



		</ul> <!-- .cd-projects -->

		<button class="scroll cd-text-replace">Scroll</button>
	</div> <!-- .cd-project-container -->

	<?php include 'footer.php'; ?>