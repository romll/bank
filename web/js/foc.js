$(document).ready(function(){
    $('#modal').on('shown.bs.modal', function () {
        setTimeout(function() { $('#statement-sum').focus(); }, 1000);
    });
});