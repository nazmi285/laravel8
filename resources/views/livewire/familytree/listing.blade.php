<div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($families as $family)
            <tr>
                <td>#</td>
                <td>{{$family->name}}</td>
                <td>{{$family->gender}}</td>
                <td>{{$family->created_at}}</td>
                <td>{{$family->updated_at}}</td>
                <td></td>
            </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>
