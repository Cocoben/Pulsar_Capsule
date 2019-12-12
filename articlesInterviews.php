<?php include('asset/inc/head.inc.php'); ?>


<title>Interviews & Articles</title>
<meta name="description" content="Interview d’artistes et articles sur l’art pour Caspule" /></head>

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
                <p>“L'art c'est avant tout l'idée de communiquer avec les autres”</p>
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
                <h4>Mathilde</h4>
                <p>Directrice artistique Canal +</p>
              </div>
              <a href="article.php?id=2">En lire plus</a>
            </div>
          </article>

          <article class="block video" data-video="6JJG1_33QLA">
            <figure>
              <a>
                <img src="asset/img/article/emma.PNG" alt="Emma">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>Emma</h4>
                <p>Photographe à Disneyland Paris : "Maman, je veux devenir photographe"</p>
              </div>
              <a href="">En lire plus</a>
            </div>
          </article>

          <article class="block video" data-video="de7ilaTYS5E">
            <figure>
              <a>
                <img src="asset/img/article/ludivine.PNG" alt="Ludivine">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>Ludivine</h4>
                <p>Graphiste et directrice artistique freelance</p>
              </div>
              <a href="">En lire plus</a>
            </div>
          </article>
          
          <article class="block">
            <figure>
              <a href="article.php?id=5">
                <img src="asset/img/article/dimitri.jpg" alt="Dimitri" class="noRedimension">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>Dimitri</h4>
                <p>"Il y a de l’art pour tout le monde"</p>
              </div>
              <a href="article.php?id=5">En lire plus</a>
            </div>
          </article>        

          </div>

        </div>
        <input type="range" id="inputRangeUne" min="0" max="50" value="0">
        
        

        <h3>Articles</h3>
        <div class="sectionBlock" id="sectionBlockDeux">
          <div>

          
          <article class="block">
            <figure>
              <a href="article.php?id=4">
                <img src="asset/img/article/japonais_yayoi_kusama_couverture.jpg" alt="Japonais Yayoi Kusama" class="noRedimension">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>Artistes japonais</h4>
                <p>Nos 3 incontournables décryptés</p>
              </div>
              <a href="article.php?id=4">En lire plus</a>
            </div>
          </article>

          <article class="block">
            <figure>
              <a href="article.php?id=6">
                <img src="asset/img/article/chicago_jazz.jpg" alt="Chicago Jazz" class="noRedimension">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>Chicago Jazz</h4>
                <p>La playlist des speakeasies des Roaring Twenties</p>
              </div>
              <a href="article.php?id=6">En lire plus</a>
            </div>
          </article>

          <article class="block">
            <figure>
              <a href="article.php?id=3">
                <img src="asset/img/article/americanGothic.jpg" alt="American Gothic">
                <figcaption></figcaption>
                <i class="fas fa-play-circle"></i>
              </a>
            </figure>
            <div>
              <div>
                <h4>American Gothic</h4>
                <p>Portrait de l’Amérique des ’30</p>
              </div>
              <a href="article.php?id=3">En lire plus</a>
            </div>
          </article>


        </div>
      </div>
      <input type="range" id="inputRangeDeux" min="0" max="50" value="0">

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