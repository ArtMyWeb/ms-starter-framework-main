<?php get_header(); ?>

<section class="padding-admin relative min-h-screen">
    <div class="absolute inset-0">
        <img src="wp-content/uploads/2025/11/hero-logo-scaled.jpg" alt="" class="w-full h-full object-cover">
    </div>
    <div class="hero-overlay absolute inset-0"></div>
    <div class="person-content-overlay absolute pointer-events-none max-h-[300px] h-full w-full bottom-0"></div>
    <div class="container relative  pb-0">
        <div class="home-hero hero-block">
            <h1 class="home-hero-title text-white text-center justify-center flex flex-col font-archivo text-[120px] font-extrabold leading-[109px] uppercase">
                <span>Trial Tested</span>
                <span class="text-transparent bg-clip-text bg-gradient-gold">Legal Advocacy</span>
            </h1>
            <div class="three-lines flex flex-col justify-center gap-4">
                <div class="line bg-gradient-gold h-[10px] w-full"></div>
                <div class="line bg-gradient-gold h-[10px] w-full"></div>
                <div class="line bg-gradient-gold h-[10px] w-full"></div>
            </div>
            <div class="person-content flex flex-col items-center text-center gap-10 relative pt-[400px] max-w-[770px] z-2 mx-auto p-10 -mt-[120px]">
                <img class="person-img max-w-[500px] absolute bottom-0 left-1/2 -translate-x-1/2 object-contain " src="/wp-content/uploads/2025/11/headshot-1.png" alt="">
                <div class="person-info z-10 relative">
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    <a class="button" href="#">Free Case Evaluation</a>
                </div>
            </div>
            
        </div>
                       

    </div>
</section>
<section class="text-media-section bg-dark">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-[623px_1fr] gap-[100px] text-white flex-1">
            <div class="relative ">
                <img class="w-full h-full object-cover max-h-[750px]" src="/wp-content/uploads/2025/11/DSC_7426-1.png" alt="">
            </div>
            <div>
                <div class="vertical-border mb-5">
                <h2 class="text-white flex flex-col ">Representing  <span class="text-light-gold">Vulnerable Clients</span></h2>
                <h4 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
                </div>
                <div class="text-about mb-11">
                <p>Our founding attorney, Leif Becker, prioritizes putting his clients in the best possible position for resolving their legal disputes. He has accepted more than 70 pro bono cases since 2019 including many from New Hampshire’s Domestic Violence Emergency Project (DOVE). He stepped up in the wake of the COVID-19 pandemic to ensure vulnerable clients in distress due to domestic violence received the legal services and protection they needed in their time of crisis. Serving clients throughout the state, attorney Becker received recognition from The New Hampshire Bar Association (NHBA) for his commitment to equal justice for disadvantaged and low-income clients; he was named as a 2021 Pro Bono Rising Star for his valuable contributions. </p>
                <p>Attorney Becker was named a 2020 recipient of “Life Changer” award by Haven, the state’s preeminent domestic violence and sexual violence support and prevention agency. The agency serves 48 communities in southeastern New Hampshire.</p>
                </div>
                <a href="#" class="button">Free Case Evaluation</a>
                
            </div>
        </div>
    </div>
</section>
<section class="honors-section bg-dark py-0">
    <div class="container">
        <div class="mb-6 flex gap-10  items-center">
            <h4 class="text-white font-archivo  shrink-0 font-semibold">Recent Honors & Awards</h4>
            <div class="w-full  h-[6px] bg-gradient-gold mb-6 grow-0"></div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Card 1 -->
            <div class="vertical-border bg-light-dark  p-5 text-white">
                <h3 class="text-[1.25rem] font-semibold mb-4 leading-tight">NH 40 Under 40 – 2023 (Union Leader)</h3>
                <p class="text-[0.9rem] leading-relaxed opacity-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- Card 2 -->
            <div class=" bg-light-dark  p-5 text-white">
                <h3 class="text-[1.25rem] font-semibold mb-4 leading-tight">Seacoast 10 To Watch – 2022 (Seacoast Online)</h3>
                <p class="text-[0.9rem] leading-relaxed opacity-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- Card 3 -->
            <div class=" bg-light-dark p-5 text-white">
                <h3 class="text-[1.25rem] font-semibold mb-4 leading-tight">Life Changer Award, HAVEN NH, 2020</h3>
                <p class="text-[0.9rem] leading-relaxed opacity-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- Card 4 -->
            <div class=" bg-light-dark p-5 text-white">
                <h3 class="text-[1.25rem] font-semibold mb-4 leading-tight">Pro Bono Rising Star Award, New Hampshire Bar Association, 2021</h3>
                <p class="text-[0.9rem] leading-relaxed opacity-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</section>
