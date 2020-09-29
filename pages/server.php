<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('server');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.
    
    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('We are a colocation server service provider that is committed to providing the best service and affordable prices with a capacity that can be tailored to your needs.', 'Server Flexibility and Control', '<p>Server colocation is the best solution if you want flexibility and control over your own server. Your server will be located in the best and secure data center facility at IDC 3D Duren Tiga Jakarta Indonesia with local bandwidth of 10Gbps to OpenIXP and 1Gbps to IIX APJII.</p><p>To have a server colocation hosting service you can easily choose a colocation package. We provide scalability of the best and cheapest colocation server options from 1U size servers to full rack colocation services to help you grow your business. Within 1 × 24 Hours after payment confirmation has been received, your server is ready to be placed in the data center room.</p>');

        $forMore = array('Interested in our services ?', 'Please contact us via phone or Whatsapp on business days & hours for more information or you can leave a message on the following page :', 'Contact');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Kami adalah penyedia layanan colocation server yang terus berkomitmen memberikan layanan terbaik dan harga terjangkau dengan kapasitas dapat disesuaikan dengan kebutuhan Anda.', 'Fleksibilitas dan Kontrol Server', '<p>Colocation server adalah solusi terbaik jika Anda menginginkan fleksibilitas dan kontrol atas server milik Anda sendiri. Server Anda akan diletakkan di fasilitas data center terbaik dan aman di IDC 3D Duren Tiga Jakarta Indonesia dengan bandwidth lokal 10Gbps ke OpenIXP dan 1Gbps ke IIX APJII.</p><p>Untuk memiliki layanan colocation server hosting Anda dapat dengan mudah memilih paket colocation. Kami menyediakan skalabilitas pilihan colocation server murah dan terbaik dari server ukuran 1U hingga full rak service colocation untuk membantu Anda mengembangkan bisnis Anda. Dalam waktu 1×24 Jam sejak konfirmasi pembayaran diterima, server Anda siap untuk ditempatkan di ruangan data center.</p>');

        $forMore = array('Tertarik dengan layanan kami ?', 'Silahkan hubungi kami via telepon atau Whatsapp pada hari & jam kerja untuk informasi lebih lanjut atau Anda dapat meninggalkan pesan pada halaman berikut :', 'Kontak');

    break;

}

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // Berkas CSS.
'server.css'),

array('no')); // Tanpa JS.

///////////////////////////////////////////////// ?>

<section id="server" class="page">

    <div class="top">

        <img class="back" src="<?php echo urlBase ?>assets/img/collocation.jpg"/>
        <div class="content text">
            <h1>Collocation Server.</h1>
            <span><?php echo $page[0] ?></span>
        </div>

    </div>

    <div class="bottom">

        <div class="content wrap">

            <div class="prime">

                <img src="<?php echo urlBase ?>assets/img/illustration/collocation-left.png"/>

                <div>

                    <span><?php echo $page[1] ?></span>
                    <?php echo $page[2] ?>

                </div>

            </div>

            <div class="block wrap">

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-speed.png"/>
                    <span>High Speed Broadband International Links</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-local.png"/>
                    <span>Local Connection 10 Gbps to OpenIXP and 1 Gbps to IIX APJII</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-power.png"/>
                    <span>Uninterruptible Power Supply (UPS)</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-backup.png"/>
                    <span>Utility Power Backup Generator</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-remote.png"/>
                    <span>Unlimited ‘Remote Hand’ Reboots</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-bandwidth.png"/>
                    <span>Bandwidth Monitoring (cacti)</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-dns.png"/>
                    <span>Reverse DNS Support</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-monitored.png"/>
                    <span>Monitored 24×7 Protections Against Your Facility Interruption</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-admin.png"/>
                    <span>Administrator on Duty 24×7 for Emergency Maintenance</span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/collocation-access.png"/>
                    <span>Complete Control of Access to Your Colocation Server</span>

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