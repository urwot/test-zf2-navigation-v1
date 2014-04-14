<?php
namespace Application\Model;

class Menu
{
	public $id;
	public $assignto;
	public $name;
	public $link;
	public $pos;
	public $auth;
	public $type;
	public $show;
	public $active;
	
	/**
	 * Exchange Array
	 */
	public function exchangeArray($data)
	{
		$this->id = (isset($data['id'])) ? $data['id'] : null;
		$this->assignto = (isset($data['assignto'])) ? $data['assignto'] : null;
		$this->name = (isset($data['name'])) ? $data['name'] : null;
		$this->link = (isset($data['link'])) ? $data['link'] : null;
		$this->pos = (isset($data['pos'])) ? $data['pos'] : null;
		$this->auth = (isset($data['auth'])) ? $data['auth'] : null;
		$this->type = (isset($data['type'])) ? $data['type'] : null;
		$this->show = (isset($data['show'])) ? $data['show'] : null;
		$this->active = (isset($data['active'])) ? $data['active'] : null;
	}
}