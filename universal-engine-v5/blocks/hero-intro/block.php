<?php
$heading = get_field('hero_heading');
$subheading = get_field('hero_subheading');
$description = get_field('hero_description');
$cta_text = get_field('hero_cta_text');
$cta_link = get_field('hero_cta_link');
$background_video = get_field('hero_background_video');
$background_image = get_field('hero_background_image');
?>

<section class="hero-intro">
    <div class="hero-intro__background">
        <?php if ($background_video): ?>
            <video class="hero-intro__background-video" autoplay muted loop>
                <source src="<?php echo esc_url($background_video['url']); ?>" type="video/mp4">
            </video>
        <?php elseif ($background_image): ?>
            <img class="hero-intro__background-image" src="<?php echo esc_url($background_image['url']); ?>" alt="<?php echo esc_attr($background_image['alt']); ?>">
        <?php endif; ?>
        <div class="hero-intro__overlay"></div>
    </div>
    
    <div class="hero-intro__container">
        <div class="hero-intro__content">
            <?php if ($heading): ?>
                <h1 class="hero-intro__heading"><?php echo wp_kses_post($heading); ?></h1>
            <?php endif; ?>
            
            <?php if ($subheading): ?>
                <h2 class="hero-intro__subheading"><?php echo wp_kses_post($subheading); ?></h2>
            <?php endif; ?>
            
            <?php if ($description): ?>
                <div class="hero-intro__description"><?php echo wp_kses_post($description); ?></div>
            <?php endif; ?>
            
            <?php if ($cta_text && $cta_link): ?>
                <div class="hero-intro__cta">
                    <a href="<?php echo esc_url($cta_link); ?>" class="hero-intro__cta-button">
                        <?php echo esc_html($cta_text); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>