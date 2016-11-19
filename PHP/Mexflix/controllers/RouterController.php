<?php
final class RouterController {
	private $route;
	private $page;

	public function __construct() {
		require_once('./controllers/AutoloadController.php');
		new AutoloadController();

		$this->route = isset( $_GET['r'] ) ? $_GET['r'] : 'home';
		$this->page = new ViewController();

		SessionController::init_session();

		return ( $_SESSION['ok'] )
			? $this->app_routes()
			: $this->app_access();
	}

	private function app_access() {
		$this->page->load_view('login');
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
			default:
				$this->page->load_view('404');
				break;
		}
	}

	public function __destruct() {
		unset($this);
	}
}