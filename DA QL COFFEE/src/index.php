<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang Chủ</title>
    <link href="CSS/CSSHome.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="CSS/CSSafe.css"/>
</head>
<body>
<div id="menu">
  <?php if (isset($_SESSION['username'])): ?>
    <span>👤 Xin chào, <?= htmlspecialchars($_SESSION['username']) ?></span> |
    <a href="logout.php">Đăng Xuất</a>
  <?php else: ?>
    <a href="login.php">Đăng Nhập</a> |
    <a href="register.php">Đăng Ký</a>
  <?php endif; ?>
</div>

<div class="vungbao">
    <div class="vunghotro">
        <img src="Images/ngoisao.gif" width="15" height="15" />
        <a href="index.php">Trang Chủ</a>
        <img src="Images/ngoisao.gif" width="15" height="15" />
        <a href="gioithieu.html">Giới Thiệu</a>
        <img src="Images/ngoisao.gif" width="15" height="15" />
        <A href="thucdon.html">Thực Đơn</a>
        <img src="Images/ngoisao.gif" width="15" height="15" />
        <a href="lienhe.html">Liên Hệ</a> 
        <img src="Images/ngoisao.gif" width="15" height="15" />
        <a href="khuyenmai.html">Khuyến Mãi</a>
        <img src="Images/ngoisao.gif"width="15" height="15" />
        <a href="Tintuc.html"> Tin Tức</a>
        <img src="Images/ngoisao.gif"width="15" height="15" />
        <font color="#663300">----------------------------------------</font>
        <a href="profile.php"> Profile</a>
        <img src="Images/ngoisao.gif"width="15" height="15" />

        <img src="Images/ngoisao.gif" width="15" height="15" />
        <a href="giohang.html">Giỏ Hàng</a>
        
        <?php if (isset($_SESSION['username'])): ?>
        <span>👤 Xin chào, <?= htmlspecialchars($_SESSION['username']) ?></span> |
        <a href="logout.php">Đăng Xuất</a>
        <?php else: ?>


        <a href="login.php"><font color="#0066FF">Đăng Nhập</font></a>
        <img src="Images/ngoisao.gif" width="15" height="15" />
        <font color="#FFFFFF"><b>|</b></font>
        <img src="Images/ngoisao.gif" width="15" height="15" />
        <a href="register.php"><font color="#0066FF">Đăng Ký</font></a>
        <?php endif; ?>
    </div>
    <div class="vunglogo">
        <img src="Images/logo1.gif" width="300" height="170" border="0px" />
    </div>
    <div class="vungbanner">
        <img src="Images/cafe-10.png" width="770" height="150" />
    </div>
    <hr width="100%" size="2px" align="center"/>
    <div class="vungmenu">
        <div class="listmenu0"><b>THỰC ĐƠN DÙNG NHANH</b></div>
        <a href="banhankem.html" class="listmenu2">Bánh Ăn Kèm</a>
        <a href="hatankem.html" class="listmenu2">Hạt Ăn Kèm</a>

        <div class="listmenu3"><b>CAFE NGUYÊN HẠT</b></div>
        <a href="robusta.html" class="listmenu1">Cofee Robusta</a>
        <a href="espresso.html" class="listmenu2">Cofee Espresso</a>
        <a href="arabica.html" class="listmenu2">Cofee Arabica</a>
        <a href="fullwashing.html" class="listmenu2">Cofee Arabica Full Washing</a>
        <a href="moka.html" class="listmenu2">Coffee Moka</a>
        <a href="drookbar.html" class="listmenu2">Coffee Drookbar</a>
        <a href="tybica.html" class="listmenu2">Coffee Typica</a>
        <a href="chon.html" class="listmenu2">Coffee Chồn Dakland</a>
        <a href="culi.html" class="listmenu2">Coffee Special Culi</a>
    </div>
    <div class="vungchaychu">
        <marquee style="color:#633" direction="">
            <img src="Images/hatcafe.gif" width="20" height="20" />
            Hái chín, Rang mộc, 100% cafe nguyên chất, An toàn và vệ sinh luôn là tiêu chí của chúng tôi, gọi ngay 0329717751 để có giá tốt nhất
            <img src="Images/hatcafe.gif" width="20" height="20" />
        </marquee>
    </div>
    <div class="vungtintucchinh">
        <img src="Images/anhdongbanner.gif" width="584" height="500" />
    </div>
    <div class="vungtintuc">
        <div class="vungmusic">
            <iframe width="250" height="200" src="mp4/QC COFFEE 1.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr width="248px" size="2px" align="center"/>
        <div class="vungtuyendung">
            <a href="tuyendung.html"><img src="Images/tuyendung.png" width="250" height="120" /></a>
        </div>
        <div class="số điện thoại">
            <a href="lienhe.html"><img src="Images/hotline sđt.png" width="250" height="150" /></a>
        </div>
        <hr width="248px" size="2px" align="center"/>
    </div>
    <div class="vunghot">
        <div class="vunghot1">
            <img src="Images/hot.gif" width="60" height="16" />
            <font style="font-size:130%; font-weight:500">Sản Phẩm Bán Chạy</font>
            <img src="Images/hot.gif" width="60" height="16" />
        </div>
        <div class="vunghot2"></div>
        <div class="vunghot3"></div>
    </div>
    <div class="vungsanpham0">
        <a href="robusta.html">
            <div class="vungsanpham1" style="background:url(Images/robusta.jpg)">
                <div class="chitietsanpham"><h1>Cafe Robusta</h1></div>
            </div>
        </a>
        <a href="chon.html">
            <div class="vungsanpham1" style="background:url(Images/cafechon.jpg)">
                <div class="chitietsanpham"><h1>Cafe Chồn</h1></div>
            </div>
        </a>
        <a href="moka.html">
            <div class="vungsanpham1" style="background:url(Images/moka.jpg)">
                <div class="chitietsanpham"><h1>Cafe Moka</h1></div>
            </div>
        </a>
        <a href="culi.html">
            <div class="vungsanpham1" style="background:url(Images/culi.jpg)">
                <div class="chitietsanpham"><h1>Cafe Culi</h1></div>
            </div>
        </a>
        <a href="arabica.html">
            <div class="vungsanpham1" style="background:url(Images/cafe-arabica.png)">
                <div class="chitietsanpham"><h1>Cafe Arabica</h1></div>
            </div>
        </a>
    </div>
</div> 

</body>
</html>
