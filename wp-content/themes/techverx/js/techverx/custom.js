/* Custom Scripts */
/* Document Ready Starts */
$(document).ready(function(){

  // responsive menu control starts
  $(".small-menu").click(function(){
      $(".responsive-menu").slideToggle();
  });
  // responsive menu control ends



  $(".quick a").click(function(event){
    event.preventDefault();
      $(".quick a").addClass("btn-orange-current");
      $(".project a").removeClass("btn-orange-current");
      $(".frm-message").show();
      $(".frm-project").hide();
      
  });

  $(".project a").click(function(event){
    event.preventDefault();
      $(".project a").addClass("btn-orange-current");
      $(".quick a").removeClass("btn-orange-current");
      $(".frm-project").show();
      $(".frm-message").hide();
  });

  

  

});
/* Document Ready Ends */

/* Window.Load Starts */
$(window).load(function() { 
// FlexiSlider Starts

 $('.flexslider').flexslider({
    animation: "slide"
  });  
  
// FlexiSlider Ends

});
/* Window.Load Ends */