<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  include "./includes/connect.php";
?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <!-- Hotjar Tracking Code for My site -->
    <script>
      (function (h, o, t, j, a, r) {
        h.hj =
          h.hj ||
          function () {
            (h.hj.q = h.hj.q || []).push(arguments);
          };
        h._hjSettings = { hjid: 2073271, hjsv: 6 };
        a = o.getElementsByTagName("head")[0];
        r = o.createElement("script");
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
      })(window, document, "https://static.hotjar.com/c/hotjar-", ".js?sv=");
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="css/<?php echo $css; ?>.css" />
    <title>SHKaniner.dk - <?php echo $title; ?></title>
  </head>

  <body>
    <div class="wrapper">
      <div class="inner_wrapper">
        <header>
          <figure class="logo">
            <img src="./img/SHKLogo.jpg" alt="shkaniner_Logo" />
            <figcaption>Schecke Hollænder Klubben</figcaption>
          </figure>
          <nav>
            <ul>
              <li>
                <a href="./" <?php if($active == "forside"){echo 'class="active"';} ?>>Forside</a>
              </li>
              <li>
                <a href="./Racer.php" <?php if($active == "racer"){echo 'class="active"';} ?>>Racer</a>
              </li>
              <li>
                <a href="./Tegning.php" <?php if($active == "tegning"){echo 'class="active"';} ?>>Tegning</a>
              </li>
              <li>
                <a href="./Find_en_avler.php" <?php if($active == "find_en_avler"){echo 'class="active"';} ?>>Find en avler</a>
              </li>
              <li>
                <a href="./Bestyrelsen.php" <?php if($active == "bestyrelsen"){echo 'class="active"';} ?>>Bestyrelsen</a>
              </li>
              <li>
                <a href="./Klubben.php" <?php if($active == "klubben"){echo 'class="active"';} ?>>Klubben</a>
              </li>
              <li>
                <a href="./Bliv_medlem.php" <?php if($active == "bliv_medlem"){echo 'class="active"';} ?>>Bliv medlem</a>
              </li>
              <li>
                <a href="./Kontakt.php" <?php if($active == "kontakt"){echo 'class="active"';} ?>>Kontakt</a>
              </li>
              <li>
                <a href="./Links.php" <?php if($active == "links"){echo 'class="active"';} ?>>Links</a>
              </li>
            </ul>
          </nav>
        </header>
      </div>
      <ol class="inner_wrapper">
        <?php
            $subnav = explode("/",$title);
            $count = 1;
            foreach($subnav as $item){
                if($count!=count($subnav)){
                    echo '<a href="'.$item.'.php">'.$item.'</a>';
                    echo '<p>></p>';
                }else{
                    echo '<li>'.$item.'</li>';
                }
                $count++;
            }
        ?>
      </ol>
      <main class="inner_wrapper">