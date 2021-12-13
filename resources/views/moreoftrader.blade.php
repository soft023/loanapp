<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/w3.css">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/adminhome">Perk Prime</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  
  <a href="" class=" btn w3-btn w3-pink w3-hover-yellow" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><b>Log Out</b></a>
  <form id="logout-form" action="{{ route('logout2') }}" method="POST" style="display: none;">
 {{ csrf_field() }}
   </form>
 </div>
        </nav>  


          <main class="py-4">

   <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a  href="/allcustomers"> <i class="fa fa-home fa-3x"></i> All Customers</a>
                    </li>
                    
                    <li>
                        <a  href="/newloanrequest"><i class="fa fa-edit fa-3x"></i> New Applications</a>
                    </li>
                    
                    <li>
                        <a  href="/allactiveloans"><i class="fa fa-bank fa-3x"></i>Active Loans</a>
                    </li>
                    
                    <li>
                        <a  href="/allinactiveloans"><i class="fa fa-road fa-3x"></i>Inactive Loans</a>
                    </li>

                    <li>
                        <a  href="/alldeclinedloans"><i class="fa fa-recycle fa-3x"></i>Declined Request</a>
                    </li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>More Information</h2>   
                     
                       
<div class="row">
  <div class="col-md-12">
    <div class="w3-card w3-yellow ">
    @foreach($userprofile as $pro)
<h2><b>Personal Informations</h2></b>
 <h3 class="w3-margin"><b>Firstname :  </b> {{$pro['firstname']}}</h3>
 <h3 class="w3-margin"><b>Lastname :  </b> {{$pro['lastname']}}</h3>
 <h3 class="w3-margin"><b>Surname :  </b> {{$pro['surname']}}</h3>
 <h3 class="w3-margin"><b>Title :  </b> {{$pro['title']}}</h3>
 <h3 class="w3-margin"><b>Date Of Birth :  </b> {{$pro['dob']}}</h3>
 <h3 class="w3-margin"><b>Marital Status :  </b> {{$pro['maritalstatus']}}</h3>
 <h3 class="w3-margin"><b>Number Of Dependant :  </b> {{$pro['noofdependant']}}</h3>
 <h3 class="w3-margin"><b>Phone Number :  </b> {{$pro['phone']}}</h3>
 <h3 class="w3-margin"><b>Address :  </b> {{$pro['address']}}</h3><br>
 <h3 class="w3-margin"><b>How did you hear about us :  </b> {{$pro['howdidyouhearaboutus']}}</h3><br>
 <b><h2>Next Of Kin Information</h2></b>
 <h3 class="w3-margin"><b>Name :  </b> {{$pro['nokfullname']}}</h3>
 <h3 class="w3-margin"><b>Phone Number :  </b> {{$pro['nokphone']}}</h3>
 <h3 class="w3-margin"><b>Relationship :  </b> {{$pro['relationshipwithnok']}}</h3>

  @endforeach 

 </div> 

 </div>

</div>


<div class="row">
  <div class="col-md-12">
    <div class="w3-card w3-yellow ">
    @foreach($userprofile as $pro)
<h2><b>Job Informations</h2></b>
 <h3 class="w3-margin"><b>Firstname :  </b> {{$pro['firstname']}}</h3>
 <h3 class="w3-margin"><b>Lastname :  </b> {{$pro['lastname']}}</h3>
 <h3 class="w3-margin"><b>Surname :  </b> {{$pro['surname']}}</h3>
 <h3 class="w3-margin"><b>Title :  </b> {{$pro['title']}}</h3>
 <h3 class="w3-margin"><b>Date Of Birth :  </b> {{$pro['dob']}}</h3>
 <h3 class="w3-margin"><b>Marital Status :  </b> {{$pro['maritalstatus']}}</h3>
 <h3 class="w3-margin"><b>Number Of Dependant :  </b> {{$pro['noofdependant']}}</h3>
 <h3 class="w3-margin"><b>Phone Number :  </b> {{$pro['phone']}}</h3>
 <h3 class="w3-margin"><b>Address :  </b> {{$pro['address']}}</h3><br>
 <h3 class="w3-margin"><b>How did you hear about us :  </b> {{$pro['howdidyouhearaboutus']}}</h3><br>
 <b><h2>Next Of Kin Information</h2></b>
 <h3 class="w3-margin"><b>Name :  </b> {{$pro['nokfullname']}}</h3>
 <h3 class="w3-margin"><b>Phone Number :  </b> {{$pro['nokphone']}}</h3>
 <h3 class="w3-margin"><b>Relationship :  </b> {{$pro['relationshipwithnok']}}</h3>

  @endforeach 

 </div> 

 </div>

