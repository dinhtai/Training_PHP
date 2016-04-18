<?php

class Model extends CI_Model
{
	var $_table;

	public function __construct()
	{
		parent::__construct();

		$this->table(strtolower(get_class($this)));
		$this->load->database();
	}

	/**
	 * Set or get table name
	 * 
	 * @example $this->table();
	 * @example $this->table('user');
	 * 
	 * @param  [type] $name [description]
	 * @return [type]       [description]
	 */
	public function table($name = null)
	{
		if ($name === null) {
			return $this->_table;
		}

		$this->_table = $name;

		return $this;
	}
	/**
	 * Get a row from database
	 * @param  [type] $conditions [description]
	 * @return [type]             [description]
	 */
	public function get($conditions)
	{
		if (is_numeric($conditions)) {
			$conditions = ['id' => $conditions];
		}

		$table = $this->table();
		$where = $this->db->where($conditions);
		$query = $this->db->get($table, 1, 0);

		return $query->row();
	}

	/**
	 * Query model data
	 * 
	 * @example $this->find(['status' => 1])
	 * @example $this->find(['name' => 'RocK'])
	 * 
	 * @param  string  $conditions [description]
	 * @param  integer $limit      [description]
	 * @param  integer $offset     [description]
	 * @return [type]              [description]
	 */
	public function find($conditions = '', $limit = 100, $offset = 0)
	{
		if ($conditions) {
			$this->db->where($conditions);
		}

		$table = $this->table();
		$query = $this->db->get($table, $limit, $offset);

		return $query->result();
	}

	public function insert($data, $table = '') 
	{ 
	    if($table == '') {
	        $table = $this->table();
	    }

	    $this->db->insert($table, $data); 

	    return $this->db->affected_rows(); 
	} 

	public function update($data, $conditions, $table = '') 
	{ 
	    if($table == '') {
	    	$table = $this->table();
	    } 

		$this->db->where($conditions); 	        
	    $this->db->update($table,$data); 

	    return $this->db->affected_rows(); 
	} 

	public function delete($conditions, $table = '') 
	{ 
	    if($table == '') {
	        $table = $this->table();
	    }

	    $this->db->where($conditions); 
	    $this->db->delete($table);

	    return $this->db->affected_rows(); 
	}
}