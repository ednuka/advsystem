<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginSignup extends CI_Controller {

    function _construct() {
        parent::__construct();
    }

    function index() {

        $data['main_content'] = 'loginsignform/login_view';
        $this->load->view('loginsignform/includes/template', $data);
    }
    function kullanicisign()
    {
        $data['menu']='menus/ustyonetici_slidebarmenu';
        $data['main_content'] = 'kullanici_form';
        $this->load->view('/includes/template', $data);
    }

    function uye_gecerlimi() {
        $query = $this->uye_model->uye_kontrol(); //Kullanıcıyı model dosyamız içerisindeki validate() fonksiyonu ile kontrol ediyoruz.

        if ($query) {//Kullanıcı var ise bir sezon oluşturmamız gerekiyor.
            //sezonu oluşturmak için biraz veri hazırlıyoruz. Bu veride giriş yapan kullanıcının kullanıcı kaydı ve giriş yapıldığını gösteren logged_in değişkeni bulunuyor.
            $email=$this->input->post('email');//yeni
            $q=$this->uye_model->uye_bul($email);//yeni
            foreach($q as $uye) $id=$uye->tip_id;//yeni
            $data = array(
                'email' => $email, //kullanıcı ismini formdan alarak yazıyoruz.
                'tip_id'=>$id,//yeni
                'is_logged_in' => true//giriş yaptığı için true değerini ekliyoruz.
            );
            $this->session->set_userdata($data); //set_userdata yeni bir session oluşturur.
            redirect('site/members_area'); //yeniden yönlendirme yaparak members_area bölümünü açıyoruz.
        } else {//böyle bir kullanıcı yoksa anasayfaya yönleniyoruz.
            $this->index();
            echo "Başarısız";
        }
    }

    function logout() {
        $this->session->sess_destroy(); //bütün sessionları siler
        $data['main_content'] = 'logsignform/login_view'; //tekrar login sayfasına yönleniyoruz
        $this->load->view('logsignform/includes/template', $data);
    }

    function signup() {
        $data['main_content'] = 'loginsignform/signup_view';
        $this->load->model('uye_model');
        //$data['uyetips'] = $this->uye_model->uyetipcek();
        $this->load->view('loginsignform/includes/template', $data);
    }

    function firma_tanimla() {
        $ekle = $this->uye_model->ekle_uye();
        if ($ekle) {
            $firma = $this->uye_model->ekle_firma();
            if ($firma) {

                echo "Kayıt başarılı";
                //Aktivasyon kodu gönderme işlemi bu alanda yapılacak.
            } else {
                echo "Kayıt Başarısız.";
                $data['main_content'] = 'loginsignform/firma_signform';
                $this->load->view('loginsignform/includes/template', $data);
            }
        } else {
            echo"Bir sorun oluştu";
            redirect('loginsignup/signup');
        }
    }
    
    function ogrenci_tanimla(){
        $ekle = $this->uye_model->ekle_uye();
        if ($ekle) {
           $this->uye_model->ekle_favori();
           echo "Kayıt Başarılı";
        } else {
            echo"Bir sorun oluştu";
            redirect('loginsignup/signup');
        }
    }

    function finans_tanimla() {
        $ekle = $this->uye_model->ekle_uye();
        if ($ekle) {
            $finans = $this->uye_model->ekle_finans();
            if ($finans) {
                $hesaplar = $this->uye_model->ekle_hesap();
                if ($hesaplar) {
                    echo "Kayıt Başarılı";
                }
                else {echo "Hesap eklemedi";}
            } else {
                echo "Kayıt Başarısız";
                 $data['menu']='menus/ustyonetici_slidebarmenu';
                $data['main_content'] = 'finans_signform';
                $this->load->view('includes/template', $data);
            }
        }
    }

    function uye_ileri() {
        $this->load->model('uye_model');
        $tipid = $this->input->post('uyetip');
        $data = array(
            'isim' => $this->input->post('isim'),
            'soyisim' => $this->input->post('soyisim'),
            'email' => $this->input->post('email'),
            'sifre' => md5($this->input->post('parola1')),
            'tipid' => $tipid
        );
        $this->session->set_userdata($data); //set_userdata yeni bir session oluşturur.
        switch ($tipid) {

            case 1:$ekle = $this->uye_model->ekle_uye();
                if($ekle)
                {
                    echo"Başarılı Kayıt";
                    redirect('site/members_area');
                }
                else
                {
                    echo"Başarısız Kayıt";
                    redirect('loginsignup/kullanicisign');
                }
                break;

            case 2: $ekle = $this->uye_model->ekle_uye();
                if($ekle)
                {
                    echo"Başarılı Kayıt";
                    redirect('site/members_area');
                }
                else
                {
                    echo"Başarısız Kayıt";
                    redirect('loginsignup/kullanicisign');
                }
                break;

            case 3: $data['main_content'] = 'finans_signform';
                $data['menu']='menus/ustyonetici_slidebarmenu';
                $this->load->view('includes/template', $data);
                break;

            case 4:$data['sektor'] = $this->uye_model->sektorcek();
                $data['main_content'] = 'loginsignform/firma_signform';
                $this->load->view('loginsignform/includes/template', $data);
                break;

            case 5:
               $data['listMenuLevel1']= $this->menumodel->ListMenuLevel1();
       
               $data['main_content'] = 'loginsignform/ogrenci_signform';
                $this->load->view('loginsignform/includes/template', $data);
                break;
        }
    }

}
