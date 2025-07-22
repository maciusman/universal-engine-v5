<?php
$section_heading = get_field('contact_section_heading');
$section_description = get_field('contact_section_description');
$consultation_info = get_field('consultation_info');
$brief_form_info = get_field('brief_form_info');
$contact_info = get_field('contact_info');
$next_steps = get_field('next_steps');
?>

<section class="contact-cta">
    <div class="contact-cta__container">
        <div class="contact-cta__header">
            <?php if ($section_heading): ?>
                <h2 class="contact-cta__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="contact-cta__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <div class="contact-cta__options">
            <?php if ($consultation_info): ?>
                <div class="contact-cta__option">
                    <div class="contact-cta__option-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    
                    <div class="contact-cta__option-content">
                        <h3 class="contact-cta__option-title"><?php echo wp_kses_post($consultation_info['title']); ?></h3>
                        
                        <?php if ($consultation_info['description']): ?>
                            <div class="contact-cta__option-description"><?php echo wp_kses_post($consultation_info['description']); ?></div>
                        <?php endif; ?>
                        
                        <?php if ($consultation_info['cta_text'] && $consultation_info['cta_link']): ?>
                            <a href="<?php echo esc_url($consultation_info['cta_link']); ?>" class="contact-cta__option-button">
                                <?php echo esc_html($consultation_info['cta_text']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if ($brief_form_info): ?>
                <div class="contact-cta__option">
                    <div class="contact-cta__option-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14,2 14,8 20,8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10,9 9,9 8,9"></polyline>
                        </svg>
                    </div>
                    
                    <div class="contact-cta__option-content">
                        <h3 class="contact-cta__option-title"><?php echo wp_kses_post($brief_form_info['title']); ?></h3>
                        
                        <?php if ($brief_form_info['description']): ?>
                            <div class="contact-cta__option-description"><?php echo wp_kses_post($brief_form_info['description']); ?></div>
                        <?php endif; ?>
                        
                        <?php if ($brief_form_info['cta_text'] && $brief_form_info['cta_link']): ?>
                            <a href="<?php echo esc_url($brief_form_info['cta_link']); ?>" class="contact-cta__option-button contact-cta__option-button--secondary">
                                <?php echo esc_html($brief_form_info['cta_text']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
        <?php if ($contact_info): ?>
            <div class="contact-cta__contact-info">
                <h3 class="contact-cta__contact-title"><?php echo wp_kses_post($contact_info['title']); ?></h3>
                
                <div class="contact-cta__contact-details">
                    <?php if ($contact_info['phone']): ?>
                        <div class="contact-cta__contact-item">
                            <strong>Telefon:</strong> 
                            <a href="tel:<?php echo esc_attr($contact_info['phone']); ?>"><?php echo esc_html($contact_info['phone']); ?></a>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($contact_info['email']): ?>
                        <div class="contact-cta__contact-item">
                            <strong>Email:</strong> 
                            <a href="mailto:<?php echo esc_attr($contact_info['email']); ?>"><?php echo esc_html($contact_info['email']); ?></a>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($contact_info['address']): ?>
                        <div class="contact-cta__contact-item">
                            <strong>Adres:</strong> <?php echo esc_html($contact_info['address']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if ($next_steps): ?>
            <div class="contact-cta__next-steps">
                <h3 class="contact-cta__next-steps-title"><?php echo wp_kses_post($next_steps['title']); ?></h3>
                
                <?php if ($next_steps['steps']): ?>
                    <div class="contact-cta__steps">
                        <?php foreach ($next_steps['steps'] as $index => $step): ?>
                            <div class="contact-cta__step">
                                <div class="contact-cta__step-number"><?php echo ($index + 1); ?></div>
                                <div class="contact-cta__step-content">
                                    <h4 class="contact-cta__step-title"><?php echo wp_kses_post($step['title']); ?></h4>
                                    
                                    <?php if ($step['description']): ?>
                                        <div class="contact-cta__step-description"><?php echo wp_kses_post($step['description']); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>