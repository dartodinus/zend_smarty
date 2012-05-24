<?PHP
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{    
	/**
	* 	Bootstrap Smarty view
	*/
	
	protected function _initView(){
	
        // initialize smarty view
		$view = new Zend_View_Smarty($this->getOption('smarty'));
		
        // setup viewRenderer with suffix and view
        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
        $viewRenderer->setViewSuffix('tpl');
        $viewRenderer->setView($view);
        
        // ensure we have layout bootstraped
        $this->bootstrap('layout');
		
        // set the tpl suffix to layout also
        $layout = Zend_Layout::getMvcInstance();
        $layout->setViewSuffix('tpl');
        
        return $view;
    }
	
	
	protected function _initAutoload(){
		
		$autoloader = Zend_Loader_Autoloader::getInstance();
		$autoloader->setFallbackAutoloader(true);
		
		return $autoloader;
    }
	
	/**
	protected function _initDatabase (){
		try{
			$config = new Zend_Config_Ini( APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV );
			$db		= Zend_Db::factory( $config->database);
			Zend_DB_Table_Abstract::setDefaultAdapter($db);
		}
		
		catch ( Zend_Db_Exception $e ){
	
		}
	}
  	*/

}
?>
