<?php
$section_heading = get_field('pricing_section_heading');
$section_description = get_field('pricing_section_description');
$cost_factors = get_field('cost_factors');
$budget_estimation = get_field('budget_estimation');
$pricing_packages = get_field('pricing_packages');
$roi_measurement = get_field('roi_measurement');
?>

<section class="pricing-investment">
    <div class="pricing-investment__container">
        <div class="pricing-investment__header">
            <?php if ($section_heading): ?>
                <h2 class="pricing-investment__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="pricing-investment__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <div class="pricing-investment__content">
            <?php if ($cost_factors): ?>
                <div class="pricing-investment__section">
                    <h3 class="pricing-investment__section-title"><?php echo wp_kses_post($cost_factors['title']); ?></h3>
                    
                    <?php if ($cost_factors['factors']): ?>
                        <div class="pricing-investment__factors">
                            <?php foreach ($cost_factors['factors'] as $factor): ?>
                                <div class="pricing-investment__factor">
                                    <h4 class="pricing-investment__factor-title"><?php echo wp_kses_post($factor['title']); ?></h4>
                                    
                                    <?php if ($factor['description']): ?>
                                        <div class="pricing-investment__factor-description"><?php echo wp_kses_post($factor['description']); ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
            <?php if ($budget_estimation): ?>
                <div class="pricing-investment__section">
                    <h3 class="pricing-investment__section-title"><?php echo wp_kses_post($budget_estimation['title']); ?></h3>
                    
                    <?php if ($budget_estimation['description']): ?>
                        <div class="pricing-investment__section-description"><?php echo wp_kses_post($budget_estimation['description']); ?></div>
                    <?php endif; ?>
                    
                    <?php if ($budget_estimation['cta_text'] && $budget_estimation['cta_link']): ?>
                        <div class="pricing-investment__cta">
                            <a href="<?php echo esc_url($budget_estimation['cta_link']); ?>" class="pricing-investment__cta-button">
                                <?php echo esc_html($budget_estimation['cta_text']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
            <?php if ($pricing_packages): ?>
                <div class="pricing-investment__section">
                    <h3 class="pricing-investment__section-title"><?php echo wp_kses_post($pricing_packages['title']); ?></h3>
                    
                    <?php if ($pricing_packages['packages']): ?>
                        <div class="pricing-investment__packages">
                            <?php foreach ($pricing_packages['packages'] as $package): ?>
                                <div class="pricing-investment__package">
                                    <h4 class="pricing-investment__package-title"><?php echo wp_kses_post($package['title']); ?></h4>
                                    
                                    <?php if ($package['price_range']): ?>
                                        <div class="pricing-investment__package-price"><?php echo esc_html($package['price_range']); ?></div>
                                    <?php endif; ?>
                                    
                                    <?php if ($package['description']): ?>
                                        <div class="pricing-investment__package-description"><?php echo wp_kses_post($package['description']); ?></div>
                                    <?php endif; ?>
                                    
                                    <?php if ($package['features']): ?>
                                        <ul class="pricing-investment__package-features">
                                            <?php foreach ($package['features'] as $feature): ?>
                                                <li><?php echo esc_html($feature['feature']); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
            <?php if ($roi_measurement): ?>
                <div class="pricing-investment__section pricing-investment__section--roi">
                    <h3 class="pricing-investment__section-title"><?php echo wp_kses_post($roi_measurement['title']); ?></h3>
                    
                    <?php if ($roi_measurement['description']): ?>
                        <div class="pricing-investment__section-description"><?php echo wp_kses_post($roi_measurement['description']); ?></div>
                    <?php endif; ?>
                    
                    <?php if ($roi_measurement['kpis']): ?>
                        <div class="pricing-investment__kpis">
                            <?php foreach ($roi_measurement['kpis'] as $kpi): ?>
                                <div class="pricing-investment__kpi">
                                    <h4 class="pricing-investment__kpi-title"><?php echo wp_kses_post($kpi['title']); ?></h4>
                                    
                                    <?php if ($kpi['description']): ?>
                                        <div class="pricing-investment__kpi-description"><?php echo wp_kses_post($kpi['description']); ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>