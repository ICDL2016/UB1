
$(document).ready(function () {

  // Personal-area-new events

   $('#start-learning-btn').click(function(event) {
   		event.preventDefault();
    	if($('#start-learning').hasClass('show')) {
    		$('#start-learning').toggleClass('show');
    		$("#start-learning").fadeOut();
    	} else {
    		$('#start-learning').toggleClass('show');
    		$('#start-learning').fadeIn();
    	};
    	$(this).addClass('hidden');
   });

   $('#certificate-div-btn').click(function(event) {
   		event.preventDefault();
    	if($('#certificate-div').hasClass('show')) {
    		$('#certificate-div').toggleClass('show');
    		$("#certificate-div").fadeOut();
    	} else {
    		$('#certificate-div').toggleClass('show');
    		$("#certificate-div").fadeIn();
    	};
    	$(this).addClass('hidden');
   });

	$('#certificate-form-btn').click(function(event) {
   		event.preventDefault();
   		var certName = $('#certificate-name').val();
   		var certLastName = $('#certificate-lastname').val();
   		var certSecName = $('#certificate-secondname').val();
   		var certNameLat = $('#certificate-name-lat').val();
   		var certLastNameLat = $('#certificate-lastname-lat').val();
   		if (!certName || !certLastName || !certNameLat || !certLastNameLat) {
   			$('#certificate-form .error-box').removeClass('hidden');
   		} else {
   			$('#certificate-form .error-box').addClass('hidden');
   			$('#certificate-complete-div').fadeIn();
    		// $('#start-learning-btn').addClass('hidden');
    		$('#certificate-div-p').toggleClass('hidden');
    		$(this).parent().toggleClass('hidden');
   		};
   });

   $('#certificate-edit-btn').click(function(event) {
   		event.preventDefault();
    	$('#certificate-complete-form').toggleClass('hidden');
    	$(this).parent().toggleClass('hidden');
   });

   $('.certificate-order-link').click(function(event) {
   		event.preventDefault();
   		$('#modal-result-box').addClass('hidden');
    	$('#modal-certificate-order').removeClass('hidden');
   });

   $('.certificate-complete-link').click(function(event) {
   		event.preventDefault();
   		// if ($(this).hasClass('in-progress')) {
   		// 	$('#modal-certificate-complete .modal-actions-btns').addClass('hidden');
   		// 	$('#modal-certificate-complete img').css('margin-top','50px').attr('src', 'img/diplom1.png');;
   		// } else {
   		// 	$('#modal-certificate-complete .modal-actions-btns').removeClass('hidden');
   		// 	$('#modal-certificate-complete img').css('margin-top','0').attr('src', 'img/diplom2.png');;
   		// }
    	$(this).siblings('.certificate-img-div').toggleClass('hidden');
   });

   $('#modal-send-btn').click(function(event) {
   		event.preventDefault();
   		$(this).parent().parent().addClass('hidden');
   		$('#modal-result-box').removeClass('hidden');
   });

   $( "#modal-certificate-order select" ).change(function() {
 		if ($(this).val() == "post") {
 			$('#modal-address-div').removeClass('hidden');
 		} else {
 			if (!$('#modal-address-div').hasClass('hidden')) {
 				$('#modal-address-div').addClass('hidden');
 			};
 		};
   });

   $('.close__bt').click(function(event) {
   		event.preventDefault();
    	$(this).parent('div').parent('div').toggleClass('hidden');
   });

});
