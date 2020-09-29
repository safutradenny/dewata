var protocol = location.protocol;
var slashes = protocol.concat("//");
var host = slashes.concat(window.location.hostname) + '/';

function toast(color, message) {
    //  Untuk menampilkan pesan sementara.

    $('header .toast').stop().fadeOut('fast');
    //  Hapus toast dalam keadaan tampil.

    $('header .toast .message span').html(message);
    //  Tambahkan pesan pada toast.

    $('header .toast .message span').attr('class', 'content').addClass(color);
    //  Bersihkan class pada content toast dan tambah class color.

    $('header .toast').fadeIn('fast').delay(6000).fadeOut('fast');
    //  Tampilkan toast dalam 5 detik lalu hilangkan.

}

function throwToast(color, message, url){
//  Untuk set toast pada halaman berbeda.

    sessionStorage.setItem("toastColor", color);
    sessionStorage.setItem("toastMessage", message);

    if(url != ''){
    //  Jika url tidak kosong.

        window.location.href = host + url;
        //  Arahkan ke halaman sesuai isi url.

    }

}

$('document').ready(function(){
    //	Jika seluruh halaman telah siap.

    if (sessionStorage.getItem("toastMessage")) {
        //  Jika session toastMessage pada browser tersedia.

        toast(sessionStorage.getItem('toastColor'), sessionStorage.getItem('toastMessage'));
        //  Panggil toast.

        sessionStorage.removeItem("toastColor");
        sessionStorage.removeItem("toastMessage");
        //  Hapus setiap session pada browser untuk toast.

    }

    $('.goUp').click(function(){
    //  Jika class goUp ditekan.

		$("html, body").animate({scrollTop: 0}, 600);
        return false;

	});

    $('.eng').click(function(){
    //	Jika class eng ditekan.

        $.ajax({

            type: "post",
            url: host + "system/process/lang.php",
            data: "lang=english",
            success: function(data){

                if(data == 1){
                //	Jika berhasil.

                    location.reload();
                    //	Refresh halaman.

                }

            }

        });

    });

    $('.ind').click(function(){
    //	Jika tombol dengan class ind ditekan.

        $.ajax({

            type: "post",
            url: host + "system/process/lang.php",
            data: "lang=indonesia",
            success: function(data){

                if(data == 1){
                //	Jika berhasil.

                    location.reload();
                    //	Refresh halaman.

                }

            }

        });

    });

    /* Responsive Menu ----------------------- */

    $('.resMenu').click(function(){
        $('.resMenuBlock').addClass('resOpen');
    });

    $('.resClose').click(function(){
        $('.resMenuBlock').removeClass('resOpen');
    });

    $('.resContent .parent').click(function(){
        $('.resContent .child').slideToggle('fast');
    });

});