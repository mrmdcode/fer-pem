@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row ">
            <div class="col-4 ">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Event</h3>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{route("events.store")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name : </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">description : </label>
                                <textarea type="text" name="description" id="description" class="form-control">
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-success mt-2">create</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Events Table</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <th>#</th>
                            <th>name</th>
                            <th>description</th>
                            </thead>
                            <tbody>
                            @forelse($devices as $device)
                                <tr>
{{--                                    <td>{{$device->id}}</td>--}}
{{--                                    <td>{{$device->name}}</td>--}}
{{--                                    <td>{{$device->description}}</td>--}}
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

