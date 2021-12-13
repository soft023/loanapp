@extends('layouts.app2')

@section('content')
             <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>       
                    <li>
                        <a  href="/userprofile"><i class="fa fa-home fa-3x"></i> My Profile</a>
                    </li>
                    
                    <li>
                        <a  href="/jobprofile"><i class="fa fa-edit fa-3x"></i> Job Profile</a>
                    </li>
                    
                    <li>
                        <a  href="/getloan"><i class="fa fa-bank fa-3x"></i>Get loan</a>
                    </li>

                    <li>
                        <a  href="/loanhistory"><i class="fa fa-recycle fa-3x"></i>Loan History</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">

                    <div class="col-md-12">

    @if(Session::get('success'))                
    <div class ="alert alert-success">
     <h4>{{Session::get('success')}} </h4>
    </div>
    @endif
                     <h2>Business Profile</h2>   </div></div>
                       
 <form class="" action="updatetraderprofile"  method="POST" enctype="multipart/form-data">
         @csrf
<div class="row">
  <div class="col-md-12">
    <div class="w3-card w3-yellow ">
  

 </div> 

 </div>

</div>




    <br>
  
   <div class="card w3-card w3-blue">
     


    <h2><b>More Details</b></h2>
    <h6 class="w3-margin">Kindly ensure you fill all field, they are part of the requirement to access any facility.</h6><b class="w3-red">Ensure all fields are up to date and correctly. We would review your information before giving you any facility.Fill before applying for any loan here.</b>
    
    <div class="row">
     

         
      <div class="col-sm-6 col-md-6 col-md-6">
        @foreach($profile as $pro)
        <div class="form-group{{ $errors->has('natureofbusiness') ? ' has-error' : '' }} w3-margin">
         <b>Nature Of Business</b>
          <input id="natureofbusiness" type="text" style="font-size:13pt;" class="form-control text-center"  name="natureofbusiness" value="{{ $pro['natureofbusiness'] }}"  >


        @if ($errors->has('businessage'))
        <span class="help-block">
         <strong>{{ $errors->first('businessage') }}</strong>
       </span>
       @endif
     </div>
   </div>
  
 

    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('businessage') ? ' has-error' : '' }} w3-margin">
         <b>Business Age</b>
          <input id="businessage" type="text" style="font-size:13pt;" class="form-control text-center"  name="businessage" value="{{ $pro['businessage'] }}"  >


        @if ($errors->has('businessage'))
        <span class="help-block">
         <strong>{{ $errors->first('businessage') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>


 <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('weeklysales') ? ' has-error' : '' }} w3-margin">
      <b>Weekly Sales</b>
       <input id="weeklysales" type="number" style="font-size:13pt;" class="form-control text-center"  name="weeklysales" value="{{ $pro['weeklysales'] }}"  >

      @if ($errors->has('weeklysales'))
      <span class="help-block">
       <strong>{{ $errors->first('weeklysales') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('refreename') ? ' has-error' : '' }} w3-margin">
         <b>Refree Full Name(1)</b>
        <input id="refreenam1e" type="text" style="font-size:13pt;" class="form-control text-center"  name="refreename1" value="{{ $pro['refreename1'] }}"  >

        @if ($errors->has('refreename1'))
        <span class="help-block">
         <strong>{{ $errors->first('refreename1') }}</strong>
       </span>
       @endif
     </div>
   </div>






</div>







 <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('refreerelationship1') ? ' has-error' : '' }} w3-margin">
      <b>Relationship With Refree(1)</b>
       <input id="refreerelationship1" type="text" style="font-size:13pt;" class="form-control text-center"  name="refreerelationship1" value="{{ $pro['refreerelationship1'] }}"  >

      @if ($errors->has('refreerelationship1'))
      <span class="help-block">
       <strong>{{ $errors->first('refreerelationship1') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('refreeaddress1') ? ' has-error' : '' }} w3-margin">
         <b>Refree Address(1)</b>
         <textarea class="form-control text-center" name="refreeaddress1" rows="3" value="{{ $pro['refreeaddress1'] }}" style=" font-size:13pt;" /></textarea> 

       

        @if ($errors->has('refreeaddress1'))
        <span class="help-block">
         <strong>{{ $errors->first('refreeaddress1') }}</strong>
       </span>
       @endif
     </div>
   </div>






