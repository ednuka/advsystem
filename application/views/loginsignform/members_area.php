<p>
    members area only!
    <?php 
    echo $this->session->userdata('email');
    echo anchor('login/logout', '  Cikis');?>
</p>