$('.contact-form').on('submit', function (event) {

    event.stopPropagation();
    event.preventDefault();

    let form = this,
        submit = $('.submit', form),
        data = new FormData(),
        files = $('input[type=file]')


    $('.submit', form).val('Отправка...');
    $('input, textarea', form).attr('disabled','');

    data.append( 'phone1', 		$('[name="phone1"]', form).val() );
    data.append( 'phone2', 		$('[name="phone2"]', form).val() );
    data.append( 'phone3', 		$('[name="phone3"]', form).val() );
    data.append( 'phone4', 		$('[name="phone4"]', form).val() );
    data.append( 'phone5', 		$('[name="phone5"]', form).val() );
    data.append( 'phone6',        $('[name="phone6"]', form).val() );
    data.append( 'phone7',        $('[name="phone7"]', form).val() );
    data.append( 'phone8',        $('[name="phone8"]', form).val() );
    data.append( 'phone9',        $('[name="phone9"]', form).val() );
    data.append( 'phone10',        $('[name="phone10"]', form).val() );
    data.append( 'phone11',        $('[name="phone11"]', form).val() );
    data.append( 'phone12',        $('[name="phone12"]', form).val() );

   

    files.each(function (key, file) {
        let cont = file.files;
        if ( cont ) {
            $.each( cont, function( key, value ) {
                data.append( key, value );
            });
        }
    });
    
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        xhr: function() {
            let myXhr = $.ajaxSettings.xhr();

            if ( myXhr.upload ) {
                myXhr.upload.addEventListener( 'progress', function(e) {
                    if ( e.lengthComputable ) {
                        let percentage = ( e.loaded / e.total ) * 100;
                            percentage = percentage.toFixed(0);
                        $('.submit', form)
                            .html( percentage + '%' );
                    }
                }, false );
            }

            return myXhr;
        },
        error: function( jqXHR, textStatus ) {
            // Тут выводим ошибку
        },
        complete: function() {
            // Тут можем что-то делать ПОСЛЕ успешной отправки формы
            console.log('Complete')
            form.reset() 
        }
    });

    return false;
});