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
                     <h2>My Loan History</h2>    
                    </div>
                </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Amount Request</th>
            <th>Amount Granted</th>
            <th>Loan Purpose</th>
            <th>Loan Tenure</th>
            <th>Request Status</th>
            <th>Loan Status</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Amount Request</th>
            <th>Amount Granted</th>
            <th>Loan Purpose</th>
            <th>Loan Tenure</th>
            <th>Request Status</th>
            <th>Loan Status</th>
          </tr>
        </tfoot>
        <tbody>
          <?php   
          $i = 1;
          ?>
          @foreach( $loanrequests as $ad)
          
          <tr class="info">
           

           
            
              <td>{{$i}}</td>
              <td>{{ $ad['amountrequested'] }}</td>
              <td>{{ $ad['amountgranted']}}</td>
              <td>{{ $ad['loanpurpose']}}</td>
              <td>{{ $ad['tenor']}}</td>
              <td>{{ $ad['loanrequeststatus']}}</td>
              <td>{{ $ad['loanstatus']}}</td>
                     
          </tr>
          <?php   
          $i++; 
          ?>
          
          @endforeach
        </tbody>
      </tbody>
    </table>
    
  </div>
</div>
            </div>
            
        </div>    

@endsection
</div>
</div>