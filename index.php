<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servicio al Cliente | Ingreso :: Monteverde - Servicios Ambientales y Forestales</title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
		<script>
			function statusChangeCallback(response) {
				console.log('statusChangeCallback');
				if (response.status === 'connected') {
					location.replace(location.origin + '/step.php');
					document.getElementById('status').innerHTML = 'Bienvenido, espere mientras lo redireccionamos...';
				} else {
					testAPI();
				}
			}
			function checkLoginState() {
				console.log('checkLoginState');
				Mv.getLoginStatus(function(response) {
					statusChangeCallback(response);
				});
			}

			window.MonteverdeAPIInit = function() {
				Mv.init({
					clientId   : '10000000001',
					version     : '2.0.0',
					domain: 'servicioalcliente.monteverdeltda.com',
					baseURL: 'https://servicioalcliente.monteverdeltda.com',
					cookie: {
						cookieName: 'MV-XSRF-TOKEN',
						headerName: 'MV-X-XSRF-TOKEN'
					},
				});

				Mv.getLoginStatus(function(response) {
					console.log('Mv.getLoginStatus Front: ');
					console.log(response);
					statusChangeCallback(response);
				});
			};

			(function () {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = 'https://connect.monteverdeltda.com/';
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			})();

			function testAPI() {
				document.getElementById('status').innerHTML = 'Ingresa tus datos para continuar.';
				
				Mv.createFormLogin({
					'elementId': '#commentForm',
					'elementAlerts': '#commentForm',
					//'errorLabelContainer': 'messageBox',
				}, function(r){
					console.log('Respuesta del login manual.');
					console.log(r);
					if(r.status == 'connected'){
						location.reload();
					}
				})
				
			}
		</script>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="commentForm" method="POST" action="javascript: return false;">
              <h1>Portal S.A.</h1>
              <div>
                <input id="username-login-monteverde" required="" name="username-login-monteverde" type="text" class="form-control" />
              </div>
              <div>
				<input id="password-login-monteverde" required="" name="password-login-monteverde" type="password" class="form-control" />
              </div>
              <div>
				<div id="elementAlerts"></div>
                <div class="clearfix"></div>
				<center>
					<br>
					<div id="status"></div>
				<br>
				</center>
                <div class="clearfix"></div>
              </div>
              <div>
                <button class="btn btn-default" type="submit">Ingresar</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
					¿Tienes problemas para ingresar?, Intenta con este botón.
					<div class="clearfix"></div>
					<mv:login-button scope="email" onlogin="checkLoginState();"></mv:login-button> 
					<!-- // <a href="#signup" class="to_register"> Create Account </a> -->
                </p>
				<div class="clearfix"></div>
			
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Monteverde LTDA</h1>
                  <p>
					&copy 2019 Monteverde Servicios Ambientales y Forestales. Todos los derechos reservados. | Developed by <a href="https://github.com/Feliphegomez" target="_blank">FelipheGomez.</a>
				  </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
					<p>
						&copy 2019 Monteverde Servicios Ambientales y Forestales. Todos los derechos reservados. | Developed by <a href="https://github.com/Feliphegomez" target="_blank">FelipheGomez.</a>
					</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
