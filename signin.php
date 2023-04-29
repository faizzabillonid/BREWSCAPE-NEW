<?php
    include('partials/header.php')
?>
    <div class="form-container">
        <form action="" class="form">
            <h2>SIGN IN</h2>
            <div class="row-grid">
                <div class="row">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required>
                </div>

                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="row">
                    <button id="signinbtn"><a href="signup.php">Sign In</a></button>

                    <span class="registerlink">You don't have an account? <a href="signup.html">Sign Up Here!</a></span>
                </div>
            </div>
        </form>
        <div class="side">
            <img src="\Photos\cafelogin.jpg" alt="">
        </div>
    </div>

<?php
    include('partials/footer.php')
?>