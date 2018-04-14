<?

class Main extends Core {
	function getHead() {
		require_once( "php/main/head.php" );
	}
	function getHeader() {
		require_once( "pages/header/header.php" );
	}
	function getBody() {
		require_once( "pages/body/body.php" );
	}
	function getContent() {
		require_once( "pages/content/content.php" );
	}
	function getFooter() {
		require_once( "pages/footer/footer.php" );
	}
	
}

?>