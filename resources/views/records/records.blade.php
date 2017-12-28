<div class="px-2">
<table class="table table-striped"">
    <thead class="thead-dark">
    <tr>
        <td>vehicleID</td>
        <td>inhouseSellerID</td>
        <td>Buyer name</td>
        <td>Buyer surname</td>
        <td>modelID</td>
        <td>saleDate</td>
        <td>buyDate</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($records as $record)
        <tr>
            <td>{{ $record->vehicleID }}</td>
            <td>{{ $record->inhouseSellerID }}</td>
            <td>{{ $record->name->name }}</td>
            <td>{{ $record->name->surname }}</td>
            <td>{{ $record->modelID }}</td>
            <td>{{ $record->saleDate }}</td>
            <td>{{ $record->buyDate }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $records->appends(['search' => \Illuminate\Support\Facades\Input::get('search'),
                       'select' => \Illuminate\Support\Facades\Input::get('select')])->links("pagination::bootstrap-4") }}

<form method="post" action="/records" class="form-horizontal">
    {{ csrf_field() }}
    <div>
        <label for="radio1" class="radio-inline">Name</label>
        <input type="radio" name="select" value="name" id="radio1" checked="checked">
        <label for="radio2" class="radio-inline">Surname</label>
        <input type="radio" name="select" value="surname" id="radio2">
        <label for="radio3" class="radio-inline">Date</label>
        <input type="radio" name="select" value="date" id="radio3">
    </div>
    <div>
        <input type="text" name="search">
        <input type="submit" name="submit">
    </div>
</form>
</div>
