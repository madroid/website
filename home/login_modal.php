	<div id="login_box" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<!-- header of the login box -->
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<div id="login_title"><h3 class="login_form">Sign in</h3></div>
		</div>
		<!-- Body of the login box -->
		<div id="loginBody" class="modal-body form-horizontal">
			<div id="inputForm">
				<div class="control-group">
					
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope"></i></span>	
							<input type="email" name="email" id="inputEmail" placeholder="Email address"  autocomplete="on" class="normal_font">
						</div>	
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span>	
							<input type="password" name="passwd" id="inputPassword" placeholder="Password" >
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!-- footer element of the login box-->
		<div class="modal-footer">
			<button type="submit" id="button_sign_in" class="btn btn-primary btn-large" onclick="userLogin()">Sign in</a>
				<button type="submit" id="button_sign_up" class="btn btn-primary btn-large" onclick="userRegister()">Sign up</a>
				</div>

			</div>
		</div>	
