<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('web');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.
    
    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('Application Development', 'Professional Website Development, sophisticated web apps, to complete eCommerce packages with applications for Android & IOS.', 'We offer a responsive website with an attractive and exclusive appearance as a branding or tool to improve your business.', '<p>We design and develop websites with attractive and elegant front-end according to your identity or your company. The website is developed with the latest methods and technology with the aim of providing maximum results and the best performance. Responsiveness is a fixed price for every website we develop due to the large number of website visitors via smartphones rather than via desktops.</p><p>We do not use a CMS (content management system) or a ready-made template, all made from scratch starting with in-depth analysis to determine a suitable design, facilities needed, and target visitors. We do this with the aim of developing faster, more efficient, exclusive, seoable, and flexible. With an experienced team since 2009, we have created many professional websites for various purposes.</p>',

        'Exclusive', 'Everything starts from zero to give us the flexibility of a design that suits your desires and identity.',

        'Performance', 'Use resources as needed plus optimization and tricks that we have to produce good performance.',

        'Seoable', 'Following the rules of Search Engine Optimization so that pages are more relevant and easier to appear in the best ranking of search engine pages.',

        'Faster search, safer, more structured and easier to work, manage and monitor anywhere and anytime.', '<p>Web-based application development for various jobs & needs to be more easily accessed anywhere and anytime. Every data is stored in a structured, safe and fast manner. Every data change will be recorded to facilitate tracking & management. We currently provide web-based applications for: Inventory or warehouse, Enterprise Resource Planning, sales, point of sales, HRD, Live Projects, and cooperatives. We are also ready to develop new applications that are tailored to your needs. The application that we make will continue to monitor our progress to ensure all goes well.</p><p>The development process starts from listening to your needs, creating a needs scenario, then turning it into a flowchart, then developing it into an application that you can use to support your business needs. We have complete experience, technology and infrastructure so that we can realize all your needs for fast, stable and secure applications in one solution.</p>',

        'Expand and reach your business with websites, mobile applications and all data management applications that we have developed exclusively for you.', '<p>Developing technology aimed at the ease of each activity becomes very important for anyone utilizing this as a business field, especially those who have a business. eCommerce is a sale and purchase transaction over the internet. Or you can analogize it as a 24-hour shop that works automatically for you even when you are sleeping.</p><p>We develop eCommerce in the form of websites, mobile applications (Android & IOS) and web-based applications to manage goods and their categories, transactions, customers, and others. We have prepared all in one package that you can use and we provide a complete infrastructure to support your eCommerce needs.</p>', 'ECommerce Development Covers',

        'Website', 'A sophisticated website with a user-friendly appearance for the convenience and shopping experience of your customers and a professional and trusted impression.',

        'Payment Methods', 'We provide a variety of payment methods ranging from bank transfers, credit cards, Virtual Accounts, to digital wallets such as OVO & GoPay.',

        'Web Apps', 'Management of customer data, transactions, products, suppliers, to reports all in one web-based application that we have prepared for your fluency in managing business.',

        'Mobile Application', 'The mobile application that we developed from scratch is available in the app store (IOS) and play store (Android). Anyone can make transactions with just a fingertip.',

        'SEO', 'Our website was developed with the basic & seoable capabilities. Make it easy for search engines like Google, Bing and Yahoo to find your website or product.',

        'Server', 'We provide a reliable and stable server for your website, web apps and mobile applications for a smooth transaction and customer shopping experience.');

        $forMore = array('Interested in our services ?', 'Please contact us via phone or Whatsapp on business days & hours for more information or you can leave a message on the following page :', 'Contact');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Pengembangan Aplikasi', 'Pengembangan Situs Web profesional, web apps yang canggih, hingga eCommerce paket lengkap dengan aplikasi untuk Android & IOS.', 'Kami menawarkan situs web responsif dengan tampilan yang menarik dan eksklusif sebagai branding atau alat bantu untuk meningkatkan usaha Anda.', '<p>Kami mendesain dan mengembangkan situs web dengan tampilan (front-end) yang menarik & elegan sesuai dengan identitas Anda atau perusahaan Anda. Situs web dikembangkan dengan metode dan teknologi terbaru dengan tujuan memberikan hasil yang maksimal dan performa terbaik. Responsif menjadi harga mati untuk setiap situs web yang kami kembangkan dikarenakan banyaknya pengunjung situs web via smartphone dibanding via desktop.</p><p>Kami tidak menggunakan CMS (content management system) ataupun template yang sudah jadi, semua dibuat dari nol dimulai dengan analisa mendalam untuk menentukan desain yang cocok, fasilitas yang diperlukan, dan target pengunjung. Hal itu kami lakukan dengan tujuan pengembangan yang lebih cepat, efisien, eksklusif, seoable, dan fleksibel. Dengan tim yang telah berpengalaman sejak tahun 2009, kami telah menciptakan banyak situs web profesional untuk berbagai keperluan.</p>',

        'Eksklusif', 'Semua dimulai dari nol untuk memberikan kami fleksibilitas atas desain yang sesuai dengan keinginan dan identitas Anda.',

        'Performa', 'Menggunakan resources seperlunya ditambah optimisasi dan trik - trik yang kami miliki untuk menghasilkan performa yang baik.',

        'Seoable', 'Mengikuti kaidah - kaidah ilmu Search Engine Optimization agar halaman lebih relevan dan mudah untuk tampil di peringkat terbaik halaman mesin pencari.',

        'Lebih cepat dalam pencarian, lebih aman, lebih terstruktur dan lebih mudah untuk bekerja, mengelola dan memantau dimana saja dan kapan saja.', '<p>Pengembangan aplikasi berbasis web untuk berbagai pekerjaan & keperluan agar lebih mudah diakses dimana saja dan kapan saja. Setiap data tersimpan secara terstruktur, aman dan cepat. Setiap perubahan data akan tercatat untuk mempermudah tracking & pengelolaan. Saat ini kami menyediakan aplikasi berbasis web untuk : Inventory atau warehouse, Enterprise Resource Planning, sales, point of sales, HRD, Live Project, dan koperasi. Kami juga siap mengembangkan aplikasi baru yang disesuaikan dengan kebutuhan Anda. Aplikasi yang kami buat akan terus kami pantau perkembangannya demi memastikan semua berjalan dengan baik.</p><p>Proses pengembangan dimulai dari mendengarkan kebutuhan Anda, menciptakan skenario kebutuhan, lalu mengubahnya menjadi flowchart, lalu mengembangkannya menjadi sebuah aplikasi yang dapat Anda gunakan untuk menunjang kebutuhan bisnis Anda. Kami memiliki pengalaman, teknologi dan infrastuktur yang lengkap sehiingga kami dapat mewujudkan semua kebutuhan Anda akan aplikasi yang cepat, stabil, dan aman dalam satu solusi.</p>',

        'Perluas dan jangkau bisnis Anda dengan situs web, aplikasi mobile, dan aplikasi pengelolaan seluruh data yang kami kembangkan eksklusif untuk Anda.', '<p>Berkembang teknologi yang tujukan untuk kemudahan akan setiap kegiatan menjadi sangat penting untuk siapa saja memanfaatkan hal ini sebagai ladang bisnis terutama mereka yang memilki usaha. eCommerce adalah transaksi jual beli melalu internet. Atau dapat Anda analogikan sebagai toko 24 jam yang bekerja secara otomatis untuk Anda bahkan saat Anda sedang tidur.</p><p>Kami mengembangkan eCommerce dalam bentuk situs web, aplikasi mobile (Android & IOS) dan aplikasi berbasis web untuk mengelola barang dan kategorinya, transaksi, pelanggan, dan lainnya. Semua kami siapkan dalam satu paket yang dapat Anda gunakan serta kami menyediakan infrastruktur yang lengkap untuk menopang kebutuhan eCommerce Anda.</p>','Pengembangan eCommerce Meliputi', 

        'Situs Web', 'Situs web canggih dengan tampilan yang user-friendly untuk kemudahan dan pengalaman belanja pelanggan Anda serta memberi kesan profesional dan terpercaya.',

        'Metode Pembayaran', 'Kami menyediakan metode pembayaran yang beragam mulai dari transfer antar bank, kartu kredit, Virtual Account, hingga dompet digital seperti OVO & GoPay.',

        'Web Apps', 'Pengelolaan data pelanggan, transaksi, produk, supplier, hingga laporan semua dalam satu aplikasi berbasis web yang kami siapkan untuk kelancaraan Anda dalam mengelola bisnis.',

        'Aplikasi Mobile', 'Aplikasi mobile yang kami kembangkan dari nol hingga tersedia di app store (IOS) dan play store (Android). Siapa saja dapat melakukan transaksi hanya dengan ujung jari.',

        'SEO', 'Situs web kami kembangkan dengan dasar & kemampuan yang seoable. Memudahkan mesin pencari seperti Google, Bing dan Yahoo untuk menemukan situs web atau produk Anda.',

        'Server', 'Kami menyediakan server yang handal dan stabil untuk situs web, web apps, dan aplikasi mobile Anda demi kelancaran transaksi dan pengalaman belanja pelanggan.');

        $forMore = array('Tertarik dengan layanan kami ?', 'Silahkan hubungi kami via telepon atau Whatsapp pada hari & jam kerja untuk informasi lebih lanjut atau Anda dapat meninggalkan pesan pada halaman berikut :', 'Kontak');

    break;

}

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // Berkas CSS.
'web.css'),

