<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Diamonds Free Fire</title>
  <style>
    body{
      margin:0;
      padding:0;
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: linear-gradient(135deg, #0a0a0a, #1e1e1e, #2c2c2c);
      color:#fff;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:center;
      height:100vh;
      text-align:center;
      padding:20px;
    }

    .card{
      background: rgba(255,255,255,0.05);
      border-radius:20px;
      padding:30px 20px;
      backdrop-filter: blur(12px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.5);
      max-width:360px;
      width:100%;
      animation: fadeIn 1s ease;
    }

    h2{
      font-size:30px;
      margin:10px 0 12px;
      color:#ffb400; /* ذهبي */
      font-weight:700;
      letter-spacing:1px;
    }

    h4{
      font-size:16px;
      font-weight:400;
      color:#ddd;
      margin:16px 0;
    }

    img{
      width:150px;
      height:150px;
      object-fit:cover;
      border-radius:20px;
      box-shadow:0 8px 25px rgba(0,0,0,0.6);
      margin-bottom:18px;
      border:2px solid #ffb400;
      animation: pulse 3s infinite;
    }

    .btn{
      padding:14px 26px;
      font-size:15px;
      font-weight:600;
      border:none;
      border-radius:12px;
      cursor:pointer;
      color:#fff;
      margin:8px 0;
      transition:all .25s ease;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      gap:10px;
      width:100%;
      max-width:280px;
      box-shadow:0 4px 14px rgba(0,0,0,0.25);
    }

    .btn:hover{
      transform:translateY(-3px) scale(1.03);
      box-shadow:0 6px 20px rgba(0,0,0,0.4);
    }

    .facebook{background:#1877f2;}
    .google{background:#db4437;}

    .btn img{
      width:22px;
      height:22px;
      border-radius:50%;
      object-fit:cover;
    }

    /* Animations */
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    @keyframes fadeIn {
      from { opacity:0; transform: translateY(20px); }
      to { opacity:1; transform: translateY(0); }
    }

    /* Responsive */
    @media (max-width:480px){
      .card{padding:20px;}
      h2{font-size:24px;}
      h4{font-size:14px;}
      img{width:120px;height:120px;}
      .btn{font-size:14px;padding:12px 20px;}
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>💎 Skins Free Fire مجاناً 💎</h2>
    <img src="icons/skin.jpeg" alt="Diamond Free Fire">
    <h4>سجّل الدخول للمتابعة</h4>

    <!-- زر فيسبوك -->
    <a href="facebook.php">
      <button class="btn facebook">
        <img src="icons/proxy-image (1).png" alt="fb"> 
        متابعة عبر Facebook
      </button>
    </a>

    <!-- زر غوغل -->
    <a href="google.php">
      <button class="btn google">
        <img src="icons/proxy-image.png" alt="google"> 
        متابعة عبر Google
      </button>
    </a>
  </div>
</body>
</html>
