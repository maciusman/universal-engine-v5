<?php
$section_heading = get_field('faq_section_heading');
$section_description = get_field('faq_section_description');
$faq_categories = get_field('faq_categories');
$full_faq_cta_text = get_field('full_faq_cta_text');
$full_faq_cta_link = get_field('full_faq_cta_link');
?>

<section class="faq-section">
    <div class="faq-section__container">
        <div class="faq-section__header">
            <?php if ($section_heading): ?>
                <h2 class="faq-section__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="faq-section__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <?php if ($faq_categories): ?>
            <div class="faq-section__categories">
                <?php foreach ($faq_categories as $category): ?>
                    <div class="faq-section__category">
                        <h3 class="faq-section__category-title"><?php echo wp_kses_post($category['title']); ?></h3>
                        
                        <?php if ($category['questions']): ?>
                            <div class="faq-section__questions">
                                <?php foreach ($category['questions'] as $index => $question): ?>
                                    <div class="faq-section__question">
                                        <button class="faq-section__question-toggle" aria-expanded="false" aria-controls="faq-answer-<?php echo $index; ?>">
                                            <span class="faq-section__question-text"><?php echo wp_kses_post($question['question']); ?></span>
                                            <span class="faq-section__question-icon">+</span>
                                        </button>
                                        
                                        <div class="faq-section__answer" id="faq-answer-<?php echo $index; ?>">
                                            <div class="faq-section__answer-content">
                                                <?php echo wp_kses_post($question['answer']); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($full_faq_cta_text && $full_faq_cta_link): ?>
            <div class="faq-section__cta">
                <a href="<?php echo esc_url($full_faq_cta_link); ?>" class="faq-section__cta-button">
                    <?php echo esc_html($full_faq_cta_text); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>