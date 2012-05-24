<?PHP

class IndexController extends Zend_Controller_Action{

    public function init(){}
	
	public function indexAction(){
        $this->view->hello = 'Hello Smarty 3';
        $this->view->title = 'Smarty 3 on Zend Framework';
		
		$db = new Default_Model_Datatable();
		$db->tes();
    }
}

?>