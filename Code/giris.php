<!DOCTYPE html>  
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#161616">
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KOPARK</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link
      href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"
      rel="stylesheet"
    />
    <link href="styles.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="/kopark/img/FAV.png">
    <link href="bootstrap.min.css" rel="stylesheet">
  </head>
  <body
    style=" background-color: #020916;"
  >
    <div class="bg">
    <header style="background-color:#151F2E">
    <div class="container" style="position: relative; padding-bottom:20px">
        <nav>
            <div class="menu-icons">
                <i class="icon ion-md-menu" style="color: #EAAD04;"></i>
                <i class="icon ion-md-close" style="color: #EAAD04;"></i>
            </div>
            <a style="" href="" class="logo">
                <img style="width:17.6rem;height: 6.7rem; padding-top:20px"
                     src="/kopark/img/LOGO.png"
                     alt="" />
            </a>
            <ul class="nav-listt">
                <li>
                    <img style="width: 2rem;
                        height: 2rem;
                        
                        "
                         src="/kopark/img/anasayfa.png"
                         alt="" />
                    <a style="margin-left:10px" href="index.php">Ana Sayfa </a>
                </li>
                <li >
                    <img style="width: 2rem;
                        height: 2rem;
                        
                        "
                         src="/kopark/img/giris.png"
                         alt="" />
                    <a style="margin-left:10px" href="giris.php" >Giriş Yap</a>
                </li>
                <li >
                    <img style="width: 2.8rem;
                        height: 2rem;
                        
                        "
                         src="/kopark/img/kayit.png"
                         alt="" />
                    <a style="margin-left:10px" href="kayit.php" >Üye Ol</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
      <div class="container" style="margin-top:40px">
    <div class="row">

        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h1 style="text-align:center">
                        <img src="/kopark/img/hosgeldin.png" style="width:161px; height:95px; margin-bottom:2px;" alt="">

                    </h1>
                    <h5 style="text-align:center;color:white; font-size:14px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Devam Etmek İçin Giriş Yapın</h5>
                  
                        <form class="form-signin" method="get" action="vtlogin.php" >
                            <div class="form-label-group" style="color:white; font-size:15px">
                                <input type="text"  name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" placeholder="Email" required class="inputt">
                            </div>
                            <div class="form-label-group" style="color:white; font-size:15px">
                                <input type="password" name="sifre" id="passwordID" value="<?php if(isset($_COOKIE['sifre'])) echo $_COOKIE['sifre']; ?>" placeholder="Şifre" required class="inputt">
                            </div> <br>
                            <div style="margin-bottom:15px;">
                              <label class="check" style="text-align:left; color:white;font-size:12px; font-family:'Segoe UI'" >Beni Hatırla
                             <input type="checkbox"  id="hatirla" name="hatirla" <?php if(isset($_COOKIE['email'])){echo "checked='checked'"; } ?> value="1">
                              <span class="checkmark"></span>
                                 </label>
                             </div>
                             <div style="margin-bottom:15px;">
                            
                             </div>
                            <br>
                          
                            <button type="submit" name="giris" class="btnn" style="width:100%; text-align:center;  background-color: rgba(0, 0, 0, 0.2); color:white;">Giriş Yap</button>
                            <hr class="my-4">
                        </form>

                    
                    <p style="text-align:center; color:white;font-size:10px; font-family:'Segoe UI'">Giriş/Kayıt yaparak Üyelik Sözleşmesi’ni, Gizlilik ve Çerez Politikası’nı okuduğunuzu ve kabul ettiğinizi onaylıyorsunuz.</p>
                </div>
            </div>
        </div>
    </div>
</div>


      
    </div>
  </body>
</html>



