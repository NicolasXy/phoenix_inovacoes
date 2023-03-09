<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
    
   <div id="topFooter">
        <div class="imagePosition">
            <img id="logoImage" src="./src/images/whiteLogoStartup.png">
        </div>
        <div class="navBarPosition">
            <div class="navBar">

                <div class="btnTop">
                    <div id="text">
                      <a id="btnHome" href="./index.html" id="btnPages">
                        Home
                       </a>
                     </div>
                </div>

                <div class="btnTop test">
                    <div id="text">
                      <a id="btnContact" href="./contact.php" id="btnPages">
                        Contato
                       </a>
                     </div>
                </div>

                <div class="btnTop">
                    <div id="text">
                      <a href="./about.html" id="btnPages">
                        Sobre nós
                       </a>
                     </div>
                </div>

            </div>
        </div>
   </div>

   <div id="contentLabels">
   <form action="adicionar.php" method="POST" >
      <div id="content">  
        <div id="contentTitle">
          <p>Contate-nos!</p>
        </div>

        <div class="labels">
          <p id="titleLabel">Nome Completo</p>
          <textarea id="nameTextArea" name="nome"></textarea>
        </div>  


        <div class="labels">
          <p id="titleLabel">Email</p>
          <textarea id="emailTextArea" name="email"></textarea>
        </div>  

        <div class="labels">
          <p id="titleLabel">Assunto</p>
          <textarea id="subjectTextArea" name="assunto"></textarea>
        </div> 

        <div class="labels">
          <p id="titleLabel">Mensagem</p>
          <textarea id="messageTextArea" name="mensagem"></textarea>
        </div> 

        <button type="submit" name="btn-enviar" id="btnSubmit">
          Enviar
        </button>

      </div>
</form>

   </div>

   <footer>
    
    <div id="footerIcons">
      <div id="iconsOnCenter">
        <div id="a">
        <a href="url">
            <img id="icons" src="./src/images/iconFacebook.png">
        </a>
        </div>

        <div id="a">
         <a href="url">
             <img id="icons" src="./src/images/iconInstagram.png">
        </a>
        </div>

        <div id="a">
         <a href="url">
             <img id="icons" src="./src/images/iconLinkedin.png">
         </a>
        </div> 
      </div>         
    </div>

   </footer>
</body>
</html>