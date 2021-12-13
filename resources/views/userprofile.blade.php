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
                     <h2>My Profile</h2>   </div></div>
                       
 <form class="" method="POST" action="updateuserprofile" >
         @csrf
<div class="row">
  <div class="col-md-12">
    <div class="w3-card w3-yellow ">
    @foreach($userprofile as $pro)
<h2><b>Personal Informations</h2></b>
 <h3 class="w3-margin"><b>Firstname :  </b> {{$pro['firstname']}}</h3>
 <h3 class="w3-margin"><b>Lastname :  </b> {{$pro['lastname']}}</h3>
 <h3 class="w3-margin"><b>Surname :  </b> {{$pro['surname']}}</h3>
 <h3 class="w3-margin"><b>Email Address :  </b> {{$pro['email']}}</h3>
 <h3 class="w3-margin"><b>Nature Of Job :  </b> {{$pro['jobclassification']}}</h3>
 <h3 class="w3-margin"><b>Created At :  </b> {{$pro['created_at']}}</h3><br>

  @endforeach 

 </div> 

 </div>

</div>




    <br>
  
   <div class="card w3-card w3-blue">
     


    <h2><b>More Details</b></h2>
    <h6 class="w3-margin">Kindly ensure you fill all field, they are part of the requirement to access any facility.</h6>
    
    <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} w3-margin">
      <b>Title</b>
      <select class="form-control text-center" style="font-size:13pt;" name="title" id="title" >
        <option value="{{$pro['title']}}" selected>{{$pro['title']}}</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Miss">Miss</option>
      </select>

      @if ($errors->has('title'))
      <span class="help-block">
       <strong>{{ $errors->first('title') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('maritalstatus') ? ' has-error' : '' }} w3-margin">
         <b>Marital Status</b>
         <select class="form-control text-center" style="font-size:13pt;" name="maritalstatus" id="raritalstatus" >
          <option value="{{$pro['maritalstatus']}}" selected>{{$pro['maritalstatus']}}</option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Divorced">Divorced</option>
          <option value="Widow">Widow</option>
        </select>

        @if ($errors->has('maritalstatus'))
        <span class="help-block">
         <strong>{{ $errors->first('maritalstatus') }}</strong>
       </span>
       @endif
     </div>
   </div>






</div>


 <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('noofdependant') ? ' has-error' : '' }} w3-margin">
      <b>Number Of Dependant</b>
       <input id="noofdependant" type="number" style="font-size:13pt;" class="form-control text-center"  name="noofdependant" value="{{ $pro['noofdependant'] }}"  >

      @if ($errors->has('noofdependant'))
      <span class="help-block">
       <strong>{{ $errors->first('noofdependant') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} w3-margin">
         <b>Telephone</b>
        <input id="phone" type="text" style="font-size:13pt;" class="form-control text-center"  name="phone" value="{{ $pro['phone'] }}"  >

        @if ($errors->has('phone'))
        <span class="help-block">
         <strong>{{ $errors->first('phone') }}</strong>
       </span>
       @endif
     </div>
   </div>






</div>







 <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} w3-margin">
      <b>House Address</b>
       <input id="address" type="text" style="font-size:13pt;" class="form-control text-center"  name="address" value="{{ $pro['address'] }}"  >

      @if ($errors->has('address'))
      <span class="help-block">
       <strong>{{ $errors->first('address') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }} w3-margin">
         <b>Date Of Birth</b>
        <input id="dob" type="text" style="font-size:13pt;" class="form-control text-center"  name="dob" value="{{ $pro['dob'] }}"  >

        @if ($errors->has('dob'))
        <span class="help-block">
         <strong>{{ $errors->first('dob') }}</strong>
       </span>
       @endif
     </div>
   </div>






</div>




   <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
   
   </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('howdidyouhearaboutus') ? ' has-error' : '' }} w3-margin">
         <b>How do you hear About Us, via?</b>
         <select class="form-control text-center" style="font-size:13pt;" name="howdidyouhearaboutus" id="howdidyouhearaboutus" >
          <option value="{{$pro['howdidyouhearaboutus']}}" selected>{{$pro['howdidyouhearaboutus']}}</option>
          <option value="Google">Google</option>
          <option value="Friend">Friend</option>
          <option value="News">News</option>
          <option value="Others">Others</option>
        </select>

        @if ($errors->has('howdidyouhearaboutus'))
        <span class="help-block">
         <strong>{{ $errors->first('howdidyouhearaboutus') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>




   <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('relationshipwithnok') ? ' has-error' : '' }} w3-margin">
         <b>Relationship With Next Of Kin</b>
        <input id="relationshipwithnok" type="text" style="font-size:13pt;" class="form-control text-center"  name="relationshipwithnok" value="{{ $pro['relationshipwithnok'] }}"  >

        @if ($errors->has('relationshipwithnok'))
        <span class="help-block">
         <strong>{{ $errors->first('relationshipwithnok') }}</strong>
       </span>
       @endif
     </div>
   </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('nokphone') ? ' has-error' : '' }} w3-margin">
         <b>Next Of Kin Telephone</b>
          <input id="nokphone" type="text" style="font-size:13pt;" class="form-control text-center"  name="nokphone" value="{{ $pro['nokphone'] }}"  >

        @if ($errors->has('nokphone'))
        <span class="help-block">
         <strong>{{ $errors->first('nokphone') }}</strong>
       </span>
       @endif
     </div>
   </div>
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
                       
                   
                </div>
            

@endsection
