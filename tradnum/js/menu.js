$("nav a").click(function(){
    var str = $(this).index();
    $("nav a").removeClass("selected");
   $(this).addClass( "selected" );
});