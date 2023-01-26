<section class="formreviewbox">
    <div class="formbox">
        <h2 class="drop">Laissez un avis</h2>
        <form action="sendreview.php" method="POST" class="reviewform">
            <input type="text" name="titre" id="titrereview" placeholder="Titre" class="inputtitre">
            <br>
            <input type="text" name="content" id="contentreview" placeholder="Avis / Commentaire" class="inputavis">
            <ul class="star">
                <input value="1" type="radio" class="starradio" name="star" id="star">
                <label for="star" class="radiolabel">★</label>
                <input value="2" type="radio" class="starradio" name="star" id="star2">
                <label for="star2" class="radiolabel">★★</label>
                <input value="3" type="radio" class="starradio" name="star" id="star3">
                <label for="star3" class="radiolabel">★★★</label>
                <input value="4" type="radio" class="starradio" name="star" id="star4">
                <label for="star4" class="radiolabel">★★★★</label>
                <input value="5" type="radio" class="starradio" name="star" id="star5">
                <label for="star5" class="radiolabel">★★★★★</label>
            </ul>
            <button type="submit" class="reviewbtn">Commenter</button>
        </form>
    </div>
</section>