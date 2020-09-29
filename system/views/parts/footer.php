<?php $hMenu["$this->name"] = 'mActive';
//  Sorot menu yang sedang dibuka.

$sql = $this->data->query("SELECT * FROM general");
//  Ambil semua data dalam tabel cGeneral.

$general = mysqli_fetch_assoc($sql);
//  Ubah data jadi array.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
//  Ambil data sesuai bahasa aktif.

    case 'english':
    //  Jika bahasa Inggris aktif.

        $desc = $general['descEn'];
        $footer = array('Home', 'About Bintara', 'Contact Us', 'Services', 'VSAT', 'Manage Services Network', 'Collocation Server', 'Web Design', 'Web Apps', 'eCommerce', 'Device Procurement', 'Manage Service', 'Terms and Conditions', 'Information');

    break;

    case 'indonesia':
    //  Jika bahasa Indonesia aktif.

        $desc = $general['descIn'];
        $footer = array('Beranda', 'Tentang Bintara', 'Hubungi Kami', 'Layanan', 'VSAT', 'Manage Services Network', 'Collocation Server', 'Web Desain', 'Web Apps', 'eCommerce', 'Pengadaan Perangkat', 'Manage Service', 'Syarat & Ketentuan', 'Informasi');

    break;

} ?>

<footer>

    <div class="part1">

        <div class="content" style="align-items: flex-start">

            <div class="left">

                <a class="logo" href="<?php echo urlBase ?>"><img src="<?php echo urlBase ?>assets/img/logo-color.svg"/></a>
                <span class="nameCompany"><?php echo $general['author'] ?></span>
                <div class="desc"><?php echo $desc ?></div>

            </div>

            <div class="menu">

                <div class="block">

                    <span><?php echo $footer[13] ?></span>

                    <ul>

                        <li class="<?php if(isset($hMenu['home'])) echo $hMenu['home']; ?>">
                        <a href="<?php echo urlBase ?>"><?php echo $footer[0] ?></a></li>

                        <li class="<?php if(isset($hMenu['about'])) echo $hMenu['about']; ?>">
                        <a href="<?php echo urlBase ?>pages/about"><?php echo $footer[1] ?></a></li>

                        <li class="<?php if(isset($hMenu['contact'])) echo $hMenu['contact']; ?>">
                        <a href="<?php echo urlBase ?>pages/contact"><?php echo $footer[2] ?></a></li>

                    </ul>

                </div>

                <div class="block" style="width: 320px !important; margin-right: 0 !important">

                    <span><?php echo $footer[3] ?></span>

                    <ul class="two">

                        <li class="<?php if(isset($hMenu['manage'])) echo $hMenu['manage']; ?>">
                        <a href="<?php echo urlBase ?>pages/manage"><?php echo $footer[11] ?></a></li>

                        <!-- <li class="<?php if(isset($hMenu['vsat'])) echo $hMenu['vsat']; ?>">
                        <a href="<?php echo urlBase ?>pages/vsat"><?php echo $footer[4] ?></a></li> -->

                        <li class="<?php if(isset($hMenu['fiber'])) echo $hMenu['fiber']; ?>">
                        <a href="<?php echo urlBase ?>pages/fiber"><?php echo $footer[5] ?></a></li>

                        <li class="<?php if(isset($hMenu['server'])) echo $hMenu['server']; ?>">
                        <a href="<?php echo urlBase ?>pages/server"><?php echo $footer[6] ?></a></li>

                        <li class="<?php if(isset($hMenu['web'])) echo $hMenu['web']; ?>">
                        <a href="<?php echo urlBase ?>pages/web"><?php echo $footer[7] ?></a></li>

                    </ul>

                    <ul class="two">

                        <li class="<?php if(isset($hMenu['web'])) echo $hMenu['web']; ?>">
                        <a href="<?php echo urlBase ?>pages/web"><?php echo $footer[8] ?></a></li>

                        <li class="<?php if(isset($hMenu['web'])) echo $hMenu['web']; ?>">
                        <a href="<?php echo urlBase ?>pages/web"><?php echo $footer[9] ?></a></li>

                        <li class="<?php if(isset($hMenu['procure'])) echo $hMenu['procure']; ?>">
                        <a href="<?php echo urlBase ?>pages/procure"><?php echo $footer[10] ?></a></li>

                    </ul>

                </div>

            </div>

            <div class="right">

                <div class="lang">

                    <a class="eng <?php echo ($_SESSION['lang'] == 'english') ? 'active' : '' ?>" href="#">English</a>
                    <a class="ind <?php echo ($_SESSION['lang'] == 'indonesia') ? 'active' : '' ?>" href="#">Bahasa</a>

                </div>

                <div class="location">

                    <img src="<?php echo urlBase ?>assets/img/icons/location.png"/>
                    <span><?php echo $general['address'] ?></span>

                </div>

                <div class="contact">

                    <img src="<?php echo urlBase ?>assets/img/icons/email.png"/>
                    <a href="mailto:<?php echo $general['email'] ?>"><?php echo $general['email'] ?></a>

                </div>

                <div class="contact">

                    <img src="<?php echo urlBase ?>assets/img/icons/phone.png"/>
                    <a href="javascript:void(0)"><?php echo $general['phone'] ?></a>

                </div>

            </div>

        </div>

    </div>

    <div class="part2">

        <div class="content">

            <span class="copy">Copyright &copy; 2019 by <?php echo $general['author'] ?><br/>All Right Reserved . <a href="javascript:void(0)"><?php echo $footer[12] ?></a></span>

            <div class="right">

                <div class="socials">
                    
                    <a href="<?php echo $general['instagram'] ?>" aria-label="Instagram" data-balloon-pos="up"><img src="<?php echo urlBase ?>assets/img/icons/instagram.png"/></a>
                    <a href="<?php echo $general['facebook'] ?>" aria-label="Facebook" data-balloon-pos="up"><img src="<?php echo urlBase ?>assets/img/icons/facebook.png"/></a>
                    <a href="<?php echo $general['linkedin'] ?>" aria-label="LinkedIn" data-balloon-pos="up"><img src="<?php echo urlBase ?>assets/img/icons/linkedin.png"/></a>

                </div>

                <img class="goUp" src="<?php echo urlBase ?>assets/img/icons/goUp.png"/>

            </div>

        </div>

    </div>

</footer>

<script>
 
if ($('.resContent .child a').hasClass('mActive')) {
    $('.resContent .parent').addClass('pActive');
}

if ($('.menu .child a').hasClass('mActive')) {
    $('.menu .parent').addClass('mActive');
}

</script>