$(document).ready(function(){

$('#username').keyup(function(){
var name=$(this).val();
$.post('validate.php',{name:name},function(data){
	$('#tips').html(data);
});

}).blur(function(){
	$('#tips').html(data);
});

//mail

$('#email').keyup(function(){
var email=$(this).val();
$.post('validatemail.php',{email:email},function(data){
	$('#emailcheck').html(data);

});

}).blur(function(){
$('#emailcheck').html(data);
});

//paasss

$('#password').keyup(function(){
var password=$(this).val();
$.post('checkpass.php',{password:password},function(data){
	$('#passs').html(data);

});

}).blur(function(){
$('#passs').html(data);
});


//passcomfirm

$('#passwordagain').keyup(function(){
	var again=$(this).val();
var password=$('#password').val();
$.post('comfirm.php',{password:password,again:again},function(data){
$('#return').html(data);

});

}).blur(function(){
$('#return').html(data);
});





});