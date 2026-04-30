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

.radius-tops {
    width: 100%;
    aspect-ratio: 4/5; /* rekomendasi: 1080x1350 */
    overflow: hidden;
    border-radius: 10px;
}

.img-gedung {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.img-gedung {
    transition: transform 0.3s ease;
}

.hotel-item:hover .img-gedung {
    transform: scale(1.05);
}


/* CARD UTAMA */
.card-gedung {
    display: flex;
    flex-direction: column;
    height: 100%;
}

/* BAGIAN TEKS */
.card-gedung .title {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* JUDUL BISNIS (batasi 2 baris) */
.card-gedung .title span.f-16:first-child {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* DESKRIPSI (batasi 2 baris) */
.card-gedung .f-11 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* HARGA SELALU DI BAWAH */
.card-gedung .title strong {
    margin-top: auto;
}

/* OPTIONAL: tinggi minimal biar rata */
.card-gedung {
    min-height: 320px;
}


.titles {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.infos {
    flex-grow: 1;
}

.hargas {
    margin-top: auto;
}

</style>