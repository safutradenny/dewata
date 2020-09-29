<?php session_start();
//  Mulai session.

class view{
//	Class dasar halaman.

	public $data;
    public $name;
    public $title;
    public $desc;

	public function openData(){
	//	Method untuk membuka basis data.

		@define('open', TRUE);
		//  Buka akses berkas database.php.

		require dirBase.'system/process/database.php';
		//  Tambah berkas database.php.

		$this->data = $db;
		//	Simpan akses basis data.

    }

	public function __construct($getName){
    //	Method untuk mengambil data halaman.

		$this->openData();
		//	Buka akses basis data.

		$sql = $this->data->query("SELECT * FROM pages WHERE cName = '$getName'");
		//	Ambil semua data dalam tabel pages dengan spesifikasi nilai namePage.

		$pages = mysqli_fetch_assoc($sql);
		//	Ubah data menjadi array.

		$this->name = $pages['cName'];
        //	Simpan nama halaman.

        /////////////////////////////////////////////////

        if(!isset($_SESSION['lang']) || empty($_SESSION['lang'])){
        //  Jika $_SESSION lang tidak tersedia atau kosong.
        
            $_SESSION['lang'] = 'english';
            //  $_SESSION lang bernilai english.
        
        }
        
        switch($_SESSION['lang']){
        //  Ambil data sesuai bahasa aktif.
        
            case 'english':
            // Jika bahasa Inggris aktif.

                $this->title = $pages['titleIn'];
                $this->desc = $pages['descEn'];

            break;

            case 'indonesia':
            // Jika bahasa Indonesia aktif.

                $this->title = $pages['titleEn'];
                $this->desc = $pages['descEn'];
                
            break;

        }

	}

	public function head(array $css, $js){
	//	Method bagian head atau atas halaman.

		echo "<!DOCTYPE HTML><html lang='en'><head>
        <title>".$this->title." - Bintara</title>

        <meta charset='UTF-8'/>
        <meta name='language' content='id'/>
        <meta name='apple-mobile-web-app-capable' content='yes'/>
        <meta name='mobile-web-app-capable' content='yes'/>
        <meta http-equiv='X-AU-Compatible' content='IE=edge, chrome=1'/>
        <meta name='title' content='".$this->title." - Bintara'/>
        <meta name='description' content='".$this->desc."'/>
        <meta name='author' content='Conary.'/>
        <meta name='robots' content='index, follow'/>
        <meta name='googlebot' content='index, follow'/>
        <meta name='google' content='notranslate'/>
        <meta name='theme-color' content='#ffffff'/>
        <meta name='msapplication-TileColor' content='#ffffff'/>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'/>

        <link rel='manifest' href='".urlBase."assets/img/favicon/manifest.json'>
        <link rel='apple-touch-icon' sizes='57x57' href='".urlBase."assets/img/favicon/apple-icon-57x57.png'>
        <link rel='apple-touch-icon' sizes='60x60' href='".urlBase."assets/img/favicon/apple-icon-60x60.png'>
        <link rel='apple-touch-icon' sizes='72x72' href='".urlBase."assets/img/favicon/apple-icon-72x72.png'>
        <link rel='apple-touch-icon' sizes='76x76' href='".urlBase."assets/img/favicon/apple-icon-76x76.png'>
        <link rel='apple-touch-icon' sizes='114x114' href='".urlBase."assets/img/favicon/apple-icon-114x114.png'>
        <link rel='apple-touch-icon' sizes='120x120' href='".urlBase."assets/img/favicon/apple-icon-120x120.png'>
        <link rel='apple-touch-icon' sizes='144x144' href='".urlBase."assets/img/favicon/apple-icon-144x144.png'>
        <link rel='apple-touch-icon' sizes='152x152' href='".urlBase."assets/img/favicon/apple-icon-152x152.png'>
        <link rel='apple-touch-icon' sizes='180x180' href='".urlBase."assets/img/favicon/apple-icon-180x180.png'>
        <link rel='icon' type='image/png' sizes='192x192' href='".urlBase."assets/img/favicon/android-icon-192x192.png'>
        <link rel='icon' type='image/png' sizes='32x32' href='".urlBase."assets/img/favicon/favicon-32x32.png'>
        <link rel='icon' type='image/png' sizes='96x96' href='".urlBase."assets/img/favicon/favicon-96x96.png'>
        <link rel='icon' type='image/png' sizes='16x16' href='".urlBase."assets/img/favicon/favicon-16x16.png'>
        <meta name='msapplication-TileImage' content='".urlBase."assets/img/favicon/ms-icon-144x144.png'>
        <link rel='icon' type='image/png' href='".urlBase."assets/img/favicon/favicon-32x32.png'/>

        <script src='".urlBase."assets/js/jquery.js'></script>
        <script src='".urlBase."assets/js/global.js'></script>
        
        <link rel='stylesheet' href='".urlBase."assets/css/conary.css'/>
        <link rel='stylesheet' href='".urlBase."assets/css/balloon.css'/>
        <link rel='stylesheet' href='".urlBase."assets/css/global.css'/>";

		/// CSS /////////////////////////////////

		for($i = 0; $i < count($css); $i++){
		//	Pengulangan sebanyak indeks $css.

            echo (filter_var($css[$i], FILTER_VALIDATE_URL)) ? "<link rel='stylesheet' href='$css[$i]'/>" : "<link rel='stylesheet' href='".urlBase."assets/css/$css[$i]'/>";
            //  Tentukan apakah indeks berupa URL atau hanya nama berkas.

		}

		/// JS //////////////////////////////////

		if($js[0] != 'no'){
		//	Jika nilai indeks $js bukan 'no'.

			for($j = 0; $j < count($js); $j++){
			//	Pengulangan sebanyak indeks $js.

                echo (filter_var($js[$j], FILTER_VALIDATE_URL)) ? "<script src='$js[$j]'></script>" : "<script src='".urlBase."assets/js/$js[$j]'></script>";
                //  Tentukan apakah indeks berupa URL atau hanya nama berkas.

			}

		}

		echo "</head><body>";

		/// HEADER //////////////////////////////

		require dirBase.'system/views/parts/header.php';
		//	Tambah berkas header.php.

	}

	public function close(){
    //	Method bagian <footer>.
    
        $this->openData();
        //	Buka akses basis data.

		require dirBase.'system/views/parts/footer.php';
		//	Tambah berkas footer.php.

		echo '</body></html>';
		//	Tutup semua tag.

	}

}