@component('layouts.page', ['card_title' => 'Edit Building'])
    @slot('card_header')
        {{ __('Building Details') }}
    @endslot
    @slot('card_body')
        @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif
                    
        <form id="edit-form-{{ $buildEdit->id}}" action="{{route('building.update', $buildEdit->id)}}" method="POST">
        <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <label>Building Id</label>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        @include('component.form.input', [
                            'name' => 'building_id',
                            'value' => $buildEdit->building_id
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
                            'value' => $buildEdit->service_number
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
                            'value' => $buildEdit->building_group
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
                            'value' => $buildEdit->building_name
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
                            'value' => $buildEdit->description
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
                    {{ __('Save') }}
                </button>
                <div class="btn btn-danger" 
                    onclick="
                        if(confirm('Are you sure to delete this record'))
                            {document.getElementById('delete-form-{{ $buildEdit->id }}').submit()}
                        "
                >Delete</div>
            </div>                     
            @csrf @method('PUT')
        </form>
        
        <form id="delete-form-{{ $buildEdit->id}}" action="{{route('building.destroy', $buildEdit->id)}}" method="POST">
            @csrf @method('DELETE')
        </form>   
    @endslot

@endcomponent
