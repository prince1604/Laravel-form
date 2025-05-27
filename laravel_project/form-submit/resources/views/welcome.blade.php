{{-- <h2>
{{__('welcome.heading1') }}
</h2>

<h4>{{__('welcome.subheading') }}</h4>

<a href="/about">{{__('welcome.about') }}</a>
<br>
<br>
<a href="/contact">{{__('welcome.contectUs') }}</a>
<br>
<br>
<a href="/home">{{__('welcome.home') }}</a>


<h1>{{__('welcome.aboutName',["name"=>"laravel"])  }}</h1>

<h1>Choose one langage</h1>
<a href="/setlang/en">English</a>
<br>
<br>
<a href="/setlang/guj">ગુજ્રાતી</a>
<br>
<br>
<a href="/setlang/hi">हिंदी</a>
 --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Localized Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
             margin: 0;
             padding: 40px 20px;
             background: linear-gradient(to right, #f2f2f2, #e0f7fa);
             color: #333;
             text-align: center;">

    <!-- Page Title -->
    <h2 style="font-size: 36px; margin-bottom: 10px; animation: fadeSlideDown 1s ease-out;">
        {{ __('welcome.heading1') }}
    </h2>

    <h4 style="font-size: 22px; color: #555; margin-bottom: 30px; animation: fadeSlideDown 1.5s ease-out;">
        {{ __('welcome.subheading') }}
    </h4>

    <!-- Navigation Buttons -->
    <div style="margin-bottom: 40px;">
        <a href="/about" style="display: inline-block; margin: 12px; padding: 12px 28px;
            background: #007bff; color: white; text-decoration: none; border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 20px rgba(0, 123, 255, 0.5)'"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(0, 123, 255, 0.3)'">
            {{ __('welcome.about') }}
        </a>

        <a href="/contact" style="display: inline-block; margin: 12px; padding: 12px 28px;
            background: #28a745; color: white; text-decoration: none; border-radius: 8px;
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 20px rgba(40, 167, 69, 0.5)'"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(40, 167, 69, 0.3)'">
            {{ __('welcome.contectUs') }}
        </a>

        <a href="/home" style="display: inline-block; margin: 12px; padding: 12px 28px;
            background: #ffc107; color: black; text-decoration: none; border-radius: 8px;
            box-shadow: 0 4px 12px rgba(255, 193, 7, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;"
           onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 20px rgba(255, 193, 7, 0.5)'"
           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(255, 193, 7, 0.3)'">
            {{ __('welcome.home') }}
        </a>
    </div>

    <!-- About Message -->
    <h1 style="color: #6f42c1; font-size: 30px; animation: fadeSlideUp 2s;">
        {{ __('welcome.aboutName', ['name' => 'Laravel']) }}
    </h1>

    <!-- Language Switcher -->
    <h2 style="margin-top: 50px; font-size: 24px; animation: fadeSlideUp 2.5s;">Choose Your Language</h2>

    <div style="margin-top: 20px;">
        <a href="/setlang/en" style="margin: 10px; font-size: 18px; color: #007bff;
            text-decoration: none; padding: 5px 10px;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.3s;"
           onmouseover="this.style.borderBottom='2px solid #007bff'"
           onmouseout="this.style.borderBottom='2px solid transparent'">English</a>

        <a href="/setlang/guj" style="margin: 10px; font-size: 18px; color: #28a745;
            text-decoration: none; padding: 5px 10px;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.3s;"
           onmouseover="this.style.borderBottom='2px solid #28a745'"
           onmouseout="this.style.borderBottom='2px solid transparent'">ગુજરાતી</a>

        <a href="/setlang/hi" style="margin: 10px; font-size: 18px; color: #dc3545;
            text-decoration: none; padding: 5px 10px;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.3s;"
           onmouseover="this.style.borderBottom='2px solid #dc3545'"
           onmouseout="this.style.borderBottom='2px solid transparent'">हिंदी</a>
    </div>

    <!-- CSS Animations -->
    <style>
        @keyframes fadeSlideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeSlideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    

</body>
</html>