array('no')); // Tanpa JS.

///////////////////////////////////////////////// ?>

<section id="web" class="page">

    <div class="top">

        <img class="back" src="<?php echo urlBase ?>assets/img/web.jpg"/>
        <div class="content text">
            <h1><?php echo $page[0] ?></h1>
            <span><?php echo $page[1] ?></span>
        </div>

    </div>

    <div class="bottom">

        <div class="content">

            <div class="main">

                <ul class="switch">

                    <li data-tab="tab-1">Web Design</li>
                    <li data-tab="tab-2">Web Apps</li>
                    <li data-tab="tab-3">eCommerce</li>

                </ul>

                <div id="tab-1" class="tab prime">

                    <img src="<?php echo urlBase ?>assets/img/illustration/web-tab-design.png"/>

                    <div>

                        <span><?php echo $page[2] ?></span>
                        <?php echo $page[3] ?>

                        <div class="block wrap">

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-exclusive.png"/>
                                <span class="title"><?php echo $page[4] ?></span>
                                <span class="desc"><?php echo $page[5] ?></span>

                            </div>

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-performance.png"/>
                                <span class="title"><?php echo $page[6] ?></span>
                                <span class="desc"><?php echo $page[7] ?></span>

                            </div>

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-seoable.png"/>
                                <span class="title"><?php echo $page[8] ?></span>
                                <span class="desc"><?php echo $page[9] ?></span>

                            </div>

                        </div>

                    </div>

                </div>

                <div id="tab-2" class="tab prime">

                    <img src="<?php echo urlBase ?>assets/img/illustration/web-tab-apps.png"/>

                    <div>

                        <span><?php echo $page[10] ?></span>
                        <?php echo $page[11] ?>


                    </div>

                </div>

                <div id="tab-3" class="tab prime">

                    <img src="<?php echo urlBase ?>assets/img/illustration/web-tab-ecommerce.png"/>

                    <div>

                        <span><?php echo $page[12] ?></span>
                        <?php echo $page[13] ?>

                        <div class="block wrap">

                            <span class="blockTitle"><?php echo $page[14] ?></span>

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-website.png"/>
                                <span class="title"><?php echo $page[15] ?></span>
	                            <span class="desc"><?php echo $page[16] ?></span>

                            </div>

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-payment.png"/>
                                <span class="title"><?php echo $page[17] ?></span>
                                <span class="desc"><?php echo $page[18] ?></span>

                            </div>

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-apps.png"/>
                                <span class="title"><?php echo $page[19] ?></span>
	                            <span class="desc"><?php echo $page[20] ?></span>

                            </div>

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-mobile.png"/>
                                <span class="title"><?php echo $page[21] ?></span>
	                            <span class="desc"><?php echo $page[22] ?></span>

                            </div>

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-seo.png"/>
                                <span class="title"><?php echo $page[23] ?></span>
	                            <span class="desc"><?php echo $page[24] ?></span>

                            </div>

                            <div class="item">

                                <img src="<?php echo urlBase ?>assets/img/icons/web-server.png"/>
                                <span class="title"><?php echo $page[25] ?></span>
                                <span class="desc"><?php echo $page[26] ?></span>

                            </div>

                        </div>

                    </div>

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

<script>

    $('#tab-1').addClass("opened");
    $("li[data-tab='tab-1']").addClass("clicked");

    $('.switch li').click(function(){

        var tab_id = $(this).attr('data-tab');
        $('.tab').removeClass('opened');
        $('.switch li').removeClass('clicked');

        $(this).addClass('clicked');
        $("#"+tab_id).addClass('opened');

    });

</script>

<?php $view->close();
//  Method penutup halaman.