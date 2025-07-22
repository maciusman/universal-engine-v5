<?php
$section_heading = get_field('portfolio_section_heading');
$section_description = get_field('portfolio_section_description');
$featured_projects = get_field('featured_projects');
$portfolio_cta_text = get_field('portfolio_cta_text');
$portfolio_cta_link = get_field('portfolio_cta_link');
?>

<section class="portfolio-showcase">
    <div class="portfolio-showcase__container">
        <div class="portfolio-showcase__header">
            <?php if ($section_heading): ?>
                <h2 class="portfolio-showcase__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="portfolio-showcase__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <?php if ($featured_projects): ?>
            <div class="portfolio-showcase__grid">
                <?php foreach ($featured_projects as $project): ?>
                    <div class="portfolio-showcase__project">
                        <?php if ($project['featured_media']): ?>
                            <div class="portfolio-showcase__project-media">
                                <?php if ($project['featured_media']['type'] === 'video'): ?>
                                    <video class="portfolio-showcase__project-video" controls>
                                        <source src="<?php echo esc_url($project['featured_media']['url']); ?>" type="video/mp4">
                                    </video>
                                <?php else: ?>
                                    <img class="portfolio-showcase__project-image" src="<?php echo esc_url($project['featured_media']['url']); ?>" alt="<?php echo esc_attr($project['featured_media']['alt']); ?>">
                                <?php endif; ?>
                                <div class="portfolio-showcase__project-overlay">
                                    <div class="portfolio-showcase__project-overlay-content">
                                        <span class="portfolio-showcase__project-category"><?php echo esc_html($project['category']); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="portfolio-showcase__project-content">
                            <h3 class="portfolio-showcase__project-title"><?php echo wp_kses_post($project['title']); ?></h3>
                            
                            <?php if ($project['description']): ?>
                                <div class="portfolio-showcase__project-description"><?php echo wp_kses_post($project['description']); ?></div>
                            <?php endif; ?>
                            
                            <?php if ($project['results']): ?>
                                <div class="portfolio-showcase__project-results">
                                    <strong>Rezultaty:</strong> <?php echo wp_kses_post($project['results']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($portfolio_cta_text && $portfolio_cta_link): ?>
            <div class="portfolio-showcase__cta">
                <a href="<?php echo esc_url($portfolio_cta_link); ?>" class="portfolio-showcase__cta-button">
                    <?php echo esc_html($portfolio_cta_text); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>