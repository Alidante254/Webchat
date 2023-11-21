<main>
      <section class="form-container">
            <h1>Welcome to AfiChat!</h1>
            <form action="signup.php" method="post">
                  <label for="new-username">Username:</label>
                  <input type="text" id="new-username" name="new-username" required>
      
                  <label for="new-password">Password:</label>
                  <input type="password" id="new-password" name="new-password" required>
      
                  <label for="confirm-password">Confirm Password:</label>
                  <input type="password" id="confirm-password" name="confirm-password" required>
      
                  <button type="submit" class="btn">Sign Up</button>
            </form>
            <span>or</span>
                  
            <button id="google-signin" class="google-sign"><i class="bi bi-google"></i>Sign up with Google</button>

            <script>
            document.getElementById('google-signin').addEventListener('click', function () {
                  
            });
            </script>
            <span>Already have an account? <a href="/app.php?page=login">Log In</a></span>
      </section>
</main>

