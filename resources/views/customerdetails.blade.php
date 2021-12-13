@extends('layouts.dash')
@section('content')
   <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
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
                        <a  href="alldeclinedloans"><i class="fa fa-recycle fa-3x"></i>Declined Request</a>
                    </li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Customer Details</h2>   
                       
                       
                    </div>
                </div>
@endsection

