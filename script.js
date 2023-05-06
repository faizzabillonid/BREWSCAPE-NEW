$('.item').click(function() {
    $('.list-name').removeClass('active');
    $(this).find('.list-name').addClass('active');
  });