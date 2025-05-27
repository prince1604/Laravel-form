{{-- <div>
    <h1>Add New Students</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br><br>
        <input type="text" name="email" placeholder="Enter Email">
        <br><br>
        <input type="text" name="phone" placeholder="Enter Phone">
        <br><br>
        <input type="text" name="batch" required>
        <br><br>
        <button>Add Student</button>
    </form>
</div>
 --}}

 <!-- resources/views/add.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <style>
        /* Reset & Background */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* 3D Futuristic Card */
        .form-container {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px;
            backdrop-filter: blur(12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 40px rgba(0, 255, 255, 0.1);
            width: 380px;
            animation: fadeInUp 1s ease-in-out;
            transform: perspective(1000px) rotateX(0deg);
        }

        h1 {
            text-align: center;
            color: #00ffff;
            font-size: 26px;
            margin-bottom: 30px;
            letter-spacing: 1px;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
            animation: slideDown 1s ease;
        }

        input[type="text"] {
            width: 100%;
            padding: 14px;
            margin: 12px 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.4s ease;
            outline: none;
        }

        input[type="text"]::placeholder {
            color: #ccc;
        }

        input[type="text"]:focus {
            border-color: #00ffff;
            background: rgba(0, 255, 255, 0.1);
            box-shadow: 0 0 12px #00ffff80;xax
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 20px;
            background: linear-gradient(90deg, #00ffff, #1abc9c);
            border: none;
            border-radius: 12px;
            color: #111;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 12px rgba(0, 255, 255, 0.5);
        }

        button:hover {
            transform: scale(1.03) translateY(-2px);
            box-shadow: 0 0 24px rgba(0, 255, 255, 0.8);
            background: linear-gradient(90deg, #1abc9c, #00ffff);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Scrollbar Hidden for Clean Look */
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Add New Student</h1>
        <form action="{{ url('/add') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter Name" required>
            <input type="text" name="email" placeholder="Enter Email" required>
            <input type="text" name="phone" placeholder="Enter Phone" required>
            <input type="text" name="batch" placeholder="Enter Batch (e.g., 2025)" required>
            <button type="submit">Add Student</button>
        </form>
    </div>
</body>
</html>


