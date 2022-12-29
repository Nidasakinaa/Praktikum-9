<head>
    <title>Pemrosesan File</title>
</head>
<body>
    <h2>Pemeriksa File</h2>
    <?php
    $file='C:\\Teks.txt';
    if(file_exists($file))
    {
        echo("File <b> $file </b> sudah ada !");
    }else
    {
        echo("File <b> $file </b> tidak ada !");
    }
    ?>
</body>