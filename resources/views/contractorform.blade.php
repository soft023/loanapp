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
                     <h2>Contractor</h2>   
                       
                       
    @if(Session::get('success'))                
    <div class ="alert alert-success">
     <h4>{{Session::get('success')}} </h4>
    </div>
    @endif
                     <h2>My Profile</h2>   </div></div>
                       
 <form class="" action="updatecontractorprofile" method="POST" enctype="multipart/form-data">
         @csrf
<div class="row">

</div>




    <br>
  
   <div class="card w3-card w3-blue">
     


    <h2><b>More Details</b></h2>
    <h6 class="w3-margin">Kindly ensure you fill all field, they are part of the requirement to access any facility.</h6>
     <b class="w3-red">Ensure all fields are up to date and correctly. We would review your information before giving you any facility.Fill before applying for any loan here.</b>
    
    <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     @foreach($profile as $pro)
      <div class="form-group{{ $errors->has('projecttype') ? ' has-error' : '' }} w3-margin">
         <b>Project Type</b>
          <input id="projecttype" type="text" style="font-size:13pt;" class="form-control text-center"  name="projecttype" value="{{ $pro['projecttype'] }}"  >


        @if ($errors->has('projecttype'))
        <span class="help-block">
         <strong>{{ $errors->first('projecttype') }}</strong>
       </span>
       @endif
     </div>
   
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
           <div class="form-group{{ $errors->has('projectcurrentstage') ? ' has-error' : '' }} w3-margin">
         <b>Project Stage</b>
        <input id="projectcurrentstage" type="text" style="font-size:13pt;" class="form-control text-center"  name="projectcurrentstage" value="{{ $pro['projectcurrentstage'] }}"  >

        @if ($errors->has('projectcurrentstage'))
        <span class="help-block">
         <strong>{{ $errors->first('projectcurrentstage') }}</strong>
       </span>
       @endif
     </div>
   </div>






</div>


 <div class="row">
     
    <div class="col-sm-12 col-md-12 col-md-12">
     <div class="form-group{{ $errors->has('projectdescription') ? ' has-error' : '' }} w3-margin">
      <b>Project Description</b>

        <textarea class="form-control text-center" name="projectdescription" rows="2" value="{{ $pro['projectdescription'] }}"  style=" font-size:13pt;" /></textarea> 


      @if ($errors->has('projectdescription'))
      <span class="help-block">
       <strong>{{ $errors->first('projectdescription') }}</strong>
     </span>
     @endif
   </div>
 </div>
  </div>







 <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('projectlocation') ? ' has-error' : '' }} w3-margin">
      <b>Project Location</b>
       <input id="projectlocation" type="text" style="font-size:13pt;" class="form-control text-center"  name="projectlocation" value="{{ $pro['projectlocation'] }}"  >

      @if ($errors->has('projectlocation'))
      <span class="help-block">
       <strong>{{ $errors->first('projectlocation') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('costofproject') ? ' has-error' : '' }} w3-margin">
         <b>Cost Of Project</b>
        <input type="text" id="costofproject" style="font-size:13pt;" class="form-control text-center"  name="costofproject" value="{{ $pro['costofproject'] }}"  >

        @if ($errors->has('costofproject'))
        <span class="help-block">
         <strong>{{ $errors->first('costofproject') }}</strong>
       </span>
       @endif
     </div>
   </div>






</div>




   <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('moneyspent') ? ' has-error' : '' }} w3-margin">
         <b>Money Spent</b>
        <input id="moneyspent" type="text" style="font-size:13pt;" class="form-control text-center"  name="moneyspent" value="{{ $pro['moneyspent'] }}"  >

        @if ($errors->has('moneyspent'))
        <span class="help-block">
         <strong>{{ $errors->first('moneyspent') }}</strong>
       </span>
       @endif
     </div>
   </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('moneytospend') ? ' has-error' : '' }} w3-margin">
         <b>Money To Spend</b>
        <input id="moneytospend" type="text" style="font-size:13pt;" class="form-control text-center"  name="moneytospend" value="{{ $pro['moneytospend'] }}"  >

        @if ($errors->has('moneytospend'))
        <span class="help-block">
         <strong>{{ $errors->first('moneytospend') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>




   <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('companyname') ? ' has-error' : '' }} w3-margin">
         <b>Company Name</b>
        <input id="companyname" type="text" style="font-size:13pt;" class="form-control text-center"  name="companyname" value="{{ $pro['companyname'] }}"  >

        @if ($errors->has('companyname'))
        <span class="help-block">
         <strong>{{ $errors->first('companyname') }}</strong>
       </span>
       @endif
     </div>
   </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }} w3-margin">
         <b>Section</b>
          <input id="section" type="text" style="font-size:13pt;" class="form-control text-center"  name="section" value="{{ $pro['section'] }}"  >

        @if ($errors->has('section'))
        <span class="help-block">
         <strong>{{ $errors->first('section') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>



   <div class="row">
   
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('companyaddress') ? ' has-error' : '' }} w3-margin">
         <b>Company Address</b>

     <textarea class="form-control text-center" name="companyaddress" rows="3" value="{{ $pro['companyaddress'] }}" style=" font-size:13pt;" /></textarea> 

        @if ($errors->has('companyaddress'))
        <span class="help-block">
         <strong>{{ $errors->first('companyaddress') }}</strong>
       </span>
       @endif
     </div>
   </div>

       <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('companyphone') ? ' has-error' : '' }} w3-margin">
         <b>Company Phone Number</b>

     <input id="companyphone" type="text" style="font-size:13pt;" class="form-control text-center"  name="companyphone" value="{{ $pro['companyphone'] }}"  >
        @if ($errors->has('companyphone'))
        <span class="help-block">
         <strong>{{ $errors->first('companyphone') }}</strong>
       </span>
       @endif
     </div>
   </div>


