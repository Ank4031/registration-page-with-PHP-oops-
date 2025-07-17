

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 98vh;
            background: repeating-linear-gradient(45deg, #ffffff00, #ffffff33 40px, transparent 80px), radial-gradient(circle at bottom right, #000563 50%, white);
            min-width: 400px;
            min-height: 400px;
        }
        form{
            text-align: center;
            margin-top: 50px;
            background: #ffffff73;
            padding: 30px;
            font-size: 1.4rem;
            font-family: monospace;
            font-weight: bold;
            color: black;
            border-radius: 10px;
            width: 25%;
        }
        form input{
            width: 88%;
            height: 8%;
            border-radius: 15px;
            border: none;
            padding-left: 10px;
            margin-top: 10px;
        }
        form input:hover{
            background: #93a2ff;
        }
        form #submit{
            margin-top: 20px;
            margin-bottom: 40px;
            font-size: 1.1rem;
            font-family: monospace;
            font-weight: bold;
            color: black;
            height: 30px;
            width: 85px;
            transition: 0.5s;
        }
        form #submit:hover{
            background: black;
            color: white;
        }
        p{
            font-size: 30px;
        }
        .message{
            color: white;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <form action="" method = "post">
        <p>REGISTER...</p>
        <a>Name:</a> <br><input type="text" name="name">
        <br>
        <a>Username:</a> <br><input type="text" name="username">
        <br>
        <a>Password:</a> <br><input type="text" name="password">
        <br>
        <input id='submit' type="submit" value="submit">
    </form>
    <div class="message"></div>

</body>
<script>

    document.querySelector("form").addEventListener("submit", function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        fetch("formHandle.php",{
            method: 'POST',
            body: formData
        })
        .then(res => {
            console.log(res);
            return res.text();
        })
        .then(data => {
            document.querySelector(".message").innerHTML = `<h2>${data}</h2>`;
        })
        .catch(er => {
            document.querySelector(".message").innerHTML = `<h2>${er}</h2>`;
        })
    })
</script>
</html>