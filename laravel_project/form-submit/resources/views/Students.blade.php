<div>
    <h1> Student list</h1>
    <table border ="3">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($data as $Student)
        <tr>
            <td>{{ $Student->name }}</td>
            <td>{{ $Student->email }}</td>
            <td>{{ $Student->batch }}</td>
        </tr>
        @endforeach
    </table>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
