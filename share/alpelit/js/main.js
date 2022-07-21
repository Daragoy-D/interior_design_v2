$(document).ready(function(){
	$('.usl').hover(function(){
		//$('.usl_list').stop(false, false).fadeIn(400);
		$('.usl_list').css({'display' : 'block'});	
		$('.navigate_panel_top_button.usl').css({
			'color' : '#fff',
			'background' : '#c59928'
			});
	}, function(){
		//$('.usl_list').stop(false, false).fadeOut(400);
		$('.usl_list').css({'display' : 'none'});
		$('.navigate_panel_top_button.usl').css({
			'color' : '#000',
			'background' : '#fac540'
			});
	});
	
	//анимация мобильного меню
	$(function() {
		var Accordion = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

			// Variables privadas
			var links = this.el.find('.link');
			// Evento
			links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
		}

		Accordion.prototype.dropdown = function(e) {
			var $el = e.data.el;
				$this = $(this),
				$next = $this.next();

			$next.slideToggle();
			$this.parent().toggleClass('open');

			if (!e.data.multiple) {
				$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
			};
		}	

		var accordion = new Accordion($('#accordion'), false);
	});

	$('.burger').click(function(){
		$('.mob_menu_list').slideToggle(700); 
	});	
	
	$('.close_icon').click(function(){
		$('.mob_menu_list').slideToggle(700); 
	});	
	
	
	$('.cbt').click(function(){
		$('#from').val('cbt');
	});	

	$('.cbb').click(function(){
		$('#from').val('cbb');
		send_form();
	});	
	
	$('.gp').click(function(){
		$('#from').val('gp');
		send_form();
	});
	
	$('.vmcond').click(function(){
		$('#from').val('vmcond');
		send_form();
	});
	
	$('.vmlift').click(function(){
		$('#from').val('vmlift');
		send_form();
	});
	
	$('.vmwarming').click(function(){
		$('#from').val('vmwarming');
		send_form();
	});

	$('.cbfs').click(function(){
		send_form();
	});
	
	$('.twc').click(function(){
		$('.thankWindow').fadeOut(500);
		$('body').css({'overflow' : 'auto'});
	});	
	
	$('.cbt_f').click(function(){
		$('.modalWindowConteiner').slideToggle(200);
		$('.modalWindow').css({'display' : 'block'});
		$('body').css({'overflow' : 'hidden'});
	});	
	
	$('.mw_close_icon').click(function(){
		$('.modalWindowConteiner').slideToggle(200);
		$('.modalWindow').css({'display' : 'none'});
		$('body').css({'overflow' : 'auto'});
	});	
	
	$('input').click(function(){
		$(this).css({'background' : 'white'});
	});	

});

