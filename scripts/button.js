

$(document).ready(function() {
 // see if anything is previously checked and reflect that in the view
$(".checklist input:checked").parent().addClass("selected");
// hide the radio
$(".checklist input").css('display','none');
// handle the user selections
var summary = $("#summary");
$(".checklist .checkbox-select").click(
function(event) {
$this = $(this);
event.preventDefault();
$this.parent().addClass("selected");
$this.parent().find(":radio").attr('checked',true);
var clone = $this.clone();
summary.append(clone);
}
);
 
$(".checklist .checkbox-deselect").click(
function(event) {
$this = $(this);
event.preventDefault();
$this.parent().removeClass("selected");
$this.parent().find(":radio").attr("checked",false);
}
);
 
});

