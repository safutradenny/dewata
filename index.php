<?php require 'root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('home');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.
    
    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('Digital Transformation Solution.', 'We offer IT solutions through a variety of well-managed and integrated services', 'A little about us', 'We are a company that offers complete IT solutions through well-managed and integrated services. You focus on your business and let us make sure the IT systems we develop can help you achieve your goals.', 'Read More', 

        ///////////////////////////////////////////////

        'Contributions to Developing ICT', 'Information & Communication Technology (ICT) is our focus. We contribute to the development of Indonesian ICTs for a better future.',

        'Move For Perfect', 'The Best Internet, Datacenter and VSAT service providers in Indonesia. Continuous improvement to perfection. Customer satisfaction is absolute.',

        'Prioritize Clients', 'Clients are our family and client needs are our priority. We provide the best service. We focus on proactively helping clients.',

        ///////////////////////////////////////////////

        'Our Services', 

        'Manage Services Network', 'Fiber Optic cable network with greater bandwidth capacity to reach Gigabit data transmission speeds per second (Gbps) and network quality (SLA) guaranteed up to 99.5%',

        'Collocation Server', 'Colocation Server is a storage solution for servers in our data center so that it will simplify and provide a guarantee of durability, quality, security, for business continuity.',

        'Apps Development', 'We develop applications for a variety of platforms with the latest and reliable technology to ensure the application can run well and stable.',

        'Device Procurement', 'We serve your needs for computers, laptops, servers, printers, scanners, hardware, network devices and other supporting devices',

        'Manage Service', 'Pro-Active Monitoring, Server Performance Tuning, Troubleshooting, planning for upgrading or procuring infrastructure, from design, planning, implementing to maintenance.',

        'VSAT', 'VSAT services enable the provision of cost-effective, reliable and secure connectivity in all satellite coverage areas with various types of services and bandwidth provided.');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Solusi Tranformasi Digital.', 'Kami menawarkan solusi TI melalui berbagai layanan yang terkelola dan terintegerasi dengan baik', 'Sedikit tentang kami', 'Kami adalah perusahaan yang menawarkan solusi TI lengkap melalui layanan yang terkelola dan terintegerasi dengan baik. Anda fokus pada bisnis Anda dan biar kami yang memastikan sistem TI yang kami kembangkan dapat membantu Anda mencapai tujuan Anda.', 'Selengkapnya', 

        ///////////////////////////////////////////////

        'Kontribusi Untuk Mengembangkan TIK', 'Teknologi Informasi & Komunikasi (TIK) adalah fokus kami. Kami berkontribusi pada pengembangan TIK Indonesia untuk masa depan yang lebih baik.',

        'Bergerak Untuk Sempurna', 'Penyedia layanan Internet, Datacenter, dan VSAT Terbaik di Indonesia. Perbaikan terus menerus untuk kesempurnaan. Kepuasan pelanggan adalah mutlak.',

        'Memprioritaskan Klien', 'Klien adalah keluarga kami dan kebutuhan klien adalah prioritas kami. Kami memberikan layanan terbaik. Kami fokus untuk secara proaktif membantu klien.',

        ///////////////////////////////////////////////

        'Layanan Kami', 

        'Manage Services Network', 'Jaringan kabel Fiber Optik dengan kapasitas bandwidth yang lebih besar hingga mencapai kecepatan transmisi data Gigabit per second (Gbps) dan kualitas jaringan (SLA) dijamin hingga 99,5%',

        'Collocation Server', 'Colocation Server merupakan solusi penyimpanan untuk server pada data center milik kami sehingga akan mempermudah dan memberikan jaminan daya tahan, kualitas, keamanan, untuk kelangsungan bisnis.',

        'Pengembangan Aplikasi', 'Kami mengembangkan aplikasi untuk berbagai macam platform dengan teknologi terbaru dan handal demi menjamin aplikasi dapat berjalan baik dan stabil.',

        'Pengadaan Perangkat', 'Kami melayani kebutuhan Anda akan perangkat komputer, laptop, server, printer, scanner, hardware, perangkat jaringan, dan perangkat pendukung lainnya',

        'Manage Service', 'Pro-Active Monitoring, Tuning Performa Server, Troubleshooting,perencanaan upgrade atau pengadaan infrastructure mulai dari design, planning, implementing hingga maintenancenya.',

        'VSAT', 'Layanan VSAT memungkinkan penyediaan konektivitas yang hemat biaya, handal dan aman di seluruh wilayah cakupan satelit dengan berbagai macam jenis layanan dan bandwidth yang disediakan.');

    break;

}

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // Berkas CSS.
'index.css'),

