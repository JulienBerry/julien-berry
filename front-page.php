<?php get_header(); ?>

<div class="container">
        <div id="accueil" class="hero-content">
            <?php get_template_part('/templates-part/flip-card'); ?>
        </div>
        <div class="hero-image">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/hero.png'; ?>" alt="Hero du site">
        </div>
    </div>
    <div id="apropos" class="container-about-me">
        <h1 class="first-title fancy">À propos</h1>
        <div class="about-group">
            <div data-aos="flip-left" data-aos-offset="200" data-aos-duration="750" data-aos-easing="ease-in-sine" class="about-me">
                <h2 class="second-title">Je me présente</h2>
            <p>Je m'appelle Julien Berry.</p>
            <p>Je suis né à Metz en 1992. Depuis je ne cesse d'alimenter ma curiosité en expérimentant le maximum tous les domaines possibles.</p>
            <p class="margin-bottom">D'un naturel ouvert, et dans l'accueil de nouvelles expériences, j'ai pu évoluer dans divers milieux professionnels et m'épanouir dans une vie personnelle très diversifiée.</p>
            <p>J'ai pu lors de mon adolescence avoir une première expérience avec le développement Web en suivant les cours du "Site du Zéro", qui deviendra par la suite <a href="https://openclassrooms.com/fr/" title="Le site d'OpenClassrooms" alt="Site d'OpenClassrooms" target="_blank"><i class="fas fa-link link-deco"></i> OpenClassrooms</a> où je me formerais à nouveau dans ce domaine.</p>
            <p>Celle-ci couplée à la découverte de Photoshop, je fais mes premiers sites vitrines en HTML, CSS et PHP.</p>
            <p>Suite à l'obtention de mon BAC STI Génie Électronique en 2012, je décide de commencer à travailler pour être indépendant.</p>
            <p class="margin-bottom">C'est ainsi que je vis mon premier contact avec le monde professionnel, passant de manutentionnaire/livreur à Guichetier pour répondre aux besoins des entreprises.</p>
            <p>Suite à cela, je décide avec un ami de prendre quelques mois pour parcourir la France à pied avec une charrette à la rencontre de projets et d'entreprises écologiques/alternatives/éthiques.</p>
            <p>Dans le but de les interviewer et ainsi comprendre leur démarche et les partager au plus grand nombre à travers notre page l'Éveil Nomade sur <a href="https://www.facebook.com/eveilnomade" title="Page Facebook de l'Éveil Nomade" alt="Facebook de l'Éveil Nomade" target="_blank"><i class="fas fa-link link-deco"></i> Facebook</a>.</p>
            <p>Au passage, nous ramasserons au moins 1 sac de déchets par jour au bord des routes.</p>
            <?php get_template_part('/templates-part/image-slider'); ?>
            <p>Cette aventure renforça mon lien avec la nature et ma foi en l'humanité.</p>
            <p>Suite à cela je décide de travailler au Luxembourg dans les magasins cactus pour pouvoir par la suite faire la côte Ouest du Canada et des États-Unis en van.</p>
            <p>De retour en France, je trouve une place dans une entreprise de maraîchage bio, puis en tant que vendeur dans leur magasin à Kanfen.</p>
            <p>Début 2022, je décide d'aller vivre dans le Sud pour faire de nouvelles expériences, malheureusement je vais avoir un souci physique qui me scotchera au lit pendant quelque temps et remettant en question le fait de pouvoir continuer à travailler dans les métiers physiques.</p>
            <p>C'est ainsi qu'en mars 2023, je décide de commencer la formation "Développeur WordPress" proposée par <a href="https://openclassrooms.com/fr/" title="Le site d'OpenClassrooms" alt="Site d'OpenClassrooms" target="_blank"><i class="fas fa-link link-deco"></i> OpenClassrooms</a>. Et me voici !</p>
            </div>
            <div data-aos="flip-right" data-aos-offset="200" data-aos-duration="750" data-aos-easing="ease-in-sine" class="my-carreer">
                <h2 class="second-title">Mon parcours Pro</h2>
                <?php get_template_part('/templates-part/timeline'); ?>
            </div>
        </div>
    </div>
    <div data-aos="flip-up" data-aos-duration="750" data-aos-offset="200" data-aos-easing="ease-in-sine" class="container-school-languages">
        <div class="school">
            <h2 class="second-title">Mes formations</h2>
            <p>
                <strong>2008-2012</strong><br> Bac STI Génie Électronique La Briquerie à Thionville<br>
                <strong>2013-2014</strong><br> Validation première année de Licence d'anglais
            </p>
        </div>
        <div class="languages">
            <h2 class="second-title">Mes langues</h2>
            <p>
            <img class="flag-icon" src="<?php echo get_theme_file_uri() . '/assets/images/france-icon.png'; ?>" title="Parle couramment Français" alt="Drapeau Français"> Langue maternelle<br>
            <img class="flag-icon" src="<?php echo get_theme_file_uri() . '/assets/images/united-icon.png'; ?>" title="Parle un Anglais scolaire"alt="Drapeau du Royaume-Uni"> Scolaire<br>
            <img class="flag-icon" src="<?php echo get_theme_file_uri() . '/assets/images/german-icon.png'; ?>" title="Parle un Allemand scolaire"alt="Drapeau Allemand"> Scolaire
            </p>
        </div>
    </div>
    <div id="portfolio" class="container-portfolio">
        <h1 class="first-title fancy">Mon Portfolio</h1>
        <div data-aos="zoom-in-up" data-aos-duration="750" data-aos-offset="200" data-aos-easing="ease-in-sine" class="container-projects">
            <h2 class="second-title">Les Projets OpenClassrooms</h2>
            <p>Retrouvez dans ce slider tous les projets réalisés lors de la formation de Développeur WordPress chez OpenClassrooms ainsi que d'autres projets personnels.</p>
            <?php get_template_part('/templates-part/swiper-project'); ?>
            <div>
                <button class="all-projects type margin-bottom">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <a href="https://portfolio.julien-berry.fr/tous-les-projets/"><span class="button-project">Tous les projets</span></a>
                </button>
            </div>
        </div>    
    </div>
    <div id="contact" class="container-contact">
        <h1 class="first-title fancy">Me contacter</h1>
        <div class="container-form-info">
            <div data-aos="flip-left"  data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="form-side">
                <h2 class="second-title">Contactez-moi</h2>
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="a1b0538" title="Me contacter"]'); ?>
                </div>
            </div>
            <div data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="info-side">
                <h2 class="second-title">Mes informations</h2>
                <p>
                    <strong>Adresse:</strong> rue du pré au lièvre 57310 GUÉNANGE<br>
                    <strong>E-mail:</strong> <a href="mailto:berry.julien57@gmail.com" title="Envoyez-moi un e-mail"><i class="fas fa-envelope"></i> berry.julien57@gmail.com</a><br>
                    <strong>Téléphone:</strong> 06.25.78.47.54<br><br>
                </p>
                <img class="info-picture" title="Canon Beach - Oregon, USA" src="<?php echo get_theme_file_uri('/assets/images/julien-canada.jpg'); ?>" alt="Photo de mon voyage à Canon Beach - Oregon, USA">
            </div>
        </div>
    </div>
    <?php get_template_part('/templates-part/social-icon'); ?>
</div>

<?php get_footer(); ?>