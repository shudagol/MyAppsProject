<?php foreach ($data['artikels'] as $artikel) {
  
?>
<section class="blog-container">

  <div class="blog-header">
    <div class="blog-cover" style="background: url('<?php echo $GLOBALS['alamat'] ?>img/<?php echo $artikel->img ?>'); background-size:cover">
      
      <div class="blog-author">
        <h3>Samsul Huda</h3>
      </div>
    </div>
  </div>

  <div class="blog-body">
    <div class="blog-judul">
      <h1><a href="#"><?php echo $artikel->judul ?></a></h1>
    </div>
    <div class="blog-kata">
      <p>
        <?php echo $artikel->isi ?>
      </p>
    </div>
    <div class="blog-tag">
      <ul>
        <li><a href="#">css</a></li>
        <li><a href="#">web design</a></li>
          <li><a href="#">coding</a></li>
      </ul>
    </div>
  </div>

  <div class="blog-bawah">
    <ul>
      <li class="tgl">
        <a href="#">
        2 days ago
      </a>
      </li>
      <li class="komen">
        <a href="#">
          <i class="fa fa-comments-o fa-2x" ></i>
        </a>
      </li>
      <li class="bintang">
        <a href="#">
          <i class="fa fa-star-o fa-2x" ></i>
        </a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>

</section>

<div class="clearfix"></div>

<?php } ?>