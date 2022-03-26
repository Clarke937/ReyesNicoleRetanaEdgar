<h1>Investigations Tags List</h1>

<table>
    <tr>
        <th></th>
    </tr>

    @foreach ($investigationstags as $inv)
        <tr>
            <td>{{$inv->id}}</td>
            <td>{{$inv->title}}</td>
            <td>{{$inv->investigations_id}}</td>
            <td>{{$inv->tag_id}}</td>
            <td>{{$inv->description}}</td>
        </tr>   
    @endforeach
    
</table>