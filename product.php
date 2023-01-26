    <section class="product-page">
        <div class="container">
            <div class="main">
                <div class="titleproduct">
                    <h1 class="textproduct">
                        Nos Offres
                    </h1>
                </div>
                <section class="cards">
                    <div class="containerboxproduct">
                        <article class="boxproduct pack-apprenti">
                            <div class="cardcontent apprenti">
                                <h2 class="textbox">Pack Apprenti</h2>
                                <span class="price">150€</span>
                                <p class="descriptionbox">
                                    Le parfait pack pour mettre un premier pas dans le vaste monde de la domotique et équiper votre maison.
                                </p><br>
                            </div>
                        </article>
                        <article class="boxproduct pack-lumineux">
                            <div class="cardcontent lumineux">
                                <h2 class="textbox">Pack Lumineux</h2>
                                <span class="price">450€</span>
                                <p class="descriptionbox">
                                Envie d'illumer votre journée ? Avec ce système lumineux au point, ce pack est fait pour vous.
                                </p><br>
                            </div>
                        </article>
                        <article class="boxproduct pack-vert">
                            <div class="cardcontent vert">
                                <h2 class="textbox">Pack Main Verte</h2>
                                <span class="price">200€</span>
                                <p class="descriptionbox">
                                Envie de faire un geste pour l'environement et votre portefeuille ? Vous trouverez ici des objets pour vous y aider.
                                </p><br>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <script>
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

    </script>