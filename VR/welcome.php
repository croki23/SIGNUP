<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-color: #f6dada; 
            font-family: Arial, sans-serif; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #form {
            background-color: #fff7e8;
            width: 30%;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); 
        }

        #form h2 {
            text-align: center;
            color: #333; 
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #555; 
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc; 
            border-radius: 5px;
            box-sizing: border-box; 
        }

        #btn {
            color: white;
            background-color: #56ab2f; 
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        #btn:hover {
            background-color: #439a24; 
        }

        @media screen and (max-width: 700px) {
            #form {
                width: 80%; 
                padding: 30px; 
            }
        }

   
        #login-success {
    color: green;
    text-align: center;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
}

    </style>
</head>
<body>
    <div id="form">
        <h2>Login Form</h2>
       
        <button id="btn">Login</button>
    </div>
    <h1 id="login-success">LOGIN SUCCESSFUL!!</h1>
</body>
</html>
