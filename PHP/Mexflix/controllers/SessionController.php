<?php
final class SessionController {
	private $session;

	public static function init_session() {
		//http://php.net/manual/es/function.session-start.php
		//http://php.net/manual/es/session.configuration.php
		$session_options = array(
			'use_only_cookies' => 1,
			'auto_start' => 1,
			'read_and_close' => true
		);

		if ( !isset( $_SESSION ) )
			session_start( $session_options );

		if( !isset( $_SESSION['ok'] ) )
			$_SESSION['ok'] = false;

		return $_SESSION['ok'];
	}

	public function login($user, $pass) {
		$this->session = new UsersModel();
		return $this->session->login($user, $pass);

	}

	public function logout() {
		session_start();
		session_destroy();
		header('Location: ./');
	}

	public function __destruct() {
		unset($this);
	}
}