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
            But I just, just can\'t have you'
        ?>
        <!-- Print della variabile contenente il testo della canzone in un <p> -->
        <p> <?php echo $stray_heart_lyrics ?> </p>

    </div>

</body>

</html>