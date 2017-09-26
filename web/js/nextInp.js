$(document).ready(function(){
    $('#modal').on('shown.bs.modal', function () {
        var $inputs = $('#modal').find('.form-group');

        if ($('#statement-sum').is(':focus')){
            $('#statement-sum').keypress(function(event) {
                if (event.keyCode == 13) {
                    $('.select2-selection').bind('click', function () {
                        $('.select2-selection').focus();
                        event.preventDefault();
                    });
                    $('.select2-selection').trigger('click');
                    event.preventDefault();
                }
            });
        }else if($('.select2-selection').is(':focus') && $('#select2-statement-handbk_bank_id-container')){
            $('.select2-selection').keypress(function(event) {
                if (event.keyCode == 13) {
                    alert('gggg');
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