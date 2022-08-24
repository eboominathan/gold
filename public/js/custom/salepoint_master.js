$('#sale_point_master_form').submit(function(e){
	e.preventDefault();
	$('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
	  $('#btnSave').text('Saving...'); //change button text
      $('#btnSave').attr('disabled',true); //set button disable 

	 
	$.ajax({
		url:baseUrl+'/sale-point-master',
		data:$(this).serialize(),
		method:'POST',
		dataType:'JSON',
		success:function(res){
			if(res.result.original.status == true){
				$.Notification.notify('success','top right', 'Success', res.result.original.message);
				$('#sale_point_master_form')[0].reset();
			} 
		},
		error:function(err){
			  if (err.status == 422) { // when status code is 422, it's a validation issue
			  	$('#success_message').fadeIn().html(err.responseJSON.message);
            // display errors on each form field
            $.each(err.responseJSON.errors, function (i, error) {
            	$('[name="'+i+'"]').parent().parent().addClass('has-error');
            	$('[name="'+i+'"]').next().text(error[0]);               
            });
        }else{
        	$.Notification.notify('error','top right', 'Warning','Internet issue please try later');
        }
         $('#btnSave').text('Save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
    }
});

});


