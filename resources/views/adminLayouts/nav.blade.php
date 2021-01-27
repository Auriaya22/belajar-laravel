<!-- QR FLOAT -->
<div style="position:fixed; z-index:1; top:100px; left:10px;" id="qrinfaq">
  <table style="color:white;">
    <tr>
      <td class="text-center text-primary">
        <b>Have you done your infaq today?</b>
      </td>
    </tr>
    <tr>
      <td class="text-center">
        <img src="blog-asset/images/infaqqr.jpg" height="220px" width="auto" class="img img-responsive">
      </td>
    </tr>
    <tr>
      <td>
        <div style="margin-top:10px;" class="text-primary text-center">
          Atau transfer ke rekening<br>
          860008229100<br>
          CIMB Niaga Syariah<br>
          An. Yayasan Taqwa Cerdas Kreatif<br>
          <b style="color:yellow;">Per 27 Juli 2020 <br> Saldo Rp. 13.475.106,-</b>
        </div>
      </td>
    </tr>
    <tr>
      <td class="text-center">
        <button id="tutupqr">X</button>
      </td>
    </tr>
  </table>
</div>
<!-- navbar section -->
<section class="menu cid-rFRQyzHkf0" once="menu" id="menu1-3">
  <nav class="navbar navbar-expand-md beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
    <div class="menu-logo">
      <div class="navbar-brand">
        <span class="navbar-logo">
          <a href="#">
            <img src="blog-asset/assets/images/logo-alcent-s-60x60.png" style="height: 3.8rem;">
          </a>
        </span>
        <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="http://www.smaalfacentauri.net" style="font-size: 10px;">SMA Alfa Centauri</a></span>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav nav-dropdown" data-app-modern-menu="true">
        <li class="nav-item"><a class="nav-link link text-white display-6" href="#fasilitas">Fasilitas</a></li>
        <li class="nav-item"><a class="nav-link link text-white display-6" href="#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link link text-white display-6" href="#berita">Berita</a></li>
        <li class="nav-item"><a class="nav-link link text-white display-6" href="#gallery">Photo Gallery</a></li>
        <li class="nav-item"><a class="nav-link link text-white display-6" href="#team">Team</a></li>
        <li class="nav-item"><a class="nav-link link text-white display-6" href="#kontak">Kontak</a></li>
        <li class="nav-item"><a class="nav-link link text-white display-6" href="#">Karir</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ __('home.switch_language') }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('localization.switch', 'en') }}">English</a>
          <a class="dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}" href="{{ route('localization.switch', 'id') }}">Bahasa Indonesia</a>
        </div>
      </li>
      </ul>
      <div class="mbr-section-btn">
        <a class="btn btn-sm btn-primary display-3" href="http://smaalfacentauri.net/ortu" target="_blank"
          style="width: auto; height: auto; font-size: 9px;">Portal Ortu
        </a>
        <a class="btn btn-sm btn-success display-3" href="http://smaalfacentauri.net/siswaalcent" target="_blank"
          style="width: auto; height: auto; font-size: 9px;">Portal Siswa
        </a>
        <a class="btn btn-sm btn-secondary display-3" href="http://103.25.166.195/guru" target="_blank"
          style="width: auto; height: auto; font-size: 9px;">Portal Guru
        </a>
    </div>
  </nav>
</section>
