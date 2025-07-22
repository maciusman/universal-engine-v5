<?php
$section_heading = get_field('services_section_heading');
$section_description = get_field('services_section_description');
$service_categories = get_field('service_categories');
?>

<section class="services-comprehensive">
    <div class="services-comprehensive__container">
        <div class="services-comprehensive__header">
            <?php if ($section_heading): ?>
                <h2 class="services-comprehensive__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="services-comprehensive__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <?php if ($service_categories): ?>
            <div class="services-comprehensive__categories">
                <?php foreach ($service_categories as $category): ?>
                    <div class="services-comprehensive__category">
                        <div class="services-comprehensive__category-header">
                            <?php if ($category['featured_image']): ?>
                                <div class="services-comprehensive__category-image">
                                    <img src="<?php echo esc_url($category['featured_image']['url']); ?>" alt="<?php echo esc_attr($category['featured_image']['alt']); ?>">
                                </div>
                            <?php endif; ?>
                            
                            <div class="services-comprehensive__category-content">
                                <h3 class="services-comprehensive__category-title"><?php echo wp_kses_post($category['title']); ?></h3>
                                
                                <?php if ($category['description']): ?>
                                    <div class="services-comprehensive__category-description"><?php echo wp_kses_post($category['description']); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <?php if ($category['subcategories']): ?>
                            <div class="services-comprehensive__subcategories">
                                <?php foreach ($category['subcategories'] as $subcategory): ?>
                                    <div class="services-comprehensive__subcategory">
                                        <h4 class="services-comprehensive__subcategory-title"><?php echo wp_kses_post($subcategory['title']); ?></h4>
                                        
                                        <?php if ($subcategory['description']): ?>
                                            <div class="services-comprehensive__subcategory-description"><?php echo wp_kses_post($subcategory['description']); ?></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>