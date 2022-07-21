
$(document).ready(function() {
	
	

	$('a[href^="#"]').click(function () { 
			elementClick = $(this).attr("href");
			destination = $(elementClick).offset().top;
			$('html').animate( { scrollTop: destination }, 2000 );
			return false;
		});

		
	$('.close_icon').click(function(){
		$('.modalWindow').slideUp();
		$('.modalWindow_background').fadeOut(400);
		$('#otxt').detach();
		document.body.style.overflow = "auto";
		});

	$('.modalWindow_background').click(function(){
		if (event.target.id == 'modalWindow_background'){
			$('.modalWindow').slideUp();
			$('.modalWindow_background').fadeOut(400);
			$('#otxt').detach();
			document.body.style.overflow = "auto";
		}
		});
		
	$('.close_icon_kviz').click(function(){
			$('.modalWindow_kviz').slideUp();
			$('.modalWindow_background_kviz').fadeOut(400);
			$('#otxt').detach();
			document.body.style.overflow = "auto";
		});

	$('.modalWindow_background_kviz').click(function(){
		if (event.target.id == 'modalWindow_background_kviz'){
			if( $('#1_question').is(':hidden')&&
				$('#2_question').is(':hidden')&&
				$('#3_question').is(':hidden')&&
				$('#4_question').is(':hidden')&&
				$('#5_question').is(':hidden')&&
				$('#6_question').is(':hidden')&&
				$('#final').is(':hidden')){
					$('.modalWindow_kviz').slideUp();
					$('.modalWindow_background_kviz').fadeOut(400);
					$('#otxt').detach();
					document.body.style.overflow = "auto";
			}
		}
		});
	  
	$('.knopka').click(function(){
		var button = $(this).attr('id');
		if (button == 'kviz'){
			$('.modalWindow_background_kviz').fadeIn(400);
			$('#start_kviz').slideDown(400);
			document.body.style.overflow = "hidden";
		}
		
		if(	(button == 'zamer') ||
			(button == 'order_RP') ||
			(button == 'callback') ||
			(button == 'callback_f') ||
			(button == 'order_RPAN') ||
			(button == 'order_KEY') ||
			(button == 'consultation')){
				if(button == 'zamer') {$('.order_form').append('<p id="otxt">Получить бесплатные замеры</p>');}
				if(button == 'order_RP') {$('.order_form').append('<p id="otxt">Заказать рабочий проект</p>');}
				if(button == 'callback') {$('.order_form').append('<p id="otxt">Заказать обратный звонок</p>');}
				if(button == 'callback_f') {$('.order_form').append('<p id="otxt">Заказать обратный звонок</p>');}
				if(button == 'order_RPAN') {$('.order_form').append('<p id="otxt">Заказать рабочий проект с авторским надзором</p>');}
				if(button == 'order_KEY') {$('.order_form').append('<p id="otxt">Заказать рабочий проект под ключ</p>');}
				if(button == 'consultation') {$('.order_form').append('<p id="otxt">Получить консультацию</p>');}
				$('.modalWindow_background').fadeIn(400);
				$('.modalWindow').slideDown(400);
				document.body.style.overflow = "hidden";
				document.forms['order_form'].elements[2].value = button;
			}
		if (button == 'submit'){
			test_form();
		}
	});


//kviz

	$('.q_chek').click(function(){
		var button = $(this).attr('id');
		if(button == 'q1_1') {
			document.forms['kviz_form'].elements[0].value = '1';
			$("#q1_2").removeClass("checked");
			$("#q1_1").addClass("checked");
			}
		if(button == 'q1_2') {
			document.forms['kviz_form'].elements[0].value = '2';
			$("#q1_1").removeClass("checked");
			$("#q1_2").addClass("checked");
			}
		
		if(button == 'q3_1') {
			document.forms['kviz_form'].elements[2].value = '1';
			$("#q3_2").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_1").addClass("checked");
			}		
			
		if(button == 'q3_2') {
			document.forms['kviz_form'].elements[2].value = '2';
			$("#q3_1").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_2").addClass("checked");
			}
		if(button == 'q3_3') {
			document.forms['kviz_form'].elements[2].value = '3';
			$("#q3_1").removeClass("checked");
			$("#q3_2").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_3").addClass("checked");
			}
		if(button == 'q3_4') {
			document.forms['kviz_form'].elements[2].value = '4';
			$("#q3_1").removeClass("checked");
			$("#q3_2").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_4").addClass("checked");
			}
		if(button == 'q3_5') {
			document.forms['kviz_form'].elements[2].value = '5';
			$("#q3_1").removeClass("checked");
			$("#q3_2").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_6").removeClass("checked");
			$("#q3_5").addClass("checked");
			}
		if(button == 'q3_6') {
			document.forms['kviz_form'].elements[2].value = '6';
			$("#q3_1").removeClass("checked");
			$("#q3_2").removeClass("checked");
			$("#q3_3").removeClass("checked");
			$("#q3_4").removeClass("checked");
			$("#q3_5").removeClass("checked");
			$("#q3_6").addClass("checked");
			}
			
		if(button == 'q4_1') {
			document.forms['kviz_form'].elements[3].value = '1';
			$("#q4_2").removeClass("checked");
			$("#q4_3").removeClass("checked");
			$("#q4_4").removeClass("checked");
			$("#q4_1").addClass("checked");
			}		
		if(button == 'q4_2') {
			document.forms['kviz_form'].elements[3].value = '2';
			$("#q4_1").removeClass("checked");
			$("#q4_3").removeClass("checked");
			$("#q4_4").removeClass("checked");
			$("#q4_2").addClass("checked");
			}
		if(button == 'q4_3') {
			document.forms['kviz_form'].elements[3].value = '3';
			$("#q4_1").removeClass("checked");
			$("#q4_2").removeClass("checked");
			$("#q4_4").removeClass("checked");
			$("#q4_3").addClass("checked");
			}	
		if(button == 'q4_4') {
			document.forms['kviz_form'].elements[3].value = '4';
			$("#q4_1").removeClass("checked");
			$("#q4_2").removeClass("checked");
			$("#q4_3").removeClass("checked");
			$("#q4_4").addClass("checked");
			}
			
		if(button == 'q5_1') {
			document.forms['kviz_form'].elements[4].value = '1';
			$("#q5_2").removeClass("checked");
			$("#q5_3").removeClass("checked");
			$("#q5_4").removeClass("checked");
			$("#q5_1").addClass("checked");
			}		
		if(button == 'q5_2') {
			document.forms['kviz_form'].elements[4].value = '2';
			$("#q5_1").removeClass("checked");
			$("#q5_3").removeClass("checked");
			$("#q5_4").removeClass("checked");
			$("#q5_2").addClass("checked");
			}
		if(button == 'q5_3') {
			document.forms['kviz_form'].elements[4].value = '3';
			$("#q5_1").removeClass("checked");
			$("#q5_2").removeClass("checked");
			$("#q5_4").removeClass("checked");
			$("#q5_3").addClass("checked");
			}	
		if(button == 'q5_4') {
			document.forms['kviz_form'].elements[4].value = '4';
			$("#q5_1").removeClass("checked");
			$("#q5_2").removeClass("checked");
			$("#q5_3").removeClass("checked");
			$("#q5_4").addClass("checked");
			}
			
		if(button == 'q6_1') {
			document.forms['kviz_form'].elements[5].value = '1';
			$("#q6_2").removeClass("checked");
			$("#q6_3").removeClass("checked");
			$("#q6_1").addClass("checked");
			}		
		if(button == 'q6_2') {
			document.forms['kviz_form'].elements[5].value = '2';
			$("#q6_1").removeClass("checked");
			$("#q6_3").removeClass("checked");
			$("#q6_2").addClass("checked");
			}
		if(button == 'q6_3') {
			document.forms['kviz_form'].elements[5].value = '3';
			$("#q6_1").removeClass("checked");
			$("#q6_2").removeClass("checked");
			$("#q6_3").addClass("checked");
			}	
	});
});


