﻿@extends('layouts.backend.master')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard</h3>
                        </div><!-- .nk-block-head-content -->
                        
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

        <div class="nk-block">
            <div class="row g-gs">

         
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="nk-ecwg nk-ecwg6">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Test</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div class="amount">22</div>
                                          <!--   <div class="nk-ecwg6-ck">
                                                <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                            </div> -->
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                            </div><!-- .nk-ecwg -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="nk-ecwg nk-ecwg6">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Approved</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div class="amount">33</div>
                                            <!-- <div class="nk-ecwg6-ck">
                                                <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                                            </div> -->
                                        </div>
                                        <!--  <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs. last week</span></div> -->
                                    </div>
                                </div><!-- .card-inner -->
                            </div><!-- .nk-ecwg -->
                        </div><!-- .card -->
                    </div><!-- .col -->



                </div><!-- .row -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
</div>
@endsection