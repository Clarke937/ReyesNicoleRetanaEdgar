<h1>Tags List</h1>

<table>
    <tr>
        <th></th>
    </tr>

    @foreach ($tags as $inv)
        <tr>
            <td>{{$inv->id}}</td>
            <td>{{$inv->name}}</td>
        </tr>   
    @endforeach
    
</table>