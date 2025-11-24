            <?php if( get_row_layout() == 'block_6_team' ):
                $block_6_title = get_sub_field('block_6_team_title');
            ?>
    <section>
        <div class="container">
            <h3 class="vertical-border text-[30px] font-archivo font-medium">Our Attorneys</h3>
            <!-- Team content goes here -->
            <div class="attorneys-grid grid grid-cols-1 gap-8 mt-8">
                <!-- Attorney items will be added here -->
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="attorney-item grid sm:grid-cols-[2fr_3fr] grid-cols-1 gap-5 shadow-[0_0_20px_0_rgba(0,0,0,0.25)]">
                        <div class="attorney-image  relative  bg-black max-sm:min-h-[250px] h-full">
                            <img class="w-full h-full object-contain absolute inset-0" src="/wp-content/uploads/2025/11/Bg-1.png" alt="Attorney Name">
                        </div>
                        <div class="attorney-info  py-[20px] ">
                            <div class="vertical-border py-10">
                                <h4 class=" mb-5 attorney-name text-[30px] font-normal capitalize text-black ">Leif A. Becker, Esq.</h4>
                                <p class="attorney-title mb-5">Becker Legal was founded to provide affordable legal services to clients in New Hampshire and Maine. Attorney Becker takes a holistic approach to the law; working with clients to determine the best legal route for them when taking into account all their objectives. </p>
                                <p class="mb-5">This requires the attorney/client team to consider not only what their legal options are, but also which of those options will leave the client most satisfied in the long run.
                                    Attorney Becker also strives to provide legal services to those who cannot afford legal representation through Pro Bono service to New Hampshire Bar Association Pro Bono Programs.</p>
                                <div class="flex gap-4 mb-5">
                                    <a href="tel:603-945-4912" class="gradient-border-button">603-945-4912</a>
                                    <a href="mailto:info@beckergnl.com" class="gradient-border-button">view profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
            <?php endif; ?>