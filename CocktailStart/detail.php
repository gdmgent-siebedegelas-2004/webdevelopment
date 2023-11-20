
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktails</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php">Cocktails</a>
    </header>
    <main>
    <h1>Mojito</h1>
    <img src="images/cocktails/mojito.png">
    <p>De Mojito wordt gemaakt van witte rum, een halve limoen in partjes, rietsuiker en muntblaadjes en wordt afgetopt met bruiswater. Crushed ice mag bij deze cocktail niet ontbreken. Met een Mojito haal je de zomerse sfeer van Cuba in huis.</p>
    <h2>Ingrediënten</h2>
    <dl>
        <dt>rietsuiker</dt>
        <dd>2.0 theelepel</dd><dt>limoensap</dt>
        <dd>20.0 ml</dd><dt>verse munt</dt>
        <dd>16.0 blaadjes</dd><dt>bruiswater</dt>
        <dd>90.0 ml</dd><dt>witte rum</dt>
        <dd>45.0 ml</dd><dt>ijsblokjes</dt>
        <dd>4.0 </dd>
    </dl>    
    <h2>Recept</h2>
    Doe de suiker, limoensap, muntblaadjes en bruiswater in een hoog glas (of cocktailshaker) en kneus met een muddler. Voeg de rum en de ijsblokjes toe en schud goed. Enjoy je mojito!    
    <h2>Reviews</h2>
    <div class="review">
        <div class="rating">****</div>
        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.</div>            
        <div class="user">Door: Dieter DW</div>
    </div>
    <div class="review">
        <div class="rating">****</div>
        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.</div>            
        <div class="user">Door: Dieter DW</div>
    </div>
    <h3>Plaats een review</h3>
    <form>
        <label>
            <span>Naam</span>
            <input type="text">
        </label>
        <label for="email">
            <span>E-mail</span>
            <input type="email">
        </label>
        <label for="review">
            <span>Rating</span>
            <input type="number" min="0" max="5" value="3">
        </label>
        <label for="review">
            <span>Review</span>
            <textarea cols="30" rows="10"></textarea>
        </label>
        <button>Verstuur</button>
    </form>

    </main>
</body>
</html>