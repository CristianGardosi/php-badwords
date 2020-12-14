<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start PHP</title>
</head>

<body>

    <div class="container">

        <h1>Stray heart</h1>
        <h2>Green Day</h2>

        <!-- Variabile testo canzone -->
        <?php
            $stray_heart_lyrics = 'I lost my way, oh baby, this stray heart
            Went to another, can you recover, baby?
            Oh, you\'re the only one that I\'m dreamin\' of
            Your precious heart was torn apart by me and you
            You\'re not alone, oh, and now I\'m where I belong
            We\'re not alone, oh, I\'ll hold your heart and never let go
            Everything that I want, I want from you
            But I just can\'t have you
            Everything that I need, I need from you
            But I just can\'t have you
            I said a thousand times and now a thousand one
            We\'ll never part, I\'ll never stray again from you
            This dog is destined for a home to your heart
            We\'ll never part, I\'ll never stray again from you
            You\'re not alone, oh, and now I\'m where I belong
            We\'re not alone, oh, I\'ll hold your heart and never let go
            Everything that I want, I want from you
            But I just can\'t have you
            Everything that I need, I need from you
            But I just can\'t have you
            You\'re not alone, oh, and now I\'m where I belong
            We\'re not alone, oh, I\'ll hold your heart and never let go
            Everything that I want, I want from you
            But I just can\'t have you
            Everything that I need, I need from you
            But I just can\'t have you
            Everything that I want, I want from you
            But I just can\'t have you
            Everything that I need, I need from you
            But I just, just can\'t have you';
        ?>
        
        <!-- Print lyric base senza censura utilizzando ECHO -->
        <p>
        <?php echo $stray_heart_lyrics ?>
        </p>

         <!-- S T R L E N, conteggio numero di caratteri lyric -->
         <?php $lyric_length = strlen($stray_heart_lyrics); ?>

        <small>
            <?php echo 'Curiosità! Il testo della canzone contiene: ' . $lyric_length . ' caratteri.'; ?>
        </small>

        <!-- Censura testo mediande utilizzo query string. Utilizzo la parola badword come key della QS e il valore ad essa associato di volta in volta sarà la parola che si trasformerà in maniera dinamica in *** -->
        <?php $badword = $_GET["badword"];?>
        
        <a href="?badword=you">Clicca per mostrare il testo con la censura</a>

        <h3>Testo censurato (NOT YOU)</h3>

        <p><?php echo str_replace($badword, '***', $stray_heart_lyrics) ?></p>
        

        <!-- Link alla pagina discografia completa Green Day -->
        <a href="./discografia.php?title=Discografia">
            <button>
                Vai alla discografia completa della band!
            </button>
        </a>

    </div>

</body>

</html>
