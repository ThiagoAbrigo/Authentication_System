

<div class="container">
   <div class="row">
       <div class="col-md-6 offset-md-3">
           <form>
               <div class="form-group">
                   {{ Form::label('name', 'Name', ['class' => 'my-label']) }}
                   {{ Form::text('name', $client->name, ['class' => 'form-control my-input' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                   {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
               </div>
               <div class="form-group">
                   {{ Form::label('email', 'Email', ['class' => 'my-label']) }}
                   {{ Form::text('email', $client->email, ['class' => 'form-control my-input' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                   {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
               </div>
               <div class="container-button">
                   <button type="submit" class="submit">{{ __('Submit') }}</button>

               </div>
           </form>
       </div>
   </div>
</div>
