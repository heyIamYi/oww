<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this's Zon-Yi's work !">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/boostrap.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- swiper style -->
    <style>
        .swiper {
            width: 100%;
            height: 500px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav>
        <!-- logo -->
        <div class="container-xxl d-flex justify-content-lg-between ">
            <div class="logo"><img src="./img/homepage-img/logo--u5T7hu.svg" alt=""></div>
            <!-- 相關超連結 -->
            <ul class="nav justify-content-end align-content-center ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                <li class="nav-item">
                    <a class="user-icon nav-link "  href="#">
                        <i  class=" fa-solid fa-circle-user"></i>
                    </a>
                    <div class="login-remind ">
                        <P>Login</P>
                    </div>
                </li>
            </ul>
            <!-- 漢堡連結 -->
            <div class="burger-link ">
                <div class="burger-box">
                    <input type="checkbox" id="burger" hidden>
                    <label for="burger"><i class="fa-solid fa-align-justify"></i></label>
                    <ul class="nav justify-content-end align-content-center">
                        <li class="nav-item2">
                            <a class="nav-link active" aria-current="page" href="#">Blog</a>
                        </li>
                        <li class="nav-item2">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item2">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item2">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item2">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                        <li class="nav-item2">
                            <a class="user-icon nav-link " href="#">
                                <i class=" fa-solid fa-circle-user"></i>
                            </a>
                            <div class="login-remind ">
                                <P>Login</P>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <!-- swiper內容 -->
        <div id="section1" class="mb-2">
            <div class="swiper mySwiper container-fluid ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./img/homepage-img/swiper-silde1.avif" alt=""></div>
                    <div class="swiper-slide"><img src="./img/homepage-img/swiper-silde2.jpg" alt=""></div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- 商品頁面卡 -->
        <div id="section2" class="container-fluid d-flex justify-content-center">
            <div class="goods mt-5 pt-5">
                <!-- 商品頁面卡標題 -->
                <!-- 上半部 -->
                <div class="goods-top">
                    <div class="goods-title text-center">
                        <h3>Raw Denim Heirloom Man Braid</h3>
                    </div>
                    <div class="goods-content text-center">
                        <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                            Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>

                    </div>
                </div>
                <!-- 下半部 -->
                <div class="goods-bottom">
                    <!-- 商品頁面卡片 -->
                    <div class="goods-card">
                        <div class="card-group ">
                            <div class="card text-center ">
                                <img src="./img/homepage-img/section2-img.jpg" class="card-img-top" alt="img-here">
                                <div class="card-body ">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <span class="card-text"><small class="text-muted">Learn More</small></span><i
                                        class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                            <div class="card text-center">
                                <img src="./img/homepage-img/section2-img.jpg" class="card-img-top" alt="img-here">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                                        taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                                        try-hard.</p>
                                    <span class="card-text"><small class="text-muted">Learn More</small></span><i
                                        class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                            <div class="card text-center">
                                <img src="./img/homepage-img/section2-img.jpg" class="card-img-top" alt="img-here">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to
                                        show that equal height action.</p>
                                    <span class="card-text"><small class="text-muted">Learn More</small></span><i
                                        class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 商品頁面按鈕 -->
                    <div class="good-button d-flex justify-content-center">
                        <div class="d-grid gap-2 d-md-block ">
                            <button class="btn btn-primary " type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 商品展示照區塊 -->
        <div id="section3" class="goods-photo container-fluid d-flex">
            <!-- 上半部展示照標題與副標題 -->
            <div class="goods-photo-top d-flex">
                <div class="goods-photo-title">
                    <h3>Master Cleanse Reliac Heirloom</h3>
                </div>
                <div class="goods-photo-content">
                    <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
                        gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun
                        deep
                        jianbing selfies heirloom.</p>
                </div>
            </div>
            <!-- 下半部商品展示照 -->
            <div class="goods-photo-bottom d-flex justify-content-center">
                <!-- 展示照左方區塊 -->
                <div class="goods-photo-left d-flex row">
                    <div class="l-box1"><img src="./img/homepage-img/section3-p1.jpg" alt=""></div>
                    <div class="l-box2"><img src="./img/homepage-img/section3-p2.jpg" alt=""></div>
                    <div class="l-box3"><img src="./img/homepage-img/section3-p3.jpg" alt=""></div>
                </div>
                <!-- 展示照右方區塊 -->
                <div class="goods-photo-right d-flex">
                    <div class="r-box3"><img src="./img/homepage-img/section3-p4.jpg" alt=""></div>
                    <div class="r-box1"><img src="./img/homepage-img/section3-p5.jpg" alt=""></div>
                    <div class="r-box2"><img src="./img/homepage-img/section3-p6.jpg" alt=""></div>

                </div>
            </div>
        </div>
        <!-- 價格展示區塊 -->
        <div id="section4" class="price-box container-xxl">
            <!-- 上半部標題 -->
            <div class="price-top">
                <div class="price-box-tittle">
                    <h3>Pricing</h3>
                </div>
                <div class="price-box-content">
                    <p>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde
                        lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
                </div>
            </div>
            <!-- 下半部圖表 -->
            <div class="price-mid">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="col">Plan</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Storage</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                        <tr>
                            <th scope="row">Start</th>
                            <td>5 Mb/s</td>
                            <td>15 GB</td>
                            <td>Free</td>
                            <td><input type="radio" name="price"></td>
                        </tr>
                        <tr>
                            <th scope="row">Pro</th>
                            <td>25 Mb/s</td>
                            <td>25 GB</td>
                            <td>$24</td>
                            <td><input type="radio" name="price"></td>
                        </tr>
                        <tr>
                            <th scope="row">Business</th>
                            <td>36 Mb/s</td>
                            <td>40 GB</td>
                            <td>$50</td>
                            <td><input type="radio" name="price"></td>
                        </tr>
                        <tr>
                            <th scope="row">Exclusive</th>
                            <td>48 Mb/s</td>
                            <td>120 GB</td>
                            <td>$50</td>
                            <td><input type="radio" name="price"></td>
                        </tr>
                    </tbody>
                </table>
                <!-- 底部按鈕 -->
                <div class="price-bottom d-flex justify-content-between">
                    <div class="text">Learn More　　
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <button class="btn btn-primary" type="submit">Button</button>
                </div>
            </div>
        </div>
        <!-- 商品卡展示2 -->
        <div id="section5" class="goods-photo2 container-fluid p-0">
            <!-- 商品展示卡2 上半部 -->
            <div class="goods-photo2-top d-flex">
                <div class="goods-photo2-title">
                    <h3>Pitchfork Kickstarter Taxidermy<h3>
                </div>
                <div class="goods-photo2-content">
                    <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
                        gentrify, subway tile poke
                        farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom
                        prism food truck ugh squid celiac humblebrag.
                    <p>
                </div>
            </div>
            <!-- 商品展示卡2 下半部 -->
            <div class="goods-photo2-bottom">
                <div class="card">
                    <img src="./img/homepage-img/section5-p1-spring.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>SUBTITLE</h6>
                        <h5>Chichen Itza</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section5-p2-summer.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>SUBTITLE</h6>
                        <h5>Colosseum Roma</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section5-p3-autumn.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>SUBTITLE</h6>
                        <h5>Great Pyramid of Giza</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section5-p4-winter.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>SUBTITLE</h6>
                        <h5>San Francisco</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 特殊圖表 -->
        <div id="section6" class="unknown  container-xxl d-flex justify-content-center align-items-center">
            <!-- 內容物 -->
            <div class="unknown-content ">
                <!-- 第一張卡 -->
                <div class="card mb-3 ">
                    <div class="card-container row g-0 d-flex align-items-center">
                        <div class="card-img col-md-4">
                            <img src="./img/homepage-img/section2-img.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Learn More　<i
                                            class="fa-solid fa-arrow-right"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 第二張卡 -->
                <div class="card mb-3 ">
                    <div class="card-container row g-0 d-flex align-items-center flex-row-reverse">
                        <div class="card-img col-md-4">
                            <img src="./img/homepage-img/section2-img.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Learn More　<i
                                            class="fa-solid fa-arrow-right"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 第三張卡 -->
                <div class="card card-3 mb-3">
                    <div class="card-container row g-0 d-flex justify-content-center align-items-center">
                        <div class="card-img col-md-4">
                            <img src="./img/homepage-img/section2-img.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Learn More　<i
                                            class="fa-solid fa-arrow-right"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 特殊圖表按鈕 -->
            <div class="unknown-button">
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="button">Button</button>
                </div>
            </div>
        </div>
        <!-- 大商品照與下單 -->
        <div id="section7" class="big-goods-photo flex-column container-xxl flex-md-row">
            <!-- 左方照片 -->
            <div class="bgph-left col-12 col-md-6 h-auto">
                <img src="./img/homepage-img/section7-img.jpg" alt="" class="h-100">
            </div>
            <!-- 右方文字說明及下定按鈕 -->
            <div class="bgph-right col-12 col-md-6 pt-4 pb-4 pe-0 ps-5">
                <h6>BRAND NAME</h6>
                <h3>The Catcher in the Rye</h3>
                <div class="score-box d-flex">
                    <div class="score">
                        <svg fill="#6366f1" stroke="#6366f1" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg fill="#6366f1" stroke="#6366f1" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg fill="#6366f1" stroke="#6366f1" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg fill="#6366f1" stroke="#6366f1" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg fill="none" stroke="#6366f1" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                    </div>
                    <div class="review">4 Reviews</div>
                </div>
                <div class="content">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia
                    microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry
                    +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts
                    keytar banjo tattooed umami cardigan.</div>
                <div class="selection-box d-flex">
                    <div class="color-selection">Color</div>
                    <div class="button-select">
                        <button class="btn btn-primary btn-red" type="submit"></button>
                        <button class="btn btn-primary btn-yel" type="submit"></button>
                        <button class="btn btn-primary btn-blue" type="submit"></button>
                    </div>
                    <label for="" class="Size-selection"><span>Size　</span><select>
                            <option>SM</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                        </select></label>
                </div>
                <div class="big-goods-button d-flex">
                    <div class="price-box">
                        <div class="price">$58.00</div>
                    </div>
                    <div class="button-box">
                        <div class="price-button d-flex">
                            <button class="btn btn-primary submit" type="submit">Button</button>
                            <button class="btn btn-primary heart" type="submit"><i
                                    class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 小商品陳列照 -->
        <div id="section8" class="little-goods-photo d-flex">
            <div class="box1 d-flex">
                <div class="card">
                    <img src="./img/homepage-img/section8-p1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p class="card-text">$21.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section8-p2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p class="card-text">$21.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section8-p3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p class="card-text">$21.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section8-p4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p class="card-text">$21.00</p>
                    </div>
                </div>
            </div>
            <div class="box2 d-flex">
                <div class="card">
                    <img src="./img/homepage-img/section8-p5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p class="card-text">$21.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section8-p6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p class="card-text">$21.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section8-p7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p class="card-text">$21.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./img/homepage-img/section8-p8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p class="card-text">$21.00</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 地圖與回饋 -->
        <div id="section9" class="map container-fluid">
            <!-- 地圖 -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1872701.4985836851!2d120.6402133!3d23.546162!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1649395651609!5m2!1szh-TW!2stw"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- 回饋表單 -->
            <div class="feedback">
                <h3>Feedback</h3>
                <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <div class="row mb-3 email-input">
                    <label for="inputEmail3" class="row-sm-2 col-form-label">Email</label>
                    <div class="email-input-box col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                    <form class="was-validated">
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Textarea</label>
                            <textarea class="form-control is-invalid" id="validationTextarea"
                                placeholder="Required example textarea" required></textarea>
                            <!-- <div class="invalid-feedback">
                                Please enter a message in the textarea.
                            </div> -->
                        </div>
                    </form>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">button</button>
                <p class="bottom-text">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
            </div>
        </div>
    </main>
    <footer>
        <!-- 網頁其他資訊 -->
        <!-- 資訊1 -->
        <div class="other-info1 d-flex align-items-center">
            <div class="l-box">
                <div class="logo">
                    <img src="./img/homepage-img/little.logo.png" alt="little logo" />
                    <span>數位方塊</span>
                </div>
                <div class="info">
                    <p>Air plant banjo lyft occupy retro adaptogen indego</p>
                </div>
            </div>
            <div class="r-box d-flex justify-content-around">
                <ul>
                    <li>
                        <h6>CATEGORIES</h6>
                    </li>
                    <li><a>First Link</a></li>
                    <li><a>Second Link</a></li>
                    <li><a>Third Link</a></li>
                    <li><a>Fourth Link</a></li>
                </ul>
                <ul>
                    <li>
                        <h6>CATEGORIES</h6>
                    </li>
                    <li><a>First Link</a></li>
                    <li><a>Second Link</a></li>
                    <li><a>Third Link</a></li>
                    <li><a>Fourth Link</a></li>
                </ul>
                <ul>
                    <li>
                        <h6>CATEGORIES</h6>
                    </li>
                    <li><a>First Link</a></li>
                    <li><a>Second Link</a></li>
                    <li><a>Third Link</a></li>
                    <li><a>Fourth Link</a></li>
                </ul>
                <ul>
                    <li>
                        <h6>CATEGORIES</h6>
                    </li>
                    <li><a>First Link</a></li>
                    <li><a>Second Link</a></li>
                    <li><a>Third Link</a></li>
                    <li><a>Fourth Link</a></li>
                </ul>
            </div>
        </div>
        <!-- 資訊2 -->
        <div class="other-info2">
            <div class="container d-flex align-items-center justify-content-between">
                <p>© 2020 Tailblocks — @善良的人</p>
                <div class="svg">

                    <img src="./img/some-svg/facebook.svg" alt="">
                    <img src="./img/some-svg/twitter.svg" alt="">
                    <img src="./img/some-svg/instagram.svg" alt="">
                    <img src="./img/some-svg/linkedin.svg" alt="">
                </div>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/1b22cb82e7.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
</body>

</html>