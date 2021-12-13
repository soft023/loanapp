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
                     <h2>All Declined Loans</h2>   
                     
                       <div class="row">
            <div class="col-md-12">
                <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>User Id</th>
            <th>Amount Requested</th>
            <th>Reason For No</th>
            <th>Processed By</th>
            <th>Processed Date</th>
           
          </tr>
        </thead>
       
        <tbody>
          <?php   
          $i = 1;
          ?>
          @foreach( $declined as $ad) 
          
          <tr class="info">
           

           
            
              <td>{{$i}}</td>
              <td>{{ $ad['user_id'] }}</td>
              <td>{{ $ad['amountrequested']}}</td>
              <td>{{ $ad['reasonforno']}}</td>
              <td>{{ $ad['processedby']}}</td>
              <td>{{ $ad['processeddate']}}</td> 
                     
          </tr>
          <?php   
          $i++; 
          ?>
          
         @endforeach 
        </tbody>
      </tbody>
    </table>
    {{ $declined->links()}}
  </div>
                    </div>
                </div>
@endsection

