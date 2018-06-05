<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <form action="/show.php" method="post">
            <legend>
                My Resume
            </legend>
            <?php for($i=0;$i<10;$i++){ ?>
                <br> Name :
                <input type="text" name="name[]" value="<?php echo ($i+1); ?>">
                Score :
                <input type="number" name="score[]">
            <?php } ?>

            <button type="submit">
                Submit
            </button>

        </form>
    </fieldset>
</body>

</html>