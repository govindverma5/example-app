<<<<<<< HEAD
=======

>>>>>>> 023c5e1c8cbd8051b5bcd4b597175290c993f494
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
<<<<<<< HEAD
            <th>User</th>
=======
            code <th>User</th>
>>>>>>> 023c5e1c8cbd8051b5bcd4b597175290c993f494
            <th>Title</th>
            <th>Desc</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->description }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>#</th>
            <th>#</th>
            <th>#</th>
        </tr>
    </tfoot>
</table>

<div>

    {{ $posts->links() }}
</div>
