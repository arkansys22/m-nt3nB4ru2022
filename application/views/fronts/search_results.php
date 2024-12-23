<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$identitas->nama_website ?> | Mantenbaru Wedding Organizer</title>
    <meta name="title" content="Vendor Pernikahan Terlengkap | Mantenbaru Wedding Organizer">
    <meta name="site_url" content="<?php echo base_url()?>">
    <meta name="description" content="<?=$identitas->meta_deskripsi ?>">
    <meta name="keywords" content="<?=$identitas->meta_keyword ?>">
    <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="web_author" content="masdhaw">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="og:site_name" content="<?=$identitas->nama_website ?>">
    <meta property="og:title" content="Vendor Pernikahan Terlengkap | Mantenbaru Wedding Organizer">
    <meta property="og:description" content="<?=$identitas->meta_deskripsi ?>">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:image" content="<?php echo base_url()?>assets/frontend/campur/<?=$identitas->logo ?>">
    <meta property="og:image:url" content="<?php echo base_url()?>assets/frontend/campur/<?=$identitas->logo ?>">
    <meta property="og:type" content="article">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/campur/<?=$identitas->favicon ?>" type="image/x-icon">    
    <?php $this->load->view('fronts/css')?>
    <?php $this->load->view('fronts/analytics')?>
  </head>
  <body data-color="theme-1">
    <?php $this->load->view('fronts/loader')?>
    <?php $this->load->view('fronts/header')?>

<?php foreach ($results as $result): ?>
    <p><?php echo $result->judul; ?></p>
<?php endforeach; ?>

<?php $this->load->view('fronts/footer')?>
  <?php $this->load->view('fronts/js')?>
  </body>
</html>