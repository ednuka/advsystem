<?php

class EkleSil_model extends CI_Model {

    function _construct() {
        parent::_construct();
        $this->load->database();
    }
  
    function goster($tablo)
    {
        $query = $this->db->get($tablo);
        return $query->result(); //sonucu return ediyoruz.
    
    }
    function sil($tablo,$id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($tablo);
    
    }
     function ekle($tablo,$data)
    {
      
         $ekle = $this->db->insert($tablo, $data);
        return $ekle;
    
    }
    function silinebilir_mi($tablo,$id)
    {
        $query = $this->db->get_where($tablo,array('id'=>$id));
	return $query;
       
    }
    
    /*function edit($tablo,$id,$tanim)
    {
        $data=array('bagis_tanim'=>$tanim);
        $dizi = $this->db->where($tablo,array('id'=>$id));
        $this->db->update($tablo,$data);
    }*/
}
