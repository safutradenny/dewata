<?php $hMenu["$this->name"] = 'mActive';
//  Sorot menu yang sedang dibuka.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
//  Ambil data sesuai bahasa aktif.

    case 'english':
    // Jika bahasa Inggris aktif.

        $header = array('Home', 'About Bintara', 'Services', 'VSAT', 'Manage Services Network', 'Collocation Server', 'App Development', 'Device Procurement', 'Manage Service', 'Contact Us');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $header = array('Beranda', 'Tentang Bintara', 'Layanan', 'VSAT', 'Manage Services Network', 'Collocation Server', 'Pengembangan Aplikasi', 'Pengadaan Perangkat', 'Manage Service', 'Kontak Kami');

    break;

} ?>

<header>

    <div class="content">

        <a class="logo" href="<?php echo urlBase ?>"><img src="<?php echo urlBase ?>assets/img/logo-color.svg"/></a>

        <div class="right">

            <ul class="menu">

                <li><a class="<?php if(isset($hMenu['home'])) echo $hMenu['home']; ?>" href="<?php echo urlBase ?>"><?php echo $header[0] ?></a></li>

                <li><a class="<?php if(isset($hMenu['about'])) echo $hMenu['about']; ?>" href="<?php echo urlBase ?>pages/about"><?php echo $header[1] ?></a></li>

                <li><a class="parent" href="javascript:void(0)"><?php echo $header[2] ?><img src="<?php echo urlBase ?>/assets/img/icons/arrow-menu.png"/></a>

                    <ul class="child">

                        <!-- <li><a class="<?php if(isset($hMenu['vsat'])) echo $hMenu['vsat']; ?>" href="<?php echo urlBase ?>pages/vsat"><?php echo $header[3] ?></a></li> -->

                        <li><a class="<?php if(isset($hMenu['fiber'])) echo $hMenu['fiber']; ?>" href="<?php echo urlBase ?>pages/fiber"><?php echo $header[4] ?></a></li>

                        <li><a class="<?php if(isset($hMenu['server'])) echo $hMenu['server']; ?>" href="<?php echo urlBase ?>pages/server"><?php echo $header[5] ?></a></li>

                        <li><a class="<?php if(isset($hMenu['web'])) echo $hMenu['web']; ?>" href="<?php echo urlBase ?>pages/web"><?php echo $header[6] ?></a></li>

                        <li><a class="<?php if(isset($hMenu['procure'])) echo $hMenu['procure']; ?>" href="<?php echo urlBase ?>pages/procure"><?php echo $header[7] ?></a></li>

                        <li><a class="<?php if(isset($hMenu['manage'])) echo $hMenu['manage']; ?>" href="<?php echo urlBase ?>pages/manage"><?php echo $header[8] ?></a></li>

                    </ul>

                </li>

                <li><a class="<?php if(isset($hMenu['contact'])) echo $hMenu['contact']; ?>" href="<?php echo urlBase ?>pages/contact"><?php echo $header[9] ?></a></li>

            </ul>

            <div class="lang">

                <a class="eng <?php echo ($_SESSION['lang'] == 'english') ? 'active' : '' ?>" href="#">English</a>
                <a class="ind <?php echo ($_SESSION['lang'] == 'indonesia') ? 'active' : '' ?>" href="#">Bahasa</a>

            </div>

            <img class="resMenu" src="<?php echo urlBase ?>assets/img/icons/menu.png"/>

        </div>

        <div class="resMenuBlock">

            <div class="resContent">

                <div class="top">

                    <div class="resLang">

                        <img src="<?php echo urlBase ?>assets/img/icons/lang.png"/>
                        <?php echo ($_SESSION['lang'] == 'english')
                        ? "<a class='ind' href='javascript:void(0)'>English</a>"
                        : "<a class='eng' href='javascript:void(0)'>Bahasa</a>"
                        //  Mengubah opsi sesuai bahasa yang aktif. ?>

                    </div>

                    <img class="resClose" src="<?php echo urlBase ?>assets/img/icons/arrow.svg"/>

                </div>

                <ul class="list">

                    <li><a class="<?php if(isset($hMenu['home'])) echo $hMenu['home']; ?>" href="<?php echo urlBase ?>"><?php echo $header[0] ?></a></li>
                    <li><a class="<?php if(isset($hMenu['about'])) echo $hMenu['about']; ?>" href="<?php echo urlBase ?>pages/about"><?php echo $header[1] ?></a></li>
                    <li><a href="javascript:void(0)" class="parent"><?php echo $header[2] ?></a>

                        <ul class="child">

                            <!-- <li><a class="<?php if(isset($hMenu['vsat'])) echo $hMenu['vsat']; ?>" href="<?php echo urlBase ?>pages/vsat"><?php echo $header[3] ?></a></li> -->
                            <li><a class="<?php if(isset($hMenu['fiber'])) echo $hMenu['fiber']; ?>" href="<?php echo urlBase ?>pages/fiber"><?php echo $header[4] ?></a></li>
                            <li><a class="<?php if(isset($hMenu['server'])) echo $hMenu['server']; ?>" href="<?php echo urlBase ?>pages/server"><?php echo $header[5] ?></a></li>
                            <li><a class="<?php if(isset($hMenu['web'])) echo $hMenu['web']; ?>" href="<?php echo urlBase ?>pages/web"><?php echo $header[6] ?></a></li>
                            <li><a class="<?php if(isset($hMenu['procure'])) echo $hMenu['procure']; ?>" href="<?php echo urlBase ?>pages/procure"><?php echo $header[7] ?></a></li>
                            <li><a class="<?php if(isset($hMenu['manage'])) echo $hMenu['manage']; ?>" href="<?php echo urlBase ?>pages/manage"><?php echo $header[8] ?></a></li>

                        </ul>

                    </li>
                    
                    <li><a class="<?php if(isset($hMenu['contact'])) echo $hMenu['contact']; ?>" href="<?php echo urlBase ?>pages/contact"><?php echo $header[9] ?><img src="<?php echo urlBase ?>assets/img/icons/email.svg"/></a></li>

                </ul>

                <div class="copy">© 2019 by PT. Bintara Inti Solusindo<Br/>All Right Reserved</div>

            </div>

        </div>

        <div class="toast">

            <div class="message"><span></span></div>

        </div>

    </div>

</header>