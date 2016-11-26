<?php
final class RouterController {
	private $route;
	private $page;

	public function __construct() {
		//autocargamos todas las clases que necesita la aplicación para funcionar
		require_once('./controllers/AutoloadController.php');
		new AutoloadController();

		//defino y asigno la variable que controla las rutas de la aplicacion y la variable que invoca las vistas html
		$this->route = isset( $_GET['r'] ) ? $_GET['r'] : 'home';
		$this->page = new ViewController();
		
		//valido si existe una sesión, sino la inicializo
		SessionController::init_session();

		//si la variable ok de tipo SESSION es true se ejecuta el método privado app_routes() sino se ejecuta app_access()
		return ( $_SESSION['ok'] )
			? $this->app_routes()
			: $this->app_access();
	}

	//Método privado que valida el acceso a la aplicación:
		//Si los valores del formulario de login NO EXISTEN, la aplicación carga el formulario
		//SI EXISTEN valida que los datos EXISTAN en la BD
	private function app_access() {
		if ( !isset($_POST['user'])  && !isset($_POST['pass']) ) {
			$this->page->load_view('login');
		} else {
			$session = new SessionController();
			$user_session = $session->login( $_POST['user'], $_POST['pass'] );

			$this->app_session( $user_session, $_POST['user'] );
		}
	}

	//Método privado que valida si los datos del formulario login EXISTEN en la BD
		//Si la BD NO regresa registro (NULL) se carga el formulario de login con un mensaje de error
		//Si la BD SI regresa registro se cambia a true el valor de la variable ok de tipo SESSION, se crean variables de sesión para el usuario activo y se carga el home de la aplicación 
	private function app_session( $data = array(), $user ) {
		if ( empty($data) ) {
			//echo 'El usuario y el password son incorrectos';
			$this->page->load_view('login');
			header("Location: ./?error=El usuario <b>$user</b> y el password proporcionado no coinciden");
		} else {
			//echo 'El usuario y el password son correctos'; 
			$_SESSION['ok'] = true;

			//var_dump($data);

			$_SESSION['user'] = $data[0]['user'];
			$_SESSION['email'] = $data[0]['email'];
			$_SESSION['name'] = $data[0]['name'];
			$_SESSION['birthday'] = $data[0]['birthday'];
			$_SESSION['pass'] = $data[0]['pass'];
			$_SESSION['role'] = $data[0]['role'];

			header('Location: ./');
		}
	}

	//Método privado que contiene la navegación de la aplicación:
		//controla las peticiones entre la vista (plantillas HTML e interacciones del usuario)
		//y el modelo (Clases POO de las Tablas y las operaciones CRUD de la BD)
	private function app_routes() {
		switch ( $this->route ) {
			case 'home':
				$this->page->load_view('home');
				break;
			case 'movies':
				$this->page->load_view('movies');
				break;
			case 'status':
				$this->page->load_view('status');
				break;
			case 'countries':
				$this->page->load_view('countries');
				break;
			case 'genres':
				$this->page->load_view('genres');
				break;
			case 'users':
				$this->page->load_view('users');
				break;
			case 'logout':
				$session = new SessionController();
				$session->logout();
				break;
			default:
				$this->page->load_view('404');
				break;
		}
	}

	public static function app_unauthorized() {
		$file = new ViewController();
		$file->load_file('401');
	}

	public static function app_reload() {
		print '
			<script>
				window.onload = function () {
					reloadPage("' . $_GET['r'] . '");
				}
			</script>
		';
	}

	public function __destruct() {
		unset($this);
	}
}