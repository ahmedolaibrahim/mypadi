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
							<li class="">
								<a href="#"><i class="fa fa-list tab-icon"></i> <span>Account Info</span></a>
							</li>

							<li class="active">
								<a href="#"><i class="fa fa-check tab-icon"></i> <span>Account Info</span></a>
							</li>
							
						</ul>
 
						<div class="tab-content">
							<div class="row">
                                <div class="card card-status" style="margin-top: 40px;">
								 <div class="content">
								   
									 <div class="account">
	                                  <img class="avatar border-white" src="{{asset('images/correct.png')}}" alt="..."/>
	                                 
	                                </div>
	                                <p class="description text-center">
	                                  Your Bank account has been Created.
	                                </p>
	                                 <p class="description text-center">
	                                  Details
	                                    <div class="text-center" style="font-size: 15px;">
	                                	{{$firstname}}  {{$lastname}}
	                                    </div>
	                                    <div class="text-center" style="font-size: 15px;">
	                                	  {{ $account_number}}
	                                    </div>
	                                     <div class="text-center" style="font-size: 15px;">
	                                	  {{ $opening_bal}}
	                                    </div>
	                                      <div class="text-center" style="font-size: 15px;">
	                                	  {{ $account_type}}
	                                    </div>
	                                     <div class="text-center" style="font-size: 15px;">
	                                	  {{ $address}}
	                                    </div>
	                                    <div class="text-center" style="font-size: 15px;">
	                                	  {{ $gender}}
	                                    </div>
	                                </p>
	                              
						
							    </div>
									 
		                           
								 </div>
							</div>
							 <div class="wizard-footer" style="margin-top: 20px;">
                                   
                                   <div class="pull-left">
                                	 <div class="pull-left">
                                	   <a href="{{url('/account')}}" class="btn btn-next btn-fill btn-info">
                                	   	 << Prev
                                	   </a>
                                	  
                                	</div>
                                </div>                 
                             
                                 <div class="pull-right">
                                	 <div class="pull-right" style="margin-right: 90px;">
                                	   <a href="{{url('/accounts')}}" class="btn btn-next btn-fill btn-success">
                                	      Finish
                                	   </a>
                                	</div>
                                </div>
                                    
                         
                            </div>
                             
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