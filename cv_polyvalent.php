<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Développeur web full-stack spécialisé dans les technologies HTML, CSS, JavaScript et PHP. Consultez mon CV en ligne pour découvrir mon parcours et mes compétences techniques" />

    <!-- Balises Open Graph privilégiées sur certains sites à la place de la balise meta description -->
    <meta property="og:title" content="CV ACHARD Cédric" />
    <meta name="title" property="og:title" content="CV ACHARD Cédric">
    <meta property="og:description" content="Développeur web full-stack spécialisé dans les technologies HTML, CSS, JavaScript et PHP. Consultez mon CV en ligne pour découvrir mon parcours et mes compétences techniques" />
    <meta name="description" property="og:description" content="Développeur web full-stack spécialisé dans les technologies HTML, CSS, JavaScript et PHP. Consultez mon CV en ligne pour découvrir mon parcours et mes compétences techniques">
    <meta property="og:image" content="https://achardcedric.fr/img/photo_cv_share.png" />
    <meta name="image" property="og:image" content="https://achardcedric.fr/img/photo_cv_share.png">
    <meta property="og:url" content="https://achardcedric.fr" />

    <link rel="stylesheet" href="style_2.4.css">
    <title>CV ACHARD Cédric</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lustria&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff03dfd379.js" crossorigin="anonymous"></script>
</head>

