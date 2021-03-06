<div class="container">
	<div class="span12">
		<div class="header">
			<h3 class="text-center">欢迎使用Moiter项目管理系统</h3>
		</div>
		<div class="span8 offset2">
			<?if ($error):?>  
				<div class="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>The login credentials you supplied could not be recognized. Please try again.</strong> 
				</div>
			<? endif; ?>

			
			
			<div class="span4 offset2">
				<form action='<?php echo $this->webroot;?>users/login' method="post">  
					<div class="input-prepend">
						<label class="add-on" for="email">邮箱:</label>
						<input type="text" name="email"/>
					</div>  
					<div class="input-prepend">
						<label class="add-on" for="password">密码:</label>  
						<input type="password" name="password"/>
					</div>  
					<div class="span3">  
						<button class="btn btn-primary" type="submit">登录</button>
						<button class="btn" type="reset">重置</button>
						<button class="btn" href="#Register" data-toggle="modal">注册</button>  
					</div>  
				</form> 
			</div>

			<div id="Register" class="modal hide fade">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3>用户注册</h3>
				</div>
				<form name="register" method="post" action="<?=$this->webroot;?>users/register">
					<div class="modal-body">		
						<fieldset>
							<div class="input-prepend"><span class="add-on">用户名：&nbsp&nbsp&nbsp&nbsp</span><input type="text" placeholder="User name..." name="name" id="user-name-input"></input></div>
							<div class="input-prepend"><span class="add-on">密码：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><input type="password" placeholder="Password..." name="password" id="password-input"></input></div>
							<div class="input-prepend"><span class="add-on">重复密码：</span><input type="password" placeholder="Repeat your password..."  id="repeated-password-input"></input></div>
							<div class="input-prepend"><span class="add-on">邮箱：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><input type="email" placeholder="Email..." name="email" id="email-input"></input></div>
							<p>&nbsp</p>
						</fieldset>			
					</div>
					<div class="modal-footer">
						<p class="btn" data-dismiss="modal" type="button">关闭</p>
						<input class="btn" id="save-user" type="submit" onclick="check();"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<script type='text/javascript'> 
	function check(){
		var pass1 = document.getElementById('password-input'); 
		var pass2 = document.getElementById('repeated-password-input'); 
		if(pass1.value != pass2.value){ 
			pass2.setCustomValidity('两次输入的密码不一致'); 
		}else{ 
			pass2.setCustomValidity(''); 
		} 
	}
</script>