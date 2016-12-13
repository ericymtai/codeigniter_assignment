<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.13/clipboard.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>foundation/css/style.css ">    
    <title>Test CodeIgniter</title>
</head>
<body>
<header id="header">
    <nav id="main-nav">
      <div class="logo">
        <a href=""><h1>flavors</h1></a>
      </div>
      <div class="upload">
        <?php echo form_open_multipart('properties/index');?>
        <label for="flavor-image">upload image</label>
        <input id="flavor-image" type='file' name="uploadFile" onchange="$('form').submit()" />
        </form>
      </div>
    </nav>
</header>
    
