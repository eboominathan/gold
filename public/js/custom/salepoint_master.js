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
      			$('#modal_form').modal('hide');
      			$.Notification.notify('success','top right', 'Success', res.result.original.message);
      			$('#sale_point_master_form')[0].reset();
      			reloadTable();
      			
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
        
    }

});
	$('#btnSave').text('Save'); //change button text
    $('#btnSave').attr('disabled',false); //set button enable 
    


});


$(function() {
	$('#datatable').DataTable({               
		processing: true,
		serverSide: true,
		ajax: baseUrl+'/sale-point-master/list',
		columns: [
		{ data: 'DT_RowIndex', name: 'DT_RowIndex'},
		{ data: 'name', name: 'name' },                   
		{ data: 'action', name: 'action', orderable:   false, searchable: false },
		],
		"order": [[ '1', "asc" ]]
	});          
	//$('#datatable').DataTable().ajax.reload();
});


function edit_salepoint(id){
	$('#modal_form').modal('show');
	$.ajax({
		url:baseUrl+'/sale-point-master/edit/'+id,      	
		method:'GET',
		dataType:'JSON',
		success:function(res){
			if(res.result.original.status == true){
				$('#name').val(res.result.original.data.name);
				$('#hidden_id').val(res.result.original.data.id);      			 
			} 
		},
		error:function(err){
			$.Notification.notify('error','top right', 'Warning','Internet issue please try later');        
		}

	});


	$('#name').focus();
}


function delete_salepoint(id){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this salepoint!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: 'btn-success',                
		cancelButtonClass: 'btn-danger btn-md waves-effect',
		confirmButtonText: "Yes, delete it!",
		closeOnConfirm: true

	}, function (isConfirm) {
		if (isConfirm) {
			$.ajax({
				url:baseUrl+'/sale-point-master/delete/'+id,      	
				method:'GET',
				dataType:'JSON',
				success:function(res){
					if(res.result.original.status == true){
						reloadTable();
						swal("Deleted!", "Salepoint has been deleted.", "success");      			 
					} 
				},
				error:function(err){
					swal("Oops!", "Internet issue please try later.", "error");
				}

			});



		}
	});
}

function reloadTable(){
$('#datatable').DataTable().ajax.reload();
}


