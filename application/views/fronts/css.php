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
.swiper-wrapper2 {
    display: flex;
    align-items: stretch !important;
}

.swiper-slide2 {
    height: auto !important;
    display: flex;
}

.swiper-slide2 {
    float: left;
    height: inherit !important;
    position: relative;
}



.swiper-wrapper2 {
    position: relative;
    width: 100%;
    -webkit-transition-property: -webkit-transform, left, top;
    -webkit-transition-duration: 0s;
    -webkit-transform: translate3d(0px, 0, 0);
    -webkit-transition-timing-function: ease;
    -moz-transition-property: -moz-transform, left, top;
    -moz-transition-duration: 0s;
    -moz-transform: translate3d(0px, 0, 0);
    -moz-transition-timing-function: ease;
    -o-transition-property: -o-transform, left, top;
    -o-transition-duration: 0s;
    -o-transform: translate3d(0px, 0, 0);
    -o-transition-timing-function: ease;
    -o-transform: translate(0px, 0px);
    -ms-transition-property: -ms-transform, left, top;
    -ms-transition-duration: 0s;
    -ms-transform: translate3d(0px, 0, 0);
    -ms-transition-timing-function: ease;
    -webkit-transition-property: -webkit-transform, left, top;
    -moz-transition-property: -moz-transform, left, top;
    -o-transition-property: -o-transform, left, top;
    transition-property: transform, left, top;
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    -o-transition-duration: 0s;
    transition-duration: 0s;
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    -webkit-transition-timing-function: ease;
    -moz-transition-timing-function: ease;
    -o-transition-timing-function: ease;
    transition-timing-function: ease;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    cursor: url(../img/drag.png) 16 9, ew-resize !important;
    margin: 0 auto;
    height: inherit !important;
    float: left;
}


.card-cta {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    min-height: 100%;
    border-radius: 12px;

    background: linear-gradient(135deg, #f44a97, #ed126b);
    color: #fff;

    text-align: center;
    padding: 20px;
    transition: 0.3s;
}

/* hover effect */
.card-cta:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* isi */
.cta-content h4 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
}

.cta-content p {
    font-size: 12px;
    opacity: 0.9;
    margin-bottom: 15px;
}

/* icon bulat */
.cta-icon {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-size: 20px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* tombol */
.cta-button {
    display: inline-block;
    background: #fff;
    color: #ed126b;
    font-size: 12px;
    font-weight: 600;
    padding: 8px 14px;
    border-radius: 20px;
    text-decoration: none;
    transition: 0.2s;
}

.cta-button:hover {
    background: #c9065f;
    color: #fff;
}

</style>