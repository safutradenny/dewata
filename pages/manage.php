<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('manage');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.

    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('Helping IT deparment and IT Management focus more on strategic value by developing scale infrastructure.', 'Simplify your IT Management', '<p>The increasingly complex IT needs of your company do not always require additional investment that can increase company capital expenditure. Bintara has solutions for various IT needs through a range of Managed Services products and services. Our Managed Services solutions not only facilitate your IT management but also increase business performance efficiently through outsourcing schemes.</p><p>Managed Service is a special service for you who need more services than just standard support. Manage services that we offer include Pro-Active Monitoring, Server Performance Tuning, Troubleshooting, upgrade planning or infrastructure procurement ranging from design, planning, implementation to maintenance.</p>', 'Manage Service Scope',

        'Expert support with high flight hours', 'System design, installation, configuration, maintenance, and updates', '24/7 support for network, system, and hardware', 'Firewall management, auditing and security regulations, detection, protection, DDoS and mitigation', 'Proper data backup, data restoration, disaster recovery planning and DRC', 'Infrastructure settings, DNS hosting, load balancing, and CDN', 'Database infrastructure, cluster infrastructure and replication', 'Planning to implementing IT projects based on client needs', 'Web, e-mail and anti-spam optimization, webfarm infrastructure', 'Various fields of expertise in Private Cloud Infrastructure Intelligence');

        $forMore = array('Interested in our services ?', 'Please contact us via phone or Whatsapp on business days & hours for more information or you can leave a message on the following page :', 'Contact');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Membantu deparment IT dan Manajemen IT lebih fokus pada nilai strategis dengan mengembangkan infrastruktur berskala.', 'Permudah Pengelolaan TI Anda', '<p>Semakin kompleksnya kebutuhan TI di perusahaan Anda tidak selalu memerlukan investasi tambahan yang dapat meningkatkan belanja modal perusahaan. Bintara memiliki solusi untuk berbagai kebutuhan TI melalui rangkaian produk dan layanan Managed Services. Solusi Managed Services kami tidak hanya memudahkan pengelolaan TI Anda namun juga meningkatkan performa bisnis secara efisien melalui skema alih daya.</p><p>Managed Service adalah layanan khusus untuk Anda yang membutuhkan layanan lebih dari sekedar support standard. Manage service yang kami tawarkan diantaranya seperti Pro-Active Monitoring, Tuning Performa Server, Troubleshooting, perencanaan upgrade atau pengadaan infrastruktur mulai dari desain, perencanaan, pelaksanaan hingga perawatan.</p>', 'Manage Service Melingkupi',

        'Dukungan ahli dengan jam terbang tinggi', 'System design, instalasi, konfigurasi, maintenance, dan update', 'Dukungan 24/7 pada network, system, and hardware', 'Manajemen Firewall, audit dan peraturan keamanan, deteksi, proteksi, DDoS dan mitigasi', 'Data backup yang tepat, restorasi data, disaster recovery planning dan DRC', 'Pengaturan infrastruktur, DNS hosting, load balancing, dan CDN', 'Infrastruktur database, infrastruktur cluster dan replikasi', 'Perencanaan hingga pelaksanaan proyek IT berbasis kebutuhan client', 'Optimalisasi web, email, dan anti-spam, infrastruktur webfarm', 'Berbagai bidang keahlian pada Intelijen Infrastruktur Private Cloud');

        $forMore = array('Tertarik dengan layanan kami ?', 'Silahkan hubungi kami via telepon atau Whatsapp pada hari & jam kerja untuk informasi lebih lanjut atau Anda dapat meninggalkan pesan pada halaman berikut :', 'Kontak');

    break;

}

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // Berkas CSS.
'manage.css'),

array('no')); // Tanpa JS.

///////////////////////////////////////////////// ?>

<section id="manage" class="page">

    <div class="top">

        <img class="back" src="<?php echo urlBase ?>assets/img/manage.jpg"/>
        <div class="content text">
            <h1>Manage Service</h1>
            <span><?php echo $page[0] ?></span>
        </div>

    </div>

    <div class="bottom">

        <div class="content wrap">

            <div class="prime">

                <img src="<?php echo urlBase ?>assets/img/illustration/manage-left.png"/>

                <div>

                    <span><?php echo $page[1] ?></span>
                    <?php echo $page[2] ?>

                </div>

            </div>

            <div class="block wrap">
                
                <span class="blockTitle">Manage Service Melingkupi</span>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-support.png"/>
                    <span class="title">Experts Tech Support</span>
                    <span class="desc"><?php echo $page[3] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-technical.png"/>
                    <span class="title">Technical Management</span>
                    <span class="desc"><?php echo $page[4] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-monitoring.png"/>
                    <span class="title">Pro Active Monitoring</span>
                    <span class="desc"><?php echo $page[5] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-security.png"/>
                    <span class="title">Security</span>
                    <span class="desc"><?php echo $page[6] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-data.png"/>
                    <span class="title">Data Management</span>
                    <span class="desc"><?php echo $page[7] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-speed.png"/>
                    <span class="title">Speed & Responsive</span>
                    <span class="desc"><?php echo $page[8] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-database.png"/>
                    <span class="title">Database</span>
                    <span class="desc"><?php echo $page[9] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-intelligence.png"/>
                    <span class="title">Intelligence</span>
                    <span class="desc"><?php echo $page[10] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-email.png"/>
                    <span class="title">E-mail & Web Management</span>
                    <span class="desc"><?php echo $page[11] ?></span>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/icons/manage-virtual.png"/>
                    <span class="title">Virtualisasi</span>
                    <span class="desc"><?php echo $page[12] ?></span>

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