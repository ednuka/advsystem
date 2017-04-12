<?php
class Site extends CI_Controller
{
	function __construct()//site classı her çağrıldığında otomatik çalışan fonksiyon
	{
		parent::__construct();
		$this->is_logged_in();//members_area her çağrıldığında öncelikle bu fonksiyon çalışacak
	}
	function members_area()
	{
        
        //$data['uyetips'] = $this->uye_model->uyetipcek();
        $tip= $this->session->userdata('tip_id');
        switch ($tip){
            case 1:$data['menu']='menus/ustyonetici_slidebarmenu';
                $data['baslik']='Üst Yönetici Paneli';break;
	
            case 2:$data['menu']='menus/yonetici_slidebarmenu';
                $data['baslik']='Yönetici Paneli';break;
            case 3:$data['menu']='menus/finans_slidebarmenu';
                $data['baslik']='Finansal Birim Paneli';break;
            case 4:$data['menu']='menus/firma_slidebarmenu';
                $data['baslik']='Firma Paneli';break;
            case 5:$data['menu']='menus/ogrenci_slidebarmenu';
                $data['baslik']='Öğrenci Paneli';break;
        }
        $data['main_content']='ustpanel.php';
        
        $this->load->view('includes/template',$data);
	}
	function is_logged_in()//giriş yapmış kullanıcı var ise members_area erişimine izin verecek aksi halde engelleyecek.
	{
		$is_logged_in = $this->session->userdata('is_logged_in');//Burada oturumdan is_logged_in değerini çekiyoruz. Eğer true dönerse bir kullanıcı giriş yapmış demektir.
 
		if(!isset($is_logged_in) || $is_logged_in != true)//is_logged_in set edilmiş mi ve set edildi ise değeri true mu? Cevabımız evet ise bu fonksiyon bir problem çıkarmıyor ve yolumuza devam edip sayfamıza erişiyoruz.
		{
			echo 'Bu sayfaya erişim yetkiniz yok <a href="../loginsignup">Giriş</a>';//Aksi halde erişim yok uyarısı verip,
			die();//işlemi durduruyoruz.
		}
	}
}
?>