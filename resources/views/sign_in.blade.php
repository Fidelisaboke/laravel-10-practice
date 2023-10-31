@vite(['resources/css/sign_in.css'])
<h1>Sign in</h1>
@if ($errors->any())
    @foreach ($errors->all() as $err)
        <li style="color: red;">{{ $err }}</li>
    @endforeach
@endif
<form action="sign_in/process" method="POST">
    @csrf
    <input type="text" name="user_name" placeholder="Enter username" /><br>
    <span style="color:red;">@error('user_name'){{$message}}@enderror</span>
    <br>
    <input type="password" name="user_pass" placeholder="Enter password" /><br>
    <span style="color:red;">@error('user_pass'){{$message}}@enderror</span>
    <br>
    <button type="submit">Sign In</button>
</form>
@include('universals\footer')
