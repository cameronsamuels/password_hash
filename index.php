<!DOCTYPE html><html lang="en">
  <head>
    <title>password_hash()</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: #eee;
        color: #555;
        font-family: sans-serif;
      }
      h1 {
        position: absolute;
        top: 15px;
        right: 0;
        left: 0;
        margin: 0 10px;
        font-size: 7vmin;
        text-align: center;
        word-break: break-all;
      }
      input {
        box-sizing: border-box;
        display: block;
        width: 256px;
        padding: 10px;
        -webkit-appearance: none;
        background: #fff;
        color: #555;
        border: solid;
        border-radius: 0;
        outline: 0;
        transition: border-radius .2s;
      }
      input[type="password"] {
        border-bottom: 0;
      }
      input[type="password"]:focus {
        border-top-left-radius: 20px; 
        border-top-right-radius: 20px; 
      }
      input[type="password"]:focus + input[type="submit"] {
        border-bottom-left-radius: 20px; 
        border-bottom-right-radius: 20px; 
      }
      input[type="submit"] {
        font-weight: bold;
        cursor: pointer;
      }
      input[type="submit"]:active {
        background: #ddd;
      }
    </style>
  </head>
  <body>
    <h1><?php echo isset($_POST["input"]) ? password_hash($_POST["input"], PASSWORD_DEFAULT) : "password_hash()" ?></h1>
    <form method="post">
      <input type="password" name="input" placeholder="Raw password...">
      <input type="submit">
    </form>
  </body>
</html>
