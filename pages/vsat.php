<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('vsat');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.
    
    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('The right solution for the needs of data communication between branch offices using satellite.', 'Stable Connection', '<p>One of the main services we offer is VSAT. VSAT stands for Very Small Aperture Terminal, a term used to describe satellite communication devices with antennas with diameters ranging from 1m to 4.5m. For companies engaged in finance, banking, energy, to government institutions, VSAT services are the right solution for customers who need stable connections and want to establish communication with branch offices in various remote areas.</p>',

        'VSAT solutions based on Spectrum Bands', 
        
        '<p>Our VSAT services with the C-band spectrum are known for their reliability against weather changes and high Service Level Agreements (SLAs). VSAT C-Band is generally used for applications that require a high level of reliability and security such as banking applications, emergency services and ERP implementations.</p><p>In terms of bandwidth allocation for VSAT C-Band, we offer VSAT-Internet Protocol services (VSAT-IP) with a bandwidth ratio shared by several customers, as well as a VSAT SCPC (Single Carrier Per Channel) service that guarantees the availability of certain bandwidth (dedicated) for each VSAT terminal.</p>', 

        '<p>VSAT services that offer broadband connections with smaller antenna devices at more affordable prices. This service can be used by anyone who needs an internet connection, be it at home, school, rural (village office), small and medium businesses (SMEs), clinics, hospitals and various types of business multi-sector businesses.</p><p>VSAT KU-BAND is a broadband internet service solution anywhere in Indonesia because it can serve up to areas without terrestrial communication networks such as radio, GSM, cable and optical fiber.</p>',

        'VSAT Solutions Based on Services',

        '<p>The VSAT Virtual Private Network (VPN) service allows multiple office locations or sites within an organization to be connected through a closed network, even though they are spread over different locations. Users of VSAT VPN services are generally banks, governments and other industries. Security and reliability are two important aspects of this service because of the sensitivity and urgency of the data sent. </p> <p> To meet customer needs, we offer flexible service options, from configuring services to suit individual needs to those designed specifically to meet the high traffic requirements for large companies.</p>',

        '<p>VSAT Internet services allow regions or locations that are not covered by terrestrial networks such as cable, fiber or cellular to be able to enjoy Internet services. This service offers bandwidth that can be adjusted to the needs of customers with affordable and efficient unlimited and quota-based access options. </p> <p> By using a separate hub, which is connected to the local and international internet backbone via satellite and optical fiber, and integrated with the latest technology to accommodate the increasing demand for internet needs, we continue to strive to provide the best for its customers. With higher efficiency, we offer the best value at an affordable price compared to other competitors.</p>');

        $forMore = array('Interested in our services ?', 'Please contact us via phone or Whatsapp on business days & hours for more information or you can leave a message on the following page :', 'Contact');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Solusi tepat untuk kebutuhan komunikasi data antar kantor cabang dengan memanfaatkan satelit.', 'Koneksi Stabil', '<p>Salah satu layanan utama yang kami tawarkan adalah VSAT. VSAT adalah singkatan dari Very Small Aperture Terminal, sebuah istilah yang digunakan untuk menerangkan alat komunikasi satelit dengan antena yang berdiameter mulai dari 1m hingga 4.5m. Bagi perusahaan yang bergerak di bidang keuangan, perbankan, energi, hingga institusi pemerintahan, layanan VSAT adalah solusi tepat bagi pelanggan yang membutuhkan koneksi yang stabil serta ingin membangun komunikasi dengan kantor-kantor cabangnya di berbagai pelosok daerah.</p>',

        'Solusi VSAT berdasarkan Band Spektrum', 
        
        '<p>Layanan VSAT kami dengan spektrum C-band dikenal dengan kehandalannya terhadap perubahan cuaca dan Service Level Agreement (SLA) yang tinggi. VSAT C-Band umumnya digunakan untuk aplikasi yang membutuhkan tingkat kehandalan serta keamanan yang tinggi seperti aplikasi perbankan, layanan darurat dan implementasi ERP.</p><p>Dalam hal alokasi bandwidth untuk VSAT C-Band, kami menawarkan layanan VSAT-Internet Protocol (VSAT-IP) dengan rasio bandwidth yang dibagi ke beberapa pelanggan, serta layanan VSAT SCPC (Single Carrier Per Channel) yang menjamin tersedianya bandwidth tertentu (dedicated) untuk setiap terminal VSAT.</p>', 

        '<p>Layanan VSAT yang menawarkan koneksi broadband dengan perangkat antenna yang lebih kecil dan harga yang lebih terjangkau. Layanan ini  dapat digunakan siapa saja yang membutuhkan koneksi internet, baik itu di rumah, sekolah, pedesaan (kantor desa), usaha kecil menengah (UKM), klinik, rumah sakit maupun berbagai macam jenis bisnis usaha multi sektor lainnya.</p><p>VSAT KU-BAND adalah solusi layanan internet broadband di mana saja di seluruh Indonesia karena dapat melayani hingga ke daerah yang tidak ada jaringan komunikasi terrestrial seperti radio, GSM, kabel dan fiber optik.</p>',

        'Solusi VSAT Berdasarkan Layanan',

        '<p>Layanan VSAT Virtual Private Network (VPN) memungkinkan beberapa lokasi kantor atau situs dalam suatu organisasi dapat terhubung melalui suatu jaringan tertutup, meskipun mereka tersebar di lokasi yang berbeda. Pengguna layanan VSAT VPN pada umumnya adalah bank, pemerintah dan juga industri lainnya. Keamanan dan kehandalan adalah dua aspek penting dari layanan ini karena sensitivitas dan urgensi dari data yang dikirimkan.</p><p>Untuk memenuhi kebutuhan pelanggan, kami menawarkan pilihan layanan yang fleksibel, mulai dari konfigurasi layanan yang sesuai dengan kebutuhan individu hingga yang dirancang khusus untuk memenuhi kebutuhan lalu lintas tinggi bagi perusahaan-perusahaan besar.</p>',

        '<p>Layanan VSAT Internet memungkinkan daerah atau lokasi yang tidak terjangkau jaringan terrestrial seperti kabel, fiber maupun selular untuk dapat menikmati layanan Internet. Layanan ini menawarkan bandwidth yang dapat disesuaikan dengan kebutuhan pelanggan dengan pilihan akses unlimited maupun berbasis quota yang terjangkau dan efisien.</p><p>Dengan menggunakan hub tersendiri, yang terhubung dengan backbone internet lokal maupun internasional melalui satelit dan serat optic, serta dipadukan dengan teknologi terkini untuk mengakomodasi naiknya permintaan kebutuhan internet, kami  terus berupaya untuk memberikan yang terbaik bagi pelanggannya. Dengan efisiensi yang lebih tinggi, kami menawarkan nilai terbaik dengan harga yang terjangkau dibandingkan dengan kompetitor lain.</p>');

        $forMore = array('Tertarik dengan layanan kami ?', 'Silahkan hubungi kami via telepon atau Whatsapp pada hari & jam kerja untuk informasi lebih lanjut atau Anda dapat meninggalkan pesan pada halaman berikut :', 'Kontak');

    break;

}

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // Berkas CSS.
'vsat.css'),

