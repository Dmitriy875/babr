<?

class Engine {
	private $class;
	private $core = false;
	
	public function enableCore() {
		require_once "classes/core.php";
		$this->core = true;
		if( $this->core == false ) {
			die( "no core!" );
		}
	}
	public function getDataBaseConnection() {
		require_once "php/config.php";
	}
	public function getClass() {
		if( $_GET['option'] ) {
			$this->class = $_GET['option'];
		} else {
			$this->class = "main";
		}
	}
	public function requireClass() {
		if( file_exists( "classes/" . $this->class . ".php" ) ) {
			require_once( "classes/" . $this->class . ".php" );
		} else {
			die( "Нет такой страницы!" );
		}
	}
	public function checkClass() {
		if( class_exists ( $this->class ) ) {
			$start = new $this->class;
			$start->getHead();
			$start->getHeader();
			$start->getBody();
			$start->getContent();
			$start->getFooter();
		} else {
			die( "Нет такой страницы!" );
		}
	}
}

$start = new Engine;
$start->enableCore();
$start->getDataBaseConnection();
$start->getClass();
$start->requireClass();
$start->checkClass();

?>



	
	
	