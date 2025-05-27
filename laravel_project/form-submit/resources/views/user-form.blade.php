<div>
    <h2>Add New User</h2>

{{-- @if($error->any())
@foreach($errors->all() as $error)
<div "color:red">
    {{$error}}
</div>

@endforeach
@endif --}}

    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username" value="{{ old('username') }}"  class="{{ $errors->first('username')?'input-error':''}}">
            <span style="color:red">@error('username'){{$message}}@enderror</span>
        <div>
        <br>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user email" name="email" value="{{ old('email') }}" class="{{ $errors->first('email')?'input-error':''}}">
            <span style="color:red">@error('email'){{$message}}@enderror</span>
        </div>
        <br>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user city" name="city" value="{{ old('city') }}" class="{{ $errors->first('city')?'input-error':''}}">
            <span style="color:red">@error('city'){{$message}}@enderror</span>
        </div>
        <br>
        <div class="input-wrapper">
            <h5>Skill</h5>
            <input type="checkbox" name="skill" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill" value="javascript">
            <label for="javascript">javascript</label>
            <input type="checkbox" name="skill" value="python">
            <label for="python">python</label>
            <input type="checkbox" name="skill" value="java">
            <label for="java">java</label>
            <span style="color:red" >@error('skill'){{$message}}@enderror</span>
        </div>
        <div class="input-warpper"></div>
        <br>
        <button>Add new user</button>
    </form>
</div>
<style>
    input{
        border:orange 1px solid;
        height: 35px;
        width:200px;
        border-radius:2px;
        color: orange;
    }
    input[type='checkbox']{
        height:20px;
        width:40px;
        boreder: orange 1px solid;
        color: orange;

    }
    .input-wrapper{
        margin:10px
    }
    button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: #fff;
        cursor: pointer;
    }
    .input-error{
        border: 1px solid red;
        color:red;
    }
</style>
