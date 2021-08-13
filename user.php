<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Youngjae Kim 40169282" />
    <meta name="description" content="loginpage" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Log in</title>
    <link rel="icon" href="images/icon-moo.png">
    <style>
        body {
            font-family: roboto, Arial, Helvetica, "Droid Sans", sans-serif;
            margin: 0;
            background-image: url("images/loginpage.jfif");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }

        .mainbody {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: rgb(134, 134, 134, 0.5);
            padding: 10px;
            margin: 90px;
            text-align: center;
            border-radius: 30px;
            width: 400px;
            height: max-content;
        }

        .cardinside {
            background-color: white;
            padding: 5px;
            margin: 10px;
            border-radius: 20px;
            height: max-content;
        }

        .cardinside input {
            background-color: rgba(243, 236, 236, 0.5);
            border-color: rgb(158, 160, 161);
            border-radius: 4px;
        }

        .name {
            font-size: 30px;
            font-weight: bold;
            color: rgb(255, 255, 255);
        }

        .Footer {
            color: white;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: rgba(201, 193, 193, 0.712);
        }

        .Footer a {
            color: white;
            font-style: italic;
            font-size: smaller;
        }

        .buttons {
            display: flex;
            padding: 10px;
            justify-content: center;
        }

        .buttons input {
            background-color: rgba(185, 185, 185, 0.4);
            border: none;
            padding: 6px;
            color: rgb(54, 53, 53);
            font-weight: bold;
        }

        .buttons input:hover {
            background-color: rgb(185, 158, 158);
        }
        .message{color: lightslategray; font-weight: bold;}
    </style>
</head>

<body>
    <div class="header">
        <a href="index.html"><img id="logo" src="images/moomoologo.png"></a>
    </div>
    <div class="mainbody">
        <div class="card">
            <span class="name">Successfully Signed up!</span>
            <br/><span class="message">You can now log in!</span>
            <div class="cardinside">
                <p>Email Address <br /> <input type="email" id="email"><br /></p>
                <p>Password <br /> <input type="password" id="password"><br /></p>
                <div class="buttons">
                    <form action="">
                        <input type="submit" id="submit"></form>&nbsp;&nbsp;
                    <a href="~"><input type="button" id="forgetpassword" value="Forget Password?"></a>
                </div>
                <hr style="width: 60%;" />
                
                <h5>Admin? <a href="backstore/order-list.html">Go to Backstore</a></h5>
            </div>
        </div>

        <div class="Footer">
            <nav class="nav justify-content-center">
                <a class="nav-link" href="https://www.facebook.com/" target="_blank">Facebook</a>
                <a class="nav-link" href="https://twitter.com/?lang=en" target="_blank">Twitter</a>
                <a class="nav-link" href="https://www.instagram.com/" target="_blank">Instagram</a>
                <a class="nav-link" href="https://www.pinterest.ca/" target="_blank">Pinterest</a>
            </nav>
            Photos contributors:
            <a
                href="https://unsplash.com/@neonbrand?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">NeONBRAND</a>
            on
            <a
                href="https://unsplash.com/s/photos/grocery?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
        </div>
</body>

</html>