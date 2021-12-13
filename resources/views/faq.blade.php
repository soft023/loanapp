@extends('layouts.app')
@section('content')
  <section class="credit-faq-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- FAQ Area -->
            <div class="col-12"><h1 class="text-center">How it works & Frequently Asked Questions</h1></div>

                <div class="col-12 col-lg-6">

                    <div class="accordions mb-100 w3-margin-top" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Registration And  Loan Application
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Registration is the first stage to applying for any of our facility.  Registration is done with your active mail and a newly generated password.Then u get a confirmation message on your mail before proceeding to application.</p> 
                                <p>After confirmation of your mail, then you apply for loan facility  from the numerous we offer.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                   
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseTwo" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Credit assessment 
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>This is done by our officials to evaluate all credit application requirement of clients and also risk assessment with eligibility status before approval of any facility. </p>
                            </div>
                        </div>


                                <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Approval and Contract 
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>This stage is for both client and our organisation.  This preceed disbursement, as eligibility status and repayment schedule (contract) is agreed by client and our officials before final final approval for credit availment (payout) by the company</p>
                            </div>
                        </div>





                                <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">Requirements For Loan 
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseFour" class="accordion-content collapse">
                               <p> <ul><li>1.   You must be between the age of 22 years and 55 years.</li>
                                <li>2.  You must have a valid staff ID.</li>
                                <li>3.  You must have a functional account number.</li>
                                <li>4.  Valid form of Identification such as National ID, Driver’s license, Voter’s card, International passport etc.</li>
                                <li>5.  A recent pension statemen.</li>
                                <li>6.  A recent statement of account covering the last 6 months.</li>
                                <li>7.  A NUBAN-compliant cheques book</li>
                                <li>8.  One passport photograph</li></ul></p>

                            </div>
                        </div>




                    </div>
                </div>

                <!-- Add Area -->
                <div class="col-12 col-md-6">
                    <div class="add-area mb-100 w3-margin-top">
                        <a href="/login"><img src="img/bg-img/add3.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
