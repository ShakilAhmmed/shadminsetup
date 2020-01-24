@extends('setupview::setupview.app')
@section('content')

<div style="width: 500px; margin: 0 auto; margin-top: 90px;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

          <h3>Setup</h3>

          {{Form::open(['url'=>"/setup",'method'=>"PUT",'files'=>true])}}

              <div class="form-group">
              	{{Form::label('company_name','Company Name')}}
              	{{Form::text('company_name',$default_data->company_name,['class'=>'form-control','id'=>'company_name','title'=>'company_name'])}}
                <p class="text-danger">{{$errors->first('company_name')}}</p>
              </div>


              <div class="form-group">
                {{Form::label('company_phone','Company Phone')}}
              	{{Form::text('company_phone',$default_data->company_phone,['class'=>'form-control','id'=>'company_phone','title'=>'company_phone'])}}
                <p class="text-danger">{{$errors->first('company_phone')}}</p>
              </div>

              <div class="form-group">
                {{Form::label('company_email','Company Email')}}
              	{{Form::text('company_email',$default_data->company_email,['class'=>'form-control','id'=>'company_email','title'=>'company_email'])}}
                <p class="text-danger">{{$errors->first('company_email')}}</p>
              </div>

              <div class="form-group">
                {{Form::label('company_facebook_profile','Company Facebook Profile')}}
              	{{Form::text('company_facebook_profile',$default_data->company_facebook_profile,['class'=>'form-control','id'=>'company_facebook_profile','title'=>'company_facebook_profile'])}}
                <p class="text-danger">{{$errors->first('company_facebook_profile')}}</p>
              </div>


              <div class="form-group">
                 {{Form::label('company_address','Company Address')}}
              	 {{Form::textarea('company_address',$default_data->company_address,['class'=>'form-control','id'=>'company_address','title'=>'company_address','rows'=>'4'])}}
                 <p class="text-danger">{{$errors->first('company_address')}}</p>
              </div>


               <div class="form-group">
                 {{Form::label('company_logo','Company Logo')}}
                 {{Form::file('company_logo',['id'=>'profile-img','title'=>'company_logo'])}}
                 <p class="text-danger">{{$errors->first('company_logo')}}</p>
              </div>

              <div class="form-group">
                 <label for=""></label>
                 <img src="{{asset($default_data->company_logo)}}" alt="https://i.ya-webdesign.com/images/avatar-png-3.png" id="profile-img-tag" width="200px" />
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        {{Form::close()}}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
		function readURL(input) {
			if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
			$('#profile-img-tag').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
			}
			}
			$("#profile-img").change(function(){
			readURL(this);
		});
</script>

@stop