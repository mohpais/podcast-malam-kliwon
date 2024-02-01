<template>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="subscribe-form-wrap">
                        <h6>Subscribe. Every weekly.</h6>

                        <form class="custom-form subscribe-form" action="#" method="get" role="form">
                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Email Address" required="">

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control" id="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <h6 class="site-footer-title d-none d-md-block">Download Mobile</h6>

                    <div class="site-footer-thumb">
                        <div class="d-flex flex-wrap">
                            <a href="#">
                                <img :src="AppStore" class="me-3 mb-2 mb-lg-0 img-fluid" alt="...">
                            </a>

                            <a href="#">
                                <img :src="PlayStore" class="img-fluid" alt="...">
                            </a>
                        </div>
                    </div>

                    <h6 class="site-footer-title d-none d-md-block mt-3">Social</h6>

                    <ul class="social-icon d-none d-md-block">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <div class="container pt-3">
        <div class="row align-items-center">

            <div class="col-md-2 col-12 d-none d-md-block">
                <a class="navbar-brand" href="index.html">
                    <img :src="Logo" class="logo-image img-fluid" alt="PMK_Logo">
                </a>
            </div>

            <div class="col-md-6 col-sm-12">
                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Homepage</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Help Center</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-12 py-3">
                <p class="copyright-text mb-0">Copyright © 2024 Podcast Malam Kliwon</p> 
            </div>
        </div>
    </div>
</template>

<script setup>
    /** Import Image */
    import Logo from '@/assets/images/logo-pmk.png';
    import AppStore from '@/assets/images/app-store.png';
    import PlayStore from '@/assets/images/play-store.png';
</script>