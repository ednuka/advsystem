<?php

class Uye_model extends CI_Model {

    function _construct() {
        parent::_construct();
        $this->load->database();
    }

    /* function ekle_uye() {
      $data = array(
      'isim' => $this->input->post('isim'),
      'soyisim' => $this->input->post('soyisim'),
      'email' => $this->input->post('email'),
      'sifre' => md5($this->input->post('parola1'))
      );
      $ekle = $this->db->insert('uyetanim', $data);

      return $ekle;
      } */

   function uye_bul($email)
   {
       $query = $this->db->get_where('uyetanim', array('email' => $email));
        return $query->result(); //sonucu return ediyoruz.
   }
    function ekle_uye() {



        $data = array(
            'isim' => $this->session->userdata('isim'),
            'soyisim' => $this->session->userdata('soyisim'),
            'sifre' => $this->session->userdata('sifre'),
            'email' => $this->session->userdata('email'),
            'tip_id' => $this->session->userdata('tipid'),
            'durum' => false
        );
        $ekle = $this->db->insert('uyetanim', $data);
        return $ekle;
    }

    function ekle_firma() {
        $email = $this->session->userdata('email');
        $query = $this->db->get_where('uyetanim', array('email' => $email));

        foreach ($query->result() as $row)
            $id = $row->id;


        $data = array(
            'isim' => $this->input->post('firmaadi'),
            'sektor_id' => $this->input->post('sektor'),
            'tel' => $this->input->post('tel'),
            'fax' => $this->input->post('fax'),
            'web' => $this->input->post('web'),
            'adres' => $this->input->post('adres'),
            'mersis_no' => $this->input->post('mersis'),
            'yetkili_id' => $id,
        );
        $ekle = $this->db->insert('firmatanim', $data);
        return $ekle;
    }
    
    function ekle_favori(){
         $email = $this->session->userdata('email');
        $query = $this->db->get_where('uyetanim', array('email' => $email));

        foreach ($query->result() as $row)
            $id = $row->id;
        $kategori=$this->input->post('kategori');
        $i=0;$count=0;
        foreach ($kategori as $categori){
            $i++;
        $data=array(
            'ilan_kategori_id'=> $categori,
            'ogrenci_id'=>$id
            );
        $ekle=$this->db->insert('ogrencifavori',$data);
        if($ekle)$count++;
        }
       
    }

    function ekle_finans() {
        $email = $this->session->userdata('email');
        $query = $this->db->get_where('uyetanim', array('email' => $email));
        foreach ($query->result() as $row)
            $id = $row->id;
        $data = array(
            'isim' => $this->input->post('finansadi'),
            'adres' => $this->input->post('adres'),
            'tel' => $this->input->post('tel'),
            'fax' => $this->input->post('fax'),
            'yetkili_id' => $id
        );
        $ekle=$this->db->insert('vakiftanim',$data);
      
        $vakif=array("id"=>$id);
        $this->session->set_userdata($vakif);
        return $ekle;
    }
    
    function ekle_hesap() {//HATAYI BUL
        $yetkili_id = $this->session->userdata('id');
       $query = $this->db->get_where('vakiftanim', array('yetkili_id' => $yetkili_id));
       foreach ($query->result() as $row)
            $finans_id = $row->id;
        $data = array(
            'vakif_id' => $finans_id,
            'banka_adi' => $this->input->post('bankaadi'),
            'sube_adi' => $this->input->post('subeadi'),
            'sube_kodu' => $this->input->post('subekodu'),
            'hesap_no' => $this->input->post('hesapno'),
                'iban' =>$this->input->post('iban')
        );
        $ekle=$this->db->insert('hesaptanim',$data);
        return $ekle;
    }

    function uye_kontrol() {

        $this->db->where('email', $this->input->post('email')); //bu method ile username değeri formdaki username ile eşleşen,
        $this->db->where('sifre', md5($this->input->post('parola'))); //password değeri formdaki password field ile eşleşen satırları,
        $query = $this->db->get('uyetanim'); //membership tablosundan çekiyoruz.

        if ($query->num_rows() == 1)//Dönen değerin satır sayısı(yani kullanıcı sayısı) 1 ise formdaki değerler ile eşleşen bir kullanıcı mevcut demektir.Eğer birden fazla çıkıyorsa aynı kullancıı iki kere kaydedilmiş demektir. Yok 0 çıkıyor ise de böyle bir kullanıcı yok demektir.
            return true; //kullanıcının başarılı giriş yaptığını varsayarak true döndürüyoruz.  
    }

    function uyetipcek() {

        $query = $this->db->get('uyetip'); //pizza tablosundaki bütün verileri çekiyoruz.
        return $query->result(); //sonucu return ediyoruz.
    }

    function sektorcek() {

        $query = $this->db->get('sektor'); //pizza tablosundaki bütün verileri çekiyoruz.
        return $query->result(); //sonucu return ediyoruz.
    }

    function kategoricek($tablo, $parentid) {

        $query = $this->db->get_where($tablo, array('parent_id' => $parentid));
        return $query->result(); //sonucu return ediyoruz.
    }

}
