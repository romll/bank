$(document).ready(function(){
    $('#modal').on('shown.bs.modal', function () {
        //var $inputs = $('#modal').find('.form-group');

        if ($('#statement-sum').is(':focus')){
            $('#statement-sum').keypress(function(event) {
                if (event.keyCode == 13) {
                    $(event.target).parent().next().find('.select2-selection').focus();
                    if ($('.select2-selection').is(':focus')) {
                        alert('ehf');

                    }
                    event.preventDefault();
                }
            });
        }
       // form-group

        /*else {($('.select2-selection').is(':focus'))
            $('.select2-selection__arrow').keypress(function(event) {
                if (event.keyCode == 13) {
                    $('.select2-selection__arrow').bind('click', function () {
                        alert('gggg');
                        event.preventDefault();
                    });
                    $('.select2-selection__arrow').trigger('click');
                    event.preventDefault();
                }
            });
        }

        /*$('#statement-sum').on('keydown', function(event) {
            if (isEnter(event)) {
                var $next  = $inputs.eq($inputs.index(this) + 1);
                next.focus();
                event.preventDefault();
            }
        });

        var $submit = $form.find('[type="submit"]');
        $submit.on('keydown', function(event) {
            if (isEnter(event))
                this.form.submit();
        });*/
    });
});