<?PHP

class Admin_IndexController extends Zend_Controller_Action{
	
	public function init(){}
	
    public function indexAction(){
        $this->view->hello = 'Hello Smarty 3 admin';
        $this->view->title = 'Smarty 3 on Zend Framework';
		
		$db = new Admin_Model_Datatable();
		
		print_r($db->tes());
		

    }
}

?>