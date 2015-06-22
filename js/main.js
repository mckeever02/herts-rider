/* Animated Timeline
–––––––––––––––––––––––––––––––––––––––––––––––––– */

jQuery(document).ready(function($){
  var $timeline_block = $('.step-timeline-block');

  //hide timeline blocks which are outside the viewport
  $timeline_block.each(function(){
    if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
      $(this).find('.step-timeline-step, .step-timeline-content').addClass('is-hidden');
    }
  });

  //on scolling, show/animate timeline blocks when enter the viewport
  $(window).on('scroll', function(){
    $timeline_block.each(function(){
      if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.step-timeline-step').hasClass('is-hidden') ) {
        $(this).find('.step-timeline-step, .step-timeline-content').removeClass('is-hidden').addClass('bounce-in');
      }
    });
  });
});


