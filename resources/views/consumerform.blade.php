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
                     <h2>My Job Profile</h2>   </div></div>
                       
 <form class="form-control" action="updateconsumerprofile" method="POST" enctype="multipart/form-data">
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
    <h6 class="w3-margin">Kindly ensure you fill all field, they are part of the requirement to access any facility.</h6>   <b class="w3-red">Ensure all fields are up to date and correctly. We would review your information before giving you any facility.Fill before applying for any loan here.</b>
    
    <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     
   
    
 @foreach($profile as $pro)
          <div class="form-group{{ $errors->has('employmentstatus') ? ' has-error' : '' }} w3-margin">
         <b>Employment Status</b>
          <input id="employmentstatus" type="text" style="font-size:13pt;" class="form-control text-center"  name="employmentstatus" value="{{ $pro['employmentstatus'] }}"  >


        @if ($errors->has('employmentstatus'))
        <span class="help-block">
         <strong>{{ $errors->first('employmentstatus') }}</strong>
       </span>
       @endif
     </div>
   </div>
   <div class="col-sm-6 col-md-6 col-md-6">
       <div class="form-group{{ $errors->has('currentworkplace') ? ' has-error' : '' }} w3-margin">
      <b>Current Work Place</b>
       <input id="currentworkplace" type="text" style="font-size:13pt;" class="form-control text-center"  name="currentworkplace" value="{{ $pro['currentworkplace'] }}"  >

      @if ($errors->has('currentworkplace'))
      <span class="help-block">
       <strong>{{ $errors->first('currentworkplace') }}</strong>
     </span>
     @endif
   </div>
   </div>

   






</div>


 <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('workplaceaddress') ? ' has-error' : '' }} w3-margin">
      <b>Work Place Address</b>
       <textarea class="form-control text-center" name="workplaceaddress" rows="3" value="{{ $pro['workplaceaddress'] }}"  value="{{ $pro['workplaceaddress'] }}" style=" font-size:13pt;" /></textarea> 
      @if ($errors->has('currentworkplace'))
      <span class="help-block">
       <strong>{{ $errors->first('workplaceaddress') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('closestlandmark') ? ' has-error' : '' }} w3-margin">
         <b>Closest Landmark</b>
        <input id="closestlandmark" type="text" style="font-size:13pt;" class="form-control text-center"  name="closestlandmark" value="{{ $pro['closestlandmark'] }}"  >

        @if ($errors->has('closestlandmark'))
        <span class="help-block">
         <strong>{{ $errors->first('closestlandmark') }}</strong>
       </span>
       @endif
     </div>
   </div>






</div>







 <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }} w3-margin">
      <b>Department</b>
       <input id="department" type="text" style="font-size:13pt;" class="form-control text-center"  name="department" value="{{ $pro['department'] }}"  >

      @if ($errors->has('department'))
      <span class="help-block">
       <strong>{{ $errors->first('department') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('netmonthlysalary') ? ' has-error' : '' }} w3-margin">
         <b>Net Monthly Salary</b>
        <input id="netmonthlysalary" type="text" style="font-size:13pt;" class="form-control text-center"  name="netmonthlysalary" value="{{ $pro['netmonthlysalary'] }}"  >

        @if ($errors->has('netmonthlysalary'))
        <span class="help-block">
         <strong>{{ $errors->first('netmonthlysalary') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>




   <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('officeemail') ? ' has-error' : '' }} w3-margin">
         <b>Office Email</b>
        <input id="officeemail" type="email" style="font-size:13pt;" class="form-control text-center"  name="officeemail" value="{{ $pro['officeemail'] }}"  >

        @if ($errors->has('officeemail'))
        <span class="help-block">
         <strong>{{ $errors->first('officeemail') }}</strong>
       </span>
       @endif
     </div>
   </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('payday') ? ' has-error' : '' }} w3-margin">
         <b>Official Day</b>
        <input id="payday" type="text" style="font-size:13pt;" class="form-control text-center"  name="payday" value="{{ $pro['payday'] }}"  >

        @if ($errors->has('payday'))
        <span class="help-block">
         <strong>{{ $errors->first('payday') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>




   <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('staffidcard') ? ' has-error' : '' }} w3-margin">
         <b>Staff ID card</b>
        <input type="file" id="staffidcard" class="form-control" name="staffidcard" />

        @if ($errors->has('staffidcard'))
        <span class="help-block">
         <strong>{{ $errors->first('staffidcard') }}</strong>
       </span>
       @endif
     </div>
   </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('otherid') ? ' has-error' : '' }} w3-margin">
         <b>Other ID card</b>
          <input type="file" id="otherid" class="form-control " name="otherid" required/>

        @if ($errors->has('otherid'))
        <span class="help-block">
         <strong>{{ $errors->first('otherid') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>



   <div class="row">
   
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('passport') ? ' has-error' : '' }} w3-margin">
         <b>Passport</b>

     <input type="file" id="passport"  class="form-control"  name="passport" required />
        @if ($errors->has('passport'))
        <span class="help-block">
         <strong>{{ $errors->first('passport') }}</strong>
       </span>
       @endif
     </div>
   </div>

       <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('pensionstatement') ? ' has-error' : '' }} w3-margin">
         <b>Pension Statement</b>

     <input id="pensionstatement" type="file" style="font-size:13pt;" class="form-control text-center"  name="pensionstatement"  required>
        @if ($errors->has('pensionstatement'))
        <span class="help-block">
         <strong>{{ $errors->first('pensionstatement') }}</strong>
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
