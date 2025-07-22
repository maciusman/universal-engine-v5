<?php
$section_heading = get_field('benefits_section_heading');
$section_description = get_field('benefits_section_description');
$benefits = get_field('benefits_list');
?>

<section class="benefits-section">
    <div class="benefits-section__container">
        <div class="benefits-section__header">
            <?php if ($section_heading): ?>
                <h2 class="benefits-section__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="benefits-section__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <?php if ($benefits): ?>
            <div class="benefits-section__grid">
                <?php foreach ($benefits as $benefit): ?>
                    <div class="benefits-section__item">
                        <?php if ($benefit['icon']): ?>
                            <div class="benefits-section__item-icon">
                                <img src="<?php echo esc_url($benefit['icon']['url']); ?>" alt="<?php echo esc_attr($benefit['icon']['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        
                        <h3 class="benefits-section__item-title"><?php echo wp_kses_post($benefit['title']); ?></h3>
                        
                        <?php if ($benefit['description']): ?>
                            <div class="benefits-section__item-description"><?php echo wp_kses_post($benefit['description']); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>