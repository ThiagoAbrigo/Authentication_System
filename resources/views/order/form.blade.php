<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form>
                <div class="form-group">
                    {{ Form::label('client_id') }}
                    {{--  --}}
                    {{ Form::select('client_id',$client, $order->client_id, ['class' => 'form-control' . ($errors->has('client_id') ? ' is-invalid' : ''), 'placeholder' => 'Client Id']) }}
                    {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('price') }}
                    {{ Form::text('price', $order->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
                    {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
        
            </div>
            <div class="container-button">
                <button type="submit" class="submit">{{ __('Submit') }}</button>
            </div>
        </form>
     </div>
        
</div>