<?php include('asset/inc/head.inc.php'); ?>


<title> Capsule</title>
<meta name="description" content="Lorem" />
</head>

<?php include('asset/inc/nav.inc.php'); ?>




<main class="container" id="articlesInterviews">

  <section class="col-8">
      <div>
        <h2>Interviews & articles</h2>
        <h3>Interviews</h3>


        <div class="sectionBlock" id="sectionBlockUne">
          <div>
            
          <!-- Théo -->
          <article class="block">
            <figure>
              <a href="article.php?id=1">
                <img src="asset/img/article/theo.png" alt="">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>Théo</h4>
                <p>“Ils y ont vu de l’intérêt. Ils ont envie de s’investir.”</p>
              </div>
              <a href="article.php?id=1">En lire plus</a>
            </div>
          </article>

           <!-- Mathilde -->
           <article class="block">
            <figure>
              <a href="article.php?id=2">
                <img src="asset/img/article/mathilde.jpg" alt="">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>Gaël Bouket</h4>
                <p>“Ils y ont vu de l’intérêt. Ils ont envie de s’investir.”</p>
              </div>
              <a href="article.php?id=2">En lire plus</a>
            </div>
          </article>

          <article class="block video" data-video="kLJ47Z-bMfQ" >
            <figure>
              <a>
                <img src="asset/img/article/article1-T.jpg" alt="">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>Gaël Bouket</h4>
                <p>“Ils y ont vu de l’intérêt. Ils ont envie de s’investir.”</p>
              </div>
              <a href="">En lire plus</a>
            </div>
          </article>       

          </div>

        </div>
        <input type="range" id="inputRangeUne" min="0" max="50">
        
        

        <h3>Articles</h3>
    </div>
  </section>
</main>

<div id="modalVideo">
  <div>
    <div id="player"> 
    </div>
    <i class="fas fa-times-circle"></i>
  </div>
</div>




<?php include('asset/inc/footer.inc.php'); ?>


</body>

</html>