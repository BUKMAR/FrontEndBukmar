<style type="text/css">
  :focus {
  outline: none;
}
.row {
  margin-right: 0;
  margin-left: 0;
}

.side-menu {
  position: fixed;
  width: 300px;
  height: 100%;
  background-color: #f8f8f8;
  border-right: 1px solid #e7e7e7;
}
.side-menu .navbar {
  border: none;
}
.side-menu .navbar-header {
  width: 100%;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav .active a {
  background-color: transparent;
  margin-right: -1px;
  border-right: 5px solid #e7e7e7;
}
.side-menu .navbar-nav li {
  display: block;
  width: 100%;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav li a {
  padding: 15px;
}
.side-menu .navbar-nav li a .glyphicon {
  padding-right: 10px;
}
.side-menu #dropdown {
  border: 0;
  margin-bottom: 0;
  border-radius: 0;
  background-color: transparent;
  box-shadow: none;
}
.side-menu #dropdown .caret {
  float: right;
  margin: 9px 5px 0;
}
.side-menu #dropdown .indicator {
  float: right;
}
.side-menu #dropdown > a {
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body {
  padding: 0;
  background-color: #f3f3f3;
}
.side-menu #dropdown .panel-body .navbar-nav {
  width: 100%;
}
.side-menu #dropdown .panel-body .navbar-nav li {
  padding-left: 15px;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body .navbar-nav li:last-child {
  border-bottom: none;
}
.side-menu #dropdown .panel-body .panel > a {
  margin-left: -20px;
  padding-left: 35px;
}
.side-menu #dropdown .panel-body .panel-body {
  margin-left: -15px;
}
.side-menu #dropdown .panel-body .panel-body li {
  padding-left: 30px;
}
.side-menu #dropdown .panel-body .panel-body li:last-child {
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #search-trigger {
  background-color: #f3f3f3;
  border: 0;
  border-radius: 0;
  position: absolute;
  top: 0;
  right: 0;
  padding: 15px 18px;
}
.side-menu .brand-name-wrapper {
  min-height: 50px;
}
.side-menu .brand-name-wrapper .navbar-brand {
  display: block;
}
.side-menu #search {
  position: relative;
  z-index: 1000;
}
.side-menu #search .panel-body {
  padding: 0;
}
.side-menu #search .panel-body .navbar-form {
  padding: 0;
  padding-right: 50px;
  width: 100%;
  margin: 0;
  position: relative;
  border-top: 1px solid #e7e7e7;
}
.side-menu #search .panel-body .navbar-form .form-group {
  width: 100%;
  position: relative;
}
.side-menu #search .panel-body .navbar-form input {
  border: 0;
  border-radius: 0;
  box-shadow: none;
  width: 100%;
  height: 50px;
}
.side-menu #search .panel-body .navbar-form .btn {
  position: absolute;
  right: 0;
  top: 0;
  border: 0;
  border-radius: 0;
  background-color: #f3f3f3;
  padding: 15px 18px;
}
/* Main body section */
.side-body {
  margin-left: 310px;
}
/* small screen */
@media (max-width: 768px) {
  .side-menu {
    position: relative;
    width: 100%;
    height: 0;
    border-right: 0;
    border-bottom: 1px solid #e7e7e7;
  }
  .side-menu .brand-name-wrapper .navbar-brand {
    display: inline-block;
  }
  /* Slide in animation */
  @-moz-keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @-webkit-keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @-moz-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @-webkit-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  /* Slide side menu*/
  /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
  .side-menu-container > .navbar-nav.slide-in {
    -moz-animation: slidein 300ms forwards;
    -o-animation: slidein 300ms forwards;
    -webkit-animation: slidein 300ms forwards;
    animation: slidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .side-menu-container > .navbar-nav {
    /* Add position:absolute for scrollable menu -> see top comment */
    position: fixed;
    left: -300px;
    width: 300px;
    top: 43px;
    height: 100%;
    border-right: 1px solid #e7e7e7;
    background-color: #f8f8f8;
    -moz-animation: slideout 300ms forwards;
    -o-animation: slideout 300ms forwards;
    -webkit-animation: slideout 300ms forwards;
    animation: slideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  /* Uncomment for scrollable menu -> see top comment */
  /*.absolute-wrapper{
        width:285px;
        -moz-animation: slideout 300ms forwards;
        -o-animation: slideout 300ms forwards;
        -webkit-animation: slideout 300ms forwards;
        animation: slideout 300ms forwards;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }*/
  @-moz-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @-webkit-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @-moz-keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  @-webkit-keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  @keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  /* Slide side body*/
  .side-body {
    margin-left: 5px;
    margin-top: 70px;
    position: relative;
    -moz-animation: bodyslideout 300ms forwards;
    -o-animation: bodyslideout 300ms forwards;
    -webkit-animation: bodyslideout 300ms forwards;
    animation: bodyslideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .body-slide-in {
    -moz-animation: bodyslidein 300ms forwards;
    -o-animation: bodyslidein 300ms forwards;
    -webkit-animation: bodyslidein 300ms forwards;
    animation: bodyslidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  /* Hamburger */
  .navbar-toggle {
    border: 0;
    float: left;
    padding: 18px;
    margin: 0;
    border-radius: 0;
    background-color: #f3f3f3;
  }
  /* Search */
  #search .panel-body .navbar-form {
    border-bottom: 0;
  }
  #search .panel-body .navbar-form .form-group {
    margin: 0;
  }
  .navbar-header {
    /* this is probably redundant */
    position: fixed;
    z-index: 3;
    background-color: #f8f8f8;
  }
  /* Dropdown tweek */
  #dropdown .panel-body .navbar-nav {
    margin: 0;
  }
}
</style>
<script type="text/javascript">
  $(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });
});
</script>


