<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discografia</title>
</head>

<body>

    <!-- Key query string -->
    <?php
        $title = $_GET['title'];
    ?>
    <!-- Value della query string printato come titolo di pagina -->
    <h1> <?php echo $title; ?> </h1>

    <ul>
        <li>
            <h3>
            Kerplunk
            </h3>
        </li>
        <li>
            <h3>
                Dookie
            </h3>
        </li>
        <li>
            <h3>
                Insomniac
            </h3>
        </li>
        <li>
            <h3>
                Warning
            </h3>
        </li>
        <li>
            <h3>
                America Idiot
            </h3>
        </li>
    </ul>

</body>

</html>