<?php 

$contentArticle = '';

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('articlesInterviews.php');
}



if($_GET['id'] == 1){
    $contentArticle = '
    <h2>Théo</h2>
    <h3>“L’art apporte de l’espoir”</h3>
    <h4>Peux-tu te présenter ?</h4>
    <p>Bonjour je m’appelle Theo, j’ai 18 ans, je suis en année de césure et je suis passionné par la photographie et l’image.</p>
    <h4>Quel est ton rapport à l’école ?</h4>
    <p>Mon rapport à l’école... aujourd’hui je n’en ai plus, mais avant c’était très difficile. J’étais ce qu’on appelle un résistant passif, je ne voulais pas être désagréable envers mon professeur étant donné que c’est quelqu’un qui n’est pas responsable du système scolaire et qui en plus est très bien attentionné. Cependant je ne me pliais pas au système scolaire, c’est-à-dire que je ne faisais pas ce qu’on appelle le rôle d’élève : j’écoutais en cours, je participais mais tout ce que l’école me demandait je ne le faisait pas. Un bon exemple peut être durant ma seconde : il y a eu des cours de photographie, c’était une option, et étant déjà à cette époque piqué de curiosité par la photo j’ai décidé d’y aller. Le cours commence, je n’ai pas pu supporter l’approche très dogmatique de l’art ; ça m’était insupportable. Classer les choses dans des cases fermées ne me plaisait pas. Et aussi tout simplement, l’école me proposait d’apprendre des choses par cœur. Cela ne m’inspirait pas du tout.</p>
    <h4>Tu pratiques la photo ? Qu’est ce que cela t’apporte ?</h4>
    <p>La photographie m’apporte un nouveau regard, voir le monde à travers le prisme artistique est toujours intéressant. Quand on voit un arbre dans un champ se demander : comment puis-je le photographier ? comment puis-je en faire ressortir un sens ? Ça nous apprend donc aussi à reconnaître la parole de l’image. Dessiner et y mettre un sens : ça apprend à lire et à parler une langue qu’on ne connaît pas mais qui aujourd’hui dans le monde de l’image est fondamentale. Enfin, ça m’a apporte de magnifiques rencontres. La photographie et l’art c’est avant tout l’idée de communiquer avec les autres. L’art, c’est l’idée de transmettre un message aux autres via des choses qui ne sont pas des paroles, car la parole est assez limitée. Bien évidemment, quand on fait de l’art, ça nous permet de nous rapprocher et de communiquer avec les autres.</p>
    <h4>L’art et sa pratique t’aident-ils à mieux te comprendre et à comprendre notre société ?</h4>
    <p>La photographie est un langage. La pratique permet de communiquer et de la comprendre. Dans une société de l’image, c’est fondamental. L’art joue le rôle de ciment de la société.
    Quand on fait de l’art, on est obligé de faire des choix. Par exemple pour la photo, vais-je la prendre en couleurs ou en noir en blanc, quel angle vais-je choisir... Ça nous force à projeter notre sensibilité intime et parfois même inconsciente sur le papier pour pouvoir l’observer. L’art, c’est un miroir de l’âme. Quand on crée quelque chose, cela vient de soit et on ne peut qu’après s’observer par le prisme de son œuvre. Ainsi créer c’est apprendre à se connaître.</p>
    <h4>Comment l’art pourrait-il, selon toi, aider les jeunes démotivés scolairement ?</h4>
    <p>Comme je l’ai dit, l’art est fondamental pour s’exprimer. Or peut-être que les jeunes qui ont des difficultés avec l’école (qui est quand même faite pour s’intégrer dans la société), ont peut être des difficultés avec notre société, qui n’est pas faite pour tout le monde. Or si l’art permet de se libérer, de mieux se connaître et de mieux s’exprimer dans la société, alors l’art est sans doute la solution pour les jeunes qui sont en décrochage scolaire. De plus l’art, quand il devient une passion, permet d’apporter une sensibilité et une culture. L’art apporte de l’espoir. Il permet aussi de projeter son subconscient sur les toiles pour mieux se connaître. On pourrait donc imaginer la pratique de l’art en groupe ou des ateliers d’art-thérapie pour les décrocheurs scolaires. C’est avec l’art qu’on apprend à connaître l’autre et à se connaître soi-même, et c’est ça qui est beau.</p>';






}else if($_GET['id'] == 2){
    $contentArticle = '
    <h2>Mathilde, Directrice artistique Canal +</h2>
    <h3>“J’aime offrir mes dessins aux gens que j’aime pour leur partager mes émotions”</h3>
    <h4>Peux-tu te présenter ? </h4>
<p>Mathilde, 31 ans, parisienne - rive gauche, responsable artistique à Canal+.</p>
<h4>Comment s’est construit ton rapport à l’art ? </h4>
<p>Mes parents artistes dans l’âme m’ont fait baigner dans l’art depuis gamine. Ils peignaient, dessinaient, sculptaient... beaucoup à la maison et nous emmenaient régulièrement à des expos quand nous étions petites ma sœur et moi. Même si à l’adolescence on s’est désintéressées un peu de tous ça, pour ma part j’ai continué à dessiner régulièrement. Jusqu’à intégrer plus tard une école d’art graphique. Ça n’était pas vraiment programmé, mais ça m’a permis d’affiner mes sensibilités artistiques.</p>
<h4>Quel est ton lien avec l’art aujourd’hui ?</h4>
<p>Aujourd’hui, mon métier évolue dans un univers créatif où l’art est très présent. Il me permet de continuer à pratiquer le dessin, le graphisme et autres projets d’arts plastiques. Parallèlement, pour mon plaisir je continue à faire des expositions et à dessiner.</p>
<h4>Que t’apporte-il au quotidien ?</h4>
<p>Au quotidien l’art permet de m’exprimer, de faire partager mes émotions. J’aime offrir mes dessins aux gens que j’aime pour leur partager mes émotions. J’essaye de communiquer ce que je ressens pour les gens à travers mes dessins. Exprimer mes angoisses, mes coups de gueule, mes idées... Parfois l’art m’apporte aussi une certaine frustration, s’il m’arrive de réaliser un projet qui ne provoque pas les émotions que j’attendais, parfois cela peu me déstabiliser. Mais avec le temps cela m’affecte de moins en moins. Par contre, être spectatrice des œuvres des autres me donne toujours envie de travailler plus, je suis admiratrice face au travail de certains artistes que j’affectionne. Leur talent me remplit  de quelque chose d’indéfinissable comme si j’étais nourrie par leur créativité.</p>
<h4>Penses-tu que l’art permet de mieux comprendre notre société ?</h4>
<p>Bien sûr que je pense que l’art peut nous permettre de mieux comprendre notre société. Des surréalistes aux performers, de nombreux artistes abordent des sujets sociétaux qui permettent de débattre ou de mettre en avant des problématiques politiques, philosophiques, économiques... À travers la poésie, la photographie, la vidéo... Aujourd’hui énormément d’artistes sont des portes paroles et des miroirs de notre société...</p>';








}else if($_GET['id'] == 3){
    $contentArticle = 'Soon';









}else if($_GET['id'] == 4){
    $contentArticle = 'Soon';
}




















include('asset/inc/head.inc.php'); ?>


<title> Capsule</title>
<meta name="description" content="Lorem" />
</head>

<?php include('asset/inc/nav.inc.php'); ?>




<main id="articlePage" class="container">
    <section class="col-8">
        <div>
        <?=$contentArticle;?>
        </div>
    </section>
</main>




<?php include('asset/inc/footer.inc.php'); ?>


</body>

</html>


