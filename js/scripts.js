

$(document).ready(function(){

  $(".certyficate").click(function(){

    $("#myModal").css("display","block");
    $("#img01").attr("src", this.src).click(function(){
          $("#myModal").css("display","none");
    });
    $(".close").click(function(){
      $("#myModal").css("display","none");
    });
  });

  $(".cv-version").click(function(){
      $("#short-cv-version").toggle(200);
      $("#long-cv-version").toggle(200);
      $("#full-employment-history").toggle(200);
      $("#short-employment-history").toggle(200);

  });

  $(".mobile-menu-switcher").click(function(){

    $(".nav-right").toggle(50);
  });


});
