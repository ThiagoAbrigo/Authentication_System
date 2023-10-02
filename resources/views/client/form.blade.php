<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class="container">
   <div class="row">
       <div class="col-md-6 offset-md-3">
           <form>
               <div class="form-group">
                   {{ Form::label('name', 'Name', ['class' => 'my-label']) }}
                   {{ Form::text('name', $client->name, ['class' => 'form-control my-input' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'style' => 'border: 2px solid #FF0000;']) }}
                   {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
               </div>
               <div class="form-group">
                   {{ Form::label('email', 'Email', ['class' => 'my-label']) }}
                   {{ Form::text('email', $client->email, ['class' => 'form-control my-input' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email', 'style' => 'border: 2px solid #FF0000;']) }}
                   {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-primary my-button" style="background-color: #FF0000; color: #FFFFFF;">{{ __('Submit') }}</button>
               </div>
           </form>
       </div>
   </div>
</div>

