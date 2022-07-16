<?php
    get_header();
    while ( have_posts() ) :
        the_post();

?>
    <!-- home-3-banner-area -->
    <section class="home-3-banner-area">
        <div class="container">
            <div class="banner-heading">
                <h1 class="wow fadeInDown" data-wow-duration="2s">We Learn to Drive Easily </h1>
                <p class="wow fadeInDown" data-wow-duration="3s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                <a class="theme-btn wow fadeInDown" data-wow-duration="3.20s" href="news-details.html">Learn More</a>
                <a class="theme-btn two wow fadeInDown" data-wow-duration="3.20s" href="contact-us.html">Contact Us</a>
            </div>
        </div>
    </section>
    <!--Find course ara -->
    <section class="find-course-area funfact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-duration="1.30s">
                    <div class="funfact-text-area">
                        <h1>15</h1>
                        <h2>Years Our Experience</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a class="theme-btn" href="courses-details.html">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRightBig" data-wow-duration="1.30s">
                    <div class="find-form-area">
                        <div class="find-icon">
                            <div class="form-text-left d-flex">
                                <div class="form-text-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-bg.png" alt="">
                                    <span><svg width="50" height="21" viewBox="0 0 50 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.2521 7.51611H25.9186V9.18316H29.2521V7.51611Z" fill="white"/>
                                        <path d="M0.798481 5.02451L6.45955 4.21607C7.49179 3.58194 8.56304 3.01428 9.66751 2.51613C13.315 0.863994 17.2737 0.0114777 21.2782 0.0158862H22.2616C26.9875 0.0192772 31.6376 1.20514 35.7883 3.46529L38.6453 5.02383C41.9896 5.06147 45.2695 5.95095 48.1749 7.60715C49.3557 8.28435 50.0848 9.54074 50.0868 10.9016V15.8502C50.0868 16.3107 49.7138 16.6837 49.2533 16.6837H46.455C45.5448 19.2803 42.7021 20.6475 40.1055 19.7374C38.6762 19.2365 37.5527 18.1127 37.0518 16.6837H14.786C13.8758 19.2803 11.0331 20.6475 8.43655 19.7374C7.00755 19.2365 5.88374 18.1127 5.38288 16.6837H5.08379C4.97765 16.6837 4.87252 16.6637 4.77385 16.6244L2.07454 15.5413C0.868675 15.0638 0.0788918 13.8966 0.0833015 12.6002V5.84955C0.0833015 5.43517 0.388161 5.08351 0.798481 5.02451ZM38.487 15.6837C38.8556 17.4874 40.6166 18.6509 42.4203 18.2823C44.2243 17.9136 45.3878 16.1527 45.0192 14.3486C44.6502 12.5449 42.8893 11.3814 41.0855 11.75C39.5334 12.0671 38.4191 13.4327 38.4195 15.017C38.4195 15.2408 38.4422 15.4643 38.487 15.6837ZM23.4183 15.017H36.7528C36.7528 12.2553 38.9912 10.0165 41.7529 10.0165C44.5146 10.0165 46.7534 12.2553 46.7534 15.017H48.4201V10.9016C48.4191 10.1382 48.0101 9.43324 47.3475 9.05412C44.6279 7.50135 41.5508 6.6841 38.4195 6.68308H23.4183V15.017ZM23.4183 5.01637H35.1508L34.9901 4.92854C31.4271 2.99223 27.4693 1.89454 23.4183 1.71922V5.01637ZM21.7516 1.6826H21.2799C17.9214 1.67887 14.5934 2.31639 11.4739 3.56126L12.9291 5.01637H21.7516V1.6826ZM6.81799 15.6837C7.1866 17.4874 8.94759 18.6509 10.7516 18.2823C12.5554 17.9136 13.7188 16.1527 13.3502 14.3486C12.9816 12.5449 11.2203 11.3814 9.41657 11.75C7.86448 12.0671 6.75017 13.4327 6.7505 15.017C6.7505 15.2408 6.77322 15.4643 6.81799 15.6837ZM1.75002 7.51627H4.25026V9.18332H1.75002V12.6002C1.74798 13.2143 2.12236 13.767 2.69342 13.9925L5.08379 14.9526C5.08379 14.8759 5.09362 14.8 5.09871 14.7233C5.1038 14.6467 5.10549 14.5568 5.11363 14.4734C5.12211 14.39 5.13873 14.3066 5.15195 14.2235C5.16551 14.1401 5.17535 14.0566 5.19196 13.981C5.20858 13.9051 5.233 13.821 5.2547 13.7416C5.2764 13.6626 5.29302 13.5826 5.31811 13.5049C5.34287 13.4276 5.37305 13.3533 5.4012 13.2774C5.42968 13.2017 5.45545 13.1234 5.48462 13.0481C5.51378 12.9732 5.55312 12.905 5.58804 12.8342C5.62297 12.7633 5.65722 12.6856 5.69622 12.6141C5.73555 12.5425 5.77964 12.4815 5.81728 12.415C5.85458 12.3482 5.90036 12.2723 5.94784 12.2041C5.99565 12.1356 6.03973 12.0817 6.08551 12.02C6.13129 11.9582 6.18318 11.8857 6.23642 11.8216C6.28966 11.7575 6.3395 11.7073 6.39139 11.6547C6.44294 11.6025 6.50058 11.5316 6.55789 11.4733C6.61554 11.415 6.67217 11.3689 6.72948 11.3173C6.78713 11.2658 6.84885 11.2047 6.91226 11.1505C6.97533 11.0966 7.03976 11.0549 7.10284 11.0074C7.16625 10.9599 7.22966 10.909 7.29613 10.8646C7.36293 10.8205 7.43788 10.7815 7.50943 10.7347C7.58132 10.6879 7.63965 10.6513 7.70713 10.6157C7.77461 10.5798 7.85871 10.5421 7.93535 10.5055C8.01199 10.4689 8.07201 10.4363 8.14288 10.4065C8.21376 10.3763 8.30972 10.3448 8.39281 10.3149C8.47623 10.2847 8.53048 10.2613 8.60136 10.239C8.69631 10.2098 8.79363 10.1888 8.89062 10.1647C8.95403 10.1498 9.01473 10.1298 9.07882 10.1165C9.18123 10.0955 9.28635 10.084 9.39046 10.0687C9.45218 10.0606 9.51118 10.047 9.5729 10.0413C9.73974 10.0246 9.90625 10.0155 10.0812 10.0155C12.8419 10.0182 15.079 12.2553 15.0817 15.016H21.7513V6.68274H12.5842C12.3631 6.68274 12.1511 6.59491 11.9952 6.43858L9.83401 4.27745C8.9269 4.70914 8.04488 5.19169 7.19202 5.72273C7.09368 5.78411 6.98381 5.82446 6.86885 5.84108L1.75002 6.57185V7.51627Z" fill="white"/>
                                    </svg></span>
                                </div>
                                <div class="form-icon-text">
                                    <h6>Start Your Driving Course</h6>
                                    <p>Best Option For You</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-left">
                                    <input class="margins-dwn" type="text" placeholder="Your name">
                                    <input type="text" placeholder="Phone Number">
                                    <div class="input-group">
                                        <span><i class="fas fa-caret-down"></i></span>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> select Car</option>
                                            <option value="1">p-ha 245681</option>
                                            <option value="2">p-ha 245681</option>
                                            <option value="3">p-ha 245681</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <span><i class="fas fa-caret-down"></i></span>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> select Date</option>
                                            <option value="1">25/05/2021</option>
                                            <option value="2">25/05/2021</option>
                                            <option value="3">25/05/2021</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-left">
                                    <div class="input-group">
                                        <input type="email" placeholder="Your Email" class="meails padd">
                                        <span class="select-three"><i class="fas fa-caret-down"></i></span>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> Select Course</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <span><i class="fas fa-caret-down"></i></span>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Time</option>
                                            <option value="1">03:41 am</option>
                                            <option value="2">03:41 am</option>
                                            <option value="3">03:41 am</option>
                                        </select>
                                    </div>
                                    <a class="theme-btn" href="javascprit:void(0)">Start Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature_area -->
            <section class="features-area">
                <div class="container">
                    <div class="title text-center">
                        <h6>((Features))</h6>
                        <h1>Welcome to Driving School</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s">
                            <div class="feature-items text-center">
                                <div class="feature-icon">
                                    <span class="rode-with"><i class="flaticon-road-with-broken-line"></i></span>
                                    <span class="shape-one">
                                        <svg width="150" height="93" viewBox="0 0 150 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M48.295 62.9802C42.2267 59.9178 34.5881 59.7418 27.795 58.6717C21.471 57.672 9.94548 53.3001 5.34097 48.5621C-2.61743 40.3744 -2.14135 22.4925 9.88863 16.783C23.6879 10.2286 41.0259 16.2479 55.9834 18.191C79.0628 21.1971 84.0226 3.53347 106.47 0.499182C115.053 -0.662437 127.304 1.88609 131.51 10.5454C136.847 21.5421 129.769 34.1721 137.77 44.5985C140.762 48.4987 160.132 64.9092 140.364 71.372C133.287 73.6882 126.025 75.1878 118.791 76.8985C111.827 78.5459 105.063 80.5171 98.8096 84.0231C90.4675 88.6978 81.294 95.6745 71.6871 90.9647C59.3302 84.8961 59.5647 68.6686 48.295 62.9802Z" fill="#FFA8BF"/>
                                        </svg>
                                    </span>
                                    <span class="shape-two">
                                        <svg width="150" height="116" viewBox="0 0 150 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8328 51.5689C-6.02107 87.7762 39.555 104.44 68.3829 104.44C96.7276 104.44 128.767 93.8448 128.767 61.2843C128.767 -22.5354 58.7831 -10.5813 17.8328 51.5689Z" fill="#E81D4F"/>
                                        <path d="M49.0838 10.3701C49.0838 12.7215 46.5612 14.6294 43.4418 14.6294C40.3295 14.6294 37.7999 12.7215 37.7999 10.3701C37.7999 8.01871 40.3224 6.11084 43.4418 6.11084C46.5612 6.11084 49.0838 8.01871 49.0838 10.3701Z" fill="#E81D4F"/>
                                        <path d="M56.0687 2.12616C56.0687 3.30186 54.9886 4.25227 53.6528 4.25227C52.3169 4.25227 51.2368 3.30186 51.2368 2.12616C51.2368 0.950457 52.3169 3.8577e-05 53.6528 3.8577e-05C54.9815 -0.00700154 56.0687 0.950457 56.0687 2.12616Z" fill="#E81D4F"/>
                                        <path d="M95.4131 116C98.0071 116 100.11 113.917 100.11 111.347C100.11 108.776 98.0071 106.693 95.4131 106.693C92.8191 106.693 90.7162 108.776 90.7162 111.347C90.7162 113.917 92.8191 116 95.4131 116Z" fill="#E81D4F"/>
                                        <path d="M133.947 87.8043C133.947 89.7896 132.143 91.3948 129.918 91.3948C127.694 91.3948 125.889 89.7896 125.889 87.8043C125.889 85.819 127.694 84.2139 129.918 84.2139C132.143 84.2139 133.947 85.819 133.947 87.8043Z" fill="#E81D4F"/>
                                        <path d="M124.014 92.8593C124.014 93.5914 123.232 94.1898 122.266 94.1898C121.299 94.1898 120.518 93.5914 120.518 92.8593C120.518 92.1271 121.299 91.5287 122.266 91.5287C123.232 91.5287 124.014 92.1201 124.014 92.8593Z" fill="#E81D4F"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="feature-text">
                                    <h5>Learning Roads</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1.20s">
                            <div class="feature-items text-center">
                                <div class="feature-icon">
                                    <span class="rode-with"><i class="flaticon-driving-school"></i></span>
                                    <span class="shape-one">
                                        <svg width="150" height="93" viewBox="0 0 150 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M48.295 62.9802C42.2267 59.9178 34.5881 59.7418 27.795 58.6717C21.471 57.672 9.94548 53.3001 5.34097 48.5621C-2.61743 40.3744 -2.14135 22.4925 9.88863 16.783C23.6879 10.2286 41.0259 16.2479 55.9834 18.191C79.0628 21.1971 84.0226 3.53347 106.47 0.499182C115.053 -0.662437 127.304 1.88609 131.51 10.5454C136.847 21.5421 129.769 34.1721 137.77 44.5985C140.762 48.4987 160.132 64.9092 140.364 71.372C133.287 73.6882 126.025 75.1878 118.791 76.8985C111.827 78.5459 105.063 80.5171 98.8096 84.0231C90.4675 88.6978 81.294 95.6745 71.6871 90.9647C59.3302 84.8961 59.5647 68.6686 48.295 62.9802Z" fill="#FFA8BF"/>
                                        </svg>
                                    </span>
                                    <span class="shape-two">
                                        <svg width="150" height="116" viewBox="0 0 150 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8328 51.5689C-6.02107 87.7762 39.555 104.44 68.3829 104.44C96.7276 104.44 128.767 93.8448 128.767 61.2843C128.767 -22.5354 58.7831 -10.5813 17.8328 51.5689Z" fill="#E81D4F"/>
                                        <path d="M49.0838 10.3701C49.0838 12.7215 46.5612 14.6294 43.4418 14.6294C40.3295 14.6294 37.7999 12.7215 37.7999 10.3701C37.7999 8.01871 40.3224 6.11084 43.4418 6.11084C46.5612 6.11084 49.0838 8.01871 49.0838 10.3701Z" fill="#E81D4F"/>
                                        <path d="M56.0687 2.12616C56.0687 3.30186 54.9886 4.25227 53.6528 4.25227C52.3169 4.25227 51.2368 3.30186 51.2368 2.12616C51.2368 0.950457 52.3169 3.8577e-05 53.6528 3.8577e-05C54.9815 -0.00700154 56.0687 0.950457 56.0687 2.12616Z" fill="#E81D4F"/>
                                        <path d="M95.4131 116C98.0071 116 100.11 113.917 100.11 111.347C100.11 108.776 98.0071 106.693 95.4131 106.693C92.8191 106.693 90.7162 108.776 90.7162 111.347C90.7162 113.917 92.8191 116 95.4131 116Z" fill="#E81D4F"/>
                                        <path d="M133.947 87.8043C133.947 89.7896 132.143 91.3948 129.918 91.3948C127.694 91.3948 125.889 89.7896 125.889 87.8043C125.889 85.819 127.694 84.2139 129.918 84.2139C132.143 84.2139 133.947 85.819 133.947 87.8043Z" fill="#E81D4F"/>
                                        <path d="M124.014 92.8593C124.014 93.5914 123.232 94.1898 122.266 94.1898C121.299 94.1898 120.518 93.5914 120.518 92.8593C120.518 92.1271 121.299 91.5287 122.266 91.5287C123.232 91.5287 124.014 92.1201 124.014 92.8593Z" fill="#E81D4F"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="feature-text">
                                    <h5>Driving Basics Lesson</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1.40s">
                            <div class="feature-items text-center">
                                <div class="feature-icon">
                                    <span class="rode-with"><i class="flaticon-car"></i></span>
                                    <span class="shape-one">
                                        <svg width="150" height="93" viewBox="0 0 150 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M48.295 62.9802C42.2267 59.9178 34.5881 59.7418 27.795 58.6717C21.471 57.672 9.94548 53.3001 5.34097 48.5621C-2.61743 40.3744 -2.14135 22.4925 9.88863 16.783C23.6879 10.2286 41.0259 16.2479 55.9834 18.191C79.0628 21.1971 84.0226 3.53347 106.47 0.499182C115.053 -0.662437 127.304 1.88609 131.51 10.5454C136.847 21.5421 129.769 34.1721 137.77 44.5985C140.762 48.4987 160.132 64.9092 140.364 71.372C133.287 73.6882 126.025 75.1878 118.791 76.8985C111.827 78.5459 105.063 80.5171 98.8096 84.0231C90.4675 88.6978 81.294 95.6745 71.6871 90.9647C59.3302 84.8961 59.5647 68.6686 48.295 62.9802Z" fill="#FFA8BF"/>
                                        </svg>
                                    </span>
                                    <span class="shape-two">
                                        <svg width="150" height="116" viewBox="0 0 150 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8328 51.5689C-6.02107 87.7762 39.555 104.44 68.3829 104.44C96.7276 104.44 128.767 93.8448 128.767 61.2843C128.767 -22.5354 58.7831 -10.5813 17.8328 51.5689Z" fill="#E81D4F"/>
                                        <path d="M49.0838 10.3701C49.0838 12.7215 46.5612 14.6294 43.4418 14.6294C40.3295 14.6294 37.7999 12.7215 37.7999 10.3701C37.7999 8.01871 40.3224 6.11084 43.4418 6.11084C46.5612 6.11084 49.0838 8.01871 49.0838 10.3701Z" fill="#E81D4F"/>
                                        <path d="M56.0687 2.12616C56.0687 3.30186 54.9886 4.25227 53.6528 4.25227C52.3169 4.25227 51.2368 3.30186 51.2368 2.12616C51.2368 0.950457 52.3169 3.8577e-05 53.6528 3.8577e-05C54.9815 -0.00700154 56.0687 0.950457 56.0687 2.12616Z" fill="#E81D4F"/>
                                        <path d="M95.4131 116C98.0071 116 100.11 113.917 100.11 111.347C100.11 108.776 98.0071 106.693 95.4131 106.693C92.8191 106.693 90.7162 108.776 90.7162 111.347C90.7162 113.917 92.8191 116 95.4131 116Z" fill="#E81D4F"/>
                                        <path d="M133.947 87.8043C133.947 89.7896 132.143 91.3948 129.918 91.3948C127.694 91.3948 125.889 89.7896 125.889 87.8043C125.889 85.819 127.694 84.2139 129.918 84.2139C132.143 84.2139 133.947 85.819 133.947 87.8043Z" fill="#E81D4F"/>
                                        <path d="M124.014 92.8593C124.014 93.5914 123.232 94.1898 122.266 94.1898C121.299 94.1898 120.518 93.5914 120.518 92.8593C120.518 92.1271 121.299 91.5287 122.266 91.5287C123.232 91.5287 124.014 92.1201 124.014 92.8593Z" fill="#E81D4F"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="feature-text">
                                    <h5>Car Support </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUpBig" data-wow-duration="2s">
                            <div class="feature-items text-center">
                                <div class="feature-icon">
                                    <span class="rode-with"><i class="flaticon-manager
                                        Author"></i></span>
                                    <span class="shape-one"><svg width="150" height="93" viewBox="0 0 150 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M48.295 62.9802C42.2267 59.9178 34.5881 59.7418 27.795 58.6717C21.471 57.672 9.94548 53.3001 5.34097 48.5621C-2.61743 40.3744 -2.14135 22.4925 9.88863 16.783C23.6879 10.2286 41.0259 16.2479 55.9834 18.191C79.0628 21.1971 84.0226 3.53347 106.47 0.499182C115.053 -0.662437 127.304 1.88609 131.51 10.5454C136.847 21.5421 129.769 34.1721 137.77 44.5985C140.762 48.4987 160.132 64.9092 140.364 71.372C133.287 73.6882 126.025 75.1878 118.791 76.8985C111.827 78.5459 105.063 80.5171 98.8096 84.0231C90.4675 88.6978 81.294 95.6745 71.6871 90.9647C59.3302 84.8961 59.5647 68.6686 48.295 62.9802Z" fill="#FFA8BF"/>
                                        </svg>
                                        </span>
                                    <span class="shape-two">
                                        <svg width="150" height="116" viewBox="0 0 150 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8328 51.5689C-6.02107 87.7762 39.555 104.44 68.3829 104.44C96.7276 104.44 128.767 93.8448 128.767 61.2843C128.767 -22.5354 58.7831 -10.5813 17.8328 51.5689Z" fill="#E81D4F"/>
                                        <path d="M49.0838 10.3701C49.0838 12.7215 46.5612 14.6294 43.4418 14.6294C40.3295 14.6294 37.7999 12.7215 37.7999 10.3701C37.7999 8.01871 40.3224 6.11084 43.4418 6.11084C46.5612 6.11084 49.0838 8.01871 49.0838 10.3701Z" fill="#E81D4F"/>
                                        <path d="M56.0687 2.12616C56.0687 3.30186 54.9886 4.25227 53.6528 4.25227C52.3169 4.25227 51.2368 3.30186 51.2368 2.12616C51.2368 0.950457 52.3169 3.8577e-05 53.6528 3.8577e-05C54.9815 -0.00700154 56.0687 0.950457 56.0687 2.12616Z" fill="#E81D4F"/>
                                        <path d="M95.4131 116C98.0071 116 100.11 113.917 100.11 111.347C100.11 108.776 98.0071 106.693 95.4131 106.693C92.8191 106.693 90.7162 108.776 90.7162 111.347C90.7162 113.917 92.8191 116 95.4131 116Z" fill="#E81D4F"/>
                                        <path d="M133.947 87.8043C133.947 89.7896 132.143 91.3948 129.918 91.3948C127.694 91.3948 125.889 89.7896 125.889 87.8043C125.889 85.819 127.694 84.2139 129.918 84.2139C132.143 84.2139 133.947 85.819 133.947 87.8043Z" fill="#E81D4F"/>
                                        <path d="M124.014 92.8593C124.014 93.5914 123.232 94.1898 122.266 94.1898C121.299 94.1898 120.518 93.5914 120.518 92.8593C120.518 92.1271 121.299 91.5287 122.266 91.5287C123.232 91.5287 124.014 92.1201 124.014 92.8593Z" fill="#E81D4F"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="feature-text">
                                    <h5>Experience Instructor </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!--h-3 About area -->
    <section class="h3-about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-duration="1.30s">
                    <div class="aboutIsotop">
                        <div class="title">
                            <h6>((About Us))</h6>
                            <h1>Why would you choose our driving school?</h1>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="funfact-item">
                                    <span class="completeds"><svg width="48" height="50" viewBox="0 0 48 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.51063 40.9787V5.46383H34.1936V35.2904L39.6585 30.7766V2.73191C39.6585 1.2234 38.4362 0 36.9277 0H2.77872C1.27021 0 0.0478668 1.2234 0.0478668 2.73191V43.7096C0.0478668 45.2181 1.27021 46.4415 2.77872 46.4415H26.617L22.7553 40.9787H5.51063Z" fill="#E81D4F"/>
                                        <path d="M47.5245 29.3713C47.0213 28.8968 46.2479 28.8745 45.7181 29.3106L33.1883 39.666L24.8383 34.6564C24.284 34.3245 23.5745 34.4234 23.133 34.9C22.6947 35.3723 22.6468 36.0883 23.0202 36.616L32.0691 49.4213C32.3223 49.7798 32.734 49.9947 33.1723 49.9989C33.1766 49.9989 33.1808 49.9989 33.1851 49.9989C33.6191 49.9989 34.0287 49.7936 34.2862 49.4404L47.6904 31.1713C48.0947 30.617 48.0255 29.8457 47.5245 29.3713Z" fill="#E81D4F"/>
                                        <path d="M28.0489 9.5617H11.6564C10.1479 9.5617 8.92552 10.7851 8.92552 12.2936C8.92552 13.8021 10.1479 15.0255 11.6564 15.0255H28.0479C29.5564 15.0255 30.7776 13.8021 30.7776 12.2936C30.7776 10.7851 29.5574 9.5617 28.0489 9.5617Z" fill="#E81D4F"/>
                                        <path d="M28.0489 17.7564H11.6564C10.1479 17.7564 8.92552 18.9798 8.92552 20.4883C8.92552 21.9968 10.1479 23.2202 11.6564 23.2202H28.0479C29.5564 23.2202 30.7776 21.9979 30.7776 20.4883C30.7808 18.9798 29.5574 17.7564 28.0489 17.7564Z" fill="#E81D4F"/>
                                        <path d="M28.0489 25.9521H11.6564C10.1479 25.9521 8.92552 27.1755 8.92552 28.684C8.92552 30.1926 10.1479 31.416 11.6564 31.416H28.0479C29.5564 31.416 30.7776 30.1926 30.7776 28.684C30.7808 27.1755 29.5574 25.9521 28.0489 25.9521Z" fill="#E81D4F"/>
                                        </svg>
                                    </span>
                                    <div class="funfact-text">
                                        <h4><span class="counter">22</span> k+</h4>
                                        <p>Course Complete</p>
                                    </div>
                                </div>
                                <div class="funfact-item">
                                    <span class="completed"><i class="flaticon-steering-wheel"></i>
                                    </span>
                                    <div class="funfact-text">
                                        <h4><span class="counter">2.5</span> k+</h4>
                                        <p>Driving learners</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="funfact-item items-two">
                                    <span class="completed"><i class="flaticon-manager Author"></i></span>
                                    <div class="funfact-text">
                                        <h4><span class="counter">22</span> k+</h4>
                                        <p>Experience Instructors</p>
                                    </div>
                                </div>
                                <div class="funfact-item">
                                    <span class="completed"><i class="flaticon-winner"></i></span>
                                    <div class="funfact-text">
                                        <h4><span class="counter">2.5</span> k+</h4>
                                        <p>Awards Winner</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRightBig" data-wow-duration="1.30s">
                    <div class="images-area">
                        <div class="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/h2-about-area-1.png" alt="">
                        </div>
                        <div class="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/h2-about-area-2.png" alt="">
                        </div>
                        <div class="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/h2-about-area-4.png" alt="">
                        </div>
                        <div class="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/h3-about-img-7.png" alt="">
                        </div>
                        <div class="image absulet-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/h2-about-area-5.png" alt="">
                        </div>
                        <div class="images absulet-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/h2-about-area-6.png" alt="">
                        </div>
                        <div class="images absulet-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/h2-about-area-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses-area -->
    <section class="h3-courses-area">
        <div class="container">
            <div class="title text-center">
                <h6>((Courses))</h6>
                <h1>Our Popular Driving Course</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="courses-images owl-carousel">
                <div class="item"> 
                    <div class="course-item"> 
                        <div class="courses-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/courses-h1-img.png" alt="">
                        </div>
                        <div class="courses-img-heading">
                            <div class="img-heading">
                                <h3>Learner Drivers</h3>
                                <h4>$315</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consect- etur adipiscing elit, sed do eiusmod</p>
                             <a class="theme-btn" href="courses-details.html">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="item"> 
                    <div class="course-item"> 
                        <div class="courses-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/courses-h1-tow.png" alt="">
                        </div>
                        <div class="courses-img-heading">
                            <div class="img-heading">
                                <h3>Defensive Driving</h3>
                                <h4>$415</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consect- etur adipiscing elit, sed do eiusmod</p>
                            <a class="theme-btn" href="courses-details.html">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="item"> 
                    <div class="course-item"> 
                        <div class="courses-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/couraese-h1-three.png" alt="">
                        </div>
                        <div class="courses-img-heading">
                            <div class="img-heading">
                                <h3>Foreign Driving</h3>
                                <h4>$715</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consect- etur adipiscing elit, sed do eiusmod</p>
                            <a class="theme-btn" href="courses-details.html">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team-area -->
    <section class="h3-team-area">
        <div class="container">
            <div class="title text-center">
                <h6>((Team))</h6>
                <h1>Meet Our Instructor</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUpBig" data-wow-duration="1s">
                    <div class="team-items">
                        <div class="team-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/team-h1-1.png" alt="">
                        </div>
                        <div class="team-id">
                            <h6>Daniel Taylor</h6>
                            <p>Instructor</p>
                            <ul class="team-links text-center">
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUpBig" data-wow-duration="1.20s">
                    <div class="team-items">
                        <div class="team-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/team-h1-3.png" alt="">
                        </div>
                        <div class="team-id">
                            <h6>Nia Falzzahra</h6>
                            <p>Head Teacher</p>
                            <ul class="team-links text-center">
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUpBig" data-wow-duration="1.40s">
                    <div class="team-items">
                        <div class="team-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/team-h1-4.png" alt="">
                        </div>
                        <div class="team-id">
                            <h6>Anthony Adams</h6>
                            <p>Instructor</p>
                            <ul class="team-links text-center">
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Driving-strat -->
    <section class=" driving-area h2-driving-area">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-duration="1s">
                    <div class="driving-text">
                        <h1>Start Learning to Drive Today</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <div class="about-number">
                            <span><i class="fas fa-phone"></i></span>
                            <a href="tel:+135 4532 4256"> +135 4532 4256</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="driving-img">
                        <div class="bg-and-play-btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/driving-h1.png" alt="">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=7ClH977D0Yg"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing-area -->
    <section class="pricing-area h3-page">
        <div class="container">
            <div class="title text-center">
                <h6>((Pricing))</h6>
                <h1>Choose Your Best Pricing Plan</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUpBig" data-wow-duration="1s">
                    <div class="pricing-item text-center">
                        <div class="pricing-texts">
                            <h6>Basic Plan</h6>
                            <div class="basic-price">
                                <span>$</span>
                                <h1>500</h1>
                            </div>
                            <ul class="text-center">
                                <li>Basic Lesson For 1 hour</li>
                                <li>Full Course Theory</li>
                                <li>Full Driving Course</li>
                                <li>Lessons From $20 Per Hour</li>
                                <li>Practical Sessions</li>
                            </ul>
                            <a class="theme-btn" href="javascprit:void(0);">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUpBig" data-wow-duration="1.20s">
                    <div class="pricing-item text-center">
                        <div class="pricing-texts">
                            <h6>Popular Plan</h6>
                            <div class="basic-price">
                                <span>$</span>
                                <h1>760</h1>
                            </div>
                            <ul class="text-center">
                                <li>Basic Lesson For 1 hour</li>
                                <li>Full Course Theory</li>
                                <li>Full Driving Course</li>
                                <li>Lessons From $20 Per Hour</li>
                                <li>Practical Sessions</li>
                            </ul>
                            <a class="theme-btn" href="javascprit:void(0);">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUpBig" data-wow-duration="1.40s">
                    <div class="pricing-item text-center">
                        <div class="pricing-texts">
                            <h6>Premium Plan</h6>
                            <div class="basic-price">
                                <span>$</span>
                                <h1>980</h1>
                            </div>
                            <ul class="text-center">
                                <li>Basic Lesson For 1 hour</li>
                                <li>Full Course Theory</li>
                                <li>Full Driving Course</li>
                                <li>Lessons From $20 Per Hour</li>
                                <li>Practical Sessions</li>
                            </ul>
                            <a class="theme-btn" href="javascprit:void(0);">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial_area -->
    <section class="testimonual-h2-area v3-area">
        <div class="container">
            <div class="title text-center">
                <h6>((Testimonial))</h6>
                <h1>What Our Client Say?</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="testimonual-main-div">
                <div class="client-id owl-carousel">
                    <div class="item">
                        <div class="client-deatils">
                            <div class="peragraph">
                                <span><svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.107905 11.2718L0.132832 11.4401L0.158754 11.4341C0.335917 12.2667 0.744038 13.0318 1.3359 13.641C1.92775 14.2502 2.67916 14.6786 3.50317 14.8765C4.32717 15.0744 5.19011 15.0338 5.99212 14.7594C6.79414 14.485 7.50245 13.988 8.03511 13.326C8.56777 12.6639 8.903 11.8638 9.00201 11.0182C9.10103 10.1727 8.95978 9.31621 8.59462 8.54796C8.22945 7.7797 7.6553 7.13105 6.93858 6.67706C6.22186 6.22306 5.39187 5.98228 4.54465 5.98257C4.32232 5.98257 4.10895 6.01663 3.89659 6.04769C3.96538 5.81524 4.03617 5.57879 4.14983 5.36638C4.26349 5.05778 4.44096 4.79026 4.61743 4.52074C4.76499 4.22918 5.02522 4.0318 5.21664 3.78231C5.41705 3.53985 5.69023 3.37853 5.90658 3.17714C6.11895 2.96674 6.39712 2.86153 6.61846 2.71325C6.84977 2.57999 7.05116 2.4327 7.26652 2.36257L7.80392 2.14014L8.2765 1.94276L7.79395 2.50448e-08L7.19872 0.14428C7.00829 0.192373 6.77599 0.248481 6.51178 0.315611C6.24158 0.365708 5.95344 0.502973 5.6324 0.628215C5.31635 0.771492 4.94845 0.866675 4.60746 1.09612C4.26449 1.31454 3.86867 1.4969 3.51971 1.78946C3.18172 2.09104 2.77394 2.35255 2.47284 2.73529C2.14382 3.09398 1.8188 3.47071 1.56655 3.89954C1.27442 4.30833 1.07601 4.7572 0.86664 5.20106C0.677206 5.64491 0.524661 6.09879 0.400034 6.53964C0.163739 7.42335 0.0580543 8.26298 0.0171764 8.98136C-0.0167223 9.70076 0.00321799 10.2989 0.0450929 10.7317C0.0591041 10.9125 0.0800569 11.0927 0.107905 11.2718V11.2718ZM11.0751 11.2718L11.1001 11.4401L11.126 11.4341C11.3032 12.2667 11.7113 13.0318 12.3031 13.641C12.895 14.2502 13.6464 14.6786 14.4704 14.8765C15.2944 15.0744 16.1573 15.0338 16.9594 14.7594C17.7614 14.485 18.4697 13.988 19.0023 13.326C19.535 12.6639 19.8702 11.8638 19.9693 11.0182C20.0683 10.1727 19.927 9.31621 19.5619 8.54796C19.1967 7.7797 18.6225 7.13105 17.9058 6.67706C17.1891 6.22306 16.3591 5.98228 15.5119 5.98257C15.2896 5.98257 15.0762 6.01663 14.8638 6.04769C14.9326 5.81524 15.0034 5.57879 15.1171 5.36638C15.2307 5.05778 15.4082 4.79026 15.5847 4.52074C15.7322 4.22918 15.9925 4.0318 16.1839 3.78231C16.3843 3.53985 16.6575 3.37853 16.8738 3.17714C17.0862 2.96674 17.3644 2.86153 17.5857 2.71325C17.817 2.57999 18.0184 2.4327 18.2338 2.36257L18.7712 2.14014C19.0713 2.0169 19.2427 1.94476 19.2427 1.94476L18.7602 0.00200471L18.165 0.146283C17.9745 0.194376 17.7422 0.250486 17.478 0.317615C17.2078 0.367712 16.9197 0.504978 16.5986 0.63022C16.2826 0.773497 15.9147 0.86868 15.5737 1.09812C15.2307 1.31655 14.8349 1.4989 14.486 1.79146C14.148 2.09305 13.7402 2.35455 13.4391 2.73729C13.1101 3.09599 12.785 3.47271 12.5328 3.90154C12.2407 4.31033 12.0423 4.7592 11.8329 5.20306C11.6434 5.64692 11.4909 6.10079 11.3663 6.54165C11.13 7.42536 11.0243 8.26498 10.9834 8.98337C10.9495 9.70276 10.9695 10.3009 11.0113 10.7338C11.0262 10.9138 11.0475 11.0933 11.0751 11.2718V11.2718Z" fill="#E81D4F"/>
                                    </svg>
                                </span>
                                <p>Cumque laboriosam aperiam quos provident ad ea porro illum ratione praesentium repellendus obcaecati, fugit tempora ab et rem adipisci sequi necessitatibus quis!</p>
                            </div>
                            <div class="testimonial-client-id">
                                <div class="client-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-h2.png" alt="">
                                    <div class="name-ocapation">
                                        <h6>Rahul Roy</h6>
                                        <p>Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-deatils">
                            <div class="peragraph">
                                <span><svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.107905 11.2718L0.132832 11.4401L0.158754 11.4341C0.335917 12.2667 0.744038 13.0318 1.3359 13.641C1.92775 14.2502 2.67916 14.6786 3.50317 14.8765C4.32717 15.0744 5.19011 15.0338 5.99212 14.7594C6.79414 14.485 7.50245 13.988 8.03511 13.326C8.56777 12.6639 8.903 11.8638 9.00201 11.0182C9.10103 10.1727 8.95978 9.31621 8.59462 8.54796C8.22945 7.7797 7.6553 7.13105 6.93858 6.67706C6.22186 6.22306 5.39187 5.98228 4.54465 5.98257C4.32232 5.98257 4.10895 6.01663 3.89659 6.04769C3.96538 5.81524 4.03617 5.57879 4.14983 5.36638C4.26349 5.05778 4.44096 4.79026 4.61743 4.52074C4.76499 4.22918 5.02522 4.0318 5.21664 3.78231C5.41705 3.53985 5.69023 3.37853 5.90658 3.17714C6.11895 2.96674 6.39712 2.86153 6.61846 2.71325C6.84977 2.57999 7.05116 2.4327 7.26652 2.36257L7.80392 2.14014L8.2765 1.94276L7.79395 2.50448e-08L7.19872 0.14428C7.00829 0.192373 6.77599 0.248481 6.51178 0.315611C6.24158 0.365708 5.95344 0.502973 5.6324 0.628215C5.31635 0.771492 4.94845 0.866675 4.60746 1.09612C4.26449 1.31454 3.86867 1.4969 3.51971 1.78946C3.18172 2.09104 2.77394 2.35255 2.47284 2.73529C2.14382 3.09398 1.8188 3.47071 1.56655 3.89954C1.27442 4.30833 1.07601 4.7572 0.86664 5.20106C0.677206 5.64491 0.524661 6.09879 0.400034 6.53964C0.163739 7.42335 0.0580543 8.26298 0.0171764 8.98136C-0.0167223 9.70076 0.00321799 10.2989 0.0450929 10.7317C0.0591041 10.9125 0.0800569 11.0927 0.107905 11.2718V11.2718ZM11.0751 11.2718L11.1001 11.4401L11.126 11.4341C11.3032 12.2667 11.7113 13.0318 12.3031 13.641C12.895 14.2502 13.6464 14.6786 14.4704 14.8765C15.2944 15.0744 16.1573 15.0338 16.9594 14.7594C17.7614 14.485 18.4697 13.988 19.0023 13.326C19.535 12.6639 19.8702 11.8638 19.9693 11.0182C20.0683 10.1727 19.927 9.31621 19.5619 8.54796C19.1967 7.7797 18.6225 7.13105 17.9058 6.67706C17.1891 6.22306 16.3591 5.98228 15.5119 5.98257C15.2896 5.98257 15.0762 6.01663 14.8638 6.04769C14.9326 5.81524 15.0034 5.57879 15.1171 5.36638C15.2307 5.05778 15.4082 4.79026 15.5847 4.52074C15.7322 4.22918 15.9925 4.0318 16.1839 3.78231C16.3843 3.53985 16.6575 3.37853 16.8738 3.17714C17.0862 2.96674 17.3644 2.86153 17.5857 2.71325C17.817 2.57999 18.0184 2.4327 18.2338 2.36257L18.7712 2.14014C19.0713 2.0169 19.2427 1.94476 19.2427 1.94476L18.7602 0.00200471L18.165 0.146283C17.9745 0.194376 17.7422 0.250486 17.478 0.317615C17.2078 0.367712 16.9197 0.504978 16.5986 0.63022C16.2826 0.773497 15.9147 0.86868 15.5737 1.09812C15.2307 1.31655 14.8349 1.4989 14.486 1.79146C14.148 2.09305 13.7402 2.35455 13.4391 2.73729C13.1101 3.09599 12.785 3.47271 12.5328 3.90154C12.2407 4.31033 12.0423 4.7592 11.8329 5.20306C11.6434 5.64692 11.4909 6.10079 11.3663 6.54165C11.13 7.42536 11.0243 8.26498 10.9834 8.98337C10.9495 9.70276 10.9695 10.3009 11.0113 10.7338C11.0262 10.9138 11.0475 11.0933 11.0751 11.2718V11.2718Z" fill="#E81D4F"/>
                                    </svg>
                                </span>
                                <p>Cumque laboriosam aperiam quos provident ad ea porro illum ratione praesentium repellendus obcaecati, fugit tempora ab et rem adipisci sequi necessitatibus quis!</p>
                            </div>
                            <div class="testimonial-client-id">
                                <div class="client-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-h2%2b.png" alt="">
                                    <div class="name-ocapation">
                                        <h6>Rafsan ken</h6>
                                        <p>Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq_area -->
    <section class="faq-area">
        <div class="container">
            <div class="title text-center">
                <h6>((FAQ))</h6>
                <h1>Frequently Asked Questions</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-duration="1.30s">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">How many lessons before i am a competent driver?</button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Utenim ad minim veniam</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">How Long Is The Road Test Appointment?</button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Utenim ad minim veniam</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">How long will it take to get my licence?</button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Quae doloribus dignissimos ab molestiae culpa atque numquam, beatae, in perspiciatis blanditiis earum. Voluptatum, odit quia! Natus debitis vel recusandae.</div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRihtBig" data-wow-duration="1.30s">
                    <div class="faq-images">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/faq.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cleint_area -->
    <section class="cleint-area">
        <div class="container">
            <div class="cleint-office-logo owl-carousel">
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/one.png" alt=""></div>
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/two.png" alt=""></div>
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/three.png" alt=""></div>
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/four.png" alt=""></div>
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/five.png" alt=""></div>
            </div>                                                     
        </div>
    </section>
<?php
endwhile;
get_footer();