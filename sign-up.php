<?php
  session_start();
  include_once 'header.php';
?>
<main>
	<div id="banner">
		<h1>Sign Up Here Today!</h1>
		<h2>Explore All The Events</h2>
	</div>
	<div id="container">
		<h1>fill your information</h1>
		<form action="db.php" method="post">
			<div id="wrap">
				<p>
					<label>First Name:
						<input type="text" name="first" placeholder="First Name...">
					</label>
				</p>
			</div>
			<div id="wrap">
				<p>
					<label>Last Name:
						<input type="text" name="last" placeholder="Last Name...">
					</label>
				</p>
			</div>
			<div id="wrap">
				<p>
					<label>Username:
						<input type="text" name="username" placeholder="Username...">
					</label>
				</p>
			</div>
			<div id="wrap">
				<p>
					<label>Password:
						<input type="text" name="password" placeholder="Password...">
					</label>
				</p>
			</div>
			<div id="wrap">
				<p>
					<label>E-mail:
						<input type="email" name="email" placeholder="example@domain.com">
					</label>
				</p>
			</div>
			<div id="wrap">
				<p>
					<label>Date Of Birth:
						<input type="date" name="birthdate">
					</label>
				</p>
			</div>
			<div id="wrap">
				<p>
					<label>Phone Number:
						<input type="text" name="telnumber" placeholder="Phone Number...">
					</label>
				</p>
			</div>
				<button type="submit">Get Started</button>
		</form>
	</div>
</main>
<?php
  include_once 'footer.php';
?>