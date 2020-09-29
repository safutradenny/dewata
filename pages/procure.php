<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'/system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('procure');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.
    
    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('Device Procurement', 'Provides a variety of computer devices such as PCs, laptops, servers, printers, scanners, hardware, network devices, and other supporting devices according to your needs or industry.', 'Trust Us', '<p>As part of our services that can not be separated from the need for computer equipment, we serve the purchase of devices such as PCs, laptops, servers, printers, scanners, hardware, network devices, and other supporting devices. The computers and hardware that we offer cover all of the requirements mentioned earlier and with brands and specifications that can be tailored to your system requirements or requests.</p><p>Professional procurement of goods for the needs of your corporation or company. Everything can be done easily & guaranteed quality. Completeness and availability of more specific units according to the industry you need.</p>',

        'Legality', 'We have complete company legality permits, ranging from SIUP, TDP, AKTA, etc.', 'IT Support', 'We are supported by experienced experts in handling various projects throughout Indonesia.', 'Complete Products', 'We provide a variety of IT equipment needs that are very complete, ranging from laptops, PCs, TV Monitor printers, CCTV, Barcodes etc.');

        $forMore = array('Interested in our services ?', 'Please contact us via phone or Whatsapp on business days & hours for more information or you can leave a message on the following page :', 'Contact');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Pengadaan Perangkat', 'Menyediakan berbagai macam perangkat komputer seperti PC, laptop, server, printer, scanner, hardware, perangkat jaringan, dan perangkat pendukung lainnya sesuai dengan kebutuhan atau industri Anda.', 'Percayakan Kepada Kami', '<p>Sebagai bagian dari layanan kami yang tidak lepas dari kebutuhan akan perangkat komputer, kami melayani pembelian perangkat seperti PC, laptop, server, printer, scanner, hardware, perangkat jaringan, dan perangkat pendukung lainnya. Komputer dan hardware yang kami tawarkan mencakup dari semua kebutuhan yang disebutkan sebelumnya dan dengan merk dan spesifikasi yang dapat disesuaikan dengan kebutuhan sistem atau permintaan Anda.</p><p>Pengadaan barang profesional bagi kebutuhan korporasi atau perusahaan Anda. Semuanya dapat dilakukan dengan mudah & terjamin kualitasnya. Kelengkapan dan ketersediaan unit yang lebih spesifik sesuai bidang industri yang Anda butuhkan.</p>',

        'Legalitas', 'Kami memiliki ijin legalitas perusahaan yang lengkap, mulai dari SIUP, TDP, AKTA, dll.', 'IT Support', 'Kami didukung oleh tenaga ahli yang berpengalaman dalam menangani berbagai proyek di seluruh Indonesia.', 'Produk Lengkap', 'Kami menyediakan berbagai kebutuhan perangkat IT yang sangat lengkap, mulai dari laptop, PC, printer TV Monitor, CCTV, Barcode dll.');

        $forMore = array('Tertarik dengan layanan kami ?', 'Silahkan hubungi kami via telepon atau Whatsapp pada hari & jam kerja untuk informasi lebih lanjut atau Anda dapat meninggalkan pesan pada halaman berikut :', 'Kontak');

    break;

}

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // Berkas CSS.
'procure.css'),

array('no')); // Tanpa JS.

///////////////////////////////////////////////// ?>

<section id="procure" class="page">

    <div class="top">

        <img class="back" src="<?php echo urlBase ?>assets/img/procure.jpg">
        <div class="content text">
            <h1><?php echo $page[0] ?></h1>
            <span><?php echo $page[1] ?></span>
        </div>

    </div>

    <div class="bottom">

        <div class="content wrap">

            <div class="prime">

                <img src="<?php echo urlBase ?>assets/img/illustration/procure-left.png"/>

                <div>

                    <span><?php echo $page[2] ?></span>
                    <?php echo $page[3] ?>

                </div>

            </div>

            <div class="block wrap">

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/procure-legal.png"/>
                    <span class="title"><?php echo $page[4] ?></span>
                    <span class="desc"><?php echo $page[5] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/procure-support.png"/>
                    <span class="title"><?php echo $page[6] ?></span>
                    <span class="desc"><?php echo $page[7] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/procure-list.png"/>
                    <span class="title"><?php echo $page[8] ?></span>
                    <span class="desc"><?php echo $page[9] ?></span>

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