@extends('layouts.backend.master')
@section('content')
<script src="{{ asset('public/backend/js/contactFields.js') }}"></script>


<div class="nk-content">
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
          <div class="nk-block-between">
            <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">

               My Settings
             </h3>
           </div><!-- .nk-block-head-content -->

         </div><!-- .nk-block-between -->
       </div><!-- .nk-block-head -->

       <div class="nk-block">
         @include('backend.flash-message')

         <div class="card">

          <ul class="nav setting-nav" role="tablist">

            <li class="nav-item setting-nav-title active" role="myCompanyTab" data-toggle="tab" data-filter="viewedMeDropdown"><a class="active" href=".myCompanyTab" aria-controls="profile" role="tab" data-toggle="tab">COMPANY INFO</a></li>

            <li class="nav-item setting-nav-title" role="contractTab" data-toggle="tab" data-filter="iVisitedDropdown"><a href=".contractTab" aria-controls="profile" role="tab" data-toggle="tab">CONTRACT</a></li>
            @if(Session::get('brokerUserRole') == null)

            <li class="nav-item setting-nav-title" role="changePassTab" data-toggle="tab" data-filter="iVisitedDropdown"><a href=".changePassTab" aria-controls="profile" role="tab" data-toggle="tab">CHANGE PASSWORD</a></li>
            @endif
            <!-- <li class="nav-item setting-nav-title" role="managePlanTab" data-toggle="tab" data-filter="iVisitedDropdown"><a href=".managePlanTab" aria-controls="profile" role="tab" data-toggle="tab">MANAGE PLAN</a></li> -->

          </ul>


          <div class="tab-content">

           <div role="tabpanel" class="tab-pane active myCompanyTab" id="myCompanyTab">


            <div class="card-inner">
              <div class="preview-block">
                <span class="preview-title-lg overline-title">Company Information</span>
                {!! Form::model($setting, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\backend\SettingController@update',$setting->id],'files'=>true]) !!}
                @include('backend.settings.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
              </div>
            </div>





          </div>
          

          <div role="tabpanel" class="tab-pane contractTab" id="contractTab">
            <div class="card-inner">
              <div class="preview-block row">


                <div class="col-md-10">
                  <div class="alert alert-info" role="alert">
                   NOTE: DO NOT EDIT BRACKETS {-} Use our pre-made carrier contract template or paste and format yours in the box below
                 </div>
                 <span class="preview-title-lg overline-title"><strong> Carrier Broker Agreement</strong></span>


                 <form id="contractForm" name="ckeditor" method="post" action="{{ url('admin/broker-contract') }}">
                  @csrf
                  <textarea name="content" id="editor1">
                   {{$setting->contract}}
                 </textarea>
                 <script>
                  ClassicEditor
                  .create( document.querySelector( '#editor' ) )
                  .catch( error => {
                    console.error( error );
                  } );
                </script>

                <br>
                <input type="checkbox" id="carrierCheckbox" name="carrierCheckbox" value="contactCheck">
                <label for="vehicle2"> I have read and hereby agree and approve the above as my official carrier contract</label>

                <br>
                <br>
                <input type="submit" class="submit btn btn-primary waves-effect" value="Update Contract" name="submit">
              </form>

            </div>
            <div class="col-md-2">      

              <ul class="nav setting-nav" role="tablist">
                <!-- <li class="nav-item setting-nav-title active">BROKER</a></li> -->
                <!-- <li class="nav-item setting-nav-title active" role="brokerTab" data-toggle="tab" data-filter="viewedMeDropdown"><a class="active" href=".brokerTab" aria-controls="profile" role="tab" data-toggle="tab">Broker</a></li> -->
                <!-- <li class="nav-item setting-nav-title" role="CarrierTab" data-toggle="tab" data-filter="viewedMeDropdown"><a class="" href=".CarrierTab" aria-controls="profile" role="tab" data-toggle="tab">Carrier</a></li> -->

              </ul>



              <div class="tab-content">
               <div role="tabpanel" class="tab-pane active brokerTab" id="brokerTab">


                <div class="" style="margin-top: 10px;">
                  <div class="preview-block">
                  <!--  <li class="preview-title-lg overline-title" id="companyName">Company Name</a></li>
                   <li class="preview-title-lg overline-title" id="fullName">Full Name</a></li>
                   <li class="preview-title-lg overline-title" id="address1">Address 1</a></li>
                   <li class="preview-title-lg overline-title" id="address2">Address 2</a></li>
                   <li class="preview-title-lg overline-title" id="city">City</a></li>
                   <li class="preview-title-lg overline-title" id="state">State</a></li>
                   <li class="preview-title-lg overline-title" id="zip">Zip</a></li>
                   <li class="preview-title-lg overline-title" id="MCnumber">MC Number</a></li>
                   <li class="preview-title-lg overline-title" id="bussinessType">Business Type</a></li>
                   <li class="preview-title-lg overline-title" id="email">Email</a></li> -->
                 </div>
               </div>





             </div>


             <div role="tabpanel" class="tab-pane CarrierTab" id="CarrierTab">


              <div class="card-inner">
                <div class="preview-block">
                  <span class="preview-title-lg overline-title">Carrier Information</span>
                  tet
                </div>
              </div>





            </div>

          </div>














        </div>
      </div>
    </div>
  </div>


  <div role="tabpanel" class="tab-pane changePassTab" id="changePassTab">
   <div class="card-inner">
    <div class="preview-block">
      <span class="preview-title-lg overline-title">CHANGE PASSWORD</span>
      {!! Form::open(['url'=>'admin/change-password','method' => 'post']) !!}


      <div class="row gy-4">

        <div class="col-sm-6">
          <div class="form-group">
            <label class="form-label" for="default-01">Password</label>
            <div class="form-control-wrap">
             <input type="password" class="form-control" id="NewPassword" name="password"  placeholder="New Password" required>


           </div>
         </div>
       </div>

       <div class="col-sm-6">

        <div class="form-group">
          <label class="form-label" for="default-01">New Password (Confirm)</label>
          <div class="form-control-wrap">
            <input type="password" class="form-control" id="NewPasswordConfirm" name="c_password" placeholder="New Password (Confirm)" required>


          </div>
        </div>
      </div>


      <div class="col-md-12">
        <div class="form-group">
          {!! Form::submit('Update Password', ['class' => 'btn btn-primary waves-effect','id'=>'pagesubmit']) !!}
        </div>
      </div>

      {!! Form::close() !!}      
    </div>
  </div>         
</div>  </div>




<div role="tabpanel" class="tab-pane managePlanTab" id="managePlanTab">
 <div class="card-inner">
  <div class="preview-block">
    <span class="preview-title-lg overline-title">MANAGE PLAN</span>


  

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


<script type="text/javascript">

  $(document).ready(function() {
    $('#contractForm').submit(function(e) {
      if ($('input:checkbox', this).length == $('input:checked', this).length ) {
            // everything's fine...
      } else {
        e.preventDefault();
        alert('Please click on checkbox!');
        return false;
      }
    });
  });


  $(".setting-nav li").on('click', function(e){

    $(".setting-nav li.active").removeClass('active');
  // $(".setting-nav li a").removeClass('active');
    $(this).addClass('active');
  // $(this).find('a').addClass('active');
  });
</script>
<script>

  $(function(){

    $(document).on("submit","#contract_form",function(e){

      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({

        type:"POST",
        url:"{{ url('admin/update-carrier') }}",
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){

           // window.location.href = "{{ url('/admin') }}";

        },
        error: function(data){

          console.log(data);
        }
      });
      return false;
    });

  });
</script>
<script src="{{ asset('public/backend/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5();

    CKEDITOR.replace( 'editor1' );
    CKEDITOR.config.allowedContent = true;
  })


</script>
@stop

