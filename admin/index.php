<?php

require __dir__ . '/sub-config.php';
require __dir__ . '/control/for-admin-signin.php';

$temp->HTMLHeader[] = "
	<style>
		body {
			align-items: center;
			padding-bottom: 40px;
			background-color: black;
		}
		.form-signin {
			width: 100%;
			max-width: 390px;
			padding: 15px;
			margin: auto;
		}
	</style>
";

### start HTML
require __auth_dir . '/form-header.php';

?>

<div class='text-center pt-4'>
	<div class='card form-signin'>
		<div class='card-body'>
				
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
			
				<img class="mb-4" src="<?php echo $settings['logourl']; ?>" alt="" width="72" height="72">
				
				
				<?php echo sysfunc::html_notice( $msg ?? null, false ); ?>
				
				<div class='mb-2'>
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
					<span class="help-block text-danger small"><?php echo $email_err; ?></span>
				</div>
				
				<div class='mb-2'>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
					<span class="help-block text-danger small"><?php echo $password_err; ?></span>
				</div>
				
				<button class="btn btn-lg btn-primary btn-block" type="submit">
					Sign in
				</button>
				
			</form>
	
		</div>
	</div>
</div>