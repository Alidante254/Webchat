<main>
      <section class="form-container">
         <h1>Welcome Back!</h1>
         <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
   
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" class="btn">Login</button>
         </form>
         <span>or</span>
            
            <button id="google-signin" class="google-sign"><i class="bi bi-google"></i>Sign in with Google</button>

            <script>
               document.getElementById('google-signin').addEventListener('click', function () {
                  
               });
            </script>
         <span>Don't have an account? <a href="/app.php?page=signup">Sign Up</a></span>
      </section>
   </main>
   