array('no')); // Tanpa JS.

///////////////////////////////////////////////// ?>

<section id="vsat" class="page">

    <div class="top">

        <img class="back" src="<?php echo urlBase ?>assets/img/vsat.jpg"/>
        <div class="content text">
            <h1>VSAT</h1>
            <span><?php echo $page[0] ?></span>
        </div>

    </div>

    <div class="bottom">

        <div class="content wrap">

            <div class="prime">

                <img src="<?php echo urlBase ?>assets/img/illustration/vsat-left.png"/>

                <div>

                    <span><?php echo $page[1] ?></span>
                    <?php echo $page[2] ?>

                </div>

            </div>

            <div class="block wrap">

                <span class="blockTitle"><?php echo $page[3] ?></span>
                <span class="blockDesc">VSAT C-Band, VSAT Ku-Band</span>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/illustration/vsat-c-band.svg"/>
                    <span class="title">VSAT C-Band</span>
                    <div class="desc"><?php echo $page[4] ?></div>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/illustration/vsat-ku-band.svg"/>
                    <span class="title">VSAT KU-Band</span>
                    <div class="desc"><?php echo $page[5] ?></div>

                </div>

            </div>

            <div class="block wrap">

                <span class="blockTitle"><?php echo $page[6] ?></span>
                <span class="blockDesc">Virtual Private Network (VPN), Internet Protocal (IP)</span>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/illustration/vsat-vpn.svg"/>
                    <span class="title">VSAT VPN</span>
                    <div class="desc"><?php echo $page[7] ?></div>

                </div>

                <div class="item">

                    <img src="<?php echo urlBase ?>assets/img/illustration/vsat-internet.svg"/>
                    <span class="title">VSAT internet</span>
                    <div class="desc"><?php echo $page[8] ?></div>

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