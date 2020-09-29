<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('contact');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

switch($_SESSION['lang']){
    //  Ambil data sesuai bahasa aktif.
    
    case 'english':
    // Jika bahasa Inggris aktif.

        $page = array('Address', 'Email', 'Whatsapp', 'Have a Question ?', 'Send your questions about our services via the form below.', 'Personal Name / Company Name', 'Business Email Address', 'Phone Number', 'Your Message', 'Fill in the message a maximum of 300 characters', 'By sending this message, you agree to provide us with information such as your e-mail address, telephone number and Company name.', 'Send Message', 'Retype the character', 'fill in all forms');

    break;

    case 'indonesia':
    // Jika bahasa Indonesia aktif.

        $page = array('Address', 'Email', 'Whatsapp', 'Punya Pertanyaan ?', 'Kirimkan pertanyaan Anda mengenai layanan kami melalui form dibawah ini.', 'Nama Pribadi / Nama Perusahaan', 'Alamat Email Bisnis', 'No. Telepon', 'Isi Pesan', 'Isi pesan maks. 300 karakter', 'Dengan Anda mengirimkan pesan ini maka Anda setuju untuk memberikan informasi seperti alamat email, nomor telepon, dan nama Perusahaan kepada kami.', 'Kirim Pesan', 'Ketik ulang karakter', 'Isi semua form');

    break;

}

/////////////////////////////////////////////////

$view->head(
    //  Method bagian head.

array( // Berkas CSS.
'mapbox.css',
'contact.css'),

array( // Berkas JS.
'mapbox.js',
'captcha.js'));

///////////////////////////////////////////////// 

$sql = $view->data->query("SELECT address, phone, email FROM general");
//  Ambil data address, phone dan email dalam tabel general.

$general = mysqli_fetch_assoc($sql);
//  Ubah data menjadi array. ?>

<section id="contact">

    <div id="maps"></div>

    <div class="content top wrap">

        <div class="item">

            <img src="<?php echo urlBase ?>assets/img/icons/location.png"/>
            <div>
                <h3><?php echo $page[0] ?></h3>
                <span><?php echo $general['address'] ?></span>
            </div>

        </div>

        <div class="item">

            <img src="<?php echo urlBase ?>assets/img/icons/email.png"/>
            <div>
                <h3><?php echo $page[1] ?></h3>
                <a href="mailto:<?php echo $general['email'] ?>"><?php echo $general['email'] ?></a>
            </div>

        </div>

        <div class="item" style="opacity: 0">

            <img src="<?php echo urlBase ?>assets/img/icons/phone.png"/>
            <div>
                <h3><?php echo $page[2] ?></h3>
                <a href="javascript:void(0)"><?php echo $general['phone'] ?></a>
            </div>

        </div>

    </div>
    
    <div class="content bottom wrap">

        <form action="<?php echo urlBase ?>reports/contact.php" method="POST">

            <h1><?php echo $page[3] ?></h1>
            <span class="desc"><?php echo $page[4] ?></span>

            <div class="obj">

                <label><?php echo $page[5] ?></label>
                <input type="text" name="fullname" maxlength="100" spellcheck="false" placeholder="Binsar Harseno / PT. Xyz Pratama Sejahtera" required/>

            </div>

            <div class="obj">

                <label><?php echo $page[6] ?></label>
                <input type="email" name="email" maxlength="100" spellcheck="false" placeholder="Ex : john@example.com" required/>

            </div>

            <div class="obj">

                <label><?php echo $page[7] ?></label>
                <input type="text" name="code" class="code" value="+62" readonly/>
                <input type="number" name="phone" maxlength="30" class="with-code" spellcheck="false" placeholder="Ex : 87812344999" required/>

            </div>

            <div class="obj">

                <label><?php echo $page[8] ?></label>
                <textarea name="message" spellcheck="false" maxlength="300" placeholder="<?php echo $page[9] ?>" required></textarea>

            </div>

            <?php function randomString($length){

                $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
                srand((double)microtime()*1000000);
                $str = "";
                $i = 0;

                while($i <= $length){

                    $num = rand() % 33;
                    $tmp = substr($chars, $num, 1);
                    $str = $str . $tmp;
                    $i++;

                }

                return $str;

            }

            $_SESSION['captcha'] = randomString(rand(5,6)) ?>

        	<div id="captcha" class="obj">

                <label>Captcha</label>

        		<img title="captcha" src="image.php"/>
        		<input class="capVal" type="text" name="captcha" spellcheck="false" required
                autocomplete="off" placeholder="<?php echo $page[12] ?>"/>

        	</div>

            <span class="terms"><?php echo $page[10] ?></span>
            <div class="captInfo"><?php echo $page[13] ?></div>
            <button type="submit" class='with-close'><?php echo $page[11] ?></button>

        </form>

        <img class="right" src="<?php echo urlBase ?>assets/img/illustration/contact-right.png"/>

    </div>

</section>

<script>

    mapboxgl.accessToken = 'pk.eyJ1IjoiYmluc2FyaGFyc2VubyIsImEiOiI0NC1uUF9FIn0.gryT1dBi1_mxnyrUQLwNLA';
    var map = new mapboxgl.Map({
        container: 'maps',
        style: 'mapbox://styles/mapbox/streets-v10',
        center: [107.060183, -6.248422],
        zoom: 13
    });

    var popup = new mapboxgl.Popup()
    .setHTML('<h3>PT. Bintara Inti Solusindo</h3>');

    var marker = new mapboxgl.Marker() 
    .setLngLat([107.060183, -6.248422])
    .setPopup(popup)
    .addTo(map);

</script>

<?php $view->close();
//  Method penutup halaman.