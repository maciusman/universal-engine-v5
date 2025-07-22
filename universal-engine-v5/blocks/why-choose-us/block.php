<?php
$section_heading = get_field('why_section_heading');
$section_description = get_field('why_section_description');
$advantages = get_field('advantages_list');
$team_showcase = get_field('team_showcase');
?>

<section class="why-choose-us">
    <div class="why-choose-us__container">
        <div class="why-choose-us__header">
            <?php if ($section_heading): ?>
                <h2 class="why-choose-us__heading"><?php echo wp_kses_post($section_heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($section_description): ?>
                <div class="why-choose-us__description"><?php echo wp_kses_post($section_description); ?></div>
            <?php endif; ?>
        </div>
        
        <?php if ($advantages): ?>
            <div class="why-choose-us__advantages">
                <?php foreach ($advantages as $advantage): ?>
                    <div class="why-choose-us__advantage">
                        <?php if ($advantage['icon']): ?>
                            <div class="why-choose-us__advantage-icon">
                                <img src="<?php echo esc_url($advantage['icon']['url']); ?>" alt="<?php echo esc_attr($advantage['icon']['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        
                        <div class="why-choose-us__advantage-content">
                            <h3 class="why-choose-us__advantage-title"><?php echo wp_kses_post($advantage['title']); ?></h3>
                            
                            <?php if ($advantage['description']): ?>
                                <div class="why-choose-us__advantage-description"><?php echo wp_kses_post($advantage['description']); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($team_showcase): ?>
            <div class="why-choose-us__team">
                <h3 class="why-choose-us__team-heading"><?php echo wp_kses_post($team_showcase['heading']); ?></h3>
                
                <?php if ($team_showcase['description']): ?>
                    <div class="why-choose-us__team-description"><?php echo wp_kses_post($team_showcase['description']); ?></div>
                <?php endif; ?>
                
                <?php if ($team_showcase['team_members']): ?>
                    <div class="why-choose-us__team-members">
                        <?php foreach ($team_showcase['team_members'] as $member): ?>
                            <div class="why-choose-us__team-member">
                                <?php if ($member['photo']): ?>
                                    <img class="why-choose-us__team-member-photo" src="<?php echo esc_url($member['photo']['url']); ?>" alt="<?php echo esc_attr($member['photo']['alt']); ?>">
                                <?php endif; ?>
                                
                                <h4 class="why-choose-us__team-member-name"><?php echo esc_html($member['name']); ?></h4>
                                <p class="why-choose-us__team-member-role"><?php echo esc_html($member['role']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>