</div>

<div class="row">
<div class="col-md-12">
<div class="w3-card w3-yellow ">
@foreach($jobprofile as $pro)
<h2><b>Job Informations</h2></b>

<img src= "../trader/passport/{{$pro['passport']}}" class="user-image img-responsive"/>
 <h3 class="w3-margin"><b>Business Age :  </b> {{$pro['businessage']}}</h3>
 <h3 class="w3-margin"><b>Weekly Sales :  </b> {{$pro['weeklysales']}}</h3>
 <h3 class="w3-margin"><b>Bank Account Name :  </b> {{$pro['bankaccountname']}}</h3>
 <h3 class="w3-margin"><b>Account Number :  </b> {{$pro['bankaccountnumber']}}</h3>
 <h3 class="w3-margin"><b>BVN :  </b> {{$pro['bvn']}}</h3>
   

 </div> 

 </div>

</div>



<div class="row">
<div class="col-md-12">
<div class="w3-card w3-yellow ">
<h2><b>Refree Informations</h2></b>
 <h3 class="w3-margin"><b>Referee Name :  </b> {{$pro['refreename1']}}</h3>
 <h3 class="w3-margin"><b>Relationship With Refree :  </b> {{$pro['refreerelationship1']}}</h3>
 <h3 class="w3-margin"><b>Referee Address :  </b> {{$pro['refreeaddress1']}}</h3>
 <h3 class="w3-margin"><b>Referee Phone Number:  </b> {{$pro['refreephone1']}}</h3>
 <h3 class="w3-margin"><b>Referee Name(2) :  </b> {{$pro['refreename2']}}</h3>
 <h3 class="w3-margin"><b>Relationship With Refree(2) :  </b> {{$pro['refreerelationship2']}}</h3>
 <h3 class="w3-margin"><b>Referee Address(2) :  </b> {{$pro['refreeaddress2']}}</h3>
 <h3 class="w3-margin"><b>Referee Phone Number :  </b> {{$pro['refreephone2']}}</h3>
 

 </div> 

 </div>

</div>

<div class="row">
<div class="col-md-12">
<div class="w3-card w3-yellow ">
<h2><b>Other Information</h2></b>




  @if (!empty($pro['passport']))
  <h3 class="w3-margin"><b>Passport:  </b><a  class=" w3-red" href="../trader/passport/{{$pro['passport']}}">
 Click To Get Passport</a></h3>
  @endif 



 @if (!empty($pro['bankstatement']))
  <h3 class="w3-margin"><b>Bank Statement:  </b><a  class=" w3-red" href="../trader/bankstatement/{{$pro['bankstatement']}}">
 Click To Statement</a></h3>
  @endif 


 @if (!empty($pro['otherid']))
 <h3 class="w3-margin"><b>Other ID :  </b><a  class=" w3-red" href="../trader/otherid/{{$pro['otherid']}}"> Click To get Other  ID</a></h3>
  @endif 


  @endforeach 

 </div> 

 </div>

</div>



 </div> 

 </div>

</div>


 </main> 
           <!-- /. NAV TOP  -->
   
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div><div class="text-center"> <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Soft design<i class="fa fa-heart-o" aria-hidden="true"> </i> by <a href="#" target="_blank">Inspired Solutions</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>

