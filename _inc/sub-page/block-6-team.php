            <?php  if( get_row_layout() == 'block_6_team' ):

                $block_6_title = get_sub_field('block_6_team_title');

            ?>
    <section>
        <div class="container">
            <h3 class="vertical-border text-[30px] font-archivo font-medium"><?php echo esc_html($block_6_title ?: 'Our Attorneys'); ?></h3>
            <!-- Team content goes here -->
            <div class="attorneys-grid grid grid-cols-1 gap-8 mt-8">
                <?php if( get_sub_field('block_6_team_blocks') ): ?>
                    <?php while( has_sub_field('block_6_team_blocks') ):

                        $block_6_img = get_sub_field('block_6_team_image');
                        $block_6_member_title = get_sub_field('block_6_team_title');
                        $block_6_description = get_sub_field('block_6_team_description');
                        $block_6_phone = get_sub_field('block_6_team_phone');
                        $block_6_link = get_sub_field('block_6_team_link');

                    ?>
                        <div class="attorney-item grid sm:grid-cols-[2fr_3fr] grid-cols-1 gap-5 shadow-[0_0_20px_0_rgba(0,0,0,0.25)]">
                            <div class="attorney-image relative bg-black max-sm:min-h-[250px] h-full">
                                <?php if ( $block_6_img ): ?>
                                    <img class="w-full h-full object-contain absolute inset-0" src="<?php echo esc_url($block_6_img['url']); ?>" alt="<?php echo esc_attr($block_6_img['alt'] ?: $block_6_member_title); ?>">
                                <?php else: ?>
                                    <img class="w-full h-full object-contain absolute inset-0" src="/wp-content/uploads/2025/11/Bg-1.png" alt="Attorney">
                                <?php endif; ?>
                            </div>
                            <div class="attorney-info py-[20px]">
                                <div class="vertical-border py-10">
                                    <?php if ( $block_6_member_title ): ?>
                                        <h4 class="mb-5 attorney-name text-[30px] font-normal capitalize text-black"><?php echo esc_html($block_6_member_title); ?></h4>
                                    <?php endif; ?>
                                    <?php if ( $block_6_description ): ?>
                                        <div class="mb-5 attorney-description"><?php echo wp_kses_post($block_6_description); ?></div>
                                    <?php endif; ?>
                                    <div class="flex gap-4 mb-5">
                                        <?php if ( $block_6_phone ): ?>
                                            <a href="tel:<?php echo esc_attr($block_6_phone); ?>" class="gradient-border-button"><?php echo esc_html($block_6_phone); ?></a>
                                        <?php endif; ?>
                                        <?php if ( $block_6_link ): ?>
                                            <a href="<?php echo esc_url($block_6_link['url']); ?>" target="<?php echo esc_attr($block_6_link['target'] ?: '_self'); ?>" class="gradient-border-button"><?php echo esc_html($block_6_link['title'] ?: 'View Profile'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <!-- Fallback content if no ACF data -->
                    <div class="attorney-item grid sm:grid-cols-[2fr_3fr] grid-cols-1 gap-5 shadow-[0_0_20px_0_rgba(0,0,0,0.25)]">
                        <div class="attorney-image relative bg-black max-sm:min-h-[250px] h-full">
                            <img class="w-full h-full object-contain absolute inset-0" src="/wp-content/uploads/2025/11/Bg-1.png" alt="Attorney Name">
                        </div>
                        <div class="attorney-info py-[20px]">
                            <div class="vertical-border py-10">
                                <h4 class="mb-5 attorney-name text-[30px] font-normal capitalize text-black">Leif A. Becker, Esq.</h4>
                                <p class="attorney-title mb-5">Becker Legal was founded to provide affordable legal services to clients in New Hampshire and Maine. Attorney Becker takes a holistic approach to the law; working with clients to determine the best legal route for them when taking into account all their objectives.</p>
                                <p class="mb-5">This requires the attorney/client team to consider not only what their legal options are, but also which of those options will leave the client most satisfied in the long run. Attorney Becker also strives to provide legal services to those who cannot afford legal representation through Pro Bono service to New Hampshire Bar Association Pro Bono Programs.</p>
                                <div class="flex gap-4 mb-5">
                                    <a href="tel:603-945-4912" class="gradient-border-button">603-945-4912</a>
                                    <a href="mailto:info@beckergnl.com" class="gradient-border-button">view profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
            <?php endif; ?>