<div>
    <h1>Profile page</h1>
    <!-- An unexamined life is not worth living. - Socrates -->
    @if(session('user'))
    <h1>Welcome, {{ session ('user')}}</h1>
    @else
    <h1>No user found in session <a href="login">Login</a></h1>
    @endif

    {{ session(key: 'alldata')['password'] }}
    <a href="logout">logout</a>
</div>
