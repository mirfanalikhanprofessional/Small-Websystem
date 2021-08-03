<?php 
	require('header.php');
?>
<style type="text/css">
	.footer{
		margin: 250px auto;

	}
</style>
<div class="container">
	<div class="form-container">
		<form method="POST" action="assets/php/logincode.php">
			<div>
				<p><span class="mini-heading">1</span>Candidate Credential</p>
				<div>
					<input type="email" name="email" id="email" class="form-input" placeholder="example123@gmail.com" required>
					<label class="form-label" id="emailch"></label>
				</div>
				<div>
					<input type="password" name="password" id="password" class="form-input" placeholder="xxxx..." required>
				</div>
					<label class="checkbox-cover">
						<input type="checkbox" name="remember" value="Yes">
						<label class="checkmark"> Remember me</label>
					</label><br>
					<label class="form-label" id="passwordch"></label><br>
			</div>
			<div>
				<input type="submit" name="btn_sub" class="form-button">
			</div>
		</form>
	</div>
</div>

<?php 
	require('footer.php');
?>