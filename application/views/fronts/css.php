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
    position: relative;
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

/* BARIS ATAS (harga coret + badge) */
.harga-row {
    display: flex;
    align-items: center;
    gap: 6px;
}

/* HARGA ASLI */
.harga-asli {
    font-size: 12px;
    color: #999;
    text-decoration: line-through;
}

/* BADGE DISKON */
.badge-diskon {
    background: #ff4d4f;
    color: #fff;
    font-size: 10px;
    padding: 2px 6px;
    border-radius: 6px;
    font-weight: 600;
}

.badge-diskon-top {
    position: absolute;
    top: 8px;
    left: 8px;
    background: #ff4d4f;
    color: #fff;
    font-size: 11px;
    padding: 4px 8px;
    border-radius: 6px;
    font-weight: bold;
}

/* HARGA FINAL */
.harga-final {
    font-size: 16px;
    font-weight: bold;
    color: #222;
    margin-top: 2px;
}

/* HEMAT */
.hemat {
    font-size: 11px;
    color: #16a34a; /* hijau */
    margin-top: 2px;
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


.arrows {
    position: relative;
}

.swiper-arrow-left,
.swiper-arrow-right {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
}

/* WRAPPER */
.swiper-wrapper-container {
    position: relative;
}


/* FIX ICON AGAR BENAR-BENAR CENTER */
.swiper-arrow-left span,
.swiper-arrow-right span {
    display: flex;              /* ini WAJIB */
    align-items: center;        /* vertical center */
    justify-content: center;    /* horizontal center */

    width: 100%;
    height: 100%;

    font-size: 18px;
    line-height: 1;             /* hilangkan efek turun */
    margin: 0;
    padding: 0;
}


.swiper-arrow-left span:before,
.swiper-arrow-right span:before {
    display: flex;
    align-items: center;
    justify-content: center;
}

.swiper-arrow-left {
    background: linear-gradient(to right, rgba(237,18,107,0.9), transparent);
    left: -10px; /* bisa 0 atau 10px sesuai selera */
}

.swiper-arrow-right {
    background: linear-gradient(to left, rgba(237,18,107,0.9), transparent);
    right: -10px;
}

.arrows-travel {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);

    width: 48px;
    height: 48px;

    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(6px);

    border-radius: 50%;
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;
    z-index: 20;

    transition: all 0.25s ease;

    opacity: 0;
}

.arrows-travel span {
    font-size: 20px;
    color: #333;
    transition: 0.2s;
}

/* HOVER */
.arrows-travel:hover {
    background: #2563eb;
    transform: translateY(-50%) scale(1.1);
}

.arrows-travel:hover span {
    color: #fff;
}

/* ACTIVE (klik) */
.arrows-travel:active {
    transform: translateY(-50%) scale(0.95);
}

.swiper-container {
     padding: 0 30px;
}


.arrows:hover .arrows-travel {
    opacity: 1;
}

.swiper-wrapper-container:hover .arrows-travel {
    opacity: 1;
}

@media (max-width: 768px) {
    .arrows-travel {
        opacity: 1 !important;
        width: 38px;
        height: 38px;
    }
}

</style>