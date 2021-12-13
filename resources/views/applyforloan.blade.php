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

          <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Get a Loan Now</h2>     
                       
                                          
                       
    @if(Session::get('success'))                
    <div class ="alert alert-success">
     <h4>{{Session::get('success')}} </h4>
    </div>
    @endif
                     </div></div>
                       
 <form class="" method="POST" action="requestloan" >
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
    <h6 class="w3-margin">Kindly ensure you fill all field, they are part of the requirement to access any facility.</h6>
    
    <div class="row">
     
    <div class="col-sm-12 col-md-12 col-md-12">
     <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} w3-margin">
    <textarea class="form-control text-center" name="loanpurpose" rows="3" placeholder="Enter Loan Purpose" style=" font-size:13pt;" required/></textarea> 
    

      @if ($errors->has('title'))
      <span class="help-block">
       <strong>{{ $errors->first('title') }}</strong>
     </span>
     @endif
   </div>
 </div>







</div>


 <div class="row">
     
    <div class="col-sm-6 col-md-6 col-md-6">
     <div class="form-group{{ $errors->has('tenor') ? ' has-error' : '' }} w3-margin">
      <b>Loan Tenure</b>
         <select class="form-control text-center" style="font-size:13pt;" name="tenor" id="title" required >
        <option value="" selected>Select in Months</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>  
        <option value="11">11</option>  
        <option value="12">12</option>  
      </select>

      @if ($errors->has('tenor'))
      <span class="help-block">
       <strong>{{ $errors->first('tenor') }}</strong>
     </span>
     @endif
   </div>
 </div>
    <div class="col-sm-6 col-md-6 col-md-6">
        <div class="form-group{{ $errors->has('amountrequested') ? ' has-error' : '' }} w3-margin">
         <b>Amount Intented</b>
        <input id="amountrequested" type="text" style="font-size:13pt;" class="form-control text-center"  name="amountrequested" placeholder="Enter Intented Amount" required>

        @if ($errors->has('amountrequested'))
        <span class="help-block">
         <strong>{{ $errors->first('amountrequested') }}</strong>
       </span>
       @endif
     </div>
   </div>
</div>






<div class="row">

 <div class="col-sm-12 col-md-12 col-md-12 text-center">
  <br><br>
  <button type="submit" class="btn btn-lg btn-success text-center">
    Submit
  </button>
  <br><br><br><br>

</div>




</div>


</form>
                    </div>
                </div>
@endsection

