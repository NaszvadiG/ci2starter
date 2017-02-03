<?php

class Department_model extends CI_Model {

        public $_table = 'departments';
        public $primary_key = 'department_id';

        public function __construct()
        {
                parent::__construct();
        }

        public function create($data)
        {
                $this->db->insert($this->_table, $data);
                return $this->db->insert_id();
        }

        public function update($id,$data)
        {
                $this->db->where($this->primary_key, $id);
                $this->db->update($this->_table, $data);
                return $this->db->affected_rows();
        }

        public function delete($id)
        {
                $this->db->where($this->primary_key, $id);
                $this->db->delete($this->_table);
                return $this->db->affected_rows();
        }       

        public function get($id)
        {       
                $this->db->where($this->primary_key, $id);
                $query = $this->db->get($this->_table);
                return $query->row();
        }

        public function get_by($key,$value)
        {       
                $this->db->where($key, $value);
                $query = $this->db->get($this->_table);
                return $query->row();
        }

        public function get_many_by($key,$value)
        {       
                $this->db->where($key, $value);
                $query = $this->db->get($this->_table);
                return $query->result();
        }

        public function get_all()
        {
                $query = $this->db->get($this->_table);
                return $query->result();
        }

}
