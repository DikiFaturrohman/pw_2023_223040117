<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Login</title>
    <style>
      * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  background-color: #f2f2f2;
}

.login-form {
  background-color: #fff;
  margin: 50px auto;
  max-width: 400px;
  padding: 20px;
  text-align: center;
}

h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input {
  border: 1px solid #ccc;
  border-radius: 3px;
  display: block;
  font-size: 16px;
  padding: 10px;
  width: 100%;
  margin-bottom: 20px;
}

button {
  background-color: #333;
  border: none;
  color: #fff;
  cursor: pointer;
  display: block;
  font-size: 16px;
  padding: 10px;
  width: 100%;
}

button:hover {
  background-color: #fff;
  color: #333;
}
    </style>
  </head>
  <body>
    <form class="login-form">
      <h2>Masuk ke Akun Anda</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Masuk</button>
    </form>
  </body>
</html>