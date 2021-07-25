$(window).on("load",function() {
    $(".loader").fadeOut(1000);
});

$(document).ready(function(){
    //hilangkan tombol cari
    $('.id-paket').hide();
    $(`#data1`).toggleClass('cont-price-webinar-active');
    $(`#data9`).toggleClass('cont-price-webinar-active');

    //buat event keyword ditulis

    $('.cont-price-webinar').each(function () {
        $(this).on('click', function(){
            //muculkan loading
            isi= $(this).children('.id-paket').html();

            activeClassProper = $('.proper-cont .left-content .kategori-item .cont-price-webinar .id-paket');           
            activeClassStandard = $('.standard-cont .left-content .kategori-item .cont-price-webinar .id-paket');

            
            if ($(`#data${isi}`).children('.id-paket').html() <=8 ) {
                activeClassProper.parent().removeClass('cont-price-webinar-active');
            } else {
                activeClassStandard.parent().removeClass('cont-price-webinar-active');
            }

            $(`#data${isi}`).toggleClass('cont-price-webinar-active');

            if (isi <= 8) {
                $('.proper-cont .right-content').hide();
                $('.first-loader').show();
    
                $.get()
                $.get('ajax/proper.php?value=' + isi, function(data){
                    $('.proper-cont .right-content').html(data);
                    $('.first-loader').hide();
                    $('.proper-cont .right-content').show();
        
                });
            } else {
                $('.standard-cont .right-content').hide();
                $('.second-loader').show();
        

                $.get()
                $.get('ajax/standard.php?value=' + isi, function(data){
                    $('.standard-cont .right-content').html(data);
                    $('.second-loader').hide();
                    $('.standard-cont .right-content').show();
        
                });
            }
           
        });
    });

});