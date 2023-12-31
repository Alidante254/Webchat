<main>
      <style>
            main {
                  margin: 0;
                  padding: 0;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  height: 100vh;
                  text-align: center;
            }

            .container {
                  max-width: 600px;
                  width: 100%;
            }

            .error-code {
                  font-size: 120px;
                  font-weight: bold;
                  color: red;
                  margin: 0;
            }

            .error-message {
                  font-size: 24px;
                  color: gray;
                  margin: 20px 0;
            }

            .back-home {
                  text-decoration: none;
                  background-color: orange;
                  color: white;
                  padding: 10px 20px;
                  font-size: 18px;
                  border-radius: 5px;
                  transition: background-color 0.3s ease;
            }

            .back-home:hover {
                  background-color: var(--color-primary);
            }
      </style>
      <div class="container">
            <h1 class="error-code">404</h1>
            <p class="error-message">Oops! The page you're looking for could not be found.</p>
            <a href="/" class="back-home">Back to Home</a>
      </div>
</main>