function kviz(a){
		if (a == '1q'){
			let i = 1;
			while (i < 3) {
				$('#q1_'+i).removeClass("checked");
				i++;
			}
			$('#q1_'+document.forms['kviz_form'].elements[0].value).addClass("checked");
			$('#start_kviz').fadeOut(100);
			$('#1_question').fadeIn(400);
		}
		if (a == '2q'){
			document.getElementById('q3_s').value = document.forms['kviz_form'].elements[1].value;
			$('#1_question').fadeOut(100);
			$('#2_question').fadeIn(400);
		}
		if (a == '3q'){
			let i = 1;
			while (i < 7) {
				$('#q1_'+i).removeClass("checked");
				i++;
			}
			$('#q3_'+document.forms['kviz_form'].elements[2].value).addClass("checked");
			document.forms['kviz_form'].elements[1].value = document.getElementById('q3_s').value;
			$('#2_question').fadeOut(100);
			$('#3_question').fadeIn(400);
		}
		if (a == '4q'){
			let i = 1;
			while (i < 5) {
				$('#q4_'+i).removeClass("checked");
				i++;
			}
			$('#q4_'+document.forms['kviz_form'].elements[3].value).addClass("checked");
			$('#3_question').fadeOut(100);
			$('#4_question').fadeIn(400);
		}
		if (a == '5q'){
			let i = 1;
			while (i < 5) {
				$('#q5_'+i).removeClass("checked");
				i++;
			}
			$('#q5_'+document.forms['kviz_form'].elements[4].value).addClass("checked");
			$('#4_question').fadeOut(100);
			$('#5_question').fadeIn(400);
		}
		if (a == '6q'){
			let i = 1;
			while (i < 5) {
				$('#q5_'+i).removeClass("checked");
				i++;
			}
			$('#q6_'+document.forms['kviz_form'].elements[5].value).addClass("checked");
			$('#5_question').fadeOut(100);
			$('#6_question').fadeIn(400);
		}
		if (a == 'final'){
			$('#6_question').fadeOut(100);
			$('#final').fadeIn(400);
		}
		if (a == 'send'){
			document.forms['kviz_form'].elements[6].value = document.getElementById('kviz_phone').value;
			valid_phone_kviz();
		}
		
		if (a == 'end'){
			$('.modalWindow_kviz').slideUp();
			$('.modalWindow_background_kviz').fadeOut(400);
			document.body.style.overflow = "auto";
		}
		
		//кнопка назад
		
		if (a == 'start'){
			$('#start_kviz').fadeIn(400);
			$('#1_question').fadeOut(100);
		}
		if (a == '1q_b'){
			let i = 1;
			while (i < 3) {
				$('#q1_'+i).removeClass("checked");
				i++;
			}
			$('#q1_'+document.forms['kviz_form'].elements[0].value).addClass("checked");
			$('#2_question').fadeOut(100);
			$('#1_question').fadeIn(400);
		}
		if (a == '2q_b'){
			document.getElementById('q3_s').value = document.forms['kviz_form'].elements[1].value;
			$('#3_question').fadeOut(100);
			$('#2_question').fadeIn(400);
		}
		if (a == '3q_b'){
			let i = 1;
			while (i < 7) {
				$('#q1_'+i).removeClass("checked");
				i++;
			}
			$('#q3_'+document.forms['kviz_form'].elements[2].value).addClass("checked");
			document.forms['kviz_form'].elements[1].value = document.getElementById('q3_s').value;
			$('#4_question').fadeOut(100);
			$('#3_question').fadeIn(400);
		}
		if (a == '4q_b'){
			let i = 1;
			while (i < 5) {
				$('#q4_'+i).removeClass("checked");
				i++;
			}
			$('#q4_'+document.forms['kviz_form'].elements[3].value).addClass("checked");
			$('#5_question').fadeOut(100);
			$('#4_question').fadeIn(400);
		}
		if (a == '5q_b'){
			let i = 1;
			while (i < 5) {
				$('#q5_'+i).removeClass("checked");
				i++;
			}
			$('#q5_'+document.forms['kviz_form'].elements[4].value).addClass("checked");
			$('#6_question').fadeOut(100);
			$('#5_question').fadeIn(400);
		}
		if (a == '6q_b'){
			let i = 1;
			while (i < 5) {
				$('#q5_'+i).removeClass("checked");
				i++;
			}
			$('#q6_'+document.forms['kviz_form'].elements[5].value).addClass("checked");
			$('#final').fadeOut(100);
			$('#6_question').fadeIn(400);
		}
		
	}
	
