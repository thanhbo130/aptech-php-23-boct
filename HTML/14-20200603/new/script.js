$(document).ready(function () {
  $("#bar").click(function(){
    if($("#nav").css("display")=="none"){
        $("#nav").addClass("d-md-block-max");
        $("#carousel-item").addClass("d-md-block-max");
        $("#ul").addClass("d-md-block-max");
        $("#prev").addClass("d-md-none-max");
        $("#next").addClass("d-md-none-max");
    }
    else{
        $("#nav").removeClass("d-md-block-max");
        $("#carousel-item").removeClass("d-md-block-max");
        $("#ul").removeClass("d-md-block-max");
        $("#prev").removeClass("d-md-none-max");
        $("#next").removeClass("d-md-none-max");
    }
  }) ; 
});