<?php
  include_once 'header.php';
?>
<main>
	<div id="banners">
		<h1>Sign in to see more events</h1>
	</div>
	<div id="register-box">
		<form action="/" method="post">
			<p>
				<label>Username:
					<input type="text" name="username">
				</label>
			</p>
			<p>
				<label>Password:
					<input type="text" name="password">
				</label>
			</p>
			<button type="submit">Log In</button>
			<button type="submit">Sign Up</button>
		</form>
	</div>
</main>
<?php
  include_once 'footer.php';
?>