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
   console.log("assv");
      abcd = this;
  if($.trim($(this).text()) == "Other")
  {
    if($(this).parent().find('input:checkbox:first').is(':checked'))
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

      $(this).parent().find('input:checkbox:first').prop("checked", true)
    }
    else
    {
      $(this).parent().find('input:checkbox:first').prop("checked", false) 
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
      console.log("assv");
      abcd = this;
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




// custom radioes 1 starts
$(".custom-radio").click(function(){
  $(".custom-radio").removeClass("custom-radio-current")
  $(".custom-radio").removeClass("first-radio")
    $(this).toggleClass('custom-radio-current');
    if($(this).hasClass("custom-radio-current"))
    {

      $(this).parent().find(".real-radio").prop("checked", true)
    }
    else
    {
      $(this).parent().find(".real-radio").prop("checked", false) 
    }
});
// custom radioes 1 end

// custom radioes 2 starts
$(".custom-radio2").click(function(){
  $(".custom-radio2").removeClass("custom-radio-current2")
  $(".custom-radio2").removeClass("first-radio")
    $(this).toggleClass('custom-radio-current2');
    if($(this).hasClass("custom-radio-current2"))
    {

      $(this).parent().find(".real-radio2").prop("checked", true)
    }
    else
    {
      $(this).parent().find(".real-radio2").prop("checked", false)  
    }
});
// custom radioes 2 end




  

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