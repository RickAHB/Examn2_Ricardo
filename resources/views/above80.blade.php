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
        
        @foreach($equals as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->Name}}</td>
            <td>{{$row->Height}}</td>
            <td>{{$row->Weight}} </td>
            <td>{{$row-> HP}}</td>
            <td>{{$row-> Image}}</td>

        </tr>

        @endforeach
    </tbody>
</table>
<br><br>
<a href ="/">ALL SUPERHEROES</a>
<br>
<br>
<a href ="/above">MALE</a>
<br>
<br>
<a href ="/equals">FEMALE</a>
