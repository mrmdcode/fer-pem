@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row ">
            <div class="col-4 ">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Device</h3>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{route("devices.store")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="device_id">device id : </label>
                                <input type="text" name="device_id" id="device_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description :</label>
                                <textarea type="text" name="description" id="description" class="form-control">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="customer_id">customer id :</label>
                                <input type="text" name="customer_id" id="customer_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="agent_id">agent id :</label>
                                <input type="text" name="agent_id" id="agent_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="technition_id">technition id :</label>
                                <input type="text" name="technition_id" id="technition_id" class="form-control">
                            </div>


                            <button type="submit" class="btn btn-outline-success mt-2">create</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Devices Table</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>#</th>
                            <th>device_id</th>
                            <th>description</th>
                            <th>customer_id</th>
                            <th>agent_id</th>
                            <th>technition_id</th>
                            <th>create</th>
                            <th>opt</th>
                            </thead>
                            <tbody>
                            @forelse($devices as $device)
                                <tr>
                                    <td>{{$device->id}}</td>
                                    <td>{{$device->device_id}}</td>
                                    <td>{{$device->description}}</td>
                                    <td>{{$device->customer_id}}</td>
                                    <td>{{$device->agent_id}}</td>
                                    <td>{{$device->technition_id}}</td>
                                    <td>{{$device->created_at}}</td>
                                    <td><a href="/{{$device->id}}" class="btn btn-warning">all data</a></td>

                                </tr>
                            @empty

                                <tr>
                                    <td colspan="3">nothing</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

