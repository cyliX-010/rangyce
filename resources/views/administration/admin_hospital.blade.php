{{-- <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/never_touch_mc/modal.min.css') }}" rel="stylesheet">
{{-- Datatable --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/responsive.bootstrap4.min.css') }}">

<div class="modal fade" id="add-modal"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      	<div class="modal-header">
        	<h3 class="modal-title" id="exampleModalLongTitle">Add New Hospital</h3>
      	</div>
		<div class="modal-body">
			<form id="adding-form" method="get" enctype="multipart/form-data">	
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <input type="text" class="form-control" id="name_of_hospital" aria-describedby="emailHelp" placeholder="Hospital Name" required>		    	
						 </div>
					</div>
					      	
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="City" required>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="street" aria-describedby="emailHelp" placeholder="Street" required>	
						</div>			
					</div> 
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="zip" aria-describedby="emailHelp" placeholder="Zip Code" required>	
						</div>		
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <input type="file" class="form-control-file" id="file_path"  accept="image/*">
						    <center>
						    	<img id="livePreview" style="with: 50%">
						    </center>
						</div>
					</div>        	
				</div>			
			</form>			
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary" id="save-new-PS">Add Hospital</button>
		</div>
    </div>
  </div>
</div>

<!-- Doctors Modal -->
<div class="modal fade" id="add-doctors-modal"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLongTitle">Add New Doctor</h3>
        </div>
        <div class="modal-body">
            <form id="adding-form" method="get" enctype="multipart/form-data">  

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select id="doc_type">
                                <option value="">Type of doctor</option>
                                <option value="31">Dentist</option>
                                <option value="32">Surgeon</option>
                                <option value="33">Cardiologist</option>
                                <option value="34">Neurologist</option>
                            </select>              
                         </div>
                    </div>                            
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="doc_firstname" aria-describedby="emailHelp" placeholder="Firstname" required>                
                         </div>
                    </div>                            
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="doc_lastname" aria-describedby="emailHelp" placeholder="Lastname" required>                
                         </div>
                    </div>                            
                </div>
                <div>
                    <input id="doc_password" type="hidden" name="" value="welcome01" >
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="doc_email" aria-describedby="emailHelp" placeholder="Email Address" required>                
                         </div>
                    </div>                            
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select id="doc_hospital_id">
                                @foreach(\App\Hospital::all() as $hospital)
                                <option value="{{$hospital->id}}" >{{$hospital->name}}</option>  
                                @endforeach                              
                            </select> 
                         </div>
                    </div>                            
                </div>

               

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="doc_file_path"  accept="image/*">
                            <center>
                                <img id="doc_livePreview" style="with: 50%">
                            </center>
                        </div>
                    </div>          
                </div>          
            </form>         
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="save-new-doctor">Add Doctors</button>
        </div>
    </div>
  </div>
</div>
@include('layouts.app')	

<!-- This section is for the table of the police station -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<h2>Hospitals</h2>				
				</div>
				<div class="col-md-6">
					<a class="btn btn-primary" href="#" id="add-station-btn">Add Hospital</a>
				</div>
                <div class="col-md-6">
                    <a class="btn btn-primary" href="#" id="add-doctors-btn">Add Doctors</a>
                </div>
			</div>
			<table class="table table-striped table-bordered dt-responsive nowrap" id="list-police-table" style="width: 100%; margin-bottom: 40px;">
				<thead>
					<tr>
						<th>Name of Hospital</th>
						<th>City</th>
						<th>Street</th>
						<th>Zip Code</th>
						<th>Date Added</th>
						<th>Options</th>							
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>
@include('layouts.bottomAdmin')
<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/moment-with-locales.js') }}"></script>
<script src="{{ asset('js/modal.min.js') }}"></script>		
<script src="{{ asset('js/modalmanager.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2@8.0.7.js') }}"></script>
<script type="text/javascript">
	$(document).ready( function () {
	    console.log( "ready!" );

        //add hospital modal
	    $('#add-station-btn').click(function(e){
	    	e.preventDefault();
	    	$('#add-modal').modal('show');
	    });


        //add doctor modal
        $('#add-doctors-btn').click(function(e){
            e.preventDefault();
            $('#add-doctors-modal').modal('show');
            $('#add-modal').modal('hide');
        });

	    $('#list-police-table').DataTable({
	    		responsive: true,
	           "processing": true,
	           "ajax": "{{ route('get_list_Hospital') }}",
	           columns: [
                    { 
                        data: 'name'
                    },                
                    
                    { 
                        data: 'city'
                    },                
                    {
                        data: 'street',
                    },
                    { 
                        data: 'zip'
                    },                
                    {
                        data: 'created_at',
                        render: function ( data, type, row ) 
                        {
                        	return moment(data).format('llll');
                        }
                    },
                    {
                    	data: null,
                    	render: function()
                    	{
                    		return '<button class="btn btn-primary">Edit</button>';
                    	}
                    }
                ],
	       } );
        
        //Add new doctors
        $('#save-new-doctor').click(function(){
            var $this = $(this);            
            $.ajax({
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                url: '{{route('add_new_doctors')}}',
                type: 'POST',
                data: {
                    first_name: $('#doc_firstname').val(),
                    last_name: $('#doc_lastname').val(),
                    user_type: $('#doc_type option:selected').val(),
                    doc_hospital_id: $('#doc_hospital_id option:selected').val(),
                    email: $('#doc_email').val(),
                    password: $('#doc_password').val(),
                    file_path: $('#doc_livePreview').attr('src'),
                },
                success:function(data){ 
                    console.log(data, data.success);
                    if(data.success)
                    {
                        Swal.fire(
                              '',
                              'Successfuly Added',
                              'success'
                            )      
                        $('#add-doctors-modal').modal('hide'); 
                    }                  
                },
            });
        });


        $('#doc_file_path').change(function(){
        if (this.files && this.files[0]) {
             var reader = new FileReader();
             reader.onload = function (e) {
                var image = document.createElement('img');
                image.src = e.target.result;

                image.onload = function(){
                    var canvas = document.createElement('canvas');
                        canvas.width = image.width;
                        canvas.height = image.height;
                        var newHeight = 100;
                        var newWidth = 100;
                        var changeSize = false;

                        if (this.height > newHeight) {
                            changeSize = true;
                        }
                        else if (this.width > newWidth) {
                            changeSize = true;
                        }
                        if (changeSize) {
                            if (this.height > this.width) {
                                var x = ((this.height - newHeight) / this.height) * this.width;
                                newWidth = this.width - x;
                            }
                            else {
                                var x = ((this.width - newWidth) / this.width) * this.height;
                                newHeight = this.height - x;
                            }
                        }
                        else {
                            newHeight = this.height;
                            newWidth = this.width;
                        }
                        canvas.width = newWidth;
                        canvas.height = newHeight;
                        var ctx = canvas.getContext("2d");
                        ctx.drawImage(image, 0, 0, newWidth, newHeight);
                        var dataurlTemp = canvas.toDataURL();
                        $('#doc_livePreview').attr('src', dataurlTemp);
                }

             }
             reader.readAsDataURL(this.files[0]);
        }
        });





        // Add new hospital
        // var formData = new FormData($('#adding-form')[0]);
    	$('#save-new-PS').click(function(){
    		var $this = $(this);    		
    		$.ajax({
    			headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
    			url: '{{route('add_new_hospitals')}}',
    			type: 'POST',
    			data: {
    				name: $('#name_of_hospital').val(),
    				city: $('#city').val(),
    				street: $('#street').val(),
    				zip: $('#zip').val(),
    				file_path: $('#livePreview').attr('src'),
    			},
    			success:function(data){ 
    				console.log(data, data.success);
    			    if(data.success)
    			    {
    			    	Swal.fire(
    			    	      '',
    			    	      'Successfuly Added',
    			    	      'success'
    			    	    )      
    			    	$('#add-modal').modal('hide'); 
    			    }                  
    			},
    		});
    	});

    	$('#file_path').change(function(){
    	if (this.files && this.files[0]) {
    	     var reader = new FileReader();
    	     reader.onload = function (e) {
    	        var image = document.createElement('img');
    	        image.src = e.target.result;

    	        image.onload = function(){
    	            var canvas = document.createElement('canvas');
    	                canvas.width = image.width;
    	                canvas.height = image.height;
    	                var newHeight = 100;
    	                var newWidth = 100;
    	                var changeSize = false;

    	                if (this.height > newHeight) {
    	                    changeSize = true;
    	                }
    	                else if (this.width > newWidth) {
    	                    changeSize = true;
    	                }
    	                if (changeSize) {
    	                    if (this.height > this.width) {
    	                        var x = ((this.height - newHeight) / this.height) * this.width;
    	                        newWidth = this.width - x;
    	                    }
    	                    else {
    	                        var x = ((this.width - newWidth) / this.width) * this.height;
    	                        newHeight = this.height - x;
    	                    }
    	                }
    	                else {
    	                    newHeight = this.height;
    	                    newWidth = this.width;
    	                }
    	                canvas.width = newWidth;
    	                canvas.height = newHeight;
    	                var ctx = canvas.getContext("2d");
    	                ctx.drawImage(image, 0, 0, newWidth, newHeight);
    	                var dataurlTemp = canvas.toDataURL();
    	                $('#livePreview').attr('src', dataurlTemp);
    	        }

    	     }
    	     reader.readAsDataURL(this.files[0]);
    	}
    	});
	});				
</script>