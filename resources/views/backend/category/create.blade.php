@extends('layouts.backend.master')
@section('content')
<div class="nk-content">
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
          <div class="nk-block-between">
            <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">
               Create Customer
             </h3>
           </div><!-- .nk-block-head-content -->

         </div><!-- .nk-block-between -->
       </div><!-- .nk-block-head -->



       <div class="nk-block">
         @include('backend.flash-message')
         <div class="card">
          <div class="tab-content">
           <div role="tabpanel" class="tab-pane active myCompanyTab" id="myCompanyTab">
            <div class="card-inner">
              <div class="preview-block">
                <span class="preview-title-lg overline-title">User Create</span>
              

                {!! Form::open(['action' => 'App\Http\Controllers\backend\CustomerController@store','id' => 'form_validation','files'=>true]) !!}
          @include('backend.customers.form', ['submitButtonText' => 'Submit'])
          {!! Form::close() !!}


              </div>
            </div>
          </div>       
        </div>
      </div>
    </div><!-- .nk-block -->
  </div>
</div>
</div>
</div>



@stop

