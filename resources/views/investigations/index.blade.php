<h1>Investigations List</h1>

<table>
    <tr>
        <th></th>
    </tr>

    @foreach ($investigations as $inv)
        <tr>
            <td>{{$inv->id}}</td>
            <td>{{$inv->title}}</td>
            <td>{{$inv->description}}</td>
        </tr>   
    @endforeach
    
</table>
