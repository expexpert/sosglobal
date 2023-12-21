 <style>
.phontop label.form-label {
    margin-top: 15px;
    margin-bottom: 0;
}
 </style>
 <div class="phontop">
 <div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label class="form-label" for="name">Name</label>
      <div class="form-control-wrap">


       {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name','placeholder'=>"Enter your name"]) !!}
       @if ($errors->has('name'))
       <p style="color:red;">
        {!!$errors->first('name')!!}
      </p>
      @endif
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label class="form-label" for="name">Email</label>
    <div class="form-control-wrap">


      {!! Form::text('email', null, ['class' => 'form-control card-form', 'id' => 'email','placeholder'=>"Enter your email"]) !!}
      @if ($errors->has('email'))
      <p style="color:red;">
        {!!$errors->first('email')!!}
      </p>
      @endif
    </div>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label class="form-label"
    for="password">Reset a Password ? </label>
    <div class="form-control-wrap">

<input type="password" name="password" class="form-control card-form">
    @if ($errors->has('password'))
    <p style="color:red;">
      {!!$errors->first('password')!!}
    </p>
    @endif
  </div>
</div>
</div>


<div class="col-sm-6">
  <div class="form-group">
    <label class="form-label" for="name">Status</label>
    <div class="form-control-wrap">

     {!! Form::select('status',['Inactive','Active'], null,  ['class' => 'form-control']) !!} 
      @if ($errors->has('phone'))
      <p style="color:red;">
        {!!$errors->first('phone')!!}
      </p>
      @endif
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="form-group" style="margin-top: 17px;">
              {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary waves-effect','id'=>'pagesubmit']) !!}
    </div>
  </div>
</div>
</div>
</div>