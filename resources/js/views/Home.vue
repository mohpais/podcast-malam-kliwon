<template>
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="text-center">
                        <h1 class="text-white">{{ appName }}</h1>
                        <p class="text-white">Listen it everywhere. Explore your fav podcasts.</p>
                        <a href="#section_1" class="btn custom-btn smoothscroll mt-3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="introduction section-padding" id="section_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">About Us</h4>
                    </div>
                </div>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6 my-auto">
                    <img class="img-fluid" :src="BimoDanu" alt="...">
                </div>
                <div class="col-lg-6 text-white">
                    <p class="mb-3">Selamat datang di Podcast Malam Kliwon, tempat berbicara tentang hal-hal horor yang dikemas dengan balutan komedi! Kami percaya bahwa hal supernatural dan misterius seharusnya tidak hanya membuat Anda merinding tapi juga sebagai pembelajaran bahwa kita hidup berdampingan dengan mereka   .</p>
                    <div class="row g-3 mb-4">
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-pmk">
                                <i class="bi bi-lightbulb-fill text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6 class="text-white">Visi:</h6>
                                <span>Di Podcast Malam Kliwon, kami membayangkan sebuah dunia di mana menghadapi hal yang tidak diketahui bukan hanya tentang rasa takut – ini adalah kesempatan untuk menjelajahi wilayah misteri yang belum dipetakan. Kami percaya bahwa dengan merangkul hal-hal gaib sambil tertawa, kita dapat mengungkap ketakutan yang sering menyelimuti hal-hal yang terjadi di malam hari.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-pmk">
                                <i class="bi bi-globe2 text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6 class="text-white">Misi:</h6>
                                <span>Kami berusaha mengubah horor menjadi jalan untuk belajar dan menemukan jati diri. Setiap episode adalah perjalanan menuju hal yang tidak diketahui, mengungkap rahasia yang tersembunyi di balik bayang-bayang sambil berbagi tawa sepanjang perjalanan. Kami ingin pendengar kami tidak hanya selamat dari kengerian tetapi juga berkembang dalam misterinya.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-podcast-section section-padding pb-0" id="section_2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">Lastest episodes</h4>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">
                                <div class="section-overlay"></div>
                                <a href="detail-page.html" class="custom-block-image-wrap">
                                    <img :src="podcast1"
                                        class="custom-block-image img-fluid" alt="">

                                    <a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>
                                </a>
                            </div>

                            <div class="mt-2">
                                <a href="#" class="btn custom-btn">
                                    Subscribe
                                </a>
                            </div>
                        </div>

                        <div class="custom-block-info">
                            <div class="custom-block-top d-flex mb-1">
                                <small class="me-4">
                                    <i class="bi-clock-fill custom-icon"></i>
                                    50 Minutes
                                </small>
                            </div>

                            <h5 class="mb-2">
                                <a href="detail-page.html">
                                    Modern Vintage
                                </a>
                            </h5>

                            <div class="profile-block d-flex">
                                <img :src="profile1"
                                    class="profile-block-image img-fluid" alt="">

                                <p>
                                    Elsa
                                    <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                    <strong>Influencer</strong>
                                </p>
                            </div>

                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                            <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                <a href="#" class="bi-headphones me-1">
                                    <span>120k</span>
                                </a>

                                <a href="#" class="bi-heart me-1">
                                    <span>42.5k</span>
                                </a>

                                <a href="#" class="bi-chat me-1">
                                    <span>11k</span>
                                </a>

                                <a href="#" class="bi-download">
                                    <span>50k</span>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-column ms-auto">
                            <a href="#" class="badge ms-auto">
                                <i class="bi-heart"></i>
                            </a>

                            <a href="#" class="badge ms-auto">
                                <i class="bi-bookmark"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">
                                <div class="section-overlay"></div>
                                <a href="detail-page.html" class="custom-block-image-wrap">
                                    <img :src="podcast2" class="custom-block-image img-fluid"
                                        alt="">

                                    <a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>
                                </a>
                            </div>

                            <div class="mt-2">
                                <a href="#" class="btn custom-btn">
                                    Subscribe
                                </a>
                            </div>
                        </div>

                        <div class="custom-block-info">
                            <div class="custom-block-top d-flex mb-1">
                                <small class="me-4">
                                    <i class="bi-clock-fill custom-icon"></i>
                                    15 Minutes
                                </small>
                            </div>

                            <h5 class="mb-2">
                                <a href="detail-page.html">
                                    Daily Talk
                                </a>
                            </h5>

                            <div class="profile-block d-flex">
                                <img :src="profile2"
                                    class="profile-block-image img-fluid" alt="">

                                <p>William
                                    <strong>Vlogger</strong>
                                </p>
                            </div>

                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                            <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                <a href="#" class="bi-headphones me-1">
                                    <span>140k</span>
                                </a>

                                <a href="#" class="bi-heart me-1">
                                    <span>22.4k</span>
                                </a>

                                <a href="#" class="bi-chat me-1">
                                    <span>16k</span>
                                </a>

                                <a href="#" class="bi-download">
                                    <span>62k</span>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-column ms-auto">
                            <a href="#" class="badge ms-auto">
                                <i class="bi-heart"></i>
                            </a>

                            <a href="#" class="badge ms-auto">
                                <i class="bi-bookmark"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="topics-section section-padding pb-0" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">Galleries</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="detail-page.html" class="custom-block-image-wrap">
                            <img :src="topic1"
                                class="custom-block-image img-fluid" alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html">
                                    Productivity
                                </a>
                            </h5>

                            <p class="badge mb-0">50 Episodes</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="detail-page.html" class="custom-block-image-wrap">
                            <img :src="topic2"
                                class="custom-block-image img-fluid" alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html">
                                    Technician
                                </a>
                            </h5>

                            <p class="badge mb-0">12 Episodes</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="detail-page.html" class="custom-block-image-wrap">
                            <img :src="topic3"
                                class="custom-block-image img-fluid" alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html">
                                    Mindfullness
                                </a>
                            </h5>

                            <p class="badge mb-0">35 Episodes</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="detail-page.html" class="custom-block-image-wrap">
                            <img :src="topic4"
                                class="custom-block-image img-fluid" alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html">
                                    Cooking
                                </a>
                            </h5>

                            <p class="badge mb-0">12 Episodes</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
    /** Import packages */
    import { onMounted, reactive } from "vue";

    /** Import images */
    import BimoDanu from "@/assets/images/teams/bimo-danu-tm.png";
    import topic1 from "@/assets/images/topics/physician-consulting-his-patient-clinic.jpg";
    import topic2 from "@/assets/images/topics/repairman-doing-air-conditioner-service.jpg";
    import topic3 from "@/assets/images/topics/woman-practicing-yoga-mat-home.jpg";
    import topic4 from "@/assets/images/topics/delicious-meal-with-sambal-arrangement.jpg";
    import podcast1 from "@/assets/images/podcast/11683425_4790593.jpg";
    import podcast2 from "@/assets/images/podcast/12577967_02.jpg";
    import profile1 from "@/assets/images/profile/woman-posing-black-dress-medium-shot.jpg";
    import profile2 from "@/assets/images/profile/handsome-asian-man-listening-music-through-headphones.jpg";

    /** Define props */
    let props = defineProps({
        appName: String
    });

    /** Define variables */
    let state = reactive({});

    /** Define method */
    onMounted(() => {});
</script>