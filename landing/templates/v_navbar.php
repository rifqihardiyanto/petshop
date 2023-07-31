<header>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="../vendor/landing/images/logo.png" width="200" alt="" class="img-fluid">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=1">Penitipan</a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=2">Grooming</a></li>

					<?php if (isset($_SESSION['pelanggan'])): ?>
						<li class="nav-item"><a class="nav-link" href="index.php?page=3">History</a></li>
						<li class="nav-item"><a class="nav-link text-danger" href="../login.php">Logout</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Welcome, <?= $_SESSION['name']; ?></a></li>
					<?php else: ?>
						<li class="nav-item"><a class="nav-link" href="../login.php">Login</a></li>
						<li class="nav-item"><a class="nav-link" href="../register.php">Register</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
</header>
