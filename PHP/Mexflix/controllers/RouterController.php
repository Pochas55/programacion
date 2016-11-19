<?php
final class RouterController {
	private $route;
	private $page;

	public function __construct() {
		//Autocargamos todas las clases que necesita la aplicación
		require_once('./controllers/AutoloadController.php');
		new AutoloadController();

		//defino y asigno la variable que controla las rutas de la aplicacion y la variable que invoca las vistas html
		$this->route = isset( $_GET['r'] ) ? $_GET['r'] : 'home';
		$this->page = new ViewController();

		//inicio y valido que exista una sesión
		SessionController::init_session();

		return ( $_SESSION['ok'] )
			? $this->app_routes()
			: $this->app_access();
	}

	private function app_access() {
		if ( !isset($_POST['user'])  && !isset($_POST['pass']) ) {
			$this->page->load_view('login');
		} else {
			$session = new SessionController();
			$user_session = $session->login( $_POST['user'], $_POST['pass'] );

			$this->app_session( $user_session, $_POST['user'] );
		}
	}

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

	public function __destruct() {
		unset($this);
	}
}