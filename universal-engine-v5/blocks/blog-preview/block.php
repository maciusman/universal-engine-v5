<?php
$section_heading = get_field('blog_section_heading');
$section_description = get_field('blog_section_description');
$featured_topics = get_field('featured_topics');
$blog_cta_text = get_field('blog_cta_text');
$blog_cta_link = get_field('blog_cta_link');
?>

<section class="blog-preview">
    <div class="blog-preview__container">
        <div class="blog-preview__header">
            <?php if ($section_heading): ?>
                <h2 class="blog-preview__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="blog-preview__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <?php if ($featured_topics): ?>
            <div class="blog-preview__topics">
                <?php foreach ($featured_topics as $topic): ?>
                    <div class="blog-preview__topic">
                        <?php if ($topic['featured_image']): ?>
                            <div class="blog-preview__topic-image">
                                <img src="<?php echo esc_url($topic['featured_image']['url']); ?>" alt="<?php echo esc_attr($topic['featured_image']['alt']); ?>">
                                <div class="blog-preview__topic-overlay">
                                    <span class="blog-preview__topic-category"><?php echo esc_html($topic['category']); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="blog-preview__topic-content">
                            <h3 class="blog-preview__topic-title"><?php echo wp_kses_post($topic['title']); ?></h3>
                            
                            <?php if ($topic['excerpt']): ?>
                                <div class="blog-preview__topic-excerpt"><?php echo wp_kses_post($topic['excerpt']); ?></div>
                            <?php endif; ?>
                            
                            <?php if ($topic['link']): ?>
                                <a href="<?php echo esc_url($topic['link']); ?>" class="blog-preview__topic-link">
                                    Czytaj więcej →
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($blog_cta_text && $blog_cta_link): ?>
            <div class="blog-preview__cta">
                <a href="<?php echo esc_url($blog_cta_link); ?>" class="blog-preview__cta-button">
                    <?php echo esc_html($blog_cta_text); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>