function send_form(){
	
	function funcWait(){
		$('.modalWindow').css({'display' : 'none'});
		$('.cssload-triangles').css({'display' : 'block'});
		if ( $('.modalWindowConteiner').is(':hidden') ){
			$('.modalWindowConteiner').fadeIn(200);
		}
	}
	
	function funcFin(data){
		$('.modalWindow').css({'display' : 'none'});
		$('.cssload-triangles').css({'display' : 'none'});
		if ( $('.modalWindowConteiner').is(':visible') ){
			$('.modalWindowConteiner').fadeOut(200);
		}
		$('body').css({'overflow' : 'hidden'});
		$('.thankWindow').fadeIn(500);
		console.log(data);
	}
	
	var phone = null; 
	var name = null;
	var mail = null;
	var quest = null;
	var from = $('#from').val();
	var test_field = true;
	
	if ($('#from').val() == 'vmcond'){
		if ( $('#vmcond_name').val() == '' ){
			$('#vmcond_name').css({'background' : '#ec5959'});
			test_field = false;
		}
		if ( $('#vmcond_phone').val() == '' ){
			$('#vmcond_phone').css({'background' : '#ec5959'});
			test_field = false;
		}
		if (test_field){
			name = $('#vmcond_name').val();
			phone = $('#vmcond_phone').val();
			$('.twt1').text('готово!');
			$('.twt2').html('Ваша заявка принята.<br>Мы свяжемся с вами в ближайщее время.<br>Спасибо, что обратились в нашу компанию.');
		}
	}
	
	if ($('#from').val() == 'vmlift'){
		if ( $('#vmlift_name').val() == '' ){
			$('#vmlift_name').css({'background' : '#ec5959'});
			test_field = false;
		}
		if ( $('#vmlift_phone').val() == '' ){
			$('#vmlift_phone').css({'background' : '#ec5959'});
			test_field = false;
		}
		if (test_field){
			name = $('#vmlift_name').val();
			phone = $('#vmlift_phone').val();
			$('.twt1').text('готово!');
			$('.twt2').html('Ваша заявка принята.<br>Мы свяжемся с вами в ближайщее время.<br>Спасибо, что обратились в нашу компанию.');
		}
	}
	
	if ($('#from').val() == 'vmwarming'){
		if ( $('#vmwarming_name').val() == '' ){
			$('#vmwarming_name').css({'background' : '#ec5959'});
			test_field = false;
		}
		if ( $('#vmwarming_phone').val() == '' ){
			$('#vmwarming_phone').css({'background' : '#ec5959'});
			test_field = false;
		}
		if (test_field){
			name = $('#vmwarming_name').val();
			phone = $('#vmwarming_phone').val();
			$('.twt1').text('готово!');
			$('.twt2').html('Ваша заявка принята.<br>Мы свяжемся с вами в ближайщее время.<br>Спасибо, что обратились в нашу компанию.');
		}
	}
	
	if ($('#from').val() == 'gp'){
		if ( $('#gp_name').val() == '' ){
			$('#gp_name').css({'background' : '#ec5959'});
			test_field = false;
		}
		if ( $('#gp_phone').val() == '' ){
			$('#gp_phone').css({'background' : '#ec5959'});
			test_field = false;
		}
		if ( $('#gp_mail').val() == '' ){
			$('#gp_mail').css({'background' : '#ec5959'});
			test_field = false;
		}
		if (test_field){
			name = $('#gp_name').val();
			phone = $('#gp_phone').val();
			mail = $('#gp_mail').val();
			$('.twt1').text('готово!');
			$('.twt2').html('Прайс отправлен на <b>'+mail+'</b><br>Спасибо, что обратились в нашу компанию.');
		}
	}
	
	if ($('#from').val() == 'cbt'){
		if ( $('#cbfs_name').val() == '' ){
			$('#cbfs_name').css({'background' : '#ec5959'});
			test_field = false;
		}
		if ( $('#cbfs_phone').val() == '' ){
			$('#cbfs_phone').css({'background' : '#ec5959'});
			test_field = false;
		}
		if (test_field){
			name = $('#cbfs_name').val();
			phone = $('#cbfs_phone').val();
			$('.twt1').text('готово!');
			$('.twt2').html('Ваша заявка принята.<br>Мы свяжемся с вами в ближайщее время.<br>Спасибо, что обратились в нашу компанию.');
		}
	}
	
	if ($('#from').val() == 'cbb'){
		if ( $('#cbb_name').val() == '' ){
			$('#cbb_name').css({'background' : '#ec5959'});
			test_field = false;
		}
		if ( $('#cbb_phone').val() == '' ){
			$('#cbb_phone').css({'background' : '#ec5959'});
			test_field = false;
		}
		if (test_field){
			name = $('#cbb_name').val();
			phone = $('#cbb_phone').val();
			quest = $('#cbb_quest').val();
			$('.twt1').text('готово!');
			$('.twt2').html('Ваша заявка принята.<br>Мы свяжемся с вами в ближайщее время.<br>Спасибо, что обратились в нашу компанию.');
		} 
	}
	
	
	
	if (test_field){
		$.ajax({
			type: 'POST',
			url:  "send_form.php",
			data:	({
						phone: phone, 
						name: name, 
						mail: mail, 
						quest: quest, 
						from: from
					}),
			beforeSend: funcWait,
			success: funcFin
		});
	}
	
	
}





















