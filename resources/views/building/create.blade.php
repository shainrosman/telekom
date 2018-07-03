@component('layouts.page', ['card_title' => 'New Building'])
    @slot('card_header')
        {{ __('Add New Building') }}
    @endslot
    @slot('card_body')
        @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif
                    
        <form id="create-form" action="{{route('building.store')}}" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <label>Building Id</label>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        @include('component.form.input', [
                            'name' => 'building_id',
                            'value' => ''
                        ])
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <label>Service Number</label>
                    </div>
                    <div class="col-md-8 col-xs-12">                        
                        @include('component.form.input', [
                            'name' => 'service_number',
                            'value' => ''
                        ])
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <label>Building Group</label>
                    </div>
                    <div class="col-md-8 col-xs-12">                        
                         @include('component.form.input', [
                            'name' => 'building_group',
                            'value' => ''
                        ])
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <label>Building Name</label>
                    </div>
                    <div class="col-md-8 col-xs-12">                        
                         @include('component.form.input', [
                            'name' => 'building_name',
                            'value' => ''
                        ])
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <label>Description</label>
                    </div>
                    <div class="col-md-8 col-xs-12">                        
                         @include('component.form.input', [
                            'name' => 'description',
                            'value' => ''
                        ])
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <label>Status</label>
                    </div>
                    <div class="col-md-8 col-xs-12">                        
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" value="1" checked>Active
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" value="0">Closed
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <label>State</label>
                    </div>
                    <div class="col-md-8 col-xs-12">                        
                        <select class="select2 form-control" name="state">
                            @foreach($negeriList as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('state'))
                            <span class="help-block" id="vehicles_year_error">
                                {{ $errors->first('state') }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-primary">
                    {{ __('Add') }}
                </button>
            </div>                        
            @csrf @method('POST')
        </form>
    @endslot

@endcomponent
