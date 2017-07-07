@extends('master')
@section('content')
  <div class="content">
  	<div class="container-fluid">
  		<div class="row" style="margin-right: 300px;" style="margin-top: 40px;">
  			<div class="col-md-offset-4 col-md-7">
  				
				<div class="row">

					 <div class="content" style="margin-top: 40px;">
					    {!! Form::open(['route'=>['bank.accounts.edit','user_id' => $user->id],'method'=>'POST','id'=>'basicsForm','class'=>'form-horizontal']) !!}
					    <div class="col-md-12">
                           <div class="input-group">
								<div class="input-group-addon"><span class="fa fa-user"></span>
                                 </div>
								{!! Form::text('firstname',old('firstname') ? old('firstname') : $user->firstname,['class'=>'form-control','placeholder'=>'Customer Firstname','required']) !!}
							</div>
						</div>
						 <div class="col-md-12">
                           <div class="input-group">
								<div class="input-group-addon"><span class="fa fa-user"></span>
                                 </div>
								{!! Form::text('lastname',old('lastname') ? old('lastname') : $user->lastname,['class'=>'form-control','placeholder'=>'Customer Lastname','required']) !!}
							</div>
						</div>
						 <div class="col-md-12">
                           <div class="input-group">
								<div class="input-group-addon"><span class="fa fa-location-arrow"></span>
                                 </div>
								{!! Form::text('address', old('address') ? old('address') : $user->address,['class'=>'form-control','placeholder'=>'Customers Address','required']) !!}
							</div>
						</div>
						 <div class="col-md-12">
                           <div class="input-group">
								<div class="input-group-addon"><span class="fa fa-mobile"></span>
                                 </div>
								{!! Form::number('phone',old('phone') ? old('phone') : '0'.(int)$user->phone_number,['class'=>'form-control','placeholder'=>'Customers Phone Number','required']) !!}
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
			 		     <div class="col-md-12">
                           <div class="input-group">
                                  {!! Form::label('Account Type', null, ['class' => 'control-label']) !!}
								
								  {!! Form::select('account_type', ['current' => 'Current', 'savings' => 'Savings'], $user->account_type);
								  !!}
							</div>
						</div>
						<div class="col-md-12">
                           <div class="input-group">
								<div class="input-group-addon"><span class="fa fa-money"></span>
                                 </div>
								{!! Form::number('opening_bal',old('opening_bal') ? old('opening_bal') : $user->opening_bal,['class'=>'form-control','placeholder'=>'Opening Balance','required']) !!}
							</div>
						</div>
						 <div class="pull-right">
                                	 <div class="pull-right">
                                	   {!! Form::submit('Save',['class'=> 'btn btn-next btn-fill btn-success']) !!} 
                                	</div>
                         </div>		
						</div>
						 
		                           
							 </div>
						</div>
						   {{ method_field('put') }}
                           {!! Form::close() !!}
                    </div>
                </div>
			</div>
 <script type="text/javascript">  
</script>
{!! JsValidator::formRequest('App\Http\Requests\BankRequest', '#basicsForm'); !!}
@endsection