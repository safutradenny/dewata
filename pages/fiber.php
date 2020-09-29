<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('fiber');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.
    
    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('Manage Service Network', '(Wireless, Fiber Optic, & Vsat) with fiber optic technology, it allows you to get fast and stable internet access.', 'Data Speed Up to Gigabit per Second (Gbps)', '<p>Optical Fiber Internet, an internet service package that utilizes Fiber Optic cable networks with greater bandwidth capacity to reach Gigabit data transmission speeds per second (Gbps) and network quality (SLA) guaranteed up to 99.5%.</p><p>By utilizing metro ethernet technology and FTTH, this service is suitable for companies that implement various business applications, such as financial applications, online database applications, SAP applications and other online applications. This Fiber Optic Internet service is carried out in collaboration with several large network providers so that we are able to reach the main lines of major cities in Indonesia.</p>',

        'Unlimited internet access can be enjoyed 24 hours a day and 7 days a week.', 'High-speed internet services with a more stable network quality so that the level of interference can be minimized.', 'A wide selection of 1 Static IP service packages with access speed levels that can be tailored to customer needs.', 'Our service is free from weather disturbances because it uses optical fiber cable media that is embedded in the ground.');

        $forMore = array('Interested in our services ?', 'Please contact us via phone or Whatsapp on business days & hours for more information or you can leave a message on the following page :', 'Contact');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Manage Service Network', '(Wireless, Fiber Optic, & Vsat) dengan teknologi fiber optik, memungkinkan Anda mendapatkan akses internet yang cepat dan stabil.', 'Kecepatan Data Hingga Gigabit per Second (Gbps)', '<p>Internet Fiber Optik, Merupakan paket layanan internet yang memanfaatkan jaringan kabel Fiber Optik dengan kapasitas bandwidth yang lebih besar hingga mencapai kecepatan transmisi data Gigabit per second (Gbps) dan kualitas jaringan (SLA) dijamin hingga 99,5%.</p><p>Dengan memanfaatkan teknologi metro ethernet dan FTTH, layanan ini sesuai bagi perusahaan yang menerapkan berbagai aplikasi bisnis, seperti aplikasi keuangan, aplikasi database online, aplikasi SAP dan aplikasi online lainnya. Layanan Internet Fiber Optik ini dilakukan melalui kerja sama dengan beberapa provider jaringan besar sehingga kami mampu menjangkau jalur utama kota-kota besar di Indonesia.</p>', 

        'Akses internet tanpa batas dapat dinikmati selama 24 jam sehari dan 7 hari seminggu.', 'Layanan internet berkecepatan tinggi dengan kualitas jaringan yang lebih stabil sehingga tingkat gangguan dapat diminimalisir.', 'Berbagai macam pilihan paket layanan 1 Static IP dengan tingkat kecepatan akses yang dapat disesuaikan dengan kebutuhan pelanggan.', 'Layanan kami bebas dari gangguan cuaca karena menggunakan media kabel serat optic yang ditanam dalam tanah.');

        $forMore = array('Tertarik dengan layanan kami ?', 'Silahkan hubungi kami via telepon atau Whatsapp pada hari & jam kerja untuk informasi lebih lanjut atau Anda dapat meninggalkan pesan pada halaman berikut :', 'Kontak');

    break;

}

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // Berkas CSS.
'fiber.css'),

array('no')); // Tanpa JS.

///////////////////////////////////////////////// ?>

<section id="fiber" class="page">

    <div class="top">

        <img class="back" src="<?php echo urlBase ?>assets/img/fiber.jpg"/>
        <div class="content text">
            <h1><?php echo $page[0] ?></h1>
            <span><?php echo $page[1] ?></span>
        </div>

    </div>

    <div class="bottom">

        <div class="content wrap">

            <div class="prime">

                <img src="<?php echo urlBase ?>assets/img/illustration/fiber-left.png"/>

                <div>

                    <span><?php echo $page[2] ?></span>
                    <?php echo $page[3] ?>

                </div>

            </div>

            <div class="block wrap">

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/fiber-unlimited.png"/>
                    <span class="title">Ultimated Internet Access</span>
                    <span class="desc"><?php echo $page[4] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/fiber-speed.png"/>
                    <span class="title">High speed and Reliability</span>
                    <span class="desc"><?php echo $page[5] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/fiber-bandwidth.png"/>
                    <span class="title">Customized Bandwidth</span>
                    <span class="desc"><?php echo $page[6] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/fiber-waterproof.png"/>
                    <span class="title">Weatherproof</span>
                    <span class="desc"><?php echo $page[7] ?></span>

                </div>

            </div>

        </div>

    </div>

    <div class="forMore">

        <img src="<?php echo urlBase ?>assets/img/illustration/forMore.png"/>

        <div class="right">

            <span class="title"><?php echo $forMore[0] ?></span>
            <span class="desc"><?php echo $forMore[1] ?></span>
            <a href="<?php echo urlBase ?>pages/contact"><?php echo $forMore[2] ?></a>

        </div>

    </div>

</section>

<?php $view->close();
//  Method penutup halaman.