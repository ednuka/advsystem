<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

    function _construct() {
        parent::__construct();
    }

    function kategori_islemleri($islem, $tablo) {
        switch ($islem) {
            case 'goster':
                $data['kategoriler'] = $this->eklesil_model->goster($tablo);
                switch ($tablo) {
                    case 'sikayetkategori':
                        $data['tablo'] = 'sikayetkategori';
                        $data['h1'] = 'Şikayet Kategorisi Ekle/Sil';
                        break;
                    case 'sektor':
                        $data['tablo'] = 'sektor';
                        $data['h1'] = 'Firma Sektörü Ekle/Sil';
                        break;
                    case 'bagiskategori':
                        $data['tablo'] = 'bagiskategori';
                        $data['h1'] = 'Bağış Kategorisi Ekle/Sil';
                        break;
                }
                $data['menu'] = 'menus/ustyonetici_slidebarmenu';
                $data['main_content'] = 'kategori_forms/kategori_form';
                $this->load->view('includes/template', $data);
                break;
            case 'ekle':
                $data['menu'] = 'menus/ustyonetici_slidebarmenu';
                $tanim = $this->input->post('kategori');
                $data = array('tanim' => $tanim);
                $q = $this->eklesil_model->ekle($tablo, $data);
                if ($q) {
                    echo"Ekleme işlemi başarılı";
                    $link = 'edit/kategori_islemleri/goster/' . $tablo;
                    redirect($link);
                } else {
                    echo "Ekleme işlemi başarısız";
                }
                break;
            case 'sil':
                $data['menu'] = 'menus/ustyonetici_slidebarmenu';
                $id = $this->input->post($tablo);
                $kontrol = $this->eklesil_model->silinebilir_mi('sikayetkayit', $id);
                if (!$kontrol) {
                    $q = $this->eklesil_model->sil($tablo, $id);
                    if ($q) {
                        echo"Silme işlemi başarılı";
                        $link = 'edit/kategori_islemleri/goster/' . $tablo;
                        redirect($link);
                    } else {
                        echo "Silme işlemi başarısız";
                    }
                } else {
                    echo "Bu şikayet kategorisini silemezsiniz";
                }
                break;
        }
    }

   

    function ilan_kategori($islem) {
        switch ($islem) {
            case 'ekle':
                $data['menu'] = 'menus/ustyonetici_slidebarmenu';
                $tanim = $this->input->post('kategori');
                $data = array('tanim' => $tanim);
                $q = $this->eklesil_model->ekle('ilankategori', $data);
                if ($q) {
                    echo"Ekleme işlemi başarılı";
                    redirect('edit/ilan_kategori/goster');
                } else {
                    echo "Ekleme işlemi başarısız";
                }
                break;
            case 'goster':
                $data['ilanlar'] = $this->eklesil_model->goster('ilankategori');
                $data['listMenuLevel1'] = $this->menumodel->ListMenuLevel1();
                $data['menu'] = 'menus/ustyonetici_slidebarmenu';
                $data['main_content'] = 'kategori_forms/ilanct_form';
                $this->load->view('includes/template', $data);
                break;
            case 'sil':
                $data['menu'] = 'menus/ustyonetici_slidebarmenu';
                $id = $this->input->post('ilan');
                $q = $this->eklesil_model->sil('ilankategori', $id);
                if ($q) {
                    echo"Silme işlemi başarılı";
                    redirect('edit/ilan_kategori/goster');
                } else {
                    echo "Silme işlemi başarısız";
                }
                break;
        }
    }

}
