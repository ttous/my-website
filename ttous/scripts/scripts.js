$(function() {

	// Add '.active' to the current page's link in the navigation bar
	$('.nav').find('.active').removeClass('active');
	var url = window.location;
    $('.nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');

    // Open external links in a new tab
    $('a').not('[href*="mailto:"]').each(function () {
		var isInternalLink = new RegExp('/' + window.location.host + '/');
		if ( ! isInternalLink.test(this.href) ) {
			$(this).attr('target', '_blank');
		}
	});

});