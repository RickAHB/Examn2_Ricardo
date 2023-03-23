<h1>{{$page_title}}</h1>
<br>




<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Height</th>
            <th>Weight</th>
            <th>HP</th>
            <th>Image</th>



        </tr>
    </thead>
    <tbody>
        
        @foreach($alls as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->Name}}</td>
            <td>{{$row->Height}}</td>
            <td>{{$row->Weight}} </td>
            <td>{{$row-> HP}}</td>
            <td><img src="{{ $row->Image }}" width="100" height="100"></td>

        </tr>

        @endforeach
    </tbody>
</table>
<br><br>
<a href ="/">ALL Characters</a>
<br>
<br>
<a href ="/above">Above 80</a>
<br>
<br>
<a href ="/equals">Equals or below 80</a>