</div>




   <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('refreephone1') ? ' has-error' : '' }} w3-margin">
         <b>Refree Phone Number(1)</b>
        <input id="refreephone1" type="text" style="font-size:13pt;" class="form-control text-center"  name="refreephone1" value="{{ $pro['refreephone1'] }}"  >

        @if ($errors->has('refreephone1'))
        <span class="help-block">
         <strong>{{ $errors->first('refreephone1') }}</strong>
       </span>
       @endif
     </div>
   </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('refreename2') ? ' has-error' : '' }} w3-margin">
         <b>Refree Full Name(2)</b>
        <input id="refreename2" type="text" style="font-size:13pt;" class="form-control text-center"  name="refreename2" value="{{ $pro['refreename2'] }}"  >

        @if ($errors->has('refreename2'))
        <span class="help-block">
         <strong>{{ $errors->first('refreename2') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>




   <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('refreerelationship2') ? ' has-error' : '' }} w3-margin">
         <b>Relationship With Refree(2)</b>
        <input id="refreerelationship2" type="text" style="font-size:13pt;" class="form-control text-center"  name="refreerelationship2" value="{{ $pro['refreerelationship2'] }}"  >

        @if ($errors->has('refreerelationship2'))
        <span class="help-block">
         <strong>{{ $errors->first('refreerelationship2') }}</strong>
       </span>
       @endif
     </div>
   </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('refreeaddress2') ? ' has-error' : '' }} w3-margin">
         <b>Refree Address(2)</b>
          <textarea class="form-control text-center" name="refreeaddress2" rows="3" value="{{ $pro['refreeaddress2'] }}" style=" font-size:13pt;" /></textarea> 


        @if ($errors->has('refreeaddress2'))
        <span class="help-block">
         <strong>{{ $errors->first('refreeaddress2') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>



   <div class="row">
   
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('refreephone2') ? ' has-error' : '' }} w3-margin">
         <b>Refree Phone Number(2)</b>

     <input id="refreephone2" type="text" style="font-size:13pt;" class="form-control text-center"  name="refreephone2" value="{{ $pro['refreephone2'] }}"  >
        @if ($errors->has('refreephone2'))
        <span class="help-block">
         <strong>{{ $errors->first('refreephone2') }}</strong>
       </span>
       @endif
     </div>
   </div>

       <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('bankaccountname') ? ' has-error' : '' }} w3-margin">
         <b>Bank Name</b>

     <input id="bankaccountname" type="text" style="font-size:13pt;" class="form-control text-center"  name="bankaccountname" value="{{ $pro['bankaccountname'] }}"  >
        @if ($errors->has('bankaccountname'))
        <span class="help-block">
         <strong>{{ $errors->first('bankaccountname') }}</strong>
       </span>
       @endif
     </div>
   </div>


</div>






   <div class="row">
   
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('bankaccountnumber') ? ' has-error' : '' }} w3-margin">
         <b>Account Number</b>

     <input id="bankaccountnumber" type="text" style="font-size:13pt;" class="form-control text-center"  name="bankaccountnumber" value="{{ $pro['bankaccountnumber'] }}"  >
        @if ($errors->has('bankaccountnumber'))
        <span class="help-block">
         <strong>{{ $errors->first('bankaccountnumber') }}</strong>
       </span>
       @endif
     </div>
   </div>

       <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('bvn') ? ' has-error' : '' }} w3-margin">
         <b>BVN</b>

     <input id="bvn" type="text" style="font-size:13pt;" class="form-control text-center"  name="bvn" value="{{ $pro['bvn'] }}"  >
        @if ($errors->has('bvn'))
        <span class="help-block">
         <strong>{{ $errors->first('bvn') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>



   <div class="row">
   
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('bankstatement') ? ' has-error' : '' }} w3-margin">
         <b>Bank Statement</b>

     <input type="file" id="bankstatement" class="form-control text-center" name="bankstatement"  required/>
        @if ($errors->has('bankstatement'))
        <span class="help-block">
         <strong>{{ $errors->first('bankstatement') }}</strong>
       </span>
       @endif
     </div>
   </div>

       <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('passport') ? ' has-error' : '' }} w3-margin">
         <b>Passport</b>

     <input type="file" id="passport"  class="form-control text-center"  name="passport" required />
        @if ($errors->has('passport'))
        <span class="help-block">
         <strong>{{ $errors->first('passport') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>


  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('otherid') ? ' has-error' : '' }} w3-margin">
         <b>Other Identity</b>

     <input type="file" id="otherid" class="form-control text-center"  name="otherid"  required />
        @if ($errors->has('otherid'))
        <span class="help-block">
         <strong>{{ $errors->first('otherid') }}</strong>
       </span>
       @endif
     </div>
   </div>

  @endforeach
</div>

<div class="row">

 <div class="col-sm-12 col-md-12 col-md-12 text-center">
  <br><br>
  <button type="submit" class="btn btn-lg btn-success text-center">
    Update
  </button>
  <br><br><br><br>

</div>




</div>


</form>


                    </div>
                </div>
@endsection
