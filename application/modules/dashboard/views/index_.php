<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="JDIH Kabupaten Blora">
	<meta name="keywords" content="jdih, hukum, blora, produk hukum, perda, perbup">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<link rel="icon" href="<?= base_url('assets/') ?>src/back/img/logo-batang.png" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/') ?>src/back/img/logo-batang.png">
	<title>JDIH Kabupaten Blora</title>
	<link href="<?= base_url('assets/') ?>src/front/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>src/front/css/style.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>src/front/css/icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>src/front/plugins/select2/select2.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>src/front/plugins/cookie/cookie.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>src/front/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>src/front/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>src/back/libs/glightbox/css/glightbox.min.css" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>src/back/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/') ?>src/back/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/') ?>src/front/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all">
	<link href="<?= base_url('assets/') ?>src/front/color-skins/color-skins/color10.css" id="theme" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url('assets/') ?>src/front/color-skins/demo.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>src/front/css/custom.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
			$(window).load(function() {
			$("#preloader").fadeOut(2500);
		})
	</script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SZHQH4CFMB"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-SZHQH4CFMB');
	</script>

</head>
<style>
	#preloader {
		position: fixed;
		inset: 0;
		background: #89df89;
		display: flex;
		align-items: center;
		justify-content: center;
		z-index: 99999;
	}

	/* WAJIB center fix */
	.preloader-box {
		/* transform: translateY(10px); */
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		gap: 12px;
		text-align: center;
	}

	/* FIX UTAMA BIAR TIDAK MANGKANG */
	.preloader-logo {
		transform: translateX(20px) translateY(80px);
		width: 150px;
		height: auto;
		display: block;
		margin: 0 auto;

	}

	/* SPINNER CENTER PERFECT */
	#loading {
		width: 45px;
		height: 45px;
		display: block;
		margin: 0 auto;

		border: 4px solid rgba(255, 255, 255, 0.3);
		border-top: 4px solid #fff;
		border-radius: 50%;
		animation: spin 1s linear infinite;
	}

	@keyframes spin {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	@keyframes fadeIn {
		from {
			opacity: 0;
			transform: scale(0.85);
		}

		to {
			opacity: 1;
			transform: scale(1);
		}
	}
</style>


<body>
	<div class="horizontalMenucontainer" style="min-width: 552px;">
		<div id="preloader">
			<div class="preloader-box">
				<img src="<?= base_url(); ?>assets/src/front/images/logo-jdih-batang.png"
					alt="Logo" class="preloader-logo">

				<div id="loading"></div>
			</div>
		</div>
		<div class="header-main">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-7 col-sm-4 col-7">
							<div class="top-bar-left d-flex">
								<div class="clearfix">
									<ul class="socials">
										<li>
											<a class="social-icon" href="<?= base_url('assets/') ?>https://www.facebook.com/jdihbatang1" target="_blank">
												<i class="fa fa-facebook"></i>
											</a>
										</li>
										<li>
											<a class="social-icon" href="<?= base_url('assets/') ?>https://twitter.com/batang_jdih" target="_blank">
												<i class="fa fa-twitter"></i>
											</a>
										</li>
										<li>
											<a class="social-icon" href="<?= base_url('assets/') ?>https://www.instagram.com/jdihbatang/" target="_blank">
												<i class="fa fa-instagram"></i>
											</a>
										</li>
										<li>
											<a class="social-icon" href="<?= base_url('assets/') ?>https://www.youtube.com/channel/UC0Px1D3P76xf2nN_xARYKfw" target="_blank">
												<i class="fa fa-youtube"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="clearfix" data-select2-id="select2-data-8-60im">

								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-sm-8 col-5">
							<div class="top-bar-right">
								<ul class="custom">
									<li>
										<a href="<?= base_url('assets/') ?>portal-login.html" class="">
											<i class="fa fa-file-text mr-1"></i>
											<span>E-Report Desa</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('assets/') ?>buku_tamu.html" class="">
											<i class="fa fa-book mr-1"></i>
											<span>Buku Tamu</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('assets/') ?>portal-login.html" class="">
											<i class="fa fa-sign-in mr-1"></i>
											<span>Login</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sticky" style="margin-bottom: -54px;">
				<div class="horizontal-header clearfix ">
					<div class="container">
						<a id="horizontal-navtoggle" class="animated-arrow">
							<span></span>
						</a>
						<span class="smllogo">
							<img src="<?= base_url('assets/') ?>src/front/images/logo-app.png" class="img-responsive img-logo-small" width="55" height="30" style="margin-top:7px;margin-right:3px;">
							<span class="font-weight-bold mb-0 fs-20 text-dark mt-3 leading-tight">JDIH Kab. Blora</span>
						</span>
						<!--
						<a href="<?= base_url('assets/') ?>javascript:void(0)" class="callusbtn bg-light">
                            <i class="fa fa-bell text-body" aria-hidden="true"></i>
                        </a>
						-->
					</div>
				</div>
			</div>

			<div id="sticky-wrapper" class="sticky-wrapper" style="height: 0px;">
				<div class="horizontal-main clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<div class="desktoplogo">
							<a href="<?= base_url('assets/') ?>index.html" class="d-flex">
								<img src="<?= base_url('assets/') ?>src/front/images/logo-app.png" class="img-responsives" style="width:90px;margin-top:-10px;padding-bottom:1px;">
								<!-- <h2 class="font-weight-bold mb-0 fs-20 text-dark mt-1 ml-2">JDIH Kab. Blora</h2> -->
							</a>
						</div>
						<div class="desktoplogo-1">
							<a href="<?= base_url('assets/') ?>index.html" class="d-flex">
								<img src="<?= base_url('assets/') ?>src/front/images/logo-jdih-batang.png" class="img-responsive" style="padding-bottom:2px;">
								</a>
						</div>
<nav class="horizontalMenu clearfix d-md-flex" style="height: 739px;">
    <ul class="horizontalMenu-list">

        <?php foreach ($menu[0] as $parent): ?>

            <li class="<?= !empty($menu[$parent->id]) ? 'has-sub' : '' ?>">

                <!-- PARENT MENU -->
                <a href="<?= $parent->url == '#' ? '#' : base_url($parent->url) ?>">

                    <?= $parent->title ?>

                    <?php if (!empty($menu[$parent->id])): ?>
                        <span class="fa fa-caret-down m-0"></span>
                    <?php endif; ?>

                </a>

                <!-- ICON TOGGLE (buat template kamu) -->
                <?php if (!empty($menu[$parent->id])): ?>
                    <span class="horizontalMenu-click">
                        <i class="horizontalMenu-arrow fa fa-angle-down"></i>
                    </span>
                <?php endif; ?>

                <!-- CHILD MENU -->
                <?php if (!empty($menu[$parent->id])): ?>
                    <ul class="sub-menu">

                        <?php foreach ($menu[$parent->id] as $child): ?>

                            <li>
                                <a href="<?= base_url($child->url) ?>">
                                    <?= $child->title ?>
                                </a>
                            </li>

                        <?php endforeach; ?>

                    </ul>
                <?php endif; ?>

            </li>

        <?php endforeach; ?>

    </ul>

    <ul class="mb-0 pr-2"></ul>
</nav>

						
					</div>
				</div>
			</div>
		</div>

		<style>
			.input-search {
				border-radius: 20px 0 0 20px !important;
				border-right: none;
				/* biar nyatu */
			}

			.btn-search {
				border-radius: 0 20px 20px 0 !important;
			}
		</style>
		<section style="margin-top:-15px;">
			<div class="banner-1 cover-image sptb-3 pb-14 sptb-tab bg-background2" data-image-src="<?= base_url('assets/') ?>/src/front/images/banners/banner.png" style="background: rgba(0, 0, 0, 0) url('<?= base_url('assets/') ?>src/front/images/banners/banner.png') repeat scroll center center;">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white mb-7">
							<h1 class="mb-1">Selamat Datang di JDIH Kabupaten Blora</h1>
							<p>Silahkan cari peraturan yang kamu inginkan di bawah ini :</p>
						</div>
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								<div class="search-background bg-transparent">
									<form>
										<div class="form row no-gutters">

											<div class="form-group col-xl-10 col-lg-9 col-md-12 mb-0 bg-white wrap-search">
												<input type="text"
													name="pencarian"
													id="pencarian"
													class="form-control input-lg input-search"
													placeholder="Ketikkan Nama Dokumen Hukum">
											</div>

											<div class="col-xl-2 col-lg-3 col-md-12 mb-0 wrap-btn">
												<a href="javascript:void(0)"
													class="btn btn-lg btn-block btn-secondary btn-search"
													onclick="klik_cari()">
													<i class="fa fa-search mr-1"></i> Cari
												</a>
											</div>

										</div>
									</form>
								</div>
								<div class="advanced-label text-right mb-3">
									<a data-toggle="collapse" href="#advanced" aria-expanded="false" aria-controls="advanced"><b class="text-white"> Pencarian Detail</b></a>
								</div>
								<div class="collapse" id="advanced">
									<form id="w1" class="form-horizontal">
										<div class="form row no-gutters">
											<div class="form-group col-xl-2 col-lg-3 col-md-12 select2-lg mb-0 bg-white">
												<select name="kategori" id="kategori" class="form-control select2-show-search border-bottom-0 select2-hidden-accessible" data-placeholder="Pilih Kategori" data-select2-id="select2-data-1-kategori" tabindex="-1" aria-hidden="true">
													<optgroup label="Pilih Kategori">
														<option selected="selected" disabled>Pilih Kategori</option>
														<option value="VnBENi9hdmNWdnFMcFNpaGJTTDAydz09">Peraturan Daerah</option>

													</optgroup>
												</select>
											</div>
											<div class="form-group col-xl-2 col-lg-3 col-md-12 select2-lg mb-0 bg-white">
												<select name="bidang" id="bidang" class="form-control select2-show-search border-bottom-0 select2-hidden-accessible" data-placeholder="Pilih Bidang" data-select2-id="select2-data-1-bidang" tabindex="-1" aria-hidden="true">
													<optgroup label="Pilih Bidang">
														<option selected="selected" disabled>Pilih Bidang </option>
														<option value="Y0pqKy91K3dyQVU5RFlkUXFveFlvZz09">Pendidikan</option>
														<option value="ZU54YzFIZmVpeVRBRm5tS0hzQnRQdz09">Perencanaan</option>
													</optgroup>
												</select>
											</div>
											<div class="form-group col-xl-2 col-lg-3 col-md-12 mb-0 bg-white ">
												<input type="text" name="nomor" id="nomor" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Nomor">
											</div>
											<div class="form-group col-xl-2 col-lg-3 col-md-12 mb-0 bg-white">
												<select name="tahun" id="tahun" class="form-control select2-show-search border-bottom-0 select2-hidden-accessible" data-placeholder="Pilih Tahun" data-select2-id="select2-data-1-tahun" tabindex="-1" aria-hidden="true">
													<optgroup label="Pilih Tahun">
														<option selected="selected" disabled>Pilih Tahun </option>
														<option value='2026'>2026</option>";

													</optgroup>
												</select>
											</div>
											<div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
												<input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control br-md-0" placeholder="Nama Dokumen">
											</div>
											<div class="col-xl-1 col-lg-3 col-md-12 mb-0">
												<a href="javascript:void(0)" class="btn btn-lg btn-block btn-secondary br-tl-md-0 br-bl-md-0" onclick="klik_cari_detail()">
													<i class="fa fa-search mr-1"></i> &nbsp;
												</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /header-text -->
				<div class="header-slider-img">
					<div class="container">
						<div id="small-categories" class="owl-carousel owl-carousel-icons7 owl-loaded owl-drag">
							<div class="owl-stage-outer">
								<div class="owl-stage" style="transform: translate3d(-3521px, 0px, 0px); transition: all 0.25s ease 0s; width: 12072px;">
									<div class="owl-item cloned" style="width: 478px; margin-right: 25px;">
										<div class="item">
											<div class="card mb-0">
												<div class="card-body p-3">
													<div class="cat-item d-flex">
														<a href="<?= base_url('assets/') ?>page/peraturan-daerah.html"></a>
														<div class="cat-img mr-4 bg-primary-transparent p-3 brround">
															<img src="<?= base_url('assets/') ?>src/web/icon/KT001.png" alt="img">
														</div>
														<div class="cat-desc text-left">
															<h5 class="mb-3">Peraturan Daerah</h5>
															<small class="badge badge-pill badge-danger mr-2 font-size-12">216s Dokumen</small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="owl-item cloned" style="width: 478px; margin-right: 25px;">
										<div class="item">
											<div class="card mb-0">
												<div class="card-body p-3">
													<div class="cat-item d-flex">
														<a href="<?= base_url('assets/') ?>page/analisis-dan-evaluasi-hukum.html"></a>
														<div class="cat-img mr-4 bg-primary-transparent p-3 brround">
															<img src="<?= base_url('assets/') ?>src/web/icon/KT027.png" alt="img">
														</div>
														<div class="cat-desc text-left">
															<h5 class="mb-3">Analisis Dan Evaluasi Hukum</h5>
															<small class="badge badge-pill badge-danger mr-2 font-size-12">3 Dokumen</small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
							<div class="owl-dots disabled"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h1>Kelompok Bidang</h1>
					<p>Daftar kelompok bidang sesuai keterkaitan dengan produk hukum</p>
				</div>
				<div class="item-all-cat center-block text-center education-categories">
					<div class="row">
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<div class="item-all-card text-dark text-center"> <a href="<?= base_url('assets/') ?>page/tag/pendidikan.html"></a>
								<div class="iteam-all-icon"> <img src="<?= base_url('assets/') ?>src/web/icon/BD001.png" class="imag-service" alt="Pendidikan"> </div>
								<div class="item-all-text mt-3">
									<h5 class="mb-0 text-body">Pendidikan</h5>
								</div>
							</div>
						</div>

						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
							<div class="item-all-card text-dark text-center"> <a href="<?= base_url('assets/') ?>page/tag/perencanaan.html"></a>
								<div class="iteam-all-icon"> <img src="<?= base_url('assets/') ?>src/web/icon/BD024.png" class="imag-service" alt="Perencanaan"> </div>
								<div class="item-all-text mt-3">
									<h5 class="mb-0 text-body">Perencanaan</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- PERATURAN INDEX DONE -->
		<section class="sptb bg-white">
			<div class="container closed" id="container1x" style="height: 500px; overflow: hidden;">
				<div class="section-title center-block text-center">
					<h1>Peraturan Terbaru</h1>
					<p>Daftar Peraturan yang baru saja disahkan</p>
				</div>
				<div class="row">

					<?php
					foreach ($peraturan_index as $k) {
					?>



						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
							<div class="card overflow-hidden">
								<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-file"></i></span></div>
								<div class="card-body">
									<div class="item-det row">
										<div class="col-md-9">
											<a href="#" class="text-dark">
												<h4 class="mb-2 fs-16 font-weight-semibold"><?= $k->deskripsi ?> <span class="badge badge-info fs-12">Berlaku</span></h4>
											</a>
											<div class="">
												<ul class="mb-0 d-flex">
													<li class="mr-5"><a href="<?= base_url('assets/') ?>javascript:void(0)" class="icons"><i class="si si-briefcase text-muted mr-1"></i> <?= $k->lokasi ?></a></li>
													<li class="mr-5"><a href="<?= base_url('assets/') ?>javascript:void(0)" class="icons"><i class="si si-calendar text-muted mr-1"></i> <?= $k->berlaku_tanggal ?> 6</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-3 col-auto">
											<div class="icons mt-3 mt-sm-0 pb-0"> <a href="<?= base_url('detail/peraturan/' . $k->id) ?>" class="btn btn-success mt-2 float-md-right"> Detail</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>


					<?php
					}

					?>


				</div>
				<div class="mt-4 text-center"> <a href="<?= base_url('page/peraturan_') ?>" class="btn btn-danger">Lihat Lainnya</a></div>
			</div>
		</section>

		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h1>Berita</h1>
					<p>Berita terkini terkait JDIH Kabupaten Blora</p>
				</div>
				<div class="row">

					<?php
					foreach ($berita_index as $k) {
					?>

						<div class="col-md-3">
							<div class="item">
								<div class="card h-100 mb-1">
									<div class="item7-card-img">
										<img src="<?= base_url('assets/') ?>src/web/berita/kunjungan-kerja-komisi-a-dewan-perwakilan-rakyat-daerah-kabupaten-kudus.png" alt="img" class="cover-image">
									</div>
									<div class="card-body p-4">
										<div class="item7-card-desc d-flex mb-2">
											<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted mr-2"></i><?= $k->tgl_publish ?> </a>
										</div>
										<a href="<?= base_url('detail/berita/' . $k->id) ?>" class="text-dark">
											<h4 class="font-weight-semibold"><?= $k->judul ?> </h4>
										</a>
										<!-- <p><p style="text-align:justify">Pada tanggal 23 Februari 2026, Komisi A DPRD Kabupaten Kudus melaksanakan kunjungan kerja ke Jaringan Dokumentasi dan Informasi Hukum (JDIH) Kabupaten Blora. Kunjungan i... <a href="<?= base_url('assets/') ?>https://jdih.batangkab.go.id/page/berita_detail/kunjungan-kerja-komisi-a-dewan-perwakilan-rakyat-daerah-kabupaten-kudus"><b class="text-success">Selengkapnya</b></a></p> -->
									</div>
								</div>
							</div>
						</div>

					<?php
					}
					?>



				</div>
				<div class="text-center mt-5">
					<a href="<?= base_url('assets/') ?>page/berita.html" class="btn btn-success"> Lihat Selengkapnya</a>
				</div>
			</div>
		</section>

		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h1>Koleksi Buku Digital</h1>
					<p>Daftar Koleksi Buku Digital JDIH Kabupaten Blora</p>
				</div>
				<div class="panel panel-primary">
					<div class="">
						<div class="tabs-menu">
							<ul class="nav panel-tabs jobs-tabs mb-6">
								<li class=""><a href="<?= base_url('assets/') ?>#tab_semua" class="active show" data-toggle="tab">Semua Kategori</a></li>
								<li><a href="<?= base_url('assets/') ?>#SB0001" data-toggle="tab" class="">Hukum Pidana</a></li>
								<li><a href="<?= base_url('assets/') ?>#SB0002" data-toggle="tab" class="">Hukum Privat, Hukum Perdata</a></li>
								<li><a href="<?= base_url('assets/') ?>#SB0004" data-toggle="tab" class="">Desa</a></li>
								<li><a href="<?= base_url('assets/') ?>#SB0006" data-toggle="tab" class="">Sosial</a></li>
							</ul>
						</div>
					</div>
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane active show" id="tab_semua">
								<div class="row">
									<div class="col-xl-4 col-md-6">
										<div class="card overflow-hidden">
											<div class="card-body text-center">
												<img src="<?= base_url('assets/') ?>src/web/buku/hukum-acara-peradilan-tata-usaha-negara-edisi-revisi.jpg" class="img-responsive" width="280" height="320">
											</div>
											<div class="card-body py-2">
												<a href="<?= base_url('assets/') ?>mr-4.html" class="icons font-weight-semibold text-body">Hukum Acara Peradilan Tata Usaha Negara Edisi Revisi</a>
											</div>
											<div class="card-body py-2">
												<div class="d-flex align-items-center mt-auto">
													<div>
														<a href="<?= base_url('assets/') ?>javascript:void(0)" class="text-default fs-13">Pemerintahan</a>
													</div>
													<div class="ml-auto text-muted">
														<a href="<?= base_url('assets/') ?>page/buku_detail/UFFnSE5wYlYwWTRxT2FHVDNkMnd1Zz09.html" class="btn btn-sm btn-secondary text-white">Lihat Detail</a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xl-4 col-md-6">
										<div class="card overflow-hidden">
											<div class="card-body text-center">
												<img src="<?= base_url('assets/') ?>src/web/buku/ibadah-kesekian-90-puisi.jpg" class="img-responsive" width="280" height="320">
											</div>
											<div class="card-body py-2">
												<a href="<?= base_url('assets/') ?>mr-4.html" class="icons font-weight-semibold text-body">Ibadah Kesekian 90 Puisi</a>
											</div>
											<div class="card-body py-2">
												<div class="d-flex align-items-center mt-auto">
													<div>
														<a href="<?= base_url('assets/') ?>javascript:void(0)" class="text-default fs-13">Sosial</a>
													</div>
													<div class="ml-auto text-muted">
														<a href="<?= base_url('assets/') ?>page/buku_detail/eC9JUFFLdEVKZEFsSFZuakEwOUptZz09.html" class="btn btn-sm btn-secondary text-white">Lihat Detail</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<a href="<?= base_url('assets/') ?>page/koleksi-buku.html" class="btn btn-success"> Lihat Selengkapnya</a>
					</div>
				</div>
			</div>
		</section>

		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h1>Galeri</h1>
					<p>Galeri terbaru terkait JDIH Kabupaten Blora</p>
				</div>
				<div class="row">

					<?php
					foreach ($galeri_index as $k) {
					?>
						<div class="col-md-3">
							<div class="item">
								<div class="card mb-0">
									<div class="item7-card-img-galeri">
										<img src="<?= base_url('assets/') ?>src/web/galeri/pemeriksaan-disiplin-aparatur-sipil-negara-di-bkd.jpg" alt="<h4><b>Pemeriksaan Disiplin Aparatur Sipil Negara  di BKD</b></h4>" class="cover-image image-popup-desc">

									</div>
									<div class=" card-body p-2">
										<a href="javascript:void(0)" class="text-dark">
											<p class="text-dark card-title"><?= $k->judul ?> </p>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>


				</div>
				<div class="text-center mt-5">
					<a href="<?= base_url('assets/') ?>page/galeri-kegiatan.html" class="btn btn-success"> Lihat Selengkapnya</a>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="section-title center-block text-center">
					<h1>Video</h1>
					<p>Daftar video mengenai JDIH Kabupaten Blora</p>
				</div>
				<div class="item-all-cat">
					<div class="row category-type">

						<?php
						foreach ($video_index as $k) {
						?>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card mb-0">
									<div class="item7-card-img-galeri">
										<a href="<?= base_url('assets/') ?>https://www.youtube.com/watch?v=lo9O8nAyYrs" class="image-popup-video-map" data-title="Publikasi JDIH Kabupaten Blora" data-description="Publikasi JDIH Kabupaten Blora di Videotron Alun-Alun Batang">
											<img src="<?= base_url('assets/') ?>src/front/images/other/video_1.png" class="img-responsive" alt="Publikasi JDIH Kabupaten Blora" title="Publikasi JDIH Kabupaten Blora">
										</a>
									</div>
									<div class="card-body p-2 text-center">
										<h5 class="mb-0 text-body"><b><?= $k->judul ?></b></h5>
									</div>
								</div>
							</div>

						<?php
						}

						?>


					</div>
				</div>
			</div>
		</section>

		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h1>Link Terkait</h1>
					<p>Daftar Website Terkait dengan JDIH Kabupaten Blora</p>
				</div>
				<div id="company-carousel" class="owl-carousel owl-carousel-icons4 owl-loaded owl-drag">
					<div class="owl-stage-outer">
						<div class="owl-stage" style="transform: translate3d(-4977px, 0px, 0px); transition: all 0.25s ease 0s; width: 8848px;">
							<div class="owl-item cloned" style="width: 650px; margin-right: 25px;">
								<div class="item">
									<a href="<?= base_url('assets/') ?>https://bphn.go.id/" target="_blank">
										<div class="cards mb-0">
											<div class="card-bodys">
												<img src="<?= base_url('assets/') ?>src/web/link/badan-pembinaan-hukum-nasional.png" class="img-responsive" width="300" height="50" alt="1">
											</div>
										</div>
									</a>
								</div>
							</div>

							<div class="owl-item cloned" style="width: 650px; margin-right: 25px;">
								<div class="item">
									<a href="<?= base_url('assets/') ?>https://perpustakaanjdih.batangkab.go.id/" target="_blank">
										<div class="cards mb-0">
											<div class="card-bodys">
												<img src="<?= base_url('assets/') ?>src/web/link/perpustakaan-jdih-kab-batang.png" class="img-responsive" width="300" height="50" alt="11">
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
					<div class="owl-dots disabled"></div>
				</div>
			</div>
		</section>

		<section class="sptb border-top">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div align="center">
							<div id="get_status_produk_hukum" style="min-width: 320px; height: 400px; margin: 0 auto"></div>
						</div>
					</div>
					<div class="col-md-4">
						<h3 class="text-dark font-weight-semibold">Grafik JDIH Kabupaten Blora</h3>
						<p>Beberapa grafik statistik berikut menjelaskan beragam data dari dokumentasi dan informasi hukum, baik data status peraturan, jumlah peraturan dan jumlah dokumen hukum yang ada pada website JDIH Kab. Blora.</p>
						<a href="<?= base_url('assets/') ?>page/statistik.html" class="btn btn-success btn-rounded text-white"><b>Selengkapnya</b></a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 mb-2">
						<h3 class="text-dark font-weight-semibold">Survei Kepuasan</h3>
						<p>Terima kasih atas penilaian yang telah anda berikan, masukan anda sangat bermanfaat untuk kemajuan unit kami agar terus memperbaiki dan meningkatkan kualitas pelayanan bagi masyarakat</p>
						<a href="javascript:void(0);" onclick="modal_survei();" class="btn btn-success btn-rounded text-white"><b>Ikuti Survei</b></a>
					</div>
					<div class="col-md-6 sptb bg-white">
						<div class="row" style="margin-bottom:-30px;">
							<div class="col-md-6">
								<div id="surveySummary"></div>
							</div>
							<div class="col-md-6" style="margin-top:-5px;">
								<div class="text-center mb-4">
									<h4><b>Hasil Survei Kepuasan</b></h4>
								</div>

								<div id="hasilSurvei"></div>



							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="sptb position-relative pattern">
			<div class="container">
				<div class="section-title center-block text-center">
					<h1 class="text-white position-relative">Tentang Kami</h1>
				</div>
				<div class="row">
					<div class="col-md-4">
						<img src="<?= base_url('assets/') ?>src/front/images/logo-jdih-batang.png">
					</div>
					<div class="col-md-8">
						<h3 class="text-dark font-weight-semibold text-white">Jaringan Dokumentasi dan Informasi Hukum Kabupaten Blora</h3>
						<p class="text-white">Merupakan wadah pendayagunaan bersama atas dokumen hukum secara tertib, terpadu, berkesinambungan, serta merupakan sarana pemberian pelayanan informasi hukum secara lengkap, akurat, mudah dan cepat</p>
					</div>
				</div>
			</div>
		</section>

		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Download Aplikasi</h2>
					<p>Gunakan aplikasi <b>e-JDIH Kabupaten Blora</b> untuk mempermudah mendapatkan informasi produk hukum terkini.</p>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="text-center text-wrap">
							<div class="btn-list">
								<a href="<?= base_url('assets/') ?>https://play.google.com/store/apps/details?id=id.dscripts.ejdihbatang" target="_blank">
									<img src="<?= base_url('assets/') ?>src/web/link/playstore.png" class="img-responsive" width="250" height="80px">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div id="formSurvei" class="modal fade" data-bs-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<h3><b>Survei JDIH Kabupaten Blora</b></h3>
							<p>Apakah tampilan baru website JDIH Kabupaten Blora memuaskan?</p>
						</div>
						<hr>
						<form id="form_rating" class="mt-0">
							<div class="form-group text-center">
								<div class="text-center">
									<span class="myratings">0</span>
									<h4 class="mt-1">Berikan Rating</h4>
									<div class="text-center">
										<fieldset class="rating text-center">
											<input type="radio" id="star5" name="rating" value="5" />
											<label class="full" for="star5" title="Sempurna"></label>
											<input type="radio" id="star4" name="rating" value="4" />
											<label class="full" for="star4" title="Sangat Baik"></label>
											<input type="radio" id="star3" name="rating" value="3" />
											<label class="full" for="star3" title="Baik"></label>
											<input type="radio" id="star2" name="rating" value="2" />
											<label class="full" for="star2" title="Kurang Baik"></label>
											<input type="radio" id="star1" name="rating" value="1" />
											<label class="full" for="star1" title="Sangat Kurang Baik"></label>
										</fieldset>
									</div>
								</div>
							</div>
							<div class="form-group mb-5 pb-5">
								<input type="hidden" name="token" id="token" value="ZGhSdSt6U2NnQ3pvRXZWK2dUOTZLekkrZ0NHcngwOEZGcjNsZW9EZXpyaz0=">
								<textarea class="form-control" name="saran" id="saran" placeholder="Input saran yang membangun (Optional)"></textarea>
							</div>
							<div class="form-footer mt-5 mb-5">
								<a href="<?= base_url('assets/') ?>https://forms.gle/rqG9quKryUtmq3Qw5" target="_blank" class="btn btn-lg btn-info btn-block">Survei Kepuasan Masyarakat</a>
								<button type="submit" class="btn btn-lg btn-success btn-block">Kirim</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="banner_pengumuman" class="modal fade" data-bs-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div id="banner_judul"></div>
						</div>
						<hr style="margin-top:0px;margin-bottom:10px;">
						<div id="banner_info"></div>
						<div class="modal-footer mt-3">
							<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- HightChart -->
		<script src="<?= base_url('assets/') ?>src/modules/highchart/highcharts.js"></script>
		<script src="<?= base_url('assets/') ?>src/modules/highchart/highcharts-3d.js"></script>
		<script src="<?= base_url('assets/') ?>src/modules/highchart/exporting.js"></script>
		<script src="<?= base_url('assets/') ?>src/modules/highchart/export-data.js"></script>




		<section>
			<footer class="bg-dark text-white cover-image">
				<div class="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<h6 class="mb-2">Kontak Kami</h6>
								<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<table border="0" class="table table-sm text-white" width="100%;" class="mt-1">
									<tr>
										<td width="15%">Alamat</td>
										<td width="5%">:</td>
										<td width="85%"></td>
									</tr>
									<tr>
										<td>Telp./Fax</td>
										<td>:</td>
										<td></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>:</td>
										<td></td>
									</tr>
								</table>
							</div>
							<div class="col-lg-3 col-md-12">
								<h6>Penghargaan</h6>
								<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<div class="row">


								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<h6>Statistik Pengunjung</h6>
								<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">

								<table class="table table-sm text-white" width="100%">
									<tr>
										<td width="25%">Hari Ini</td>
										<td width="5%">:</td>
										<td width="70%"><b id="today">0</b> Pengunjung</td>
									</tr>
									<tr>
										<td>Kemarin</td>
										<td>:</td>
										<td><b id="yesterday">0</b> Pengunjung</td>
									</tr>
									<tr>
										<td>Bulan Ini</td>
										<td>:</td>
										<td><b id="month">0</b> Pengunjung</td>
									</tr>
									<tr>
										<td>Tahun Ini</td>
										<td>:</td>
										<td><b id="year">0</b> Pengunjung</td>
									</tr>
									<tr>
										<td>Total</td>
										<td>:</td>
										<td><b id="total">0</b> Pengunjung</td>
									</tr>
								</table>
							</div>
							<div class="col-lg-2 col-md-12">
								<h6>Media Sosial</h6>
								<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="payments mb-0">
									<li>
										<a href="<?= base_url('assets/') ?>https://www.facebook.com/jdihbatang1" class="payments-icon" target="_blank">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="<?= base_url('assets/') ?>https://twitter.com/batang_jdih" class="payments-icon" target="_blank">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="<?= base_url('assets/') ?>https://www.instagram.com/jdihbatang/" class="payments-icon" target="_blank">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="<?= base_url('assets/') ?>https://www.youtube.com/channel/UC0Px1D3P76xf2nN_xARYKfw" class="payments-icon" target="_blank">
											<i class="fa fa-youtube" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="text-white-50 border-top p-0">
					<div class="container">
						<div class="row d-flex">
							<div class="col-lg-8 col-sm-12  mt-2 mb-2 text-left "> Copyright © 2026 <a href="<?= base_url('assets/') ?>#" target="_blank" class="fs-14 text-white">Bagian Hukum</a> - JDIH Kabupaten Blora. All rights reserved.
							</div>
							<div class="col-lg-4 col-sm-12 ml-auto mb-2 mt-2 d-none d-lg-block">
								Dibuat oleh <a href="<?= base_url('assets/') ?>https://kominfo.batangkab.go.id/" target="_blank" class="fs-14 text-white">Diskominfo Kabupaten Blora</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</section>

		<a href="<?= base_url('assets/') ?>https://api.whatsapp.com/send?phone=+6280000000000&amp;text=*Halo%20Admin%20JDIH,*%20%0A%20Saya%20ingin%20bertanya%20tentang%20..." target="_blank" id="notification">
			<span class="notification-text">Tanya Admin JDIH</span>
			<i class="fa fa-whatsapp"></i>
		</a>
		<a href="<?= base_url('assets/') ?>#top" id="back-to-top" style="display: none;">
			<div style="padding-top:15px;">
				<i class="fa fa-arrow-up"></i>
			</div>
		</a>

		<noscript>
			<p>To display this page you need a browser that supports JavaScript.</p>
		</noscript>
		<script src="<?= base_url('assets/') ?>src/front/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/vendors/circle-progress.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/rating/jquery.rating-stars.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/counters/counterup.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/counters/waypoints.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/counters/numeric-counter.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/owl-carousel/owl.carousel.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/horizontal/horizontal-menu/horizontal.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/jquery.touchSwipe.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/select2/select2.full.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/select2.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/sticky.js"></script>
		<script src="<?= base_url('assets/') ?>src/back/libs/glightbox/js/glightbox.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/back/libs/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/back/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/switcher/js/switcher.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/jquery-uislider/jquery-ui.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/jquery.showmore.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/showmore.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/swipe.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/scripts2.js"></script>
		<script src="<?= base_url('assets/') ?>src/front/js/custom.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-3d.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</div>


	<script>
		(function(d) {
			var s = d.createElement("script");
			s.setAttribute("data-account", "yNIGOrk4xM");
			s.setAttribute("src", "//accessibilityserver.org/widget.js");
			(d.body || d.head).appendChild(s);
		})(document)
	</script><noscript>Please ensure Javascript is enabled for purposes of <a href="<?= base_url('assets/') ?>https://accessibilityserver.org/">website accessibility</a></noscript>
</body>

<script>
	window.APP_URL = "<?= base_url() ?>";
</script>
<script src="<?= base_url('assets/') ?>src/front/js/bt.js"></script>
<script src="<?= base_url('assets/') ?>src/front/js/ad.js"></script>
