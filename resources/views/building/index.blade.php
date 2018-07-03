@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Building System Management') }}</div>

                <div class="card-body">
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                   <table class="table table-bordered">
                        <tr>
                            <th>Building ID</th>
                            <th>Service Number</th>
                            <th>Building Group</th>
                            <th>Building Name</th>
                            <th>Status</th>
                        </tr>
                        @forelse($buildList as $data)
                        <tr>
                            <td>
                                <a href="{{route('building.edit', $data->id)}}">
                                    {{ $data->building_id }}
                                </a>
                            </td>
                            <td>{{ $data->service_number }}</td>
                            <td>{{ $data->building_group }}</td>
                            <td>{{ $data->building_name }}</td>
                            <td>
                                @if($data->status == 1)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Closed</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan=3> No Data </td>
                            </tr>
                        @endforelse
                   </table>  
                   <div class="text-right">
                        <a href="{{route('building.create')}}" class="btn btn-info">Add New Building</a>        
                   </div>    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal popup view -->
@endsection
