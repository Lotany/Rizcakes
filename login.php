<div class="form-popup" id="myForm">
    <form action="inc/login.php" method="post" class="form-container">
        <label for="user">Username</label>
        <input type="text" name="user">
        <label for="pass">Password</label>
        <input type="password" name="pass">
        <button class="btn" name="submit" type="submit">Login</button>
        <button type="button" class="btn cancel" onclick="closeLogin()">close</button>
    </form>
</div>