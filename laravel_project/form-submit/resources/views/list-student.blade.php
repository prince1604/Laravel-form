{{-- <div>
    <h1>Student List</h1>
    <form action="search" method="get">
    <input type="text" placeholder="Search with name" name="search" value="{{$search ?? '' }}">
    <button>Search</button>
</form>
    <table border="1">
        <tr>
           <td>Name</td>
           <td>Email</td>
           <td>Phone</td>
           <td>Created</td>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->created_at }}</td>
        </tr>
        @endforeach
    </table>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>

 --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student List</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #dff6ff, #e6f0ff);
      padding: 20px;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      font-size: 32px;
      color: #333;
      margin-bottom: 30px;
    }

    form.search-form {
      display: flex;
      justify-content: center;
      margin-bottom: 25px;
    }

    input[type="text"] {
      padding: 10px 15px;
      border: 1px solid #ccc;
      border-radius: 8px 0 0 8px;
      width: 320px;
      outline: none;
    }

    button.search-btn {
      padding: 10px 18px;
      background-color: #00bcd4;
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 0 8px 8px 0;
      cursor: pointer;
    }

    button.search-btn:hover {
      transform: scale(1.05);
    }

    .delete-top-wrapper {
      display: flex;
      justify-content: flex-start;
      margin-bottom: 10px;
      align-content: center;

      align-items: center;
      align-self: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th,
    td {
      padding: 14px 16px;
      text-align: left;
      border: 1px solid #eee;
      vertical-align: middle;
    }

    th {
      background-color: #f1faff;
      color: #333;
      font-weight: 600;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e0f7fa;
    }

    .table-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .btn {
      position: relative;
      display: inline-block;
      padding: 10px 18px;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      background-size: 300% 100%;
      transition: all 0.4s ease-in-out;
      z-index: 1;
      overflow: hidden;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .btn::before {
      content: '';
      position: absolute;
      left: -100%;
      top: 0;
      width: 300%;
      height: 100%;
      background: rgba(255, 255, 255, 0.15);
      transform: skewX(-45deg);
      transition: left 0.6s ease;
      z-index: 0;
      align-content: center;
      align-items: center;
    }

    .btn:hover::before {
      left: 100%;
    }

    .edit-btn {
      background-image: linear-gradient(to right, #00c6ff, #0072ff, #00c6ff);
      width: 75px;
    }

    .delete-btn,
    .delete-selected-btn {
      background-image: linear-gradient(to right, #ff416c, #ff4b2b, #ff416c);
    }

    .btn:hover {
      transform: scale(1.05);
      background-position: right center;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .btn:active {
      transform: scale(0.98);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .custom-pagination {
      display: flex;
      justify-content: center;
      gap: 8px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .custom-pagination .page {
      padding: 10px 16px;
      border-radius: 8px;
      background: #e0f7fa;
      color: #00796b;
      font-weight: bold;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .custom-pagination .page:hover {
      background: #26c6da;
      color: white;
      transform: scale(1.05);
    }

    .custom-pagination .page.active {
      background: #00acc1;
      color: white;
      pointer-events: none;
    }

    .custom-pagination .page.disabled {
      background: #ccc;
      color: #777;
      pointer-events: none;
      cursor: not-allowed;
    }

    .button-wrapper {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .add-button {
      width: 22%;
      padding: 16px 20px;
      margin-top: 30px;
      margin-bottom: 20px;
      background: linear-gradient(135deg, #00f0ff, #00ff9d);
      border: none;
      border-radius: 14px;
      color: #001c1f;
      font-size: 18px;
      font-weight: 700;
      letter-spacing: 0.5px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      transition: all 0.4s ease-in-out;
      box-shadow: 0 12px 30px rgba(0, 255, 210, 0.25),
        0 4px 8px rgba(0, 255, 255, 0.25);
      backdrop-filter: blur(8px);
      position: relative;
      overflow: hidden;
    }

    .add-button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -150%;
      width: 300%;
      height: 100%;
      background: linear-gradient(
        120deg,
        rgba(255, 255, 255, 0.2) 0%,
        rgba(255, 255, 255, 0.4) 50%,
        rgba(255, 255, 255, 0.2) 100%
      );
      transform: skewX(-25deg);
      transition: left 0.5s ease;
    }

    .add-button:hover::before {
      left: 100%;
    }

    .add-button:hover {
      transform: scale(1.05) translateY(-3px);
      background: linear-gradient(135deg, #00ff9d, #00f0ff);
      box-shadow: 0 16px 40px rgba(0, 255, 190, 0.4),
        0 0 20px rgba(0, 255, 255, 0.4), inset 0 0 8px rgba(255, 255, 255, 0.1);
    }

    .add-button:active {
      transform: scale(0.97);
      box-shadow: 0 8px 20px rgba(0, 255, 255, 0.2);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Student List</h1>

    <!-- Search Form -->
    <form class="search-form" action="{{ url('search') }}" method="GET">
      <input type="text" name="search" placeholder="Search by name" value="{{ $search ?? '' }}" />
      <button type="submit" class="search-btn">Search</button>
    </form>

    <!-- Student Table and Bulk Delete -->
    <form action="{{ url('delete-multi') }}" method="POST">
      @csrf

      <!-- Delete Selected Button Above Table -->
      <div class="delete-top-wrapper">
        <button type="submit" class="btn delete-selected-btn">Delete Selected</button>
      </div>

      <table>
        <thead>
          <tr>
            <th>Select</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
          <tr>
            <td>
              <input type="checkbox" name="ids[]" value="{{ $student->id }}" />
            </td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->created_at->format('d M Y') }}</td>
            <td>
              <div class="btn-group">
                <a href="{{ url('edit/'.$student->id) }}" class="btn edit-btn">Edit</a>
                <form action="{{ url('delete/'.$student->id) }}" method="POST" style="display:inline;">
                  @csrf
                  <button type="submit" class="btn delete-btn">Delete</button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </form>

    <!-- Add Student Button -->
    <div class="button-wrapper">
      <a href="{{ url('add') }}" class="add-button">+ Add Student</a>
    </div>

    <!-- Pagination -->
    @if ($students->hasPages())
    <div class="custom-pagination">
      <a href="{{ $students->previousPageUrl() }}" class="page {{ $students->onFirstPage() ? 'disabled' : '' }}">
        &laquo;
      </a>
      @foreach ($students->getUrlRange(1, $students->lastPage()) as $page => $url)
      <a href="{{ $url }}" class="page {{ $students->currentPage() == $page ? 'active' : '' }}">
        {{ $page }}
      </a>
      @endforeach
      <a href="{{ $students->nextPageUrl() }}" class="page {{ !$students->hasMorePages() ? 'disabled' : '' }}">
        &raquo;
      </a>
    </div>
    @endif
  </div>
</body>
</html>




