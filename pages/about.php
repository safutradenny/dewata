<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('about');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.
    
    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('Your trusted IT partner.', 'We strive to be the best ICT company with excellent service and tough quality. We are committed to always making you our priority.', 'About Us', '<p>PT. Bintara Inti Solusindo is a company engaged and focused on the field of ICT (Information and Communication Technologies). We are here to provide mature and integrated solutions and strategies as maximum added value to meet all your ICT needs and problem solving. Providing good quality products, on time and excellent service is our commitment and priority to you. Transparency and professionalism are the most important for our success.</p><p>With the support of professionals and experienced in their fields, we will continue to strive to meet all the information technology needs that you need. The services we offer at the moment are VSAT (Very Small Aperture Terminal), fiber optic internet, collocation server, manage service, procurement of various computer devices, application development for desktop, web and mobile (Android & IOS).</p>', 'Our Values', 

        'Work partners',
        'We hope to continue to establish good relations with clients, rather create good working and communication relationships, and it will be easier for us to understand every solution or problem that must be solved.',

        'Teamwork',
        'Not just being able, we are also experts in the various services we offer. We have a solid & experienced team who are happy to help you solve your IT problems.',

        'Quality of Service',
        'With excellent service and strong quality, we are able to always provide the best and timely for every solution you need');

        $forMore = array('Interested in our services ?', 'Please contact us via phone or Whatsapp on business days & hours for more information or you can leave a message on the following page :', 'Contact');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Mitra IT Anda yang terpercaya.', 'Kami berupaya menjadi perusahaan ICT terbaik dengan layanan prima dan kualitas yang tangguh. Komitmen kami untuk selalu menjadikan Anda prioritas kami.', 'Tentang kami', '<p>PT. Bintara Inti Solusindo adalah perusahaan yang bergerak dan memfokuskan diri pada bidang ICT (<i>Information and Communication Technologies</i>). Kami hadir untuk memberikan solusi dan strategi yang matang dan terintegerasi sebagai nilai tambah yang maksimal untuk memenuhi segala kebutuhan dan pemecahan masalah ITC Anda. Memberikan kualitas produk yang baik, tepat waktu serta pelayanan yang prima adalah komitmen dan prioritas kami kepada Anda. Transparansi dan profesionalisme adalah yang terpenting untuk kesuksesan kami.</p><p>Dengan dukungan tenaga yang profesional dan berperngalaman dibidangnya, kami akan terus berusaha untuk memenuhi segala kebutuhan teknologi Informasi yang Anda butuhkan. Layanan yang kami tawarkan saat ini adalah VSAT (<i>Very Small Aperture Terminal</i>), internet fiber optik, collocation server, manage service, pengadaan berbagai perangkat komputer, pengembangan aplikasi untuk desktop, web dan mobile (Android & IOS).</p>', 'Nilai - nilai kami', 

        'Mitra Kerja',
        'Kami berharap untuk terus menjalin hubungan baik dengan klien, agak tercipta hubungan kerja dan komunikasi yang baik, serta akan lebih mudah untuk kami mengerti setiap solusi atau masalah yang harus dipecahkan.',

        'Kerjasama Tim',
        'Tidak sekedar mampu kami juga ahli di berbagai layanan yang kami tawarkan. Kami memiliki tim yang solid & berpengalaman yang dengan senang hati membantu Anda memecahkan permasalahan IT Anda.',

        'Kualitas Layanan',
        'Dengan layanan yang prima dan kualitas yang tangguh, Kami mampu untuk selalu memberikan yang terbaik dan tepat waktu atas setiap solusi yang Anda butuhkan.');

        $forMore = array('Tertarik dengan layanan kami ?', 'Silahkan hubungi kami via telepon atau Whatsapp pada hari & jam kerja untuk informasi lebih lanjut atau Anda dapat meninggalkan pesan pada halaman berikut :', 'Kontak');

    break;

}

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // Berkas CSS.
'about.css'),

array('no')); // Tanpa JS.

///////////////////////////////////////////////// ?>

<section id="about" class="page">

    <div class="top">

        <img class="back" src="<?php echo urlBase ?>assets/img/about.jpg"/>
        <div class="content text">
            <h1><?php echo $page[0] ?></h1>
            <span><?php echo $page[1] ?></span>
        </div>

    </div>

    <div class="bottom">

        <div class="content">

            <div class="left">

                <h1><?php echo $page[2] ?></h1>
                <h3>Take Your Business To the Next Level.</h3>
                <?php echo $page[3] ?>

                <div class="values">

                    <h1 style="margin-bottom: 20px"><?php echo $page[4] ?></h1>

                    <div class="item">

                        <span class="title"><?php echo $page[5] ?></span>
                        <span class="desc"><?php echo $page[6] ?></span>

                    </div>

                    <div class="item">

                        <span class="title"><?php echo $page[7] ?></span>
                        <span class="desc"><?php echo $page[8] ?></span>

                    </div>

                    <div class="item">

                        <span class="title"><?php echo $page[9] ?></span>
                        <span class="desc"><?php echo $page[10] ?></span>

                    </div>

                </div>

            </div>

            <img class="right" src="<?php echo urlBase ?>assets/img/illustration/about-right.png"/>

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