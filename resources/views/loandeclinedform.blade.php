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
    <link rel="stylesheet" href="../../css/w3.css">
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
         <main class="py-4">
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Grant Loan</h2>   
                      @if(Session::get('success'))                
    <div class ="alert alert-success">
     <h4>{{Session::get('success')}} </h4>
    </div>
    @endif
                     </div></div>
                       
 <form class="form" method="POST" action="/loandeclinex" >
         @csrf
<input type="text" style="font-size:13pt; display:none;" class="form-control text-center" name="userid" value=" {{$user_id}}" required >

<div class="row">
  <div class="col-md-12">
    <div class="w3-card w3-yellow ">
  

 </div> 

 </div>

</div>




    <br>
  
   <div class="card w3-card w3-pink">
     


    <h2 class="text-center w3-white"><b>Loan Decline Form </b></h2>
    
    
    <div class="row">
      <div class="col-sm-12 col-md-3"></div>
    <div class="col-sm-12 col-md-6">



     <div class="form-group{{ $errors->has('reasonforno') ? ' has-error' : '' }} w3-margin">
        <b class="">Reason For Declining</b>:<br>
    <textarea class="form-control text-center" name="reasonforno" rows="3" placeholder="...write the reason why the facility is not worth giving...." style=" font-size:13pt;" required/></textarea> 
    

      @if ($errors->has('reasonforno'))
      <span class="help-block">
       <strong>{{ $errors->first('reasonforno') }}</strong>
     </span>
     @endif
   </div>
 </div>
 <div class="col-sm-12 col-md-3 "></div>






</div>









<div class="row">

 <div class="col-sm-12 col-md-12 col-md-12 text-center">
  <br><br>
  <button type="submit" class="btn btn-lg btn-info text-center">
    Submit
  </button>
  <br><br><br><br>

</div>







</form>
         </main> 
           <!-- /. NAV TOP  -->
   
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div><div class="text-center"> <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Soft design<i class="fa fa-heart-o" aria-hidden="true"> </i> by <a href="#" target="_blank">Inspired Solution</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="..assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