<section class="why-hire-section relative  shadow-[0_4px_4px_0_rgba(0,0,0,0.25)]">
    <div class="image-overlay absolute inset-0  ">
        <img class="w-full h-full object-bottom-left
 " src="/wp-content/uploads/2025/11/img-overlay.jpg" alt="">
        <div class="absolute inset-0 bg-dark opacity-70"></div>
    </div>
    <div class="container relative z-10 ">
        <div class="py-0 grid grid-cols-1 lg:grid-cols-2 gap-20 vertical-border">
            <!-- Content here -->
             <!-- Slider main container -->
            <div class="swiper max-w-[390px] why-hire-swiper ">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                for ($i = 0; $i < 4; $i++) {
                ?>
                <div class="swiper-slide flex items-center">
                    <div class="slide-content  text-white flex flex-col items-center gap-5 text-center justify-center">
                        <h2 class="text-[4.25rem] font-semibold">Why Hire Us</h2>
                        <div class="slide-icon w-[66px] h-[66px] mx-auto">
                            <img src="/wp-content/uploads/2025/11/Layer_3.svg" alt="">
                        </div>
                <div class="slide-about">
                    <p class="text-[1.876rem]  text-light-gold">Tenacious Representation</p>
                    <p class="text-[1.75rem]/[1.3]">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>


            
            </div>
            <div class="image-block relative flex flex-col gap-5">
                <div class="img-bg flex items-center gap-5 max-h-[450px]">
                    <img src="/wp-content/uploads/2025/11/tingey-injury-law-firm-yCdPU73kGSc-unsplash-2.png" alt="">
                    <div class="three-lines vertical-lines flex stretch h-full  justify-center gap-4">
                    <div class="line bg-rotate-gold vertical w-[10px] h-full"></div>
                    <div class="line bg-rotate-gold w-[10px] h-full"></div>
                    <div class="line bg-rotate-gold w-[10px] h-full"></div>
                </div>
                </div>
                <div class="photo-img absolute bottom-0 right-0 max-w-[430px]">
                    <img src="/wp-content/uploads/2025/11/lawyer-with-client-2.png" alt="">
                </div>
                <div class="three-lines horizontal-lines flex flex-col justify-center gap-4">
                    <div class="line bg-gradient-gold h-[10px] w-full"></div>
                    <div class="line bg-gradient-gold h-[10px] w-full"></div>
                    <div class="line bg-gradient-gold h-[10px] w-full"></div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="blog-section bg-[url(/wp-content/uploads/2025/11/blog-bg.png)] ]  bg-no-repeat">
    <div class="container">
        <div class="practice-areas pb-[70px]">
            <div class="vertical-border flex  gap-5 justify-between">
                <div class="text-side max-w-[50%] flex flex-col gap-5">
                    <h2 class="">   Practice <span class="text-light-brown">Areas</span></h2>
                    <p>Lorem ipsum dolor sit amet consecur adipiscing elit quisque faucibus exLorem ipsum dolor sit amet consecur adipiscing elit quisque fa</p>
                </div>
                <div class="button-side self-end">
                    <a href="#" class="button">Free Case Evaluation</a>
                </div>
                
            </div>
        </div>
        <div class="blog-grid grid grid-cols-1 col-3 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php
            for ($i = 0; $i < 3; $i++) {
            ?>
            <article class="blog-item group    h-full  overflow-hidden ">
                <div class="relative ">
                <div class="blog-img h-full max-h-[500px]">
                    <img class="w-full h-auto object-cover " src="/wp-content/uploads/2025/11/Bg.png" alt="">
                </div>
                <div class="blog-content flex flex-col  text-white z-10  vertical-border bg-light-dark/90 p-5 !absolute bottom-0 left-0 w-full">
                    <h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2">Family Law</h3>
                    <div class="blog-excerpt">
                        <div class="colapseble ">
                            <div class="overflow-hidden">
                                <p>Lorem ipsum dolor sit amet consecur adipiscing elit quisque faucibus exLorem ipsum dolor sit amet consecur adipiscing elit quisque fa</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="text-light-gold text-[1rem]/[1.2] font-archivo font-medium underline underline-offset-5 ">Read More</a>
                </div>
                </div>
            </article>
            <?php
            }
            ?>
        </div>
        
    </div>
</section>
<section class="video-section bg-dark text-white">
    <div class="container">
        <div class="main-video grid grid-cols-1 md:grid-cols-2 gap-10 mb-[4rem]">
             <div class="video-block">
                <img src="/wp-content/uploads/2025/11/Frame-357.png" alt="">
            </div>
            <div class="video-content ">
                <div class="vertical-border mb-10">
                     <h4 class="subtitle pb-2">Becker Legal</h4>
                <h2>Watch Our Video</h2>
                </div>
           <div class="content pl-[32px]">
                <p>Lorem ipsum dolor sit amet consecur adipiscing elit quisque faucibus exLorem ipsum dolor sit amet consecur adipiscing elit quisque fa</p>
            </div>
               </div>

        </div>
        <div class="grid-video grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php
            for ($i = 0; $i < 3; $i++) {
            ?>
            <article class="video-item">
                <a href="#" class="flex flex-col"> 
                <div class="video-img">
                    <img src="/wp-content/uploads/2025/11/Frame-357.png" alt="">
                </div>
                <div class="blog-content flex flex-col  text-white z-10  vertical-border bg-light-dark/90 p-5  bottom-0 left-0 w-full">
                    <h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2">Family Law</h3>
                    <div class="blog-excerpt">
                        <div class="">
                            <div class="overflow-hidden">
                                <p>Lorem ipsum dolor sit amet consecur adipiscing elit quisque faucibus exLorem ipsum dolor sit amet consecur adipiscing elit quisque fa</p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </article>
            <?php
            }
            ?>
        </div>
</section>
<section class="why-hire-section relative bg-cover  bg-[url(/wp-content/uploads/2025/11/bg11.svg)] bg-no-repeat ">

    <div class="container relative z-10 ">
        <div class="py-0 grid grid-cols-1 lg:grid-cols-2 gap-20 ">
         <div class="text-block max-w-[530px]">
            <div class="vertical-border mb-10">
                <h4 class="subtitle text-balance">Service Areas</h4>
                <h2 class="text-balance text-dark">Tenacious Represenation for Clients in Maine & New Hampshire</h2>
         </div>
         <div class="content-part pl-[32px]">
         <p>Lorem ipsum dolor sit amet consecur adipiscing elit quisque faucibus exLorem ipsum dolor sit amet consecur adipiscing elit quisque fa</p>
         <a href="#" class="button">LEarn more</a>
         </div>
         </div>
            <div class="image-block -order-1 relative flex flex-col gap-5">
                <div class="img-bg flex items-center gap-5 max-h-[450px]">
                    <img src="/wp-content/uploads/2025/11/dd.png" alt="">
                    <div class="three-lines vertical-lines flex stretch h-full  justify-center gap-4">
                    <div class="line bg-rotate-gold vertical w-[10px] h-full"></div>
                    <div class="line bg-rotate-gold w-[10px] h-full"></div>
                    <div class="line bg-rotate-gold w-[10px] h-full"></div>
                </div>
                </div>
                <div class="photo-img absolute bottom-0 right-0 max-w-[430px]">
                    <img src="/wp-content/uploads/2025/11/lawyer-with-client-2-1.png" alt="">
                </div>
                <div class="three-lines horizontal-lines flex flex-col justify-center gap-4">
                    <div class="line bg-gradient-gold h-[10px] w-full"></div>
                    <div class="line bg-gradient-gold h-[10px] w-full"></div>
                    <div class="line bg-gradient-gold h-[10px] w-full"></div>
                </div>
                
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>