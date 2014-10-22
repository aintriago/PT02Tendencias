<?php
IncludeOnReady("login_onReady");
?>
<body>
	<div class="<?=(isset($login_status))?"notice":"notice_hidden";?>">
		<a href="" class="close">Cerrar</a>
		<p class="warn">Usuario o Contrase&ntilde;a incorrecta. Reintente.</p>
	</div>
	<div class="container">
		<div class="form-bg">
			<form method="POST" action="/Demo/login/login">
				<h2>Ingreso</h2>
				<p><input type="text" name="User" id="User" placeholder="Username"></p>
				<p><input type="password" name="Pass" id="Pass" placeholder="Password"></p>
				<label>
				  <a href="olvidemiclave">Olvide mi contrase&ntilde;a.</a>
				</label>
				<button type="submit"></button>
			<form>
		</div>
	</div>
</body>
</html>