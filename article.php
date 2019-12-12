<?php 

$contentArticle = '';

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('articlesInterviews.php');
}


if($_GET['id'] == 1){
    $contentArticle = '
    <figure>
    <img src="asset/img/article/theo.png" alt="Théo">
    <figcaption>Théo</figcaption>
    </figure>
    <div class="titreArticle">
    <h2>Théo</h2>
    <h3>"L’art apporte de l’espoir"</h3>
    <span></span>
    </div>
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
    <figure>
    <img src="asset/img/article/mathilde.jpg" alt="Mathilde">
    <figcaption>Mathilde</figcaption>
    </figure>
    <div class="titreArticle">
    <h2>Mathilde, Directrice artistique Canal +</h2>
    <h3>"J’aime offrir mes dessins aux gens que j’aime pour leur partager mes émotions"</h3>
    <span></span>
</div>
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
    $contentArticle = '
    <figure>
    <img src="asset/img/article/americanGothic.jpg" alt="American Gothic">
    <figcaption>Coucou </figcaption>
</figure>
<div class="titreArticle">
<h2>American Gothic</h2>
<h3>Portrait de l’Amérique des ’30</h3>
<span></span>
</div>
<p><strong>Desperate Housewives, Les Simpson, Doctor Who, Mulan… Si la pop culture s’est appropriée un tableau, il s’agit bien d’<i>American Gothic</i>, peinture de Grant Wood. Retour sur ce qui en a fait une œuvre mythique. </strong></p>
<h4>La scène Américaine</h4>
<p>Face à la montée du fascisme et à la crise sans précédent qui bouleverse l’Amérique, la Grande Dépression, les artistes américains ressentent le besoin de prendre leurs distances avec l’Europe. Ils rejettent alors l’influence des artistes européens pour partir en quête de leur propre identité. Ils s’appliquent ainsi à définir la « scène Américaine ». Au modernisme européen et à son abstraction, ils répondent par le réalisme social et le régionalisme : ils illustrent maintenant des scènes de vie Américaine et ses paysages.</p>
<h4>L’American Regionalism : une réponse à la Grande Dépression</h4>
<p>Le style régionaliste délaissent les sujets urbains au profit de scènes de la vie rurale. A son apogée entre 1930 et 1935, la popularité de l’art régionaliste est due au fait qu’il véhicule une image rassurante de l’Amérique traditionnelle, alors même que le pays est secoué par la Grande Dépression. </p>
<p>La culture populaire de l’époque finit déjà par être influencée par le régionalisme. On retrouve ce dernier peu à peu dans les publicités des magazines, et même dans les illustrations de livres pour enfants comme <i>Holling Clancy Holling.</i></p>
<div class="audio">
<p>🎵 <span>American Gothic,</span> David Ackles, 1972</p>
<audio controls="controls">
<source src="asset/audio/davidAcklesAmericanGothic.mp3" type="audio/mp3" />
Votre navigateur n\‘est pas compatible
</audio>
</div>
<h4>Grant Wood, un amoureux de son Midwest natal</h4>
<p>Celui qui aimait dire qu’il était paysan de cœur, né dans l’Iowa, a pourtant beaucoup voyagé en Europe. Mais lui aussi va tourner le dos au modernisme. Ainsi, il publie en 1935 un essai, <i>Revolt Against the City</i> (Révolte contre la ville) dans lequel il défend les valeurs du régionalisme. Il y affirme que la Grande Dépression a même eu un effet positif sur l’art américain, puisque de nombreux artistes américains ne furent plus en mesure de financer un voyage en Europe. Ils durent plutôt faire de l’Amérique une source d’inspiration artistique, favorisant selon Wood un style indépendant. Il se défendait en revanche de toute étroitesse d’esprit, préférant parler du développement d’une tradition picturale propre à l’Amérique.</p>
<h4>American Gothic : le symbole du régionalisme</h4>
<p>Grant Wood réalise en 1930 <i>American Gothic</i>, dans un style très réaliste s’inspirant de son étude de la peinture flamande du XVIe siècle. Il souhaite offrir à l’Amérique en crise le portrait d’Américains moyens qui endurent.</p>
<p>Si pour Wood il s’agit d’une célébration réaliste des habitants du Midwest et de leurs valeurs morales, l’œuvre déplait à la population locale dès son exposition à l’Art Institute of Chicago en 1930. Ils y voient une attaque de leur vie rurale, présentée comme morose et loin de l’image progressiste qu’on se faisait des urbains de l’époque. </p>
<p>Quand bien même, <i>American Gothic</i> devient immédiatement populaire et continue de marquer les esprits, notamment en raison de ses détournements par les publicitaires et dessinateurs de BD. Tandis que les critiques d’art tentent tous d’interpréter chaque détail de la peinture, la maison est devenue une attraction touristique à Eldon, Iowa.</p>
<div class="image">
<img src="asset/img/article/americanGothic_disney.jpg" alt="Détournement American Gothic Disney" class="col-4">
<img src="asset/img/article/americanGothic_indiens.jpg" alt="Détournement American Gothic Indiens" class="col-4">
<img src="asset/img/article/americanGothic_trump.jpg" alt="Détournement American Gothic Trump" class="col-4">
</div>';









}else if($_GET['id'] == 4){
    $contentArticle = '
    <figure>
    <img src="asset/img/article/japonais_yayoi_kusama_couverture.jpg" alt="Japonais Yayoi Kusama">
    <figcaption>Yayoi Kusama</figcaption>
</figure>
    <div class="titreArticle">
    <h2>Artistes japonais</h2>
<h3>Nos 3 incontournables décryptés</h3>
<span></span>
</div>
<p><strong>Aujourd’hui s’ouvre notre Tour du Monde artistique ! Et quoi de mieux que de démarrer notre périple par le paradoxal Japon, où cohabitent modernisme haut en couleurs et traditions ancestrales ?</strong></p>

<h4>Hokusai, ou l’art de l’estampe <i>ukiyo-e</i></h4>
<p>On mettrait notre main à couper que vous avez déjà vu <i>La Grande Vague de Kanagawa</i>, ou comme elle est simplement appelée dans la culture populaire, <i>La Vague</i>. S’il s’agit de l’estampe japonaise la plus célèbre de l’Histoire de l’Art, son créateur est pour sa part l’artiste japonais le plus reconnu aujourd’hui : Katsushika Hokusai.</p>
<p>Né à Edo (aujourd’hui connue sous le nom de Tokyo) en 1760, Hokusai passe maître dans l’art de l’estampe <i>ukiyo-e</i>. Littéralement, ce terme signifie "image du monde flottant". Un terme qui renvoie à un monde de plaisirs, aussi éphémères soient-ils.</p>
<p>Mais la publication au début des années 1830 par Hokusai de ses <i>Trente-Six Vues du mont Fuji</i> (dont fait partie <i>La Grande Vague de Kanagawa</i>) va bouleverser l’art de l’estampe <i>ukiyo-e</i>. Alors que jusque-là le paysage ne tenait que le rôle secondaire, Hokusai va le placer au premier plan. S’ajoute à cela un traitement stylistique novateur de la série (mêler les principes de la perspectives occidentale à la tradition picturale japonaise), et voilà Hokusai propulsé à l’apogée de sa carrière.</p>
<p>Sa fascination pour la nature se retrouve même dans ce dernier poème qu’il rédige l’année de sa mort : </p>
<div class="poeme">
        <p><i>Même fantôme</i></p>
        <p><i>J’irai marcher gaiement</i></p>
        <p><i>L’été dans les landes.</i></p>
</div>
<div class="image">
    <img src="asset/img/article/japonais_hokusai_la_vague.jpg" alt="Japonais Hokusai la vague">
</div>

<h4>Takashi Murakami et son univers hétéroclite</h4>
<p>Considéré comme le successeur d’Andy Warhol, Takashi Murakami semble avoir une imagination sans limites tant il mélange les genres et les influences, le tout en couleurs s’il-vous-plaît.</p>
<p>Riche de sa formation en peinture classique, Murakami développe un style personnel en puisant aussi bien dans l’histoire politique, culturelle, religieuse et sociale du Japon, que dans l’esthétique kawaii et pop des mangas, en passant par l’imagerie bouddhique.</p>
<p>Ce langage inédit se veut être une réponse à la domination culturelle des Etats-Unis et à l’absence d’une scène contemporaine japonaise. Murakami devient ainsi l’initiateur et un chef de file du mouvement Superflat.</p>
<p>Il investit alors toutes les scènes culturelles en s’associant aussi bien à Louis Vuitton le temps d’une collaboration, à Kany West en réalisant la pochette de son album <i>Graduation</i>, qu’à Pharell Williams dont il signe le clip <i>It Girl</i>. Murakami ne manque pas non plus une occasion de faire polémique, en investissant le Château de Versailles de ses créations colorées en 2010.</p>
<p>Au fil des décennies, c’est tout un univers que crée l’artiste. Peuplé de champignons, de fleurs et d’yeux, des personnages Kaikai et Kiki, et de Dob, cette figure à grosse tête qui au fil du temps a pris la valeur d’autoportrait de Murakami, ce monde singulier et néo-pop n’omet pas d’aborder les traumatismes que furent les bombes atomiques ou le tsunami pour le Japon.</p>
<p>Par son œuvre, Takashi Murakami renouvelle finalement les liens entre l’art d’élite et la culture japonaise.</p>
<div class="image">
    <img src="asset/img/article/japonais_murakami.jpg" alt="Japonais Murakami">
</div>

<h4>Yayoi Kusama, l’obsessionnelle</h4>
<p><i>« Ma vie est un pois perdu parmi des millions d’autres pois. »</i>. Nous voilà happé par Yayoi Kusama, artiste psychédélique au possible et dont chaque œuvre nous fascine autant qu’elle nous questionne sur son sens.</p>
<p>Pour mieux comprendre son œuvre, il est indispensable de remonter à l’enfance de l’artiste japonaise, née dans les années 1920. Marquée par la figure d’un père autoritaire, Kusama souffre très jeune d’hallucinations visuelles et développe un trouble obsessionnel. A 10 ans déjà, elle se met à dessiner, comme pour se libérer de ces hallucinations : l’art devient pour elle une forme de catharsis.</p>
<p>En dépit de l\'opposition de ses parents et de l’absence presque totale de femmes artistes dans le Japon conservateur, elle s’engage dans des études d’art. L’accumulation prend une place centrale dans son œuvre, et Yayoi Kusama se met à décliner à l’infini son motif de prédilection : le pois.</p>
<p>Aux Etats-Unis, où elle s’est installée au milieu des années 1950, Kusama glisse vers les performances. Organisées dans des lieux emblématiques de New York, elles font bien souvent scandale, en raison de la nudité des participants, qui revêt ici un sens politique : la volonté de l’artiste de militer pour la liberté sexuelle et le droit des femmes à disposer de leur corps. Provocatrice et psychédélique, Yayoi Kusama incarne ainsi l’esprit des années 1960.</p>
<p>Si depuis 1973 elle vit dans un hôpital psychiatrique au Japon, Yayoi Kusama continue de nous étonner par ses œuvre abstraites et ses installations spectaculaires jouant avec l’espace et attirant les foules, spectatrices des folies obsessionnelles de celle qui n’a de cesse de se questionner sur la place du "moi" dans l’univers.</p>
<p>La princesse aux petits pois n’est pas prête de cesser de nous étonner.</p>
<div class="image">
    <img src="asset/img/article/japonais_yayoi_kusama.jpg" alt="Japonais Yayoi_ Kusama">
</div>';

}else if($_GET['id'] == 5){
    $contentArticle = '
    <figure>
    <img src="asset/img/article/dimitri.jpg" alt="Dimitri">
    <figcaption>Dimitri</figcaption>
    </figure>
    <div class="titreArticle">
        <h2>Dimitri du groupe Two Trains Left</h2> 
        <h3>Il y a de l’art pour tout le monde</h3>
        <span></span>
    </div>
    <p><strong> Chanteur/Guitariste du groupe Two Trains Left</strong></p>
    <h4> Pourrais-tu te présenter en quelques mots ? </h4>
    <p> Je m’appelle Dimitri, j’ai 23 ans et je suis guitariste/chanteur du groupe Two Trains Left.</p> 
    <h4>Pourquoi as-tu choisi de travailler dans la musique ? </h4>
        <p>  La musique a toujours été extrêmement importante et présente dans ma vie. C’est un moyen d’extérioriser énormément de choses, d’être créatif. Et c’est également extrêmement thérapeutique, dans le sens où la musique peut aider les gens à aller mieux, que ce soit en l’écoutant ou en la pratiquant.</p> 
    <h4>Que t’apportent le chant et la guitare au quotidien ? </h4>
        <p> Je dirais que ça m’aide à extérioriser les choses qui ne vont pas dans ma vie, même si c’est plus la partie composition. Pour le reste je dirais que ça m’apporte de la joie, me permet de me défouler et d’extérioriser pas mal de choses.</p> 
    <h4> Comment t’es-tu intéressé à la musique? </h4>
        <p> C’est évidemment grâce à mes parents et mes grands frères et soeurs. J’ai toujours écouté de la musique et été là-dedans depuis que je suis né. Mon père étant le créateur du label Heben Music (qui a entre autre produit des artistes comme LAAM), j’ai toujours été là-dedans et j’ai commencé la guitare et à écouter beaucoup de styles de musique différents très tôt, vers 6 ans.</p> 
    <h4> Penses-tu que plus de jeunes devraient s’intéresser à l’art ? Pourquoi ? </h4>
        <p> Je pense que tout le monde devrait s’intéresser à l’art. Il y a de l’art pour tout le monde et dans énormément de domaines différents. Il faut juste trouver celui qui te parle et qui te touche. De mon côté ça a toujours été le cinéma et la musique. Je pense que l’art est l’une, voire la chose la plus importante sur Terre car plusieurs artistes arrivent à faire bouger les choses.</p> 
    ';
}else if($_GET['id'] == 6){
        $contentArticle = '
        <figure>
    <img src="asset/img/article/chicago_jazz.jpg" alt="Chicago Jazz">
    <figcaption>Chicago Jazz</figcaption>
    </figure>
        <div class="titreArticle">
        <h2>Chicago Jazz</h2>
<h3>La playlist des speakeasies des Roaring Twenties</h3>
<span></span>
</div>
<p><strong>Vous ouvrez une porte, passez derrière un lourd rideau, descendez de sombres escaliers… et vous y voilà. Alcool, tables de jeu autour desquelles le clan d’un certain Al Capone fument le cigare, un groupe de jazz qui fait le bonheur des danseurs... Chicago, 1920, dans l’ambiance fiévreuse d’un speakeasy. Alors, on y écoutait quoi ?</strong></p>
<h4>Quand la prohibition popularise le jazz</h4>
<p>Alors qu’elle sort de la Grande Guerre, l’Amérique cherche à noyer ses traumatismes dans les excès, s’étourdissant aux sons spontanés du jazz. Le pays entre alors dans le Jazz Age.</p>
<p>Les speakeasies et les clubs de jazz popularisent le genre et permettent à de nombreux artistes et jazz bands de se produire. Par exemple, à Chicago, le speakeasy Friar’s Inn était alors un incontournable pour les amateurs de jazz, tout en attirant par la même occasion Al Capone et ses célèbres acolytes de l’Outfit.</p>
<p>Au même titre que la Nouvelle-Orléans des décennies auparavant, Chicago devient un berceau du jazz au début des années 1920. On le doit principalement à la vague d’immigration des musiciens de la Nouvelle-Orléans à l’annonce de la fermeture par décret de Storyville, c’est-à-dire le quartier où les musiciens de la ville étaient concentrés.</p>
<p>Cet afflux de talents permet l’immersion d’une forme nouvelle de jazz… le Chicago Jazz. le genre se distingue par la place accordée aux solos et l’importance croissante qu’occupe le saxophone. Et maintenant, place à notre sélection !</p>
<iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/fr/playlist/chicago-jazz/pl.u-RRbVo1DFy4yg65"></iframe>
<h4>Louis Armstrong :</h4>
<p>Ambassadeur par excellence du jazz dans le monde entier, Armstrong est considéré comme l’un des maîtres du genre. Faisant partie de la vague d’artistes arrivés de la Nouvelle-Orléans, il est reconnu pour son travail d’improvisation et sa virtuosité en trompette et cornet à pistons.</p>
<h4>Muggsy Spanier :</h4>
<p>Joueur de cornet à piston depuis ses 13 ans, Muggsy Spanier est l’un des jazz-men les plus représentatifs du Chicago Jazz. </p>
<h4>Jimmy McParthland : </h4>
<p>Jazz-man extraverti, McParthland est un musicien blanc qui ne reni toutefois pas les origines du jazz. Il est d’ailleurs un pionnier du Chicago Jazz, dont l’approche est plutôt scolaire, puisqu’il s’entraîne sans relâche à reproduire, sans toutefois copier, les morceaux des maîtres du jazz. </p>
<h4>Jimmy Noone :</h4>
<p>Reconnu comme l’un des meilleurs clarinettistes de la seconde, Jimmy Noone est un artiste à la sensibilité perceptible dans sa musique. Le swing lui colle à la peau, et il influence des jazz-men tel que Benny Goodman.</p>
<h4>Earl Hines : </h4>
<p>Pianiste virtuose, Earl "Fatha" Hines révolutionne le piano jazz et influence la génération suivante de jazz-men. Nombreux sont ceux qui estiment qu’il est le seul à savoir créer à la fois du vrai jazz et du vrai swing en jouant seul, et non en formation. Il partage son style unique dans les speakeasies de Chicago, et devient le "Mr Piano" d’Al Capone lui-même, jouant pour lui dans les lieux où se rendent le gangster et ses acolytes. "Fatha" est également un ami de Louis Armstrong et de Jimmy Noone, avec lesquels il joue régulièrement.</p>';}














include('asset/inc/head.inc.php'); ?>


<title>Interview & Article</title>
<meta name="description" content="Interview & Article" /></head>

<?php include('asset/inc/nav.inc.php'); ?>




<main id="articlePage" class="container">
    <section class="col-8">
        <div>
        <?=$contentArticle;?>
        </div>
    </section>
</main>




<?php include('asset/inc/footer.inc.php'); ?>

<script type="text/javascript" src="asset/js/scriptArticle.js" ></script>

</body>

</html>


