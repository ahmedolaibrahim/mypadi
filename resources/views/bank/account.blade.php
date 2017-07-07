@extends('master')
@section('content')
  <div class="content">
  	<div class="container-fluid">
  		<div class="row" style="margin-right: 400px;">
  			<div class="col-md-offset-3 col-md-9">
  				
  					<div id="rootwizard" class="" style="margin-top: 50px; font-family: Roboto;" >
 
						<ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm">

						   
							<li class="">
								<a href="#"><i class="fa fa-home tab-icon"></i> <span>Basic Info</span></a>
							</li>
							<li class="active">
								<a href="#"><i class="fa fa-list tab-icon"></i> <span>Account Info</span></a>
							</li>

							<li class="">
								<a href="#"><i class="fa fa-check tab-icon"></i> <span>Account Info</span></a>
							</li>
							
						</ul>
 
						<div class="tab-content">
							<div class="row">

								 <div class="content">
								    {!! Form::open(['route'=>['bank.account.store','user_id' => $user_id],'method'=>'POST','id'=>'accountForm','class'=>'form-horizontal']) !!}

								        {{ csrf_field() }}
								    <div class="col-md-12">
                                       <div class="input-group">
                                              {!! Form::label('Account Type', null, ['class' => 'control-label']) !!}
											
											  {!! Form::select('account_type', ['current' => 'Current', 'savings' => 'Savings'], $account_type);
											  !!}
										</div>
									</div>
									<div class="col-md-12">
                                       <div class="input-group">
											<div class="input-group-addon"><span class="fa fa-money"></span>
                                             </div>
											{!! Form::number('opening_bal',old('opening_bal') ? old('opening_bal') : $opening_bal,['class'=>'form-control','placeholder'=>'Opening Balance','required']) !!}
										</div>
									</div>
									
									
									
							    </div>
									 
		                           
								 </div>
							</div>
							 <div class="wizard-footer" style="margin-top: 20px;">
                                   
                                   <div class="pull-left">
                                	 <div class="pull-left">
                                	   <a href="{{url('/')}}" class="btn btn-next btn-fill btn-info">
                                	   	 << Prev
                                	   </a>
                                	  
                                	</div>
                                </div>                 
                             
                                 <div class="pull-right">
                                	 <div class="pull-right" style="margin-right: 90px;">
                                	   {!! Form::submit('Next',['class'=> 'btn btn-next btn-fill btn-success']) !!} 
                                	</div>
                                </div>
                                    
                         
                            </div>
                               {{ method_field('put') }}
                               {!! Form::close() !!}
                        </div>
                    </div>
				</div>
		   </div>
		  </div>
		 </div>
 <script type="text/javascript">  
</script>
{!! JsValidator::formRequest('App\Http\Requests\BankRequest', '#accountForm'); !!}
@endsection