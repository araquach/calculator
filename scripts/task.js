$(document).ready(function() {
	$(".tasks-add").click(function(){
					$.ajax({
						success: function(html){
							$(".tasks").append(html);
						},
						type: 'get',
						url: '<?php echo $this->createUrl('field')?>',
						data: {
							index: $(".tasks li").size()
						},
						cache: false,
						dataType: 'html'
					});
				});
});
