$(document).ready(function () {
        $('form').on('beforeSubmit', function(){
            var data = $(this).serialize();
            $.ajax({
                url: '/site/present',
                type: 'POST',
                data: data,
                beforeSend: function() {
                    $('.wish-list table').addClass('blur-present');
                    $('#loading-animate img').show();
                },
                success: function(res){
                    $('#wish-list-block').html(res);
                    $('.wish-list table').removeClass('blur-present');
                    $('#loading-animate img').hide();
                },
                error: function(){
                    alert('Error!');
                }
            });
            return false;
        });
});


