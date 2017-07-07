@extends('master')
@section('content')
  <div class="content">
  	<div class="container-fluid">
  		<div class="row" style="margin-right: 400px;">
  			<div class="col-md-offset-3 col-md-9">
  				
  					<div id="rootwizard" class="" style="margin-top: 50px; font-family: Roboto;" >
 
						<ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm">

						   
							<li class="active">
								<a href="#"><i class="fa fa-home tab-icon"></i> <span>Basic Info</span></a>
							</li>
							<li class="">
								<a href="#"><i class="fa fa-list tab-icon"></i> <span>Account Info</span></a>
							</li>
							<li class="">
								<a href="#"><i class="fa fa-check tab-icon"></i> <span>Finish</span></a>
							</li>
							
						</ul>
 
						<div class="tab-content">
							<div class="row">

								 <div class="content">
								    {!! Form::open(['route'=>['bank.basics'],'method'=>'POST','id'=>'basicsForm','class'=>'form-horizontal']) !!}
								    <div class="col-md-12">
                                       <div class="input-group">
											<div class="input-group-addon"><span class="fa fa-user"></span>
                                             </div>
											{!! Form::text('firstname',old('firstname') ? old('firstname') : $firstname,['class'=>'form-control','placeholder'=>'Customer Firstname','required']) !!}
										</div>
									</div>
									 <div class="col-md-12">
                                       <div class="input-group">
											<div class="input-group-addon"><span class="fa fa-user"></span>
                                             </div>
											{!! Form::text('lastname',old('lastname') ? old('lastname') : $lastname,['class'=>'form-control','placeholder'=>'Customer Lastname','required']) !!}
										</div>
									</div>
									 <div class="col-md-12">
                                       <div class="input-group">
											<div class="input-group-addon"><span class="fa fa-location-arrow"></span>
                                             </div>
											{!! Form::text('address', old('address') ? old('address') : $address,['class'=>'form-control','placeholder'=>'Customers Address','required']) !!}
										</div>
									</div>
									 <div class="col-md-12">
                                       <div class="input-group">
											<div class="input-group-addon"><span class="fa fa-mobile"></span>
                                             </div>
											{!! Form::number('phone',old('phone') ? old('phone') : $phone,['class'=>'form-control','placeholder'=>'Customers Phone Number','required']) !!}
										</div>
									</div>
									 <div class="col-md-12">
									   <div class="col-md-6">
									   	  <label> Male</label>
											{{ Form::radio('sex', 'male', true) }}
									   </div>
                                        <div class="col-md-6">
									    <label> Female </label>
											{{ Form::radio('sex', 'female') }}
										</div>
										</div>
									</div>
									 
		                           
								 </div>
							</div>
							 <div class="wizard-footer">
                                                    
                             
                                 <div class="pull-right">
                                	 <div class="pull-right" style="margin-right: 90px;">
                                	   {!! Form::submit('Next',['class'=> 'btn btn-next btn-fill btn-success']) !!} 
                                	</div>
                                </div>
                                    
                         
                            </div>
                               {!! Form::close() !!}
                        </div>
                    </div>
				</div>
		   </div>
		  </div>
		 </div>
 <script type="text/javascript">  
</script>
{!! JsValidator::formRequest('App\Http\Requests\BankRequest', '#basicsForm'); !!}
@endsection