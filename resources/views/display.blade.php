<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
<h1>Display</h1>
<table border="2" cellspacing="0" cellpadding="10">
    <thead>
    <tr>
        <th>name:</th>
        <th>email:</th>
        <th>gender:</th>
        <th>city:</th>
        <th>hobby:</th>
        <th>DOB:</th>
        <th>Delete:</th>
        <th>Update:</th>
    </tr>
    </thead>
    <tbody>
        @foreach($employee as $e)
        <tr>
            <td>{{ $e->name}}</td>
            <td>{{ $e->email}}</td>
            <td>{{ $e->gender}}</td>
            <td>{{ $e->city}}</td>
            <td>{{ $e->hobby}}</td>
            <td>{{ $e->dob}}</td>
            <td>
                <a href="delete/{{$e->eid}}">Delete</a></td>
                <td> <a href="editData/{{$e->eid}}">Update</a></td>
               <!-- <form action="delete/{{$e->eid}}" method="get">
                <button type="submit">Delete</button>
               </form> -->

        </tr>
        @endforeach
    </tbody>

</table>
</div>
