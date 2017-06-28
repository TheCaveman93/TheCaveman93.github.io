
var $select = $('#people');
var $name = $('#name');
var $people_id = $('#people_id');
var $address = $('#address');
var $age = $('#age');
var $email = $('#email');
var $phonenum = $('#phonenum');
var $regnum = $('#regnum');
var $cartype = $('#cartype');
var $postcode = $('#postcode');
var $datepicker = $('#datepicker');

$.getJSON('data.JSON', function(data) {
	$select.html('');

	for (var i = 0; i < data['people'].length; i++) {
		$select.append('<option id="' + data['people'][i]['id'] + '">' + data['people'][i]['id'] + '</option>');
	}


$select.change(function() {
	var id;
	$('select option:selected').each(function() {
		id = $(this).attr('id') - 1;
	});



var input = $( "#userage");
input.val (input.val() +  data['people'][id]['age']); 

var input = $( "#username");
input.val (input.val() +  data['people'][id]['name']); 

var input = $( "#usernum");
input.val (input.val() +  data['people'][id]['phonenum']); 

var input = $( "#useremail");
input.val (input.val() +  data['people'][id]['email']); 

var input = $( "#useraddress");
input.val (input.val() +  data['people'][id]['address']); 

var input = $( "#datepicker");
input.val (input.val() +  data['people'][id]['datepicker']); 

var input = $( "#userregnum");
input.val (input.val() +  data['people'][id]['regnum']); 

var input = $( "#userpostcode");
input.val (input.val() +  data['people'][id]['postcode']); 

var input = $( "#userphonenum");
input.val (input.val() +  data['people'][id]['phonenum']); 

var input = $( "#usercartype");
input.val (input.val() +  data['people'][id]['cartype']); 

	$people_id.html(  data['people'][id]['id']);
	$name.html( data['people'][id]['name'] + " " +data['people'][id]['lastName']);
	$email.html( data['people'][id]['email']);
	$address.html( data['people'][id]['address']);
	$phonenum.html( data['people'][id]['phonenum']);
	$datepicker.html( data['people'][id]['datepicker']);
	$cartype.html( data['people'][id]['cartype']);
	$postcode.html( data['people'][id]['postcode']);
	$regnum.html( data['people'][id]['regnum']);
	$age.html( data['people'][id]['age']);
	});
});











