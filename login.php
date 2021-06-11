<form action="aksi_login.php" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="username" name="username" class="form-control" id="username" placeholder="Enter Your Username" name="username" />
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Your Password" name="pwd" />
			</div>
			<div class="checkbox">
				<label><input type="checkbox" name="remember" /> Remember me</label>
			</div>
			<button type="submit" class="btn btn-primary" id="submit" onclick="login()">SUBMIT</button>
		</form>