<?php 

    $cases_main_title = get_field('cases_main_title', 'options');

    if ( $cases_main_title ): ?>

    <div class="c-sidebar__cases">
                                        
        <h3 class="c-sidebar__cases-title u-h5 u-text--bold"><?php echo $cases_main_title; ?></h3>

        <?php if ( get_field('cases', 'options') ): ?>

            <div class="c-sidebar__cases-block">     

                <div class="c-carousel__cases-sidebar">

                    <?php while ( has_sub_field('cases', 'options') ): 

                        $revenue = get_sub_field('cases_revenue');
                        $description  = get_sub_field('cases_description');

                    ?>

                        <div class="c-carousel__item">

                            <div class="u-text--center">
                                
                                <?php if ( $revenue ): ?>

                                    <p class="u-h4 u-reset--margin u-reset-font--tertiary u-text--white">
                                        <?php echo $revenue; ?>
                                    </p>

                                    <hr class="u-block-hr--narrow u-block-hr--accent-2">

                                <?php endif; ?>

                                <?php if ( $description ): ?>

                                    <p class="u-text--block u-text--white"><?php echo $description; ?></p>

                                <?php endif; ?>

                            </div>

                        </div>

                    <?php endwhile; ?>

                </div>

            </div>

        <?php endif; ?>

    </div>

<?php endif; ?>