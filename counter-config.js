$('#clock').countdown('2020/10/10', function(event) {
  $(this).html(event.strftime('%D days %H:%M:%S'));
});