function send_kviz(){
	function funcBuy(data){
		$('#final').fadeOut(100);
		$('#kviz_end').fadeIn(400);
	}
			
	var local = document.forms['kviz_form'].elements[0].value;
	var space = document.forms['kviz_form'].elements[1].value;
	var style = document.forms['kviz_form'].elements[2].value;
	var many = document.forms['kviz_form'].elements[3].value;
	var time = document.forms['kviz_form'].elements[4].value;
	var slave = document.forms['kviz_form'].elements[5].value;
	var phone = document.forms['kviz_form'].elements[6].value;
	dataLayer.push({'event': 'quiz'});
		$.ajax({
			type: 'POST',
			url:  "send_kviz.php",
			data: ({local: local,
					space: space, 
					style: style,
					many: many,
					time: time,
					slave: slave,
					phone: phone}),
			dataType: "html",
			success: funcBuy
		});	
}

//проверка адекватности данных
function test_form(){
	
	var test = 'ok';
	var name = document.forms['order_form'].elements[0].value;
	var phone = document.forms['order_form'].elements[1].value;
	var v_phone = /^\d[\d\(\)\ -]{4,14}\d$/;
	var valid_phone = v_phone.test(phone);
	if(name == ''){
		document.forms['order_form'].elements[0].style.border = "1px solid red";
		test = 'error';
	}
	if(phone == ''){
		document.forms['order_form'].elements[1].style.border = "1px solid red";
		test = 'error';
	}
	if(valid_phone){}
	else{
		document.forms['order_form'].elements[1].style.border = "1px solid red";
		test = 'error';
	}
	if (test == 'ok'){
		send();
	}
}

