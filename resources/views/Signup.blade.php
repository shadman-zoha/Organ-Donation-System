<h1>Signup Page</h1>
<form method="POST" action="signup"> @csrf
    Email: <input name='email' type="text">
    <br><br>
    Password: <input name="password" type="password">
    <br><br>
    <button type="submit">Submit</button>
</form>
