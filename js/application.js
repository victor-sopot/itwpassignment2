$(document).ready(function() {

$('.nav').fadeIn('slow');
$('header').fadeIn('slow');
  
$( document ).tooltip({
    
        items:'.artisthover',
        track: true,
        content: function(callback){
            var ajax_file = $(this).attr('data-ajax');
        $.get('includes/'+ ajax_file, function(data){
        callback(data);
        });
        }
});


  
  $('.iframe-link').magnificPopup({ //Magnific Popup JS plugin http://dimsemenov.com/plugins/magnific-popup/
      type:'iframe'
  });
    


  
  
  
});