function valid_phone_kviz(){
	
	var test = 'ok';
	var phone = document.forms['kviz_form'].elements[6].value;
	var v_phone = /^\d[\d\(\)\ -]{4,14}\d$/;
	var valid_phone = v_phone.test(phone);
	
	if(phone == ''){
		$("#kviz_phone").css("border", "1px solid red");
		test = 'error';
	}
	if(valid_phone){}
	else{
		$("#kviz_phone").css("border", "1px solid red");
		test = 'error';
	}
	if (test == 'ok'){
		send_kviz();
	}
}

//сброс стиля инпутов
function clear_bord(f_n,a){
	document.forms[f_n].elements[a].style.border = "1px solid #cccccc";	
}

function clear_bord_kviz(){
	$("#kviz_phone").css("border", "1px solid #c9c9c9");
}


function send(){
	function funcBuy(data){
		$('.modalWindow_background').fadeOut();
		document.location.replace("thank.php");
	}
			
			
	var name = document.forms['order_form'].elements[0].value;
	var phone = document.forms['order_form'].elements[1].value;
	var button = document.forms['order_form'].elements[2].value;
	if(document.forms['order_form'].elements[2].value == 'zamer'){dataLayer.push({'event': 'request'}); button = "Получить замер"; }
	if(document.forms['order_form'].elements[2].value == 'callback'){dataLayer.push({'event': 'callback'}); button = "Обратный звонок"; }
	if(document.forms['order_form'].elements[2].value == 'callback_f'){dataLayer.push({'event': 'callback'}); button = "Обратный звонок (снизу нажал)"; }
	if(document.forms['order_form'].elements[2].value == 'order_RP'){dataLayer.push({'event': 'request'}); button = "Рабочий прект"; }
	if(document.forms['order_form'].elements[2].value == 'order_RPAN'){dataLayer.push({'event': 'request'}); button = "Рабочий прект с авторским надзором"; }
	if(document.forms['order_form'].elements[2].value == 'order_KEY'){dataLayer.push({'event': 'request'}); button = "Работа под ключ"; }
	if(document.forms['order_form'].elements[2].value == 'consultation'){dataLayer.push({'event': 'request'}); button = "Получить консультацию"; }

		$.ajax({
			type: 'POST',
			url:  "send.php",
			data: ({name: name, phone: phone, button: button}),
			dataType: "html",
			success: funcBuy
		});	
	}