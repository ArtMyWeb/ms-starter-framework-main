            <?php if( get_row_layout() == 'block_10_reviews' ):

                $block_10_title = get_sub_field('block_10_reviews_title');
                $block_10_subtitle = get_sub_field('block_10_reviews_subtitle');
                $block_10_content = get_sub_field('block_10_reviews_content');
                $block_10_blocks = get_sub_field('block_10_reviews_blocks');

            ?>
            <!-- Section -->
      
          <div class="bio-content max-lg:mb-10">
                <!-- Bio content will go here -->
                <div class="p-4">
                    <?php if ($block_10_title): ?>
                        <h3 class="vertical-border text-[30px] font-archivo font-medium mb-7"><?php echo esc_html($block_10_title); ?></h3>
                    <?php else: ?>
                        <h3 class="vertical-border text-[30px] font-archivo font-medium mb-7">Client Testimonials</h3>
                    <?php endif; ?>

                    <?php if ($block_10_subtitle): ?>
                        <h4 class="text-xl mb-4"><?php echo esc_html($block_10_subtitle); ?></h4>
                    <?php endif; ?>

                    <?php if ($block_10_content): ?>
                        <?php echo wp_kses_post($block_10_content); ?>
                    <?php else: ?>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <?php endif; ?>
                </div>

                <?php if ($block_10_blocks): ?>
                    <?php foreach ($block_10_blocks as $block): ?>
                        <div class="block-testimonials p-5 bg-[#FAFAFA] mb-5">
                            <div class="review-star flex gap-1 mb-5">
                                <?php for ($j = 1; $j <= 5; $j++): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M20.9055 16.7067C20.6033 16.9996 20.4645 17.4231 20.5333 17.8384L21.5705 23.5784C21.658 24.0649 21.4527 24.5572 21.0455 24.8384C20.6465 25.1301 20.1157 25.1651 19.6805 24.9317L14.5134 22.2367C14.3337 22.1411 14.1342 22.0897 13.93 22.0839H13.6139C13.5042 22.1002 13.3969 22.1352 13.2989 22.1889L8.13052 24.8967C7.87502 25.0251 7.58568 25.0706 7.30218 25.0251C6.61152 24.8944 6.15068 24.2364 6.26385 23.5422L7.30218 17.8022C7.37102 17.3834 7.23218 16.9576 6.93002 16.6601L2.71718 12.5767C2.36485 12.2349 2.24235 11.7216 2.40335 11.2584C2.55968 10.7964 2.95868 10.4592 3.44052 10.3834L9.23885 9.54225C9.67985 9.49675 10.0672 9.22841 10.2655 8.83175L12.8205 3.59341C12.8812 3.47675 12.9594 3.36941 13.0539 3.27841L13.1589 3.19675C13.2137 3.13608 13.2767 3.08591 13.3467 3.04508L13.4739 2.99841L13.6722 2.91675H14.1634C14.602 2.96225 14.9882 3.22475 15.19 3.61675L17.7789 8.83175C17.9655 9.21325 18.3284 9.47808 18.7472 9.54225L24.5455 10.3834C25.0355 10.4534 25.445 10.7917 25.6072 11.2584C25.76 11.7262 25.6282 12.2396 25.2689 12.5767L20.9055 16.7067Z" fill="#F1BE48" />
                                    </svg>
                                <?php endfor; ?>
                            </div>

                            <?php if ($block['block_10_reviews_quote']): ?>
                                <?php echo wp_kses_post($block['block_10_reviews_quote']); ?>
                            <?php else: ?>
                                <p class="mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <?php endif; ?>

                            <?php if ($block['block_10_reviews_author']): ?>
                                <p class="text-[#909090] text-[20px]"><?php echo esc_html($block['block_10_reviews_author']); ?></p>
                            <?php else: ?>
                                <p class="text-[#909090] text-[20px]">Lydia Smith</p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Fallback testimonials -->
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <div class="block-testimonials p-5 bg-[#FAFAFA] mb-5">
                            <div class="review-star flex gap-1 mb-5">
                                <?php for ($j = 1; $j <= 5; $j++): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M20.9055 16.7067C20.6033 16.9996 20.4645 17.4231 20.5333 17.8384L21.5705 23.5784C21.658 24.0649 21.4527 24.5572 21.0455 24.8384C20.6465 25.1301 20.1157 25.1651 19.6805 24.9317L14.5134 22.2367C14.3337 22.1411 14.1342 22.0897 13.93 22.0839H13.6139C13.5042 22.1002 13.3969 22.1352 13.2989 22.1889L8.13052 24.8967C7.87502 25.0251 7.58568 25.0706 7.30218 25.0251C6.61152 24.8944 6.15068 24.2364 6.26385 23.5422L7.30218 17.8022C7.37102 17.3834 7.23218 16.9576 6.93002 16.6601L2.71718 12.5767C2.36485 12.2349 2.24235 11.7216 2.40335 11.2584C2.55968 10.7964 2.95868 10.4592 3.44052 10.3834L9.23885 9.54225C9.67985 9.49675 10.0672 9.22841 10.2655 8.83175L12.8205 3.59341C12.8812 3.47675 12.9594 3.36941 13.0539 3.27841L13.1589 3.19675C13.2137 3.13608 13.2767 3.08591 13.3467 3.04508L13.4739 2.99841L13.6722 2.91675H14.1634C14.602 2.96225 14.9882 3.22475 15.19 3.61675L17.7789 8.83175C17.9655 9.21325 18.3284 9.47808 18.7472 9.54225L24.5455 10.3834C25.0355 10.4534 25.445 10.7917 25.6072 11.2584C25.76 11.7262 25.6282 12.2396 25.2689 12.5767L20.9055 16.7067Z" fill="#F1BE48" />
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            <p class="mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p class="text-[#909090] text-[20px]">Lydia Smith</p>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
      
           <?php endif; ?>
