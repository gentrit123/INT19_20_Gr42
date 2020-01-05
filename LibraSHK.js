

<script>
  
  $(document).ready(function(){
  $imgtext = $("<p> Pa rendesishme </p>");
  $imgtext.css ({
    'background': '#000000',
    'color': '#ffffff',
    'margin-top': '9.9em',
    'padding': '0.5rem',
    'text-transform': 'uppercase',
    'opacity': '0.5'
  });
  $('.latestwork-img').hover(function(){
    $(this).append($imgtext);
  });
  
  $('.slider-btn-center').click(function(){
    $('.slider-box-left').animate({left: '-100%'});
    $('.slider-box').animate({right:'0'});
  });
  
  $('.slider-btn-center-fixed').click(function(){
    $('.slider-box-left').animate({left: '-100%'});
    $('.slider-box').animate({right:'0'});
  });
  
  $('.slider-btn-left').click(function(){
    $('.slider-box').animate({right:'-200%'});
    $('.slider-box-left').animate({left: '0'});
  });
  
  $('.slider-btn-right').click(function(){
    $('.slider-box').animate({left: '-200%'});
    $('.slider-box-right').animate({right: '0'});
  }):
  
  $('.slider-btn-right-fixed').click(function(){
    $('.slider-box').animate({left: '-200%'});
    $('.slider-box-right').animate({right: '0'});
  });
  
  $('.slider-btn-middle').click(function(){
    $('.slider-box').animate({left: '0%'});
    $('.slider-box-right').animate({right: '-100%'});
  });
});
  
  </script>
