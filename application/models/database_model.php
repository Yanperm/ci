<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Database_model extends CI_Model{
    //แสดงข้อมูลจากฐานข้อมูล
    public function select_member(){        
        $this->db->get("");
        return true;
    }
    //เพิ่มข้อมูลเข้าฐานข้อมูล
    public function create_member(){
        $this->db->insert("");
        return true;
    }
    //แก้ไขข้อมูลในฐานข้อมูล
    public function update_member(){
        $this->db->update("");
        return true;
    }
    //ลบข้อมูลในฐานข้อมูล
    public function delete_member(){
        $this->db->delete("");
        return true;
    }
}