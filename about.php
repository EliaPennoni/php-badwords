<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Parole censurate</h1>
    <div>
            <div class="paragraph">
                <p>paragrafo del testo:</p>
                <?php echo $_GET['paragraph'] ?>
            </div>

            <div>
                <p>
                    lunghezza del paragrafo non censurato: <?php echo strlen(string: $_GET['paragraph']) ?>
                </p>
            </div>

            <hr>

            <div class="paragraph">
                <p>paragrafo del testo censurato:</p>
                <?php echo str_replace(search: $_GET['badwords'],replace: '****',subject: $_GET['paragraph']) ?>;
            </div>
            <?php $replacedText = str_replace(search: $_GET['badwords'],replace: '****',subject: $_GET['paragraph']) ?>;
            <div>
                <p>
                    lunghezza del paragrafo censurato: <?php echo strlen (string: $replacedText) ?>;
                </p>
            </div></div>
            
        </div>

       <div>
            <div class="badwords">
                <p>parola da censurare:</p>
                <?php echo $_GET['badwords'] ?>
                
            </div>
            
       </div>
    <a href="./index.php">
        homepage
    </a>
</body>
</html>