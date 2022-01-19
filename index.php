<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#">Outils de prise de notes&nbsp;</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link active" href="#createnote">creer une note</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="#NOTE">dernières notes</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="#infoCollect">Collect_info</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading">Bienvenue&nbsp;</h1>
                        <p class="intro-text">Bienvenue sur l'outil de prise de note, cette outil permet une prise de notes rapides, il permet également de trier les différentes notes et intègre un module de collecte d’informations&nbsp; &nbsp;</p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center content-section" id="createnote">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Creer une note</h2>
                    <section class="getintouch">
                        <div class="container modern-form"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal1">Mode vocal</button>
                            <div class="text-center">
                                <h4 style="color: #212529;font-size: 45px;"></h4>
                            </div>
                            <hr class="modern-form__hr">
                            <div class="modern-form__form-container">
                                <form>
                                    <div class="row">
                                        <div class="col col-contact">
                                            <div class="modern-form__form-group--padding-r form-group mb-3"><input class="form-control input input-tr" type="text" placeholder="Nom">
                                                <div class="line-box">
                                                    <div class="line"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-contact">
                                            <div class="modern-form__form-group--padding-l form-group mb-3"><input class="form-control input input-tr" type="text" placeholder="Prenom">
                                                <div class="line-box">
                                                    <div class="line"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="modern-form__form-group--padding-t form-group mb-3"><textarea class="form-control input modern-form__form-control--textarea" placeholder="Note"></textarea>
                                                <div class="line-box">
                                                    <div class="line"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Enregister</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center content-section" id="NOTE">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Dernières NOTEs</h2>
                    <p>18/01/2022 - 12:42 [Jule Parish] : Exemple de notes 2 Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
                    <p>18/01/2022 - 11:58 [Jule Parish] : Exemple de notes Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">&nbsp; Dernière info Google</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter #ukraine</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-rss"></i><span class="network-name">&nbsp;FLUX RSS</span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center content-section" id="infoCollect">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>collecte automatique</h2>
                    <h2></h2>
                    <h2>google</h2>
                    <?php
                        $news=urlencode('Britanny Ferries');
                        $userip=$REMOTE_ADDR;
                        $url = "https://ajax.googleapis.com/ajax/services/search/news?v=1.0&q=".$news."&userip=".$userip."&hl=fr&ned=fr&language=fr";
                        
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_REFERER, 'rwanito.fr/matlep');
                        $body = curl_exec($ch);
                        curl_close($ch);
                        
                        $json = json_decode($body);
                        
                        
                        $json->responseData->results; // Te voici avec un array de "news"
                        foreach($json->responseData->results AS $article){ // Extraction de l'array
                            echo "Titre de l'article : ".$article->titleNoFormatting."<br />";
                            echo "URL de l'Image de l'article : ".$article->image->url;
                    ?>
                    <p>Feel free to leave us a comment on the<a href="#">&nbsp;Grayscale template overview page</a>&nbsp;to give some feedback about this theme!</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">&nbsp; Google+</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;github</span></button></li>
                    </ul>
                </div>
                <div class="col-lg-8 mx-auto">
                    <h2>twitter</h2>
                    <br>
                    <br>
                    <blockquote class="twitter-tweet"><p lang="fr" dir="ltr">🔴💥💣 <a href="https://twitter.com/hashtag/Ukraine?src=hash&amp;ref_src=twsrc%5Etfw">#Ukraine</a> <br>Les Russes se préparent à attaquer l&#39;Ukraine ⚡<br>. &quot;Nous sommes à un stade où la Russie peut lancer à tout moment une attaque en Ukraine&quot;, a estimé la porte-parole de la Maison Blanche, en parlant d&#39;une &quot;situation extrêmement dangereuse&quot;.<a href="https://t.co/uBqstvMHq6">pic.twitter.com/uBqstvMHq6</a></p>&mdash; Pabloneruda54 (Secours) (@Pabloneruda54S) <a href="https://twitter.com/Pabloneruda54S/status/1483722633824948224?ref_src=twsrc%5Etfw">January 19, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                    <br>
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">So, how many <a href="https://twitter.com/hashtag/NATO?src=hash&amp;ref_src=twsrc%5Etfw">#NATO</a> and <a href="https://twitter.com/hashtag/US?src=hash&amp;ref_src=twsrc%5Etfw">#US</a> troops are exactly in Eastern Europe? <a href="https://twitter.com/hashtag/Ukraine?src=hash&amp;ref_src=twsrc%5Etfw">#Ukraine</a> <a href="https://twitter.com/hashtag/Russia?src=hash&amp;ref_src=twsrc%5Etfw">#Russia</a> <a href="https://t.co/fNMMR59bFW">https://t.co/fNMMR59bFW</a></p>&mdash; darkogav (@darkogav) <a href="https://twitter.com/darkogav/status/1483793864817356802?ref_src=twsrc%5Etfw">January 19, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                    
                </div>
                <div class="col-lg-8 mx-auto">
                    <h2>flux rss</h2>
                    <p>Feel free to leave us a comment on the<a href="#">&nbsp;Grayscale template overview page</a>&nbsp;to give some feedback about this theme!</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">&nbsp; Google+</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;github</span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="map-clean"></div>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;Brand 2022</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>