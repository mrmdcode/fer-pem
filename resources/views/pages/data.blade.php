@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <div class="card">
                   <div class="card-header">
                       <h3>data table</h3>
                   </div>
                   <div class="card-body">
                       <table class="table table-hover table-striped">
                           <thead>
                               <th>device_id</th>
                               <th>time</th>
                               <th>data</th>
                               <th>event_id</th>
                               <th>W_Temp1</th>
                               <th>W_Temp2</th>
                               <th>W_Temp3</th>
                               <th>W_Temp4</th>
                               <th>W_Temp5</th>
                               <th>W_Temp6</th>
                               <th>B_Temp1</th>
                               <th>B_Temp2</th>
                               <th>Vib1</th>
                               <th>Vib2</th>
                           </thead>
                           <tbody>
                           @forelse($data as $eachdata)
                               <tr>
                                   <td>{{$eachdata->device_id}}</td>
                                   <td>{{$eachdata->time}}</td>
                                   <td>{{$eachdata->data}}</td>
                                   <td>{{$eachdata->event_id}}</td>
                                   <td>{{$eachdata->W_Temp1}}</td>
                                   <td>{{$eachdata->W_Temp2}}</td>
                                   <td>{{$eachdata->W_Temp3}}</td>
                                   <td>{{$eachdata->W_Temp4}}</td>
                                   <td>{{$eachdata->W_Temp5}}</td>
                                   <td>{{$eachdata->W_Temp6}}</td>
                                   <td>{{$eachdata->B_Temp1}}</td>
                                   <td>{{$eachdata->B_Temp2}}</td>
                                   <td>{{$eachdata->Vib1}}</td>
                                   <td>{{$eachdata->Vib2}}</td>
                               </tr>
                           @empty
                               <tr>
                                   <td colspan="14" class="justify-content-center">nothing</td>
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