<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">
    
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url("assets/images/BUK.png"); ?>" height="40" width="140" style="margin-top: -5px;">
                </a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
     <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <li><a href="<?php echo base_url(); ?>index.php/admin/home"><span class="glyphicon glyphicon-dashboard"></span> Dasboard</a></li>

            <!-- Dropdown untuk data barang-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <span class="glyphicon glyphicon-scale"></span> Barang <span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                           <!--  <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li> -->

                            <!-- Dropdown level 2 Masukan Barang -->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#masukan-barang">
                                    Masukan Barang <span class="caret"></span>
                                </a>
                                <div id="masukan-barang" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/barang_paket">Barang Paket</a></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/barang_satuan">Barang Satuan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Dropdown level 2 Diskon Diskon Barang -->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#daftar-barang">
                                   Daftar Barang <span class="caret"></span>
                                </a>
                                <div id="daftar-barang" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>index.php/admin/barang_paket/daftar_barang_paket">Daftar Barang Paket</a></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/admin/barang_paket/daftar_barang_satuan">Daftar Barang Satuan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Dropdown level 2 Diskon Diskon Barang -->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#diskon-barang">
                                   Diskon Barang <span class="caret"></span>
                                </a>
                                <div id="diskon-barang" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">Diskon Barang Paket</a></li>
                                            <li><a href="#">Diskon Barang Satuan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Dropdown level 2 Stok Barang -->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#stok-barang">
                                   </span> Stok Barang <span class="caret"></span>
                                </a>
                                <div id="stok-barang" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/stok_barang_paket">Stok Barang Paket</a></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/stok_barang_satuan">Stok Barang Satuan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Dropdown level 2 Daftar Kategori Barang -->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#kategori-barang">
                                  Kategori Barang <span class="caret"></span>
                                </a>
                                <div id="kategori-barang" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>index.php/admin/kategori_barang/input_kategori_barang">Masukan Kategori Barang</a></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/admin/kategori_barang/daftar_kategori_barang">Daftar Kategori Barang</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                          <!-- dapat tambah list menu di bagian sini -->
                          <!--  <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li> -->

                        </ul>
                    </div>
                </div>
            </li>

            <!-- Dropdown input data member dan list data member-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-member">
                    <span class="glyphicon glyphicon-user"></span> Member <span class="caret"></span>
                </a>
                <!-- Dropdown level 1 -->
                <div id="dropdown-member" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/register_member">Daftarkan Member</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/list_member">List Data Member</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-komisi">
                    <span class="glyphicon glyphicon-piggy-bank"></span> Komisi <span class="caret"></span>
                </a>
                <!-- Dropdown level 1 -->
                <div id="dropdown-komisi" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/status_komisi">Status Komisi</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/history_belanja">History Bonus</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-laporan">
                    <span class="glyphicon glyphicon-book"></span> Laporan <span class="caret"></span>
                </a>
                <!-- Dropdown level 1 -->
                <div id="dropdown-laporan" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Laporan Barang</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/laporan/laporan_penjualan">Laporan Penjualan</a></li>
                            <li><a href="#">Laporan Transakasi</a></li>
                            <li><a href="#">Laporan Stok Barang</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li><a href="<?php echo base_url(); ?>index.php/admin/home/informasi_jaringan"><span class="glyphicon glyphicon-grain"></span> Informasi Jaringan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/home/informasi"><span class="glyphicon glyphicon-bullhorn"></span> Informasi</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/home/logout"><span class="glyphicon glyphicon-off"></span> Lougout</a></li>

        </ul>
    </div><!-- /.navbar-collapse -->
    
</nav>
</div>
