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
                       <h3  class="w3-text-green text-center">{{Session::get('success')}} </h3>
                     <h2>All Customer</h2>   
                     
                       <div class="row">
            <div class="col-md-12">
                <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Surname</th>
            <th>Email Address</th>
            <th>Job Class</th>
            <th>I hear from</th>
            <th>More Info</th>
            <th class="hidden">More Info</th>
            <th>Delete</th>
          </tr>
        </thead>
   
        <tbody>
          
              <?php   
          $i = 1;
          ?>
           @foreach( $customers as $ad) 
          
          <tr class="info">
           

         
           <form class="form" method="POST" action="{{ route('deletecustomer') }}"> 
              @csrf
              <input type="hidden" name="sid" id= "sid"  value="{{ $ad['id']}}">
             
           
            
              <td>{{ $ad['id']}}</td>
              <td>{{ $ad['firstname'] }}</td>
              <td>{{ $ad['lastname']}}</td>
              <td>{{ $ad['surname']}}</td>
              <td>{{ $ad['email']}}</td>
              <td>{{ $ad['jobclassification']}}</td>
              <td>{{ $ad['howdidyouhearaboutus']}}</td>
              <td><a class="btn btn-success " href="/moreinfo/{{ $ad['id']}}" ><i class="fa fa-edit"></i><b>More Info</b></a></td>
              <td class="hidden"> <input type="text" name="jobclass" id= "jobclass"  value="{{ $ad['jobclassification']}}"></td>
              <th><button type="submit" class="btn btn-md btn-danger">Delete</button></th>

               </form>      
          </tr>
         
        

      
        </tbody>
        @endforeach 
      </tbody>
    </table>
      {{$customers->links()}}
  </div>
                    </div>
                </div>
@endsection

