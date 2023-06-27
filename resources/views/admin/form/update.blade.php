@if (!$updateRecord)
@php
    $updateRecord = true;
@endphp
<div class="card">
    <div class="card-header">
        <h3> {{$tableName}} </h3>
    </div>
    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                        <thead>
                            <tr>
                                @foreach($headers as $key)
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">{{$key}}</th>
                                @endforeach
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Action</th>
                            </tr>
                        </thead>
                        <tbody>  
                        @foreach($table as $record)
                            <tr>
                                @foreach($record->toArray() as $key => $value)
                                <td>{{ $value }}</td>
                                @endforeach
                                <td>
                                    @if ($tableName === 'information')
                                    <form action="{{ route('form.update', ['table' => $tableName, 'id' => $record->INN, 'updateRecord' => $updateRecord]) }}" method="POST">
                                    @else
                                    <form action="{{ route('form.update', ['table' => $tableName, 'id' => $record->id, 'updateRecord' => $updateRecord]) }}" method="POST">
                                    @endif
                                    @method('GET')
                                    @csrf
                                    <button type="submit">Update</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                @foreach($headers as $key)
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">{{$key}}</th>
                                @endforeach
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Действие</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
</div>
@else
<div class="card-header">
    <h3 class="card-title">{{$tableName}}</h3>
</div>
<form method="POST" action="{{ route('record.update', ['id' => $tableName === 'information' ? $record->INN : $record->id, 'table' => $tableName]) }}">
    @csrf
    @method('PUT')
    <div class="card-body">
    @foreach($record->toArray() as $key => $value)
    
        @if ($key === "id" or $key === 'created_at' or $key === 'updated_at')
            @continue;
        @endif
        <div class="form-group">
            <label>{{ $key }}</label>
            <input class="form-control" name = "{{ $key }}" placeholder="{{ $value }}" value="{{ $value }}">
        </div>
    @endforeach
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endif