<body class="wrapper flex">
    <!-- Boutons qui apparaît au scroll et permet de revenir en haut de page -->
    <div id="backToTop" class="hidden noprint">
        <a id="btnBackToTop"><i class="fa-solid fa-circle-arrow-up"></i></a>
    </div>

    <!-- Bouton pour changer de thème (clair/sombre) -->
    <div id="themeToggle" class="noprint">
        <a id="btnThemeToggle"><i class="fa-solid fa-circle-half-stroke"></i></a>
    </div>

    <!-- Header avec photo, infos et projet professionnel en haut du site -->
    <header class="flex reveal">
        <div id="photo_cv" class="flex">
            <a href="/"><img src="img/photo_cv.png" alt="photo_cv"></a>
        </div>

        <div id="infos">
            <h2>ACHARD Cédric</h2>
            <ul>
                <li>37 ans - Montpellier</li>
                <li><i class="fa-solid fa-phone"></i> <a id="tel" href="tel:0671744802">06 71 74 48 02</a></li>
                <li><i class="fa-solid fa-envelope"></i> <a id="mailto" href="mailto:achardcedric88@gmail.com">achardcedric88@gmail.com</a></li>
            </ul>
        </div>

        <div id="project" class="reveal-1">
            <h2>
                Employé Polyvalent
            </h2>

            <p>
                <strong>Dynamique, souriant</strong> et doté d'un <strong>excellent sens du relationnel</strong>, 
                je souhaite mettre mes <strong>11 ans d'expérience commerciale</strong> au service de votre établissement. 
                Mon passage chez <strong>Pomona</strong> m'a permis de bien connaître <strong>l'univers de la restauration</strong>, 
                tandis que mes expériences en <strong>boulangerie</strong> et chez <strong>McDonald's</strong> m'ont appris à gérer le <strong>flux client</strong> 
                avec <strong>rapidité et rigueur</strong>.
            </p>

            <p>
                <strong>Sportif</strong> et habitué au <strong>travail d'équipe</strong>, je suis prêt à m'investir pour garantir un <strong>service de qualité</strong>.
            </p>
        </div>
    </header>

    <!-- Main contenant expériences professionnelles, formations et infos diverses dans chaque section -->
    <main class="flex">
        <!-- Expériences Professionnelles -->
        <section id="experiences" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-suitcase"></i> Expériences Professionnelles</h2>
            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">5 ans</li>
                        <li class="fs-italic">2019 - 2024</li>
                        <li>Nîmes</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Commercial B to B / Chef de secteur</li>
                        <li class="fs-italic">Pomona Passion Froid</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Développement et fidélisation du secteur en restauration commerciale (> 100 clients)</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Visites hebdomadaires, négociation, défense de la marge, veille concurrentielle</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Gestion autonome, reporting, recouvrement, application de la stratégie du groupe</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>
            
            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">6 ans</li>
                        <li class="fs-italic">2012 - 2018</li>
                        <li>St Jean de Védas</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Commercial B to C / VRP</li>
                        <li class="fs-italic">Thiriet</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Développement et fidélisation du secteur auprès de particuliers (> 500 clients)</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Vente mensuelle par téléphone, livraison à domicile des produits surgelés</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Prospection physique, parrainages, réunions, etc.</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">3 ans</li>
                        <li class="fs-italic">2009 - 2012</li>
                        <li>Montpellier</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Artisan Boulanger</li>
                        <li class="fs-italic">Paul, La Fournée d’Ovalie & Le Fournil de St Jean</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Pétrissage, façonnage et cuisson des pains, viennoiseries, brioches, etc.</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Prise de commande et livraison aux différents points de vente</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">1 an</li>
                        <li class="fs-italic">2008 - 2009</li>
                        <li>St Jean de Védas</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Hôte - Animateur / Employé Polyvalent</li>
                        <li class="fs-italic">McDonald’s</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Accueil clientèle, prise de commande, préparation, cuisine, nettoyage</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Animation des anniversaires</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">2 ans</li>
                        <li class="fs-italic">2006 - 2008</li>
                        <li>Lattes</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Animateur Commercial</li>
                        <li class="fs-italic">Intersport</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Gestion du rayon, étiquetages, balisages, plv</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Utilisation des techniques de vente, conseils clients</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Exploitation du SIC pour l’état des stocks et relance clients (emailing)</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>
        </section>

        <!-- Formations -->
        <section id="formations" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-graduation-cap"></i> Formations</h2>
            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2025</li>
                        <li>À distance</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Développement Web et Web Mobile | Niveau 5 (Bac+2) | RNCP37674</li>
                        <li class="fs-italic">CEFii Angers - Formation sur 12 mois</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2009 - 2010</li>
                        <li>Sète</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">CAP Boulangerie</li>
                        <li class="fs-italic">CFA Nicolas Albano</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2006 - 2008</li>
                        <li>Montpellier</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">BTS MUC - Conduite et gestion des évènements sportifs</li>
                        <li class="fs-italic">ESCA-INFORS</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2007</li>
                        <li>Montpellier</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">BAFA, AFPS, BSB - Animateur en centre de loisirs</li>
                        <li class="fs-italic">Direction Départementale de la Jeunesse et des Sports</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2006</li>
                        <li>Montpellier</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">BAC Scientifique - Option Arts Plastiques</li>
                        <li class="fs-italic">Lycée Notre-Dame de La Merci</li>
                    </ul>
                </article>
            </div>

        </section>

        <!-- Informatique -->
        <section id="computer" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-desktop"></i> Informatique</h2>
            <div class="flex reveal-4">
                <aside>Office</aside>
                <article>Excel, Word, PowerPoint</article>
            </div>

            <div class="flex reveal-4">
                <aside>Création</aside>
                <article>Photoshop, After Effects, Montage vidéo, Image vectorielle</article>
            </div>

            <div class="flex reveal-4">
                <aside>Dév</aside>
                <article>Conception et gestion technique de projets web avec base de données</article>
            </div>
        </section>
        <!-- Extra-professionnel -->
        <section id="extra-professionnal" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-person-hiking"></i> Extra-Professionnel</h2>
            <div class="flex reveal-4">
                <aside>Langues</aside>
                <article>Anglais & Espagnol (usuel)</article>
            </div>

            <div class="flex reveal-4">
                <aside>Permis</aside>
                <article>A & B</article>
            </div>

            <div class="flex reveal-4">
                <aside>Bénévole</aside>
                <article>Commissaire de piste FFSA & FFM au Circuit Paul Ricard / Le Castellet (83 Var)</article>
            </div>

            <div class="flex reveal-4">
                <aside>Club</aside>
                <article>Création d’une équipe de Foot à 7, logo, maillots, sponsors, recrutement, comptabilité</article>
            </div>

            <div class="flex reveal-4">
                <aside>Virtuel</aside>
                <article>Gestion d’une communauté d’eSport autour de la Formule 1 et sports auto</article>
            </div>

            <div class="flex reveal-4">
                <aside>Sports</aside>
                <article>Cyclisme sur route, trail, course à pied, randonnée, trekking, football, tennis</article>
            </div>

            <div class="flex reveal-4">
                <aside>Défis</aside>
                <article>GR20, L'Étape du Tour, GF Mont Ventoux, Bol d'Or Vélo 24h, Marathon de l'Hortus, Marseille-Cassis</article>
            </div>
        </section>
    </main>
    <!-- Footer comprenant l'envoi par mail, l'impression et la mention 'imaginé et conçu' -->
    <footer id="others_cv" class="flex reveal noprint">
            <div id="autor" class="flex reveal-2">
                <div>Imaginé et conçu par mes soins</div>
                <div><small>CV Responsive Smartphone / Tablette / Desktop</small></div>
                <div><small>Garanti sans Framework / 100% Artisanal</small></div>
                <div><small>HTML - CSS - JavaScript - PHP</small></div>
                <div><small><i class="fa-brands fa-github"></i> Voir le code source sur <a href="https://github.com/paraguayan99/curriculum-vitae-web" target="_blank">Github</a></small></div>
            </div>
    </footer>
</body>
<!-- insertion du JavaScript -->
<script src="script.js"></script>
</html>