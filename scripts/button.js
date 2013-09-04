$(document).ready(function() {
 
/* see if anything is previously checked and reflect that in the view*/
$(".checklist input:checked").parent().addClass("selected");
$(".checklist li input").css('display','none')
/* handle the user selections */
$(".checklist .checkbox-select").click(
function(event) {
event.preventDefault();
$(this).parent().addClass("selected");
$(this).parent().find(":radio").attr("checked","checked");
 
}
);
 
$(".checklist .checkbox-deselect").click(
function(event) {
event.preventDefault();
$(this).parent().removeClass("selected");
$(this).parent().find(":radio").removeAttr("checked");
 
}
);
 
});