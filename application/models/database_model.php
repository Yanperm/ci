<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Database_model extends CI_Model{
    //แสดงข้อมูลจากฐานข้อมูล
    public function select_member(){        
        $db = $this->db->get("tbmember");
        return $db->result();
    }
    //เพิ่มข้อมูลเข้าฐานข้อมูล
    public function create_member(){
        $db = $this->db->insert("tbmember");
        return $db->result();
    }
    //แก้ไขข้อมูลในฐานข้อมูล
    public function update_member(){
        $db = $this->db->update("tbmember");
        return $db->result();
    }
    //ลบข้อมูลในฐานข้อมูล
    public function delete_member(){
        $db = $this->db->delete("tbmember");
        return $db->result();
    }
    
}