

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="app/Views/pagina_inicial.php">
    <title>Login</title>
    <style>
        body {
            background-image: url('imagens/fundo ppi.jpg');
            background-repeat: no-repeat;
        }
       
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
       
        .login-form {
            background-color: #f2f2f2;
            padding: 50px;
            border-radius: 10px;
        }
       
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
       
        .logo img {
            width: 400px;
            height: 150px;
        }
       
        .form-group {
            margin-bottom: 10px;
        }
       
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
       
        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
       
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }


        .btn:link,
.btn:visited {
    text-transform: uppercase;
    text-decoration: none;
    padding: 15px 40px;
    display: inline-block;
    border-radius: 100px;
    transition: all .2s;
    position: absolute;
}


.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}


.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}


.btn-white {
    background-color: #fff;
    color: #777;
}


.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
}


.btn-white::after {
    background-color: #fff;
}


.btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}


.btn-animated {
    animation: moveInBottom 5s ease-out;
    animation-fill-mode: backwards;
}


@keyframes moveInBottom {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }


    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
    </style>
</head>
<body>


   
    <div class="container">
        <div class="login-form">
            <div class="logo">
                <img src="imagens/logoppi.png" alt="Logo">
           
            </div>
            <center>
            <form action="CCE.controle de estoque.html" method="POST">
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite seu usuário" required><br>
                    <input type="password" id="senha" class="form-control" name="senha" placeholder="Digite sua senha" required> <br>
                    <button <a href="CCE.controle de estoque.html"></a>Entrar no Sistema</button>
            </form>
        </center>
        </div>
    </div>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>