</div>






   <div class="row">
   
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('contractawardletter') ? ' has-error' : '' }} w3-margin">
         <b>Contract Award Letter</b>

     <input type="file" id="contractawardletter" class="form-control text-center"  name="contractawardletter" required />
        @if ($errors->has('contractawardletter'))
        <span class="help-block">
         <strong>{{ $errors->first('contractawardletter') }}</strong>
       </span>
       @endif
     </div>
   </div>

       <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directorname1') ? ' has-error' : '' }} w3-margin">
         <b>Director Name (1)</b>

     <input id="directorname1" type="text" style="font-size:13pt;" class="form-control text-center"  name="directorname1" value="{{ $pro['directorname1'] }}"  >
        @if ($errors->has('directorname1'))
        <span class="help-block">
         <strong>{{ $errors->first('directorname1') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>



   <div class="row">
   
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directoraddress1') ? ' has-error' : '' }} w3-margin">
         <b>Director Address</b>

      <textarea class="form-control text-center" name="directoraddress1" rows="3" value="{{ $pro['directoraddress1'] }}" style=" font-size:13pt;" /></textarea>


        @if ($errors->has('directoraddress1'))
        <span class="help-block">
         <strong>{{ $errors->first('directoraddress1') }}</strong>
       </span>
       @endif
     </div>
   </div>

       <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directorphone1') ? ' has-error' : '' }} w3-margin">
         <b>Director Phone Number</b>

     <input id="directorphone" type="text" style="font-size:13pt;" class="form-control text-center"  name="directorphone1" value="{{ $pro['directorphone1'] }}"  >
        @if ($errors->has('directorphone1'))
        <span class="help-block">
         <strong>{{ $errors->first('directorphone1') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>


  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directorbvn1') ? ' has-error' : '' }} w3-margin">
         <b>Director BVN</b>

     <input id="directorbvn1" type="text" style="font-size:13pt;" class="form-control text-center"  name="directorbvn1" value="{{ $pro['directorbvn1'] }}"  >
        @if ($errors->has('directorbvn1'))
        <span class="help-block">
         <strong>{{ $errors->first('directorbvn1') }}</strong>
       </span>
       @endif
     </div>
   </div>

  
      <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directoridcard1') ? ' has-error' : '' }} w3-margin">
         <b>Director ID card</b>

     <input type="file" id="directoridcard1"  class="form-control text-center"  name="directoridcard1" required />
        @if ($errors->has('directoridcard1'))
        <span class="help-block">
         <strong>{{ $errors->first('directoridcard1') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>



 <div class="row">
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directorname2') ? ' has-error' : '' }} w3-margin">
         <b>Director Name(2)</b>

     <input id="directorname2" type="text" style="font-size:13pt;" class="form-control text-center"  name="directorname2" value="{{ $pro['directorname2'] }}"  >
        @if ($errors->has('directorname2'))
        <span class="help-block">
         <strong>{{ $errors->first('directorname2') }}</strong>
       </span>
       @endif
     </div>
   </div>

  
      <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directoraddress2') ? ' has-error' : '' }} w3-margin">
         <b>Director Address(2)</b>

        <textarea class="form-control text-center" name="directoraddress2" rows="3" value="{{ $pro['directoraddress2'] }}" style=" font-size:13pt;" /></textarea>


        @if ($errors->has('directoraddress2'))
        <span class="help-block">
         <strong>{{ $errors->first('directoraddress2') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>




 <div class="row">
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directorphone2') ? ' has-error' : '' }} w3-margin">
         <b>Director Phone number(2)</b>

     <input id="directorphone2" type="text" style="font-size:13pt;" class="form-control text-center"  name="directorphone2" value="{{ $pro['directorphone2'] }}"  >
        @if ($errors->has('directorphone2'))
        <span class="help-block">
         <strong>{{ $errors->first('directorphone2') }}</strong>
       </span>
       @endif
     </div>
   </div>

  
      <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directorbvn2') ? ' has-error' : '' }} w3-margin">
         <b>Director BVN(2)</b>

     <input id="directorbvn2" type="text" style="font-size:13pt;" class="form-control text-center"  name="directorbvn2" value="{{ $pro['directorbvn2'] }}"  >
        @if ($errors->has('directorbvn2'))
        <span class="help-block">
         <strong>{{ $errors->first('directorbvn2') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>




 <div class="row">
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('directoridcard2') ? ' has-error' : '' }} w3-margin">
         <b>Director ID card(2)</b>

     <input type="file" id="directoridcard2" class="form-control text-center"  name="directoridcard2" required />
        @if ($errors->has('directoridcard2'))
        <span class="help-block">
         <strong>{{ $errors->first('directoridcard2') }}</strong>
       </span>
       @endif
     </div>
   </div>

  
  
</div>


@endforeach

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
