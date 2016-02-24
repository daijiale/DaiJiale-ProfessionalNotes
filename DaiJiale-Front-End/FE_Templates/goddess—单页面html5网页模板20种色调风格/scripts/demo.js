// DEMO
$('[data-toggle=tooltip]').tooltip({trigger: 'manual'}).tooltip('show');
$('[data-toggle=tooltip]').on('click', function () {
    $(this).tooltip('hide');
});
$('.tooltip').on('click', function () {
    $(this).closest('div').remove();
});
