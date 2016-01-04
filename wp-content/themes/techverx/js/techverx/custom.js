/* Custom Scripts */
/* Document Ready Starts */
$(document).ready(function(){

  // responsive menu control starts
  $(".small-menu").click(function(){
      $(".responsive-menu").slideToggle();
  });
  // responsive menu control ends


// contact form switch starts

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

// contact form switch ends






// scroll to starts
$(".offer-section-go").click(function(e) {
  e.preventDefault();
    $('html, body').animate({
        scrollTop: $(".offer-section").offset().top - 140
    }, 700);
});
// scroll to ends








  $(".smo-frm").click(function(event){
    event.preventDefault();
      $(".see-more-frm").toggle();
  });



// custom checkboxes starts
$(".click-change").click(function(){
  // aaa = this;
  if($.trim($(this).text()) == "Other")
  {
    if($(this).parent().find(".hidden-check").is(':checked'))
    {
            $('.specify-other').fadeOut('fast');
            }
            else

            {

               $('.specify-other').fadeIn('slow');
            }

}
   $(this).toggleClass('btn-orange-current-2');
    if($(this).hasClass("btn-orange-current-2"))
    {

      $(this).parent().find(".hidden-check").prop("checked", true)
    }
    else
    {
      $(this).parent().find(".hidden-check").prop("checked", false) 
    }
});
// custom checkboxes end


// show hide specify input
$('.trigger-other').change(function(){
  console.log("fsd");
        if(this.checked)
        {
            $('.specify-other').fadeIn('slow');
        }
        else
        {
            $('.specify-other').fadeOut('fast');
        }

});
// show hide specify input





// custom checkboxes starts
  $(".checkbox-wrapper .checkbox").click(function() {
      $(this).toggleClass('checked');
      
      if($(this).hasClass("checked"))
      {
        $(this).closest('.checkbox-wrapper').find(':checkbox').prop("checked", true)
      }
        else
      {
        $(this).closest('.checkbox-wrapper').find(':checkbox').prop("checked", false)
      }

  });
// custom checkboxes end






  

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