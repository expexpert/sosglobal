@extends('layouts.backend.master')

@section('content')

<div class="nk-content ">

    <div class="container-fluid">

        <div class="nk-content-inner">

            <div class="nk-content-body">

                <div class="nk-block-head nk-block-head-sm">

                    <div class="nk-block-between g-3">

                        <div class="nk-block-head-content">

                            <h3 class="nk-block-title page-title">Brokers / <strong class="text-primary small">{{ $users->firstname }}</strong></h3>

                            <div class="nk-block-des text-soft">

                                <ul class="list-inline">

                                    <li>User ID: <span class="text-base">UD{{ $users->id }}</span></li>

                                </ul>

                            </div>

                        </div>

                        <div class="nk-block-head-content">

                            <a href="{{ url('superadmin/users') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>

                            <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>

                        </div>

                    </div>

                </div><!-- .nk-block-head -->

                <div class="nk-block">

                    <div class="card">

                        <div class="card-aside-wrap">

                            <div class="card-content">

                              

                                <div class="card-inner">

                                    <div class="nk-block">

                                        <div class="nk-block-head">

                                            <h5 class="title">User Information</h5>

                                        </div><!-- .nk-block-head -->

                                        <div class="profile-ud-list">

                                                       <!--      <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Title</span>

                                                                    <span class="profile-ud-value">Mr.</span>

                                                                </div>

                                                            </div> -->

                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Full Name</span>

                                                                    <span class="profile-ud-value">{{ $users->firstname }}</span>

                                                                </div>

                                                            </div>

                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">IP Address</span>

                                                                    <span class="profile-ud-value" style="color:#29e929">{{ $users->ip_address }}</span>

                                                                </div>

                                                            </div>


                                                            
                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Email Address</span>

                                                                    <span class="profile-ud-value">{{ $users->email }}</span>

                                                                </div>

                                                            </div>


     <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Number of Carriers</span>

                                                                    <span class="profile-ud-value">{{ $carrierCount }}</span>

                                                                </div>

                                                            </div>
                                                            

                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Created Date</span>

                                                                    <span class="profile-ud-value">{{ $users->created_at }}</span>

                                                                </div>

                                                            </div>



                                                        </div><!-- .profile-ud-list -->

                                                    </div><!-- .nk-block -->

                                                    

                                                    

                                                </div><!-- .card-inner -->

                                            </div><!-- .card-content -->

                                            

                                        </div><!-- .card-aside-wrap -->

                                    </div><!-- .card -->


                                    <!-- Contact Info -->

                                    <div class="card">

                                            <?php 
                                                            $createdSub =  \Carbon\Carbon::createFromTimestamp($subscriptionDetails->created)->format('Y-m-d');
                                                            $toDate = \Carbon\Carbon::parse($createdSub);

                                                            $fromDate = \Carbon\Carbon::parse(date('Y-m-d'));

                                                            

                                                            $days = $toDate->diffInDays($fromDate);

                                                            $months = $toDate->diffInMonths($fromDate);

                                                            $years = $toDate->diffInYears($fromDate);
                                                            if($months != 0){
                                                              $amount = $months * $users->price;

                                                          }else{
                                                            $amount = $users->price;
                                                            
                                                        }
                                                        ?>


                                        <div class="card-aside-wrap">
                                            <div class="card-content">                                             

                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="nk-block-head">
                                                            <h5 class="title">Stripe Subscription Information</h5>

                                                        </div><!-- .nk-block-head -->

                                                        <div class="profile-ud-list">

                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Payment Type</span>

                                                                    <span class="profile-ud-value">{{ $users->pm_type }}</span>

                                                                </div>

                                                            </div>

                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Plan</span>

                                                                    <span class="profile-ud-value">
                                                                       
                                                                        <span>{{ $users->plan_name }}</span>

                                                                    </span>

                                                                </div>

                                                            </div>



                                                            
                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Period Start</span>

                                                                    <span class="profile-ud-value" style="color:#29e929">{{ \Carbon\Carbon::createFromTimestamp($subscriptionDetails->current_period_start)->format('Y m d H:i:s') }}</span>

                                                                </div>

                                                            </div>



                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Period End</span>

                                                                    <span class="profile-ud-value" style="color:red">{{ \Carbon\Carbon::createFromTimestamp($subscriptionDetails->current_period_end)->format('Y m d H:i:s') }}</span>

                                                                </div>

                                                            </div>


                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Subscription Created</span>

                                                                    <span class="profile-ud-value">{{ \Carbon\Carbon::createFromTimestamp($subscriptionDetails->created)->format('Y m d H:i:s') }}</span>

                                                                </div>

                                                            </div>



                                                            <div class="profile-ud-item">

                                                                <div class="profile-ud wider">

                                                                    <span class="profile-ud-label">Payment ID</span>

                                                                    <span class="profile-ud-value">{{ $users->stripe_id }}</span>

                                                                </div>

                                                            </div>


                                                                  <div class="profile-ud-item">

                                                            <div class="profile-ud wider">

                                                                <span class="profile-ud-label">Subscription Days</span>

                                                                <span class="profile-ud-value">
                                                                   
                                                                    <span>{{ $subDays }}</span>

                                                                </span>

                                                            </div>

                                                        </div>
 
                                                        
                                                        <div class="profile-ud-item">

                                                            <div class="profile-ud wider">

                                                                <span class="profile-ud-label">Amount</span>

                                                                <span class="profile-ud-value">
                                                                   
                                                                    <span style="color:green;">${{ $subPrice }}</span>

                                                                </span>

                                                            </div>

                                                        </div>

                                                        <div class="profile-ud-item">

                                                            <div class="profile-ud wider">

                                                                <span class="profile-ud-label">Status</span>

                                                                <span class="profile-ud-value">
                                                                    @if($subscriptionDetails->status == 'trialing')
                                                              <span style="color:#29e929">Grace Period Active</span>

                                                                                                                                        @else
                                                                    @if($subscriptionDetails->status == 'active')
                                                                    <span style="color:#29e929">Active</span>
                                                                    @else
                                                                    <span style="color:red">Inactive</span>

                                                                    @endif
                                                                    @endif
                                                                </span>

                                                            </div>

                                                        </div>




                                                    </div><!-- .profile-ud-list -->

                                                </div><!-- .nk-block -->

                                                

                                                

                                            </div><!-- .card-inner -->

                                        </div><!-- .card-content -->

                                        

                                    </div><!-- .card-aside-wrap -->

                                </div><!-- .card -->



                            </div><!-- .nk-block -->

                        </div>

                    </div>

                </div>

            </div>

            @stop



