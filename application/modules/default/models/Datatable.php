<?PHP
class Default_Model_Datatable extends Zend_Db_Table_Abstract{

	protected $_name = 't_user';

	public function tes(){

    	$result = $this->fetchAll();
		return $result->toArray();

	}

}

?>