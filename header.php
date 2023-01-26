    <header>
        <div class="container">
            <nav class="navh">
                <div class="logocontainer">
                    <a href="index.php" class="logo-container">
                        <img src="./Image/logo_transparent_white.png" alt="" class="logo big">
                    </a>
                    <a href="index.php" class="logo-container">
                        <img src="./Image/minimize_white.png" alt="" class="logo minimize">
                    </a>
                </div>
                <div class="menu">
                    <ul class="navh-list">
                        <li class="navh-item">
                            <a href="product_page.php" class="navh-link">Service</a>
                        </li>
                        <li class="navh-item">
                            <a href="blog_page.php" class="navh-link">Blog</a>
                        </li>
                        <li class="navh-item">
                            <a href="login.php" class="navh-link">Connection</a>
                        </li>
                        <li class="navh-item">
                            <a href="our_page.php" class="navh-link">Marque</a>
                        </li>
                    </ul>
                </div>
                <button onclick='Click()' class="icon-burger"><i class="ri-menu-line"></i></button>
                <img src="Image/dark-mode-icon.png" alt="" class="darkmode-btn">
            </nav>
        </div>
        <div class="formulaire" >
            <h1 class="title-form">HomeTimisation Inscription</h1>
            <form action="register_data.php" method="POST" class="form">
                <div class="input_bloc">
                    <label for="nom">Nom</label>
                    <input class="input" type="text" id="nom" placeholder="Nom" autocomplete="on" name="nom">
                    <p class="error" id="error-symbol-nom">Votre Nom ne peut pas contenir de chractères spéciaux (uniquement - ou _ )</p>
                </div>
                <div class="input_bloc">
                    <label for="prenom">Prénom</label>
                    <input class="input" type="text" id="prenom" placeholder="Prénom" autocomplete="on" name="prenom">
                    <p class="error" id="error-symbol-prenom">Votre Prénom ne peut pas contenir de chractères spéciaux (uniquement - ou _ )</p>
                </div>
                <div class="input_bloc">
                    <label for="email">Adresse mail</label>
                    <input class="input" type="email" id="email" placeholder="Adresse mail" autocomplete="on" name="email">
                    <p class="error" id="error-mail">Votre adresse mail n'est pas valide</p>
                </div>
                <div class="input_bloc">
                    <label for="password">Mot de Passe</label>
                    <input class="input" type="password" id="password" placeholder="Mot de Passe" autocomplete="on" name="password">
                </div>
                <button type="submit" onclick="LS()" class="inscr">
                        Inscription
                </button>
                <input type="hidden" value=document.write(generateRandomString(6)) name="referal" id="referal">
                Voici votre code de parainage :
                <script>
                    const generateRandomString = (num) => {
                    const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                    let result1= Math.random().toString(36).substring(0,num);       
                    return result1;
                    }
                    document.write(generateRandomString(6));
                </script>
                <p class="succes">Votre Inscription à bien été prise en compte</p>
            </form>
            
            <script>
                function LS()
                    {
                    let nom,prenom,email,password;
                    nom=document.getElementById("nom").value;
                    prenom=document.getElementById("prenom").value;
                    email=document.getElementById("email").value;
                    password=document.getElementById("password").value;
                    localStorage.setItem("nom", nom)
                    localStorage.setItem("prenom", prenom)
                    localStorage.setItem("email", email)
                    localStorage.setItem("password", password)
                    }
            </script>
        </div>
    </header>