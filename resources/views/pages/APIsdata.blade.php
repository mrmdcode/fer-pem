@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h3>create API Token</h3>

                    </div>
                    <form action="{{route("apis.store")}}" method="post" class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @csrf
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="token_name">Token Name</label>
                                <input type="text" name="token_name" id="token_name" class="form-control">
                            </div>
                            <div class="form-group col-4">
                                <label for="expire_time">Expire Time</label>
                                <input type="datetime-local" name="expire_time" id="expire_time" class="form-control">
                            </div>
                            <div class="form-group col-4">
                                <label for="token_status">Token Status</label>
                                <select name="token_status" id="token_status" class="form-control">
                                    <option value="0" class="text-danger">de Active</option>
                                    <option value="1" selected class="text-success"> Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="row px-2 pt-4">
                            <button type="submit" class="btn btn-outline-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Listen Gets</h3>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Token APIs</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <th>#</th>
                                <th>Token Name</th>
                                <th>Time Expire</th>
                                <th>Token</th>
                            </thead>
                            <tbody>
                                @forelse($tokens as $token)
                                    <tr>
                                        <td>{{$token->id}}</td>
                                        <td>{{$token->name}}</td>
                                        <td class="">{{$token->abilities["expires_at"]}}</td>
                                        <td>{{$token->token}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="justify-content-center"> nothing</td>
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
