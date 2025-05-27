{{-- <div>
    <h1> User data </h1>
    <table border="1">
<tr>
    <td> name </td>
    <td> Email </td>
    <td>phone</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
</tr>
@endforeach
    </table>
</div> --}}



{{-- @if($error->any())
@foreach($errors->all() as $error)
<div "color:red">
    {{$error}}
</div>

@endforeach
@endif --}}


{{-- <div>
    <h1> User Login</h1>
    <form action="user" method="POST">
         @csrf
        // <input type="hidden" name="_method" value="delete">
        <input type="text" name="name" placeholder="Enter name" >
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter name" >
        <br>
        <br>
        <button>Submit</button>
    </form>
</div> --}}



<div>
    <h1>Add New User</h1>
    @if(session('message'))
    <sapan class="Success-message">{{ session(key: 'message')}}</sapan>
    @endif

    @if(session('name'))
    <sapan class="Success-message">{{ session(key: 'name')}}</sapan>
    @endif

    {{-- {{ session()->keep(['name']) }}    // flash station ne as it is store karva --}}

    {{-- {{ session()->reflash() }} --}}
    <form action="add" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Enter User name">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter User email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter User phone">
        <br>
        <br>
        <button>Add new User</button>
    </form>
</div>
<style>
    .Success-message{
        background-color: lightgreen;
    border-radius: 2px;
    padding: 2px;
    margin-bottom: 10px;
    display: inline-block;
    }
</style>
