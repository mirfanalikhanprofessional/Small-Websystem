<?php 
	require('header.php');
?>
<div class="container">
	<div class="form-container">
		<form method="POST" action="assets/php/registercode.php" onsubmit="formcheck()">
			<p>Want to register or are you<a href="login.php">Already registered</a></p>
			<div>
				<p><span class="mini-heading">1</span>Candidate Personal Information</p>
				<div>	
					<input type="text" name="name" id="name" class="form-input" placeholder="Name..." onkeyup="namecheck()" required>
					<label class="form-label" id="namech"></label>
				</div>
				<div>	
					<input type="text" name="phone" id="phone" class="form-input" placeholder="033231231246" onkeyup="mobilecheck()" required>
					<label class="form-label" id="phonech"></label>
				</div>
				<div>
					<input type="text" name="age" id="age" class="form-input" placeholder="Age...." onkeyup="agecheck()" required>
					<label class="form-label" id="agech"></label>
				</div>
			</div>
			<div>
				<p><span class="mini-heading">2</span>Candidate Credential</p>
				<div>
					<input type="email" name="email" id="email" class="form-input" placeholder="example123@gmail.com" onkeyup="emailcheck()" required>
					<label class="form-label" id="emailch"></label>
				</div>
				<div>
					<input type="password" name="password" id="password" class="form-input" placeholder="xxxx..." required>
				</div>
				<div>
					<input type="password" name="confirmpassword" id="confirmpassword" class="form-input" placeholder="xxxx..." required  onkeyup="passcheck()">
					<label class="checkbox-cover">
						<input type="checkbox" id="check" onclick="showpass()">
						<span class="checkmark">Show password</span>
					</label><br>
					<label class="form-label" id="passwordch"></label>
				</div>
			</div>
			<div>
				<p><span class="mini-heading">3</span>Captcha</p>
				<div>
					<figure class="captcha">
						<header class="captcha-header">Security Check</header>
						<figcaption class="security-code">
							<p id="code">AVI6479</p>
						</figcaption>
						<a class="captcha-button">Refresh Code</a>
					</figure>
					<div class="captcha-input">
						<input type="text" name="captcha" id="captcha" class="form-input" placeholder="Captcha" onkeyup="captchacheck()" required>
						<label class="form-label" id="captchach"></label>
					</div>
				</div>
			</div>
				<div>
					<input type="submit" name="btn_sub" class="form-button">
				</div>
		</form>
	</div>
</div>
<?php 
	require('footer.php')
?>