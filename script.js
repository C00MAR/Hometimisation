/* Formulaire */

const nomInput = document.querySelector('#nom');
const prenomInput = document.querySelector('#prenom');
const mailInput = document.querySelector('#email');
const allInput = document.querySelectorAll('.input');
const button = document.querySelector('.inscr p');
const form = document.querySelector('.form');
const succes = document.querySelector('.succes');
const ctabtn = document.querySelector('.cta-btn');
const formdispetat = document.querySelector('.formulaire');

const nameReg = /^[a-zA-Z0-9-_]+$/;
const mailReg = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;

let formIsOk = false

let validInput = {
    nom : 0,
    prenom : 0,
    mail : 0,
}
ctabtn.addEventListener("click", function(dispform){
    dispform.preventDefault();
    formdispetat.style.display = "block"
});
nomInput.addEventListener('input', () => {
    if (nomInput.value.search(nameReg)  == 0) {
        document.querySelector('#error-symbol-nom').style.display = "none";
        validInput.nom = 1
        nomInput.style.border = '1px solid rgba(81, 150, 2)'
        nomInput.style.background = 'rgba(113, 212, 0, 0.4)'
    } else if (nomInput.value.search(nameReg) == -1) {
        document.querySelector('#error-symbol-nom').style.display = "inline";
        validInput.nom = 0
        nomInput.style.border = '1px solid rgba(212, 42, 0, 1)'
        nomInput.style.background = 'rgba(212, 42, 0, 0.4)'
    }
})

prenomInput.addEventListener('input', () => {
    if (prenomInput.value.search(nameReg) == 0) {
        document.querySelector('#error-symbol-prenom').style.display = "none";
        validInput.prenom = 1
        prenomInput.style.border = '1px solid rgba(81, 150, 2)'
        prenomInput.style.background = 'rgba(113, 212, 0, 0.4)'
    } else if (prenomInput.value.search(nameReg) == -1) {
        document.querySelector('#error-symbol-prenom').style.display = "inline";
        validInput.prenom = 0
        prenomInput.style.border = '1px solid rgba(212, 42, 0, 1)'
        prenomInput.style.background = 'rgba(212, 42, 0, 0.4)'
    }
})

mailInput.addEventListener('input', () => {
    if (mailInput.value.search(mailReg) == 0) {
        document.querySelector('#error-mail').style.display = "none";
        mailInput.style.border = '1px solid rgba(81, 150, 2)'
        mailInput.style.background = 'rgba(113, 212, 0, 0.4)'
        validInput.mail = 1
    } else if (mailInput.value.search(mailReg) == -1) {
        document.querySelector('#error-mail').style.display = "inline";
        validInput.mail = 0
        mailInput.style.border = '1px solid rgba(212, 42, 0, 1)'
        mailInput.style.background = 'rgba(212, 42, 0, 0.4)'
    } 
})

for (let i = 0; i < 3; i++){
    allInput[i].addEventListener('input', () => {
        if (validInput.nom == 1 && validInput.prenom == 1 && validInput.mail == 1) {
        formIsOk = true;
        } else {
        formIsOk = false;
        }
        if (formIsOk == true) {
            button.style.backgroundColor = 'rgb(255, 255, 255)'
            button.style.transition = '0.2s'
            button.style.cursor = 'pointer';
            button.addEventListener('click', () => {   
            succes.style.display = "inline"
            setTimeout(fadeForm, 1300);
            function fadeForm()
                {
                    formdispetat.style.transition =  "opacity 0.7s"  
                    formdispetat.style.opacity = "0"
                    setTimeout(removeForm, 1001);
                    function removeForm()
                        {
                            formdispetat.style.display = "none"
                        }
                    }
            })              
        } else {
            button.style.backgroundColor = 'rgb(250, 0, 0)'
            button.style.transition = '0.3s'
            button.style.cursor = 'not-allowed';
        }
    })  
}

/* DarkMode */

const dark = document.querySelector('.darkmode-btn');

dark.addEventListener('click', () => {
    console.log("Boutton cliqué");
    const body = document.body;
    const htmlbg = document.querySelector('.html')
    
    if(body.classList.contains('dark')){
        console.log("Mode changé sur Dark");
            body.classList.add('light');
            body.classList.remove('dark');
            dark.style.transform = "rotate(180deg)"
            dark.style.filter = "invert(1)"


    } else{
        console.log("Mode changé sur Light");
            body.classList.add('dark');
            body.classList.remove('light');
            dark.style.transform = "rotate(0deg)"
            dark.style.filter = "invert(0)"
        }
})


/* Burger */

var btn = false

function Click() {
    if (btn == false) {
        btn = true
        document.getElementsByClassName('menu')[0].style.display = 'block';
    } else if (btn == true) {
        btn = false
        document.getElementsByClassName('menu')[0].style.display = 'none';
    }
}

/* LocalStorage */

function LS()
{
let nom,prenom,email,password;
nom=document.getElementById("nom").value;
prenom=document.getElementById("prenom").value;
email=document.getElementById("email").value;
password=document.getElementById("password").value;

localStorage.setItem("nom", nom)
localStorage.setItem("prenom",prenom)
localStorage.setItem("email",email)
localStorage.setItem("password",password)
}

/* Animation TypeWriter */

const texts = ["confort", "sécurité"];
let count = 0;
let index = 0;
let currentText = "";
let letter = "";

(function type(){
    if (count === texts.length){
        count = 0;
    }
    currentText = texts[count];
    letter = currentText.slice(0, ++index);

    document.querySelector(".typing").textContent = letter;
    if (letter.length === currentText.length){
        count++;
        index = 0;
    }
    setTimeout(type, 400);
})();

/* Notre marque Anim JS 


const options = document.querySelectorAll(".our_card")
    console.log(options)
    options.forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll(".our_card").forEach(removeActive => {
                removeActive.classList.remove("active")
            })
            option.classList.add("active")
        })
    })*/ 