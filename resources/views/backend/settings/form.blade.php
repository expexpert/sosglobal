      <div class="row gy-4">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label" for="default-01">Full Company Name</label>
                <div class="form-control-wrap">
                    
                 {!! Form::text('company_name', null, ['class' => 'form-control', 'id' => 'company_name','placeholder'=>"Enter Company Name"]) !!}
                 @if ($errors->has('company_name'))
                 <p style="color:red;">
                  {!!$errors->first('company_name')!!}
              </p>
              @endif
          </div>
      </div>
  </div>



  <div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">First Name</label>
        <div class="form-control-wrap">
            
            {!! Form::text('firstname', null, ['class' => 'form-control', 'id' => 'firstname']) !!}
            @if ($errors->has('firstname'))
            <p style="color:red;">
              {!!$errors->first('firstname')!!}
          </p>
          @endif
      </div>
  </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Last Name</label>
        <div class="form-control-wrap">
          {!! Form::text('lastname', null, ['class' => 'form-control', 'id' => 'lastname']) !!}
          @if ($errors->has('lastname'))
          <p style="color:red;">
              {!!$errors->first('lastname')!!}
          </p>
          @endif
      </div>
  </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Address Line 1</label>
        <div class="form-control-wrap">
            
            {!! Form::text('address1', null, ['class' => 'form-control', 'id' => 'address1']) !!}
            @if ($errors->has('address1'))
            <p style="color:red;">
              {!!$errors->first('address1')!!}
          </p>
          @endif
      </div>
  </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Address Line 2</label>
        <div class="form-control-wrap">
            {!! Form::text('address2', null, ['class' => 'form-control', 'id' => 'address2']) !!}
            @if ($errors->has('address2'))
            <p style="color:red;">
              {!!$errors->first('address2')!!}
          </p>
          @endif
      </div>
  </div>
</div>


<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">City</label>
        <div class="form-control-wrap">
           {!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city']) !!}
           @if ($errors->has('city'))
           <p style="color:red;">
              {!!$errors->first('city')!!}
          </p>
          @endif
      </div>
  </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">State/Province</label>
        <div class="form-control-wrap">
         {!! Form::text('state', null, ['class' => 'form-control', 'id' => 'state']) !!}
         @if ($errors->has('state'))
         <p style="color:red;">
          {!!$errors->first('state')!!}
      </p>
      @endif
  </div>
</div>
</div>




<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Zip/Postal Code</label>
        <div class="form-control-wrap">
            
            {!! Form::text('zip', null, ['class' => 'form-control', 'id' => 'zip']) !!}
            @if ($errors->has('zip'))
            <p style="color:red;">
              {!!$errors->first('zip')!!}
          </p>
          @endif
      </div>
  </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Country</label>
        <div class="form-control-wrap">
            
            {!! Form::text('country', null, ['class' => 'form-control', 'id' => 'country']) !!}
            @if ($errors->has('name'))
            <p style="color:red;">
              {!!$errors->first('country')!!}
          </p>
          @endif
      </div>
  </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">MC Number</label>
        <div class="form-control-wrap">
            
           {!! Form::text('mc_number', null, ['class' => 'form-control', 'id' => 'mc_number']) !!}
           @if ($errors->has('mc_number'))
           <p style="color:red;">
              {!!$errors->first('mc_number')!!}
          </p>
          @endif
      </div>
  </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">DOT Number</label>
        <div class="form-control-wrap">
         {!! Form::text('dot_number', null, ['class' => 'form-control', 'id' => 'dot_number']) !!}
         @if ($errors->has('dot_number'))
         <p style="color:red;">
          {!!$errors->first('dot_number')!!}
      </p>
      @endif
  </div>
</div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Email Address</label>
        <div class="form-control-wrap">
            
            {!! Form::text('email', Auth::user()->email, ['class' => 'form-control', 'id' => 'email','disabled' => 'disabled']) !!}
            @if ($errors->has('email'))
            <p style="color:red;">
              {!!$errors->first('email')!!}
          </p>
          @endif
      </div>
  </div>
</div>
<input type="hidden" name="email" value="{{Auth::user()->email}}"> 


<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Business Phone</label>
        <div class="form-control-wrap">
            
           {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone']) !!}
           @if ($errors->has('phone'))
           <p style="color:red;">
              {!!$errors->first('phone')!!}
          </p>
          @endif
      </div>
  </div>
</div>


<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Business Type</label>
        <div class="form-control-wrap">
            
             {!! Form::select('bussiness_type',['Sole Proprietor','LLC','Corporation'], null,  ['class' => 'form-control']) !!}
           @if ($errors->has('bussiness_type'))
           <p style="color:red;">
              {!!$errors->first('bussiness_type')!!}
          </p>
          @endif
      </div>
  </div>
</div>


<div class="col-sm-6">
    <div class="form-group">
        <label class="form-label" for="default-01">Business Fax</label>
        <div class="form-control-wrap">
          {!! Form::text('fax', null, ['class' => 'form-control', 'id' => 'fax']) !!}
          @if ($errors->has('fax'))
          <p style="color:red;">
              {!!$errors->first('fax')!!}
          </p>
          @endif
      </div>
  </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary waves-effect','id'=>'pagesubmit']) !!}
    </div>
</div>







</div>
