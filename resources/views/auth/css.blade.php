<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
     <!-- JS -->
     <script src="assets/vendor/jquery/jquery.min.js"></script>
     <script src="assets/js/main.js"></script>

     <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f7fafc;
        }
        .main {
            padding: 50px 0;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .signin-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 30px;
        }
        .signin-image {
            max-width: 400px;
            text-align: center;
        }
        .signin-image figure img {
            width: 100%;
            height: auto;
        }
        .signin-image .signup-image-link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
        }
        .form-title {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 700;
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
            margin-left: 5px;

        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="number"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px 10px 10px 40px; 
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }
        .agree-term {
        margin-right: 10px;
    }
    .label-agree-term {
        font-size: 14px;
        color: #333;
    }
    .label-agree-term .term-service {
        color: #333;
        text-decoration: none;
        font-weight: bold;
    }
    .label-agree-term .term-service:hover {
        color: #0792f4;
        text-decoration: underline;
    }
        .form-submit {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #333;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.3s;
        }
        .form-submit:hover {
            background: #0792f4;
        }
        .social-login {
            margin-top: 20px;
            text-align: center;
        }
        .social-login .social-label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            color: #333;
        }
        .social-login .socials {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .social-login .socials li {
            list-style: none;
        }
        .social-login .socials li a {
            display: block;
            width: 40px;
            height: 40px;
            border: 1px solid #ddd;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: #333;
            font-size: 18px;
            transition: background 0.3s, color 0.3s;
        }
        .social-login .socials li a:hover {
            background: #333;
            color: #fff;
        }
    </style>
    