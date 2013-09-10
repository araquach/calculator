
$(document).ready(function() {
	 $(".selector a").click(function() {
	 	var $this = $(this);
	 	var summary = ('#summary');
	 	$(".choice").hide();
	 	var panel = $this.attr('href');
	 	$(panel).fadeIn(250);
	 	return false;
	 }); // end click
	 $('.selector li:first a').click();
}); // end ready
