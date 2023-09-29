<?php get_header(); ?>

<?php 
// Champs ACF
$project = get_field('projet');
$name = get_field('nom');
$details = get_field('details'); 
$num = get_field('num');
$banniere = get_field('banniere');
$desktop_url = get_field('desktop');
$apercu = get_field('apercu');

// Langages utilisés
$wordpress = get_field('wordpress');
$html = get_field('html');
$css = get_field('css');
$javascript = get_field('javascript');
$php = get_field('php');
$bootstrap = get_field('bootstrap');

// Récupération de l'id et de l'url    
$id = get_the_ID();
$url = get_permalink();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container-single">
    <div class="title-description">
        <h1>Tous les projets</h1>
        <h3 class="second-title margin-bottom"><?php echo $name ?></h2>
    </div>
    <p class="text-align margin-bottom">Retrouvez sur cette page tous les projets sur lesquels j'ai travaillé.</p>
    <div class="filter-buttons">
        <button data-filter="all">Tous</button>
        <button data-filter="html">HTML</button>
        <button data-filter="css">CSS</button>
        <button data-filter="javascript">JavaScript</button>
        <button data-filter="php">PHP</button>
        <button data-filter="wordpress">WordPress</button>
        <button data-filter="bootstrap">Bootstrap</button>
    </div>
    <div class="projects-grid">
        <?php 
        $args = array(
            'post_type' => 'projet-oc',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); 
                $wordpress = get_field('wordpress');
                $html = get_field('html');
                $css = get_field('css');
                $javascript = get_field('javascript');
                $php = get_field('php');
                $bootstrap = get_field('bootstrap');
            ?>
            <a href="<?php the_permalink(); ?>" data-aos="zoom-in" class="project-block <?php echo ($wordpress ? 'wordpress ' : '') . ($html ? 'html ' : '') . ($css ? 'css ' : '') . ($javascript ? 'javascript ' : '') . ($php ? 'php ' : '') . ($bootstrap ? 'bootstrap ' : ''); ?>">
                <div class="project-img">
                    <img class="margin-bottom" src="<?php echo esc_url(get_field('desktop')); ?>">      
                </div>
                <div class="project-content">
                    <h3 class="text-align margin-bottom"><?php echo get_field('projet') ?></h3>
                    <p class="margin-bottom"><?php echo get_field('apercu') ?></p>
                    <div class="languages-list margin-bottom">
                        <?php
                        if ($wordpress) {
                            echo '<img src="' . esc_url($wordpress) . '" alt="Fait sur WordPress" title="Fait sur WordPress">';
                        }
                        if ($html) {
                            echo '<img src="' . esc_url($html) . '" alt="Codé avec HTML5" title="Codé avec HTML5">';
                        }
                        if ($css) {
                            echo '<img src="' . esc_url($css) . '" alt="Codé avec CSS3" title="Codé avec CSS3">';
                        }
                        if ($javascript) {
                            echo '<img src="' . esc_url($javascript) . '" alt="Codé avec JavaScript" title="Codé avec JavaScript">';
                        }
                        if ($php) {
                            echo '<img src="' . esc_url($php) . '" alt="Codé avec PHP8" title="Codé avec PHP8">';
                        }
                        if ($bootstrap) {
                            echo '<img src="' . esc_url($bootstrap) . '" alt="Utilisation de Bootstrap" title="Utilisation de Bootstrap">';
                        }
                        ?>
                    </div>
                </div>
            </a>
            <?php endwhile; 
            wp_reset_postdata();
        else :
            echo 'Aucun projet trouvé.';
        endif;
        ?> 
    </div>
    <?php get_template_part('/templates-part/social-icon'); ?>
</div>

<?php endwhile; endif ?> 

<?php get_footer(); ?>