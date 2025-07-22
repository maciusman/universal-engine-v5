<?php
$section_heading = get_field('testimonials_section_heading');
$section_description = get_field('testimonials_section_description');
$client_logos = get_field('client_logos');
$testimonials = get_field('testimonials_list');
$success_stories = get_field('success_stories');
?>

<section class="client-testimonials">
    <div class="client-testimonials__container">
        <div class="client-testimonials__header">
            <?php if ($section_heading): ?>
                <h2 class="client-testimonials__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="client-testimonials__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <?php if ($client_logos): ?>
            <div class="client-testimonials__logos">
                <h3 class="client-testimonials__logos-heading">Marki, które wybrały filmy reklamowe od Alchemiq</h3>
                <div class="client-testimonials__logos-grid">
                    <?php foreach ($client_logos as $logo): ?>
                        <div class="client-testimonials__logo">
                            <img src="<?php echo esc_url($logo['logo']['url']); ?>" alt="<?php echo esc_attr($logo['logo']['alt']); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if ($testimonials): ?>
            <div class="client-testimonials__testimonials">
                <h3 class="client-testimonials__testimonials-heading">Opinie i Rekomendacje Klientów</h3>
                <div class="client-testimonials__testimonials-grid">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div class="client-testimonials__testimonial">
                            <?php if ($testimonial['video_testimonial']): ?>
                                <div class="client-testimonials__testimonial-video">
                                    <video controls>
                                        <source src="<?php echo esc_url($testimonial['video_testimonial']['url']); ?>" type="video/mp4">
                                    </video>
                                </div>
                            <?php endif; ?>
                            
                            <div class="client-testimonials__testimonial-content">
                                <?php if ($testimonial['quote']): ?>
                                    <blockquote class="client-testimonials__testimonial-quote">
                                        "<?php echo wp_kses_post($testimonial['quote']); ?>"
                                    </blockquote>
                                <?php endif; ?>
                                
                                <div class="client-testimonials__testimonial-author">
                                    <?php if ($testimonial['client_photo']): ?>
                                        <img class="client-testimonials__testimonial-photo" src="<?php echo esc_url($testimonial['client_photo']['url']); ?>" alt="<?php echo esc_attr($testimonial['client_photo']['alt']); ?>">
                                    <?php endif; ?>
                                    
                                    <div class="client-testimonials__testimonial-details">
                                        <div class="client-testimonials__testimonial-name"><?php echo esc_html($testimonial['client_name']); ?></div>
                                        <div class="client-testimonials__testimonial-company"><?php echo esc_html($testimonial['client_company']); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if ($success_stories): ?>
            <div class="client-testimonials__success-stories">
                <h3 class="client-testimonials__success-stories-heading">Krótkie Historie Sukcesu Naszych Partnerów</h3>
                <div class="client-testimonials__success-stories-grid">
                    <?php foreach ($success_stories as $story): ?>
                        <div class="client-testimonials__success-story">
                            <h4 class="client-testimonials__success-story-title"><?php echo wp_kses_post($story['title']); ?></h4>
                            
                            <?php if ($story['description']): ?>
                                <div class="client-testimonials__success-story-description"><?php echo wp_kses_post($story['description']); ?></div>
                            <?php endif; ?>
                            
                            <?php if ($story['impact']): ?>
                                <div class="client-testimonials__success-story-impact">
                                    <strong>Wpływ:</strong> <?php echo wp_kses_post($story['impact']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>