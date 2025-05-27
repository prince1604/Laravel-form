<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>

    @if(session('path'))
        {{ session('path') }}
    @endif

    <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <input type="file" name="file" required>
        <br>
        <br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
