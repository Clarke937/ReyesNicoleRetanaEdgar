<h1>Statuses List</h1>

<table>
    <tr>
        <th></th>
    </tr>

    @foreach ($status as $inv)
        <tr>
            <td>{{$inv->id}}</td>
            <td>{{$inv->name}}</td>
        </tr>   
    @endforeach
    
</table>