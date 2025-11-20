<?php
get_header();

?>
<main>
    <section class="padding-admin relative global-hero ">
        <div class="absolute inset-0">
            <img src="/wp-content/uploads/2025/11/hero-logo-scaled.jpg" alt="" class="w-full h-full object-cover">
        </div>
        <div class="hero-overlay absolute inset-0 overflow-hidden"></div>
        <div class="person-content-overlay absolute pointer-events-none max-h-[230px] h-full w-full bottom-0"></div>
        <div class="container relative  py-0 z-10">
            <div class="hero hero-block grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[1fr_600px] gap-8">

                <div class="hero-text-wrapper content-center">
                    <div class="vertical-border !mb-[80px] align-middle content-center">

                        <h1 class="hero-title text-white text-left font-archivo justify-center    font-semibold  leading-[120%]">
                            Our <span class="text-light-gold"> Team</span>
                        </h1>
                        <div class="google-reviews flex items-center gap-2">
                            <img src="/wp-content/uploads/2025/11/Google_2015_logo.svg-2.svg" alt="Google Reviews" class="w-32">
                            <div class="right-side flex flex-col gap-2">
                                <div class="star-block flex gap-[3px]">
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                    ?>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M11.9456 9.54675C11.7729 9.71408 11.6936 9.95608 11.7329 10.1934L12.3256 13.4734C12.3756 13.7514 12.2583 14.0327 12.0256 14.1934C11.7976 14.3601 11.4943 14.3801 11.2456 14.2467L8.29292 12.7067C8.19026 12.6521 8.07626 12.6227 7.95959 12.6194H7.77892C7.71626 12.6287 7.65493 12.6487 7.59893 12.6794L4.64559 14.2267C4.49959 14.3001 4.33426 14.3261 4.17226 14.3001C3.77759 14.2254 3.51426 13.8494 3.57893 13.4527L4.17226 10.1727C4.21159 9.93341 4.13226 9.69008 3.95959 9.52008L1.55226 7.18675C1.35093 6.99141 1.28093 6.69808 1.37293 6.43341C1.46226 6.16941 1.69026 5.97675 1.96559 5.93341L5.27892 5.45275C5.53093 5.42675 5.75226 5.27341 5.86559 5.04675L7.32559 2.05341C7.36026 1.98675 7.40493 1.92541 7.45893 1.87341L7.51892 1.82675C7.55026 1.79208 7.58626 1.76341 7.62626 1.74008L7.69893 1.71341L7.81226 1.66675H8.09293C8.34359 1.69275 8.56426 1.84275 8.67959 2.06675L10.1589 5.04675C10.2656 5.26475 10.4729 5.41608 10.7123 5.45275L14.0256 5.93341C14.3056 5.97341 14.5396 6.16675 14.6323 6.43341C14.7196 6.70075 14.6443 6.99408 14.4389 7.18675L11.9456 9.54675Z" fill="#FBBC05" />
                                        </svg>
                                    <?php } ?>
                                </div>
                                <div class="reiew-text">
                                    <p class="text-white text-[13px] ">4.9 rating from 1000+ reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-image-person relative z-10 lg:justify-end flex justify-center ">
                    <img class="object-contain h-full max-h-[320px] self-end" src="/wp-content/uploads/2025/11/headshot-1.png" alt="">
                </div>



            </div>


        </div>
    </section>
    <section class="bio-section">
        <div class="container lg:grid lg:grid-cols-[2fr_1fr] gap-16 lg:pt-24">
            <div class="bio-content max-lg:mb-10">
                <!-- Bio content will go here -->
                <h3 class="vertical-border text-[30px] font-archivo font-medium mb-7">Our Attorneys</h3>
                <div class="about-card grid grid-cols-1 md:grid-cols-2 min-h-[500px]">
                    <div class="bio-img relative  overflow-hidden bg-black">
                        <img src="/wp-content/uploads/2025/11/R6__4474-scaled-large-2.png" alt="Attorney" class=" w-full h-auto object-contain transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="about-content bg-[#F5F5F5] px-[35px] py-[70px]">
                        <h3 class="name text-[30px] font-semibold text-black capitalize mb-10">Leif A. Becker, Esq.</h3>
                        <div class="vertical-border !pl-[40px]">
                            <div class="social-links flex gap-4 mt-4">
                                <a href="#" class="w-8 h-8 bg-white  flex items-center justify-center text-black  transition-colors">
                                    <span class="text-xs"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                            <path d="M16 1.539C15.405 1.8 14.771 1.973 14.11 2.057C14.79 1.651 15.309 1.013 15.553 0.244C14.919 0.622 14.219 0.889 13.473 1.038C12.871 0.397 12.013 0 11.077 0C9.261 0 7.799 1.474 7.799 3.281C7.799 3.541 7.821 3.791 7.875 4.029C5.148 3.896 2.735 2.589 1.114 0.598C0.831 1.089 0.665 1.651 0.665 2.256C0.665 3.392 1.25 4.399 2.122 4.982C1.595 4.972 1.078 4.819 0.64 4.578C0.64 4.588 0.64 4.601 0.64 4.614C0.64 6.208 1.777 7.532 3.268 7.837C3.001 7.91 2.71 7.945 2.408 7.945C2.198 7.945 1.986 7.933 1.787 7.889C2.212 9.188 3.418 10.143 4.852 10.174C3.736 11.047 2.319 11.573 0.785 11.573C0.516 11.573 0.258 11.561 0 11.528C1.453 12.465 3.175 13 5.032 13C11.068 13 14.368 8 14.368 3.666C14.368 3.521 14.363 3.381 14.356 3.242C15.007 2.78 15.554 2.203 16 1.539Z" fill="#111110" />
                                        </svg></span>
                                </a>
                                <a href="#" class="w-8 h-8 bg-white  flex items-center justify-center text-black  transition-colors">
                                    <span class="text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.665 2.65667H12.1257V0.112667C11.8737 0.078 11.007 0 9.99767 0C7.89167 0 6.449 1.32467 6.449 3.75933V6H4.125V8.844H6.449V16H9.29833V8.84467H11.5283L11.8823 6.00067H9.29767V4.04133C9.29833 3.21933 9.51967 2.65667 10.665 2.65667Z" fill="#111110" />
                                        </svg>
                                    </span>
                                </a> <a href="#" class="w-8 h-8  bg-white  flex items-center justify-center text-black  transition-colors">
                                    <span class="text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_34170_1409)">
                                                <path d="M15.9959 15.9998V15.9991H15.9999V10.1311C15.9999 7.26047 15.3819 5.04913 12.0258 5.04913C10.4125 5.04913 9.32985 5.93447 8.88785 6.7738H8.84118V5.31713H5.65918V15.9991H8.97251V10.7098C8.97251 9.31713 9.23651 7.97047 10.9612 7.97047C12.6605 7.97047 12.6858 9.5598 12.6858 10.7991V15.9998H15.9959Z" fill="#111110" />
                                                <path d="M0.263672 5.31793H3.58101V15.9999H0.263672V5.31793Z" fill="#111110" />
                                                <path d="M1.92133 0C0.860667 0 0 0.860667 0 1.92133C0 2.982 0.860667 3.86067 1.92133 3.86067C2.982 3.86067 3.84267 2.982 3.84267 1.92133C3.842 0.860667 2.98133 0 1.92133 0V0Z" fill="#111110" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_34170_1409">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </a>

                            </div>
                            <div class="contact-info text-sm text-gray-600 my-7">
                                <div class="flex gap-2 text-dark text-base items-center"> <span>Phone:</span> <a href="tel:(847) 818-9084">(847) 818-9084</a></div>
                                <div class="flex gap-2 text-dark text-base items-center"> <span>Email:</span> <a href="mailto:leif@beckerlawchicago.com">leif@beckerlawchicago.com</a></div>
                                <div class="flex gap-2 text-dark text-base items-center"> <a href="/wp-content/uploads/2025/11/Leif-Becker-vCard.vcf" download>Download Contact Card</a></div>

                            </div>
                            <div class="contact-info text-sm text-gray-600 my-7">
                                <div class="flex flex-col gap-1 text-dark text-base items-start leading-[200%]"> <span>Mailing Address:</span> 701 Algonquin Road,<br>
                                    Suite 1070<br>
                                    Rolling Meadows, IL 60008</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="content mt-10">
                    <div class="vertical-border ">
                        <h3>Biography
                        </h3>
                        <p>Becker Legal was founded to provide affordable legal services to clients in New Hampshire and Maine. Attorney Becker takes a holistic approach to the law; working with clients to determine the best legal route for them when taking into account all their objectives. This requires the attorney/client team to consider not only what their legal options are, but also which of those options will leave the client most satisfied in the long run.
                            Attorney Becker also strives to provide legal services to those who cannot afford legal representation through Pro Bono service to New Hampshire Bar Association Pro Bono Programs.</p>
                    </div>
                    <h3>Education</h3>
                    <ul>
                        <li>University of New Hampshire School of Law, Concord, New Hampshire</li>
                        <li>J.D. – 2018</li>
                        <li>Plymouth State University</li>
                        <li>B.A. – 2014</li>
                        <li>Honors: magna cum laude</li>
                        <li>Major: Political Science</li>
                        <li>White Mountains Community College</li>
                        <li>A.A. – 2014</li>
                        <li>Major: Teacher Education</li>
                    </ul>
                    <h3>Practice Areas</h3>
                    <ul>
                        <li>Family Law</li>
                        <li>Personal Injury</li>
                        <li>Small Claims</li>
                        <li>Pro Bono Services</li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-container">
                <!-- Sidebar/content will go here -->

                <div class="sidebar">
                    <div class="contact-us-widget bg-dark text-white px-8 py-10">
                        <div class="contact-form-wrapper">
                            <p class="text-2xl font-archivo text-center text-light-gold">Schedule a Consultation</p>
                            <h3 class="text-white text-[54px] leading-[120%] my-4 text-center font-semibold">Contact Us</h3>
                            <div class="form-shortcode"><?php echo do_shortcode('[wpforms id="43"]'); ?></div>

                        </div>
                    </div>
                    <div class="practice-areas">
                        <h3 class="text-[27px] font-archivo font-bold text-center my-[36px]">Practice Areas</h3>
                        <ul>
                            <?php for ($i = 1; $i <= 3; $i++): ?>
                                <li class="mb-3"><a class="item-area" href="#">Family Law</a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div class="reviews">
                        <h3 class="text-[27px] font-archivo font-bold text-center my-[36px]">Reviews</h3>
                        <div class="review-content bg-[#F5F5F5] p-5">
                            <div class="sidebar-reviews max-w-[345px] mx-auto">
                                <img class="mx-auto mb-6" src="/wp-content/uploads/2025/11/Google_2015_logo.svg-2.svg" alt="">
                                <div class="sidebar-reviews-swiper  swiper w-full ">
                                    <!-- Swiper content will go here -->
                                    <div class="swiper-wrapper w-full">
                                        <?php
                                        for ($i = 1; $i <= 3; $i++): ?>
                                            <div class="swiper-slide !w-full flex flex-col items-center gap-4 justify-center">

                                                <div class="review-star flex gap-1">

                                                    <?php for ($j = 1; $j <= 5; $j++): ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                            <path d="M20.9055 16.7067C20.6033 16.9996 20.4645 17.4231 20.5333 17.8384L21.5705 23.5784C21.658 24.0649 21.4527 24.5572 21.0455 24.8384C20.6465 25.1301 20.1157 25.1651 19.6805 24.9317L14.5134 22.2367C14.3337 22.1411 14.1342 22.0897 13.93 22.0839H13.6139C13.5042 22.1002 13.3969 22.1352 13.2989 22.1889L8.13052 24.8967C7.87502 25.0251 7.58568 25.0706 7.30218 25.0251C6.61152 24.8944 6.15068 24.2364 6.26385 23.5422L7.30218 17.8022C7.37102 17.3834 7.23218 16.9576 6.93002 16.6601L2.71718 12.5767C2.36485 12.2349 2.24235 11.7216 2.40335 11.2584C2.55968 10.7964 2.95868 10.4592 3.44052 10.3834L9.23885 9.54225C9.67985 9.49675 10.0672 9.22841 10.2655 8.83175L12.8205 3.59341C12.8812 3.47675 12.9594 3.36941 13.0539 3.27841L13.1589 3.19675C13.2137 3.13608 13.2767 3.08591 13.3467 3.04508L13.4739 2.99841L13.6722 2.91675H14.1634C14.602 2.96225 14.9882 3.22475 15.19 3.61675L17.7789 8.83175C17.9655 9.21325 18.3284 9.47808 18.7472 9.54225L24.5455 10.3834C25.0355 10.4534 25.445 10.7917 25.6072 11.2584C25.76 11.7262 25.6282 12.2396 25.2689 12.5767L20.9055 16.7067Z" fill="#F1BE48" />
                                                        </svg>
                                                    <?php endfor; ?>
                                                </div>
                                                <p class="text-[24px] text-center font-semibold text-[#2A2A2B]">“At in montes elit vivamus scelerisque, et vivamus sagittis id. Dapibus susp”</p>
                                                <div class="author flex justify-center items-center flex-col gap-5 w-full">
                                                    <p class="text-[18px] font-medium text-light-brown m-0 font-archivo">~ J.S</p>
                                                    <div class="line bg-gradient-to-b from-light-gold to-light-brown h-[2px]  w-full"></div>
                                                    <p class="text-[16px] text-light-brown uppercase font-medium font-archivo">Personal Injury</p>

                                                </div>

                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
</main>

<?php
get_footer();
?>