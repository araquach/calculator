$(document).ready(function(){
 
    $("#isSelect").click(function () {
 
	alert($('input:radio[name=sex]:checked').val());
 
    });
 
    $("#selectMale").click(function () {
 
	$('input:radio[name=sex]:nth(0)').attr('checked',true);
	//$('input:radio[name=sex]')[0].checked = true;
 
    });
 
    $("#selectFemale").click(function () {
 
	$('input:radio[name=sex]:nth(1)').attr('checked',true);
	//$('input:radio[name=sex]')[1].checked = true;
 
    });
 
    $("#selectUnknown").click(function () {
 
	$('input:radio[name=sex]:nth(2)').attr('checked',true);
	//$('input:radio[name=sex]')[2].checked = true;
 
    });
 
    $("#reset").click(function () {
 
	$('input:radio[name=sex]').attr('checked',false);
 
    });
 
  });