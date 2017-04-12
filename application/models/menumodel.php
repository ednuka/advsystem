<?php defined ('BASEPATH') OR exit ('No direct access allowed!');
class Menumodel extends CI_Model {

    function _construct() {
        parent::_construct();
        $this->load->database();
    }
    public function listMenuLevel1()
    {
        $query=$this->db->get_where('ilankategori',array('parent_id'=>NULL));
        return $query->result(); //sonucu return ediyoruz.
                
        
    }
    public function listChildMenus($id)
    {
         $query=$this->db->get_where('ilankategori',array('parent_id'=>$id));
        return $query->result(); //sonucu return ediyoruz.
    }
    
}