array('no')); // Tanpa JS.

///////////////////////////////////////////////// ?>

<section id="index">

    <div class="top">

        <h1><?php echo $page[0] ?></h1>
        <span class="desc"><?php echo $page[1] ?></span>

    </div>

    <div class="opening">

        <div class="content wrap">

            <img src="<?php echo urlBase ?>assets/img/illustration/home-top.png"/>

            <div class="about">

                <?php $view->openData();
                //  Buka akses basis data.

                $sql = $view->data->query("SELECT author, trademark FROM general");
                //  Ambil data author & trademark dalam tabel cGeneral.

                $general = mysqli_fetch_assoc($sql);
                //  Ubah data yang diambil jadi array. ?>

                <span class="author"><?php echo $general['author'] ?></span>
                <h1><?php echo $page[2] ?></h1>
                <span class="desc"><?php echo $page[3] ?></span>
                <a href="<?php echo urlBase ?>pages/about"><?php echo $page[4] ?></a>

            </div>

            <div class="block">

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/connect.png"/>
                    <h3><?php echo $page[5] ?></h3>
                    <span><?php echo $page[6] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/perfect.png"/>
                    <h3><?php echo $page[7] ?></h3>
                    <span><?php echo $page[8] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/client.png"/>
                    <h3><?php echo $page[9] ?></h3>
                    <span><?php echo $page[10] ?></span>

                </div>

            </div>

        </div>

    </div>

    <div class="services">

        <div class="content wrap">

            <span class="trademark"><?php echo $general['trademark'] ?></span>
            <h1 class="title"><?php echo $page[11] ?></h1>

            <div class="block">

                <a class="item" href="<?php echo urlBase ?>pages/fiber">

                    <img src="<?php echo urlBase ?>assets/img/illustration/home-fiber.png"/>
                    <h1><?php echo $page[12] ?></h1><span><?php echo $page[13] ?></span>
                    <div class="more"><?php echo $page[4] ?><img src="<?php echo urlBase ?>assets/img/icons/arrow-more.png"/></div>

                </a>

                <a class="item" href="<?php echo urlBase ?>pages/collocation">

                    <img src="<?php echo urlBase ?>assets/img/illustration/home-collocation.png"/>
                    <h1><?php echo $page[14] ?></h1><span><?php echo $page[15] ?></span>
                    <div class="more"><?php echo $page[4] ?><img src="<?php echo urlBase ?>assets/img/icons/arrow-more.png"/></div>

                </a>

                <a class="item" href="<?php echo urlBase ?>pages/web">

                    <img src="<?php echo urlBase ?>assets/img/illustration/home-web.png"/>
                    <h1><?php echo $page[16] ?></h1><span><?php echo $page[17] ?></span>
                    <div class="more"><?php echo $page[4] ?><img src="<?php echo urlBase ?>assets/img/icons/arrow-more.png"/></div>

                </a>

                <a class="item" href="<?php echo urlBase ?>pages/procure">

                    <img src="<?php echo urlBase ?>assets/img/illustration/home-equipment.png"/>
                    <h1><?php echo $page[18] ?></h1><span><?php echo $page[19] ?></span>
                    <div class="more"><?php echo $page[4] ?><img src="<?php echo urlBase ?>assets/img/icons/arrow-more.png"/></div>

                </a>

                <a class="item" href="<?php echo urlBase ?>pages/manage">

                    <img src="<?php echo urlBase ?>assets/img/illustration/home-manage.png"/>
                    <h1><?php echo $page[20] ?></h1><span><?php echo $page[21] ?></span>
                    <div class="more"><?php echo $page[4] ?><img src="<?php echo urlBase ?>assets/img/icons/arrow-more.png"/></div>

                </a>

                <!-- <a class="item" href="<?php echo urlBase ?>pages/vsat">

                    <img src="<?php echo urlBase ?>assets/img/illustration/home-vsat.png"/>
                    <h1><?php echo $page[22] ?></h1><span><?php echo $page[23] ?></span>
                    <div class="more"><?php echo $page[4] ?><img src="<?php echo urlBase ?>assets/img/icons/arrow-more.png"/></div>

                </a> -->

            </div>

        </div>

    </div>

</section>

<?php $view->close();
//	Method penutup halaman.