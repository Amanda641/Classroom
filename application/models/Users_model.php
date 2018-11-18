<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users_model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	}




	function Get($user_id = NULL, $pp = 10, $start = 0)
	{
		if ($user_id == NULL) {
			return $this->crud_model->Get('users', NULL, NULL, NULL, 'enabled asc, username asc', $pp, $start);
		} else {
			return $this->crud_model->Get('users', 'user_id', $user_id);
		}
	}




	function Add($data)
	{
		return $this->crud_model->Add('users', 'user_id', $data);
	}




	function Edit($user_id, $data)
	{
		return $this->crud_model->Edit('users', 'user_id', $user_id, $data);
	}




	/**
	 * Delete a user
	 *
	 * @param   int   $id   ID of user to delete
	 *
	 */
	function Delete($id)
	{
		$this->db->where('user_id', $id);
		return $this->db->delete('users');
	}


}
