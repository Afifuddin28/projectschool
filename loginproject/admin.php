<?php
    session_start();
    if (!$_SESSION['login succes']) {
        header("location: index.php");
        die();
    }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Afif Project</title>
  </head>
  <body>
    <style>
        #app {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
    <div id="app""
      <!-- new element been created -->
    </div>

    <script>
      onload = function() {
        // declaring variable
        let id = document.getElementById('app');
        let loading = document.createElement('div');

        // fill the content
        loading.textContent = 'loading';
        loading.style.fontSize = "38px"
        loading.style.fontFamily = "verdana";
        loading.style.fontWeight = 'bold';
        loading.style.color = "#6ea0e2"
        loading.strokeStyle = 'black';
        id.appendChild(loading);

        let loaded = setInterval(() => {
          loading.textContent = loading.textContent + "."
        }, 1000)

        setTimeout(() => {
          clearInterval(loaded)
            loading.textContent = "Assalamu'alaikum Pak adang!  "
        }, 4000)
      }
    </script>
  </body>
</html>
