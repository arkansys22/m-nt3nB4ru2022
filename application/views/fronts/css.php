<link href="<?php echo base_url()?>assets/frontend/theme/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>assets/frontend/theme/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>assets/frontend/theme/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/theme/css/font-awesome.min.css">
<link href="<?php echo base_url()?>assets/frontend/theme/css/style.css" rel="stylesheet" type="text/css"/>
<link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
<link href='<?php echo base_url()?>' rel='canonical'/>
<!-- Google Analytics -->
  <script defer src="https://tracker.ragakustudio.com/public/ragie-tracker.js" data-domain="mantenbaru.com" data-key="mb_1001"></script>


<style> 

/* CARD */
.card-gedung {
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: 0.2s;
}

/* GAMBAR */
.card-img {
    width: 100%;
    aspect-ratio: 4/5;
    overflow: hidden;
}

.card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.3s;
}

.card-gedung:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.08);
}

.card-gedung:hover img {
    transform: scale(1.05);
}

/* BODY */
.card-body {
    display: flex;
    flex-direction: column;
    padding: 10px;
    flex-grow: 1;
}

/* INFO */
.card-info {
    flex-grow: 1;
}

/* NAMA */
.nama {
    font-size: 14px;
    font-weight: 600;
    line-height: 1.3;
    margin-bottom: 4px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* LOKASI */
.lokasi {
    font-size: 12px;
    color: #777;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* HARGA */
.card-harga {
    margin-top: 8px;
}

/* HARGA CORET */
.harga-asli {
    font-size: 12px;
    color: #999;
    text-decoration: line-through;
}

/* HARGA FINAL */
.harga-final {
    font-size: 14px;
    font-weight: bold;
    color: #000;
}

/* SWIPER FIX */
.swiper-wrapper {
    display: flex;
    align-items: stretch !important;
}

.swiper-slide {
    height: auto !important;
    display: flex;
}

</style>