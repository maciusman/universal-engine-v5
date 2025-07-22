<?php
$section_heading = get_field('process_section_heading');
$section_description = get_field('process_section_description');
$process_steps = get_field('process_steps');
$support_message = get_field('support_message');
?>

<section class="process-explanation">
    <div class="process-explanation__container">
        <div class="process-explanation__header">
            <?php if ($section_heading): ?>
                <h2 class="process-explanation__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="process-explanation__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <?php if ($process_steps): ?>
            <div class="process-explanation__steps">
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="process-explanation__step">
                        <div class="process-explanation__step-number">
                            <span><?php echo ($index + 1); ?></span>
                        </div>
                        
                        <div class="process-explanation__step-content">
                            <h3 class="process-explanation__step-title"><?php echo wp_kses_post($step['title']); ?></h3>
                            
                            <?php if ($step['description']): ?>
                                <div class="process-explanation__step-description"><?php echo wp_kses_post($step['description']); ?></div>
                            <?php endif; ?>
                            
                            <?php if ($step['details']): ?>
                                <ul class="process-explanation__step-details">
                                    <?php foreach ($step['details'] as $detail): ?>
                                        <li><?php echo esc_html($detail['detail']); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($support_message): ?>
            <div class="process-explanation__support">
                <div class="process-explanation__support-content">
                    <?php echo wp_kses_post($support_message); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>