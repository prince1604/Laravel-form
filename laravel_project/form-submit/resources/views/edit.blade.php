{{-- <div>
    <h1>Update Student Data</h1>

    <form action="/edit-Student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{$data->name}}" placeholder="Enter Name">
        <br><br>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Enter Email">
        <br><br>
        <input type="text" name="phone" value="{{$data->phone}}" placeholder="Enter Name">
        <br><br>
        <button>Update</button>
        <a href="/list">Cancel</a>
    </form>
</div> --}}



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Student Data</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #1e1e2f, #0f0f1a);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-wrapper {
      background: rgba(255, 255, 255, 0.05);
      border: 2px solid transparent;
      border-radius: 15px;
      padding: 30px 40px;
      width: 360px;
      backdrop-filter: blur(12px);
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
      position: relative;
      border-image: linear-gradient(145deg, #00eaff, #a500ff) 1;
    }

    .form-wrapper h1 {
      color: #ffffffdd;
      font-size: 22px;
      margin-bottom: 25px;
      text-align: center;
    }

    .form-wrapper input[type="text"] {
      width: 100%;
      padding: 10px 15px;
      margin-bottom: 18px;
      border: 2px solid transparent;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
      font-size: 15px;
      border-image: linear-gradient(120deg, #00eaff, #a500ff) 1;
    }

    .form-wrapper input::placeholder {
      color: #ccc;
    }

    .form-wrapper button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(120deg, #00eaff, #a500ff);
      border: none;
      border-radius: 8px;
      color: #fff;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .form-wrapper button:hover {
      transform: scale(1.03);
    }

    .form-wrapper a {
      display: block;
      margin-top: 15px;
      text-align: center;
      color: #bfbfff;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .form-wrapper a:hover {
      color: #ffffff;
    }
  </style>
</head>
<body>

  <div class="form-wrapper">
    <h1>Update Student Data</h1>
    <form action="/edit-Student/{{$data->id}}" method="post">
      @csrf
      <input type="hidden" name="_method" value="put">

      <input type="text" name="name" value="{{$data->name}}" placeholder="Enter Name" required>
      <input type="text" name="email" value="{{$data->email}}" placeholder="Enter Email" required>
      <input type="text" name="phone" value="{{$data->phone}}" placeholder="Enter Phone" required>

      <button type="submit">Update</button>
      <a href="/list">Cancel</a>
    </form>
  </div>

</body>
</html>
