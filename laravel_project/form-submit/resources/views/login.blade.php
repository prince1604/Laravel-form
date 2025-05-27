<div>
    <h1>Login</h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name="user" placeholder="enter name">
    <br>
    <br>
    <input type="password" name="password" placeholder="enter password">
    <br>
    <br>
    <button>login</button>
    </form>
</div>
