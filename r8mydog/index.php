<!DOCTYPE html>
<html>
	<head>
		<title>Home - r8mydog</title>
		<?php require 'snippet/bootstrap.html'; ?>
	</head>
	<body>
		<?php require 'snippet/header.php'; ?>
		<?php if ($loggedin) { header("location:/post"); } ?>
		<section class="container">
			<h1 class="text-center mt-3">r8mydog</h1>
			<p class="text-center">Welcome to the worlds best hot dog rating website!</p>
			<h4 class="text-center">Get started with just a few steps!</h4>
			<section class="d-flex">
				<ul class="mx-auto justify-content-center text-center list-unstyled">
					<li><h5><a href="/register">Make an account</a></h5></li>
					<li><h5><a href="/post/new">Create a post</a></h5></li>
					<li><h5><a href="/post">Rate other posts</a></h5></li>
				</ul>
			</section>
		</section>
	</body>
</html>
