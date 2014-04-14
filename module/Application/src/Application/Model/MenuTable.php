<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class MenuTable
{
	protected $tableGateway;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGateway = $tableGateway;
	}
	
	public function fetchAll()
	{
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}
	
	public function getMenu($type="main")
	{		 
		$resultSet = $this->tableGateway->select(array(
		    'type' => $type, 
		    'assignto' => 0,
		    'active' => 1
		));

		return $resultSet;
	}
	
	public function getSubmenus($idmain=0)
	{
		$resultSet = $this->tableGateway->select(array(
			'assignto' => $idmain,
		    'active' => 1
		));
	
		return $resultSet;
	}
}