$(document).ready(function(){
    //hilangkan tombol cari
    $('.id-paket').hide();

    //buat event keyword ditulis

    $('.cont-price').each(function () {
        $(this).on('click', function(){
            //muculkan loading
            isi= $(this).children('.id-paket').html();
           

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
          



    // $('.cont-price').on('click', function(){
    //     //muculkan loading
    //     console.log($('.id-paket').html());
    //     $('.standard-cont .right-content').hide();
    //     $('.loader').show();

    //     //ajax menggunakan load
    //     // $('#container').load('ajax/mahasiswa.php?keyword='+ $('#keyword').val());

    //     //$.get()
    //     $.get('ajax/standard.php?value=' + $('.id-paket').html(), function(data){
    //         $('.standard-cont .right-content').html(data);
    //         $('.loader').hide();
    //         $('.standard-cont .right-content').show();

    //     });
    // });

});