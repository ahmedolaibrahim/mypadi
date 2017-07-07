@extends('master')
@section('content')
  <div class="content">
   
  	<div class="container-fluid">

  		<div class="row" style="margin-right: 400px;">
  		 
  			<div class="col-md-offset-3 col-md-9">
  				  <div style="margin-top: 10px;">
			    	  <a href="{{url('/')}}" class="btn btn-success">
			                <i class="fa fa-plus"></i> Add New Account
			          </a>
		          </div>
  	           <div class="content" style="margin-top: 40px;">
  	           	 <table id="accounts" class="table table-striped table-bordered" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>Firstname</th>
			                <th>Lastname</th>
			                <th>Acc Number</th>
			                <th>Balance</th>
			                <th>Gender</th>
			                <th class="actions">action</th>
			               
			            </tr>
			        </thead>
       
			        <tbody>
			             @foreach($accounts as $account)
			            <tr>
			                <td>{{ucwords($account->firstname)}}</td>
			                <td>{{ucwords($account->lastname)}}</td>
			                <td>{{ucwords($account->account_number)}}</td>
			                <td>{{ucwords($account->opening_bal)}}</td>
			                <td>{{ucwords($account->gender)}}</td>
			                <td></td>

			            </tr>
			             @endforeach
			        </tbody>
   				 </table>
  	           </div>
            </div>
	    </div>
   </div>
  </div>
 </div>
 <script type="text/javascript">  
	$(document).ready(function() {
	    $('#accounts').DataTable();
	} );
</script>
{!! JsValidator::formRequest('App\Http\Requests\BankRequest', '#accountForm'); !!}
@endsection