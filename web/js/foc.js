$(document).ready(function(){
    $('#modal').on('shown.bs.modal', function () {
        //var date = new Date();
        //$('#statement-date_pay').val(date.getDate());
        //$('#statement-date_pay').attr('value', '');
        $('#statement-sum').focus();
    });
});