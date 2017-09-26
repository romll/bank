$(function () {
    $(document).on('click', '.showModalButton', function () {
        if ($('#modal').data('show.bs.modal')){
            $('#modal').find('.modal-body')
                .load($(this).attr('value'));
            document.getElementById('myModalLabel').innerHTML = $(this).attr('title');
            //$('#statement-sum').focus();
        }else{
            $('#modal').modal('show')
                .find('.modal-body')
                .load($(this).attr('value'));
            document.getElementById('myModalLabel').innerHTML = $(this).attr('title');
            //document.getElementById('statement-sum').focus();
        }
    });
});