$("document").ready(function(){
    $("#bank-form").on("pjax:end", function() {
        $.pjax.reload({container:"#bank"});  //Reload GridView
    });
});
