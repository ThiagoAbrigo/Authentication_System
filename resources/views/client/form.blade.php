<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div >
   <div >
       <div >
           <form>
               <div>
                   {{ Form::label('name', 'Name', ) }}
                   {{ Form::text('name', $client->name, [ ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                   {!! $errors->first('name', ) !!}
               </div>
               <div >
                   {{ Form::label('email', 'Email', ) }}
                   {{ Form::text('email', $client->email, [($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                   {!! $errors->first('email') !!}
               </div>
               <div >
                   <button type="submit">{{ __('Submit') }}</button>
               </div>
           </form>
       </div>
   </div>
</div>
