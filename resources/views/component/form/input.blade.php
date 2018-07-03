<input class="form-control {{ $errors->has($name) ? ' is-invalid' : '' }}" value="{{$value}}" name="{{$name}}">

@if ($errors->has($name))
    <span class="invalid-feedback">
        <strong>{{ $errors->first($name) }}</strong>
    </span>
@endif