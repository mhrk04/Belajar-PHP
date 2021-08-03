<!doctype html>
<html lang="en">
  <head>
    <title>Pertemuan 3 - Struktur Kendali</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        pre{
            border: black 1px solid;
            color: white;
            background-color: black;
        }
    </style>
  </head>
  <body class="container">
      <h1><u>Pertemuan 3 - Struktur Kendali</u></h1>
      <h2>1. Pengulangan</h2>
      <ol class="list-group list-group-numbered">
          <li class="list-group-item"><code>for</code></li>
          <li class="list-group-item"><code>while</code></li>
          <li class="list-group-item"><code>do</code>...<code>while</code></li>
          <li class="list-group-item"><code>foreach</code> (Untuk Array)</li>

      </ol>
      <h2>2. Pengkondisian</h2>
      <ol class="list-group list-group-numbered">
          <li class="list-group-item"><code>if</code>..... <code>else</code><a href="latihan2.php">Latihan</a></li>
          <li class="list-group-item"><code>if</code> ... <code>else if</code> ... <code>else</code></li>
          <li class="list-group-item"><code>ternary</code></li>
          <li class="list-group-item"><code>switch</code></li>
      </ol>
      <h3>Contoh untuk <code>for</code> :</h3>
      <pre><code>&lt;?php<br>for ($i=0; $i < 5; $i++) {<br>  echo "HEllo world";<br>}<br>?&gt;</code>
         </pre>
<pre><code>
      <?php
      for ($i=0; $i < 5; $i++) { 
          echo "HEllo world<br>";
      } 
        ?></code></pre>

    <h3>Contoh untuk <code>while</code>:</h3>
    <pre><code>&lt;?php<br>$a = 0;<br>while ($a < 4) {<br>    echo "Hello Haziq";<br>$a++;<br>}</code></pre>
    <h3>Output :</h3>
    <pre><code>
    <?php
    $a = 0;
    while ($a < 4) {
        echo "Hello Haziq<br>";
    $a++;
    } 
    ?></code></pre>
    <h3>Contoh untuk <code>do</code>...<code>while</code> :</h3>
    <pre>
    <code>
    <?php 
        $a = 0;
        do {
            echo "Hello Dunia<br>";
                $a++;
        } while ($a < 5);
    ?>
    </code>
    </pre>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>