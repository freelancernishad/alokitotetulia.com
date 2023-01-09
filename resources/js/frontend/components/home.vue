<template>
    <div>
        <!-- Welcome home page <router-link to="/login">Login</router-link>-->
        <main role="main">
            <div data-nosnippet>
                <div class="container section-top mt-3">

                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="top-right m-pt-3">
                                <div class="opinion-contents" style="    border: 1px solid black;">
                                    <div class="category-header opinion-header text-center" style="    background: #6c6c6c;">
                                        <div class="heading opinion-heading text-center">
                                            <p class="title"><a href="javascript:void(0)" class="text-white">সর্বশেষ</a></p>
                                        </div>
                                    </div>
                                    <div class="regular-list scaled ai-custom" style="height: 425px;overflow: auto;">
                                        <router-link
                                            :to="{ name: 'readPost', params: { id: LPost.id, slug: LPost.slug } }"
                                            v-for="(LPost, Pindex) in posts.latestPost" :key="'Lpost' + Pindex"
                                            class="news-item news-item-regular py-2 d-flex">
                                            <img style="border-radius: 50%;width: 90px;height: 90px;margin-right: 8px"
                                                :src="$asseturl + LPost.fiture" v-if="LPost.fiture" :alt="LPost.title"
                                                class="lazyload img-loader">
                                            <img style="border-radius: 50%;width: 90px;height: 90px;margin-right: 8px"
                                                v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                                :alt="LPost.title" class="lazyload img-loader">
                                            <div class="d-flex flex-column" style="">
                                                {{ LPost.title }}
                                            </div>
                                        </router-link>
                                    </div>
                                </div>
                                <div class="advertisement mt-3">
                                    <div id='div-gpt-ad-1620297530803-0'
                                        style='max-width: 100%; width: 300px; height: 250px;'>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12 top-left-section lead-top m-order-0">
                            <carousel :autoplay="false" :nav="false" :dots="false" :items="1" style="position:relative">
                                <template slot="prev"><span class="prev"><i
                                            class="fa-solid fa-chevron-left"></i></span></template>
                                <div class="box item" v-for="(featured_post, index) in getlatestpost"
                                    :key="'Fpost' + index">
                                    <router-link
                                        :to="{ name: 'readPost', params: { id: featured_post.id, slug: featured_post.slug } }">
                                        <div class="carousel-caption"> {{ featured_post.title }}</div>
                                        <img class="img-responsive cover_image" :src="$asseturl + featured_post.fiture"
                                            v-if="featured_post.fiture" width="600" height="364" alt="">
                                        <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg":alt="featured_post.title" class="img-responsive cover_image">
                                        <div class="overlay"></div>
                                        <div class="overlay-info">
                                            <div class="info">
                                                <p><span class="ion-android-data"></span>8th January 2023<span
                                                        class="ion-chatbubbles"></span>351</p>
                                            </div>
                                        </div>
                                    </router-link>
                                </div>
                                <template slot="next"><span class="next"><i
                                            class="fa-solid fa-chevron-right"></i></span></template>

                            </carousel>

                            <div class="dots" style="display: flex;width: 544px;overflow: hidden;">
                                <div class="navDotsImage" v-for="(featured_post, index) in getlatestpost"  :key="'slide'+index">
                                    <img style="height:100px;width:100px" :src="$asseturl + featured_post.fiture" v-if="featured_post.fiture"/>
                                    <img style="height:100px;width:100px" v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg":alt="featured_post.title" class="img-responsive cover_image"/>
                                </div>
                            </div>

                            <!--
                            <div class="row">
                                <div class="col-12 lead-news" v-for="(featured_post, index) in posts.featured_post"
                                    :key="'Fpost' + index" v-if="index==0">
                                    <router-link
                                        :to="{ name: 'readPost', params: { id: featured_post.id, slug: featured_post.slug } }"
                                        class="news-item news-item-lead">
                                        <div class="image-container">
                                            <img :src="$asseturl + featured_post.fiture" v-if="featured_post.fiture"
                                                :alt="featured_post.title" class="lazyload img-loader">
                                            <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                                :alt="featured_post.title" class="lazyload img-loader">
                                        </div>
                                        <h2 class="title" style="margin: 10px 0">
                                            {{ featured_post.title }}
                                        </h2>
                                    </router-link>
                                </div>
                            </div> -->


                        </div>

                        <!--
                        <div class="col-lg-3 col-md-6 top-list-1 m-order-1  " style="order: -1">
                            <div class="second-center scaled" style="background: #Eff5F4">
                                <router-link
                                    :to="{ name: 'readPost', params: { id: featured_post.id, slug: featured_post.slug } }"
                                    class="news-item news-item-list py-2 "
                                    v-for="(featured_post, index4) in posts.featured_post" :key="'F1post' + index4"
                                    :style="[index4 == 0 ? { 'display': 'none' } : '']">
                                    <div class="image-container">
                                        <img :src="$asseturl + featured_post.fiture" v-if="featured_post.fiture"
                                            :alt="featured_post.title" class="lazyload img-loader">
                                        <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                            :alt="featured_post.title" class="lazyload img-loader">
                                    </div>
                                    <div class="">
                                        <h2 class="title">
                                            {{ featured_post.title }}
                                        </h2>
                                    </div>
                                </router-link>
                            </div>
                        </div> -->

                        <div class="col-lg-3 col-md-6 top-list-1 m-order-1  " style="order: 1">
                            <img style="height: 469px;" :src="$asseturl + 'WhatsApp Image 2023-01-10 at 1.09.03 AM.jpeg'" width="100%" alt="">
                        </div>

                    </div>
                </div>
                <div class="section-two py-3 bg-section-two m-pt-0 mt-3 m-mt-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 special-top">
                                <div class="row">
                                    <div class="col-sm-3 box-news " v-for="(LPost, Pindex) in posts.latestPost"
                                        :key="'Lpost' + Pindex">
                                        <router-link
                                            :to="{ name: 'readPost', params: { id: LPost.id, slug: LPost.slug } }"
                                            class="news-item news-item-box m-py-2">
                                            <div class="image-container">
                                                <img style="height:167px !important;" :src="$asseturl + LPost.fiture"
                                                    v-if="LPost.fiture" :alt="LPost.title" class="lazyload img-loader">
                                                <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                                    :alt="LPost.title" class="lazyload img-loader">
                                            </div>
                                            <div>
                                                <h2 class="title">
                                                    {{ LPost.title }}
                                                </h2>
                                            </div>
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container pt-3 m-pt-2">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div
                                class="category-header country-ch d-flex justify-content-between align-items-center opinion__home mt-2">
                                <div class="heading opinion-heading">
                                    <p class="title"><router-link title=""
                                            :to="{ name: 'categoryPost', params: { cat: 'জাতীয়' } }"
                                            class="country-lc">জাতীয়</router-link></p>
                                </div>
                                <router-link title="" :to="{ name: 'categoryPost', params: { cat: 'জাতীয়' } }"
                                    class="d-none d-sm-flex">
                                    <div class="read-more d-flex justify-content-end align-items-center">
                                        <p>আরও খবর</p>
                                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                                    </div>
                                </router-link>
                            </div>
                            <div class="row border-right country-articles">
                                <div class="col-12 col-md-6 col-xl-4" v-for="(national, naindex) in posts.national"
                                    :key="'naindex' + naindex">
                                    <div class="clk-list clk-center">
                                        <router-link
                                            :to="{ name: 'readPost', params: { id: national.id, slug: national.slug } }"
                                            class="clk-item clk-item-regular py-2 ">
                                            <img style="height:167px !important;" :src="$asseturl + national.fiture"
                                                v-if="national.fiture" :alt="national.title"
                                                class="lazyload img-loader">
                                            <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                                :alt="national.title" class="lazyload img-loader">
                                            <h2 class="title">
                                                {{ national.title }}
                                            </h2>
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 politics">
                            <div
                                class="category-header politics-ch d-flex justify-content-between align-items-center politics__home mt-2">
                                <div class="heading politics-heading">
                                    <p class="title"><router-link title=""
                                            :to="{ name: 'categoryPost', params: { cat: 'রাজনীতি' } }"
                                            class="politics-lc">রাজনীতি</router-link></p>
                                </div>
                                <router-link title="" :to="{ name: 'categoryPost', params: { cat: 'রাজনীতি' } }"
                                    class="d-none d-sm-flex">
                                    <div class="read-more d-flex justify-content-end align-items-center">
                                        <p>আরও খবর</p>
                                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                                    </div>
                                </router-link>
                            </div>
                            <div class="regular-list scaled ai-custom">
                                <router-link
                                    :to="{ name: 'readPost', params: { id: politics.id, slug: politics.slug } }"
                                    class="news-item news-item-regular py-2"
                                    v-for="(politics, naindex) in posts.politics" :key="'naindex' + naindex">
                                    <div class="image-container">
                                        <img style="height:167px !important;" :src="$asseturl + politics.fiture"
                                            v-if="politics.fiture" :alt="politics.title" class="lazyload img-loader">
                                        <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                            :alt="politics.title" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">
                                        {{ politics.title }}
                                    </h2>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container pt-3 m-pt-2">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div
                                class="category-header country-ch d-flex justify-content-between align-items-center opinion__home mt-2">
                                <div class="heading opinion-heading">
                                    <p class="title"><router-link title=""
                                            :to="{ name: 'categoryPost', params: { cat: 'সারাদেশ' } }"
                                            class="country-lc">সারাদেশ</router-link></p>
                                </div>
                                <router-link title="" :to="{ name: 'categoryPost', params: { cat: 'সারাদেশ' } }"
                                    class="d-none d-sm-flex">
                                    <div class="read-more d-flex justify-content-end align-items-center">
                                        <p>আরও খবর</p>
                                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                                    </div>
                                </router-link>
                            </div>
                            <div class="row border-right country-articles">
                                <div class="col-12 col-md-6 col-xl-4"
                                    v-for="(the_whole_country, naindex) in posts.the_whole_country"
                                    :key="'naindex' + naindex">
                                    <div class="clk-list clk-center">
                                        <router-link
                                            :to="{ name: 'readPost', params: { id: the_whole_country.id, slug: the_whole_country.slug } }"
                                            class="clk-item clk-item-regular py-2 ">
                                            <img style="height:167px !important;"
                                                :src="$asseturl + the_whole_country.fiture"
                                                v-if="the_whole_country.fiture" :alt="the_whole_country.title"
                                                class="lazyload img-loader">
                                            <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                                :alt="the_whole_country.title" class="lazyload img-loader">
                                            <h2 class="title">
                                                {{ the_whole_country.title }}
                                            </h2>
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 politics">
                            <div
                                class="category-header politics-ch d-flex justify-content-between align-items-center politics__home mt-2">
                                <div class="heading politics-heading">
                                    <p class="title"><router-link title=""
                                            :to="{ name: 'categoryPost', params: { cat: 'আন্তর্জাতিক' } }"
                                            class="politics-lc">আন্তর্জাতিক</router-link></p>
                                </div>
                                <router-link title="" :to="{ name: 'categoryPost', params: { cat: 'আন্তর্জাতিক' } }"
                                    class="d-none d-sm-flex">
                                    <div class="read-more d-flex justify-content-end align-items-center">
                                        <p>আরও খবর</p>
                                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                                    </div>
                                </router-link>
                            </div>
                            <div class="regular-list scaled ai-custom">
                                <router-link
                                    :to="{ name: 'readPost', params: { id: international.id, slug: international.slug } }"
                                    class="news-item news-item-regular py-2"
                                    v-for="(international, naindex) in posts.international" :key="'naindex' + naindex">
                                    <div class="image-container">
                                        <img style="height:167px !important;" :src="$asseturl + international.fiture"
                                            v-if="international.fiture" :alt="international.title"
                                            class="lazyload img-loader">
                                        <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                            :alt="international.title" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">
                                        {{ international.title }}
                                    </h2>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container pt-3 m-pt-2">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div
                                class="category-header country-ch d-flex justify-content-between align-items-center opinion__home mt-2">
                                <div class="heading opinion-heading">
                                    <p class="title"><router-link title=""
                                            :to="{ name: 'categoryPost', params: { cat: 'বিনোদন' } }"
                                            class="country-lc">বিনোদন</router-link></p>
                                </div>
                                <router-link title="" :to="{ name: 'categoryPost', params: { cat: 'বিনোদন' } }"
                                    class="d-none d-sm-flex">
                                    <div class="read-more d-flex justify-content-end align-items-center">
                                        <p>আরও খবর</p>
                                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                                    </div>
                                </router-link>
                            </div>
                            <div class="row border-right country-articles">
                                <div class="col-12 col-md-6 col-xl-4"
                                    v-for="(entertainment, naindex) in posts.entertainment" :key="'naindex' + naindex">
                                    <div class="clk-list clk-center">
                                        <router-link
                                            :to="{ name: 'readPost', params: { id: entertainment.id, slug: entertainment.slug } }"
                                            class="clk-item clk-item-regular py-2 ">
                                            <img style="height:167px !important;"
                                                :src="$asseturl + entertainment.fiture" v-if="entertainment.fiture"
                                                :alt="entertainment.title" class="lazyload img-loader">
                                            <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                                :alt="entertainment.title" class="lazyload img-loader">
                                            <h2 class="title">
                                                {{ entertainment.title }}
                                            </h2>
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 politics">
                            <div
                                class="category-header politics-ch d-flex justify-content-between align-items-center politics__home mt-2">
                                <div class="heading politics-heading">
                                    <p class="title"><router-link title=""
                                            :to="{ name: 'categoryPost', params: { cat: 'শিক্ষা' } }"
                                            class="politics-lc">শিক্ষা</router-link></p>
                                </div>
                                <router-link title="" :to="{ name: 'categoryPost', params: { cat: 'শিক্ষা' } }"
                                    class="d-none d-sm-flex">
                                    <div class="read-more d-flex justify-content-end align-items-center">
                                        <p>আরও খবর</p>
                                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                                    </div>
                                </router-link>
                            </div>
                            <div class="regular-list scaled ai-custom">
                                <router-link
                                    :to="{ name: 'readPost', params: { id: education.id, slug: education.slug } }"
                                    class="news-item news-item-regular py-2"
                                    v-for="(education, naindex) in posts.education" :key="'naindex' + naindex">
                                    <div class="image-container">
                                        <img style="height:167px !important;" :src="$asseturl + education.fiture"
                                            v-if="education.fiture" :alt="education.title" class="lazyload img-loader">
                                        <img v-else src="//cdn.dhakapost.com/media/common/placeholder.jpg"
                                            :alt="education.title" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">
                                        {{ education.title }}
                                    </h2>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container pt-3 m-pt-2 mt-5" style="    overflow: hidden;">
                    <div class="width100 block-2 row">
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="padding">
                                <div class="news news-3 width100">
                                    <h3 class="title width100"><a href="#">লাইফ
                                            স্টাইল</a></h3>
                                    <div class="first width100"><a href="#"><img
                                                src="https://www.bd24live.com/bangla/mthumb.php?src=https://www.bd24live.com/bangla/wp-content/uploads/2022/12/71-2021-12-07-23-58-40.jpg&amp;w=233&amp;h=148"
                                                width="233" height="148">
                                            <h3>শীতকালে ত্বকের যত্নে করণীয়</h3>
                                        </a></div>
                                    <div class="other width100"><a href="#"> <i class="fas fa-long-arrow-right"></i>
                                            সহজেই
                                            তৈরি করুন কাঁঠালের বার্গার</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i> ‘এলি
                                            সাব মেইসন’ এখন বাংলাদেশে</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            ‘কুল’
                                            বিশ্বাস করে সকল ছেলেই কুল</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="padding">
                                <div class="news news-3 width100">
                                    <h3 class="title width100"><a href="#">বিজ্ঞান
                                            ও প্রযুক্তি</a></h3>
                                    <div class="first width100"><a href="#"><img
                                                src="https://www.bd24live.com/bangla/mthumb.php?src=https://www.bd24live.com/bangla/wp-content/uploads/2023/01/Walton-Digi-Tech-new-year-offer-website-launching-Picture.jpg&amp;w=233&amp;h=148"
                                                width="233" height="148">
                                            <h3>ওয়ালটন কম্পিউটার পণ্যে ১০০ শতাংশ পর্যন্ত ক্যাশব্যাক, চালু হলো নতুন
                                                ওয়েবসাইট</h3>
                                        </a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            আইএসও
                                            সনদ পেলো এডিসন ইন্ডাস্ট্রিজ লিমিটেড</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            ফাস্ট
                                            চার্জিং ওয়্যারলেস পাওয়ার ব্যাংক আনলো ওয়ালটন</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i> নতুন
                                            দুই মডেলের আইপিএস গেমিং মনিটর আনলো ওয়ালটন</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="padding">
                                <div class="news news-3 width100">
                                    <h3 class="title width100"><a href="#">ক্যাম্পাস</a></h3>
                                    <div class="first width100"><a href="https://www.bd24live.com/bangla/570584/"><img
                                                src="https://www.bd24live.com/bangla/mthumb.php?src=https://www.bd24live.com/bangla/wp-content/uploads/2023/01/1673268824001.jpg&amp;w=233&amp;h=148"
                                                width="233" height="148">
                                            <h3>প্রতিষ্ঠাবার্ষিকীতে রক্তদান কর্মসূচি পালন করল ছাত্রলীগ</h3>
                                        </a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            পিআইবিতে কুবিসাস সদস্যদের
                                            নিয়ে দুই দিনব্যাপী কর্মশালা সমাপনী</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            ঢাবির
                                            জিন প্রকৌশল ও জীব প্রযুক্তি বিভাগের নবীন বরণ অনুষ্ঠিত</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            শীতের
                                            সকালে নতুন রূপে সরকারি তিতুমীর কলেজ</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="padding">
                                <div class="news news-3 width100">
                                    <h3 class="title width100"><a
                                            href="https://www.bd24live.com/bangla/category/different-type-of-news/">ভিন্ন
                                            স্বাদের খবর</a></h3>
                                    <div class="first width100"><a href="#"><img
                                                src="https://www.bd24live.com/bangla/mthumb.php?src=https://www.bd24live.com/bangla/wp-content/uploads/2023/01/abbrity.jpg&amp;w=233&amp;h=148"
                                                width="233" height="148">
                                            <h3>আবৃত্তি একাডেমির নেতৃত্বে তাহমিনা-বেলায়েত</h3>
                                        </a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            বিড়াল
                                            ও মানুষের খুনসুটিতে জনপ্রিয় ‘পুচি ফ্যামিলি’</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            বুর্জ
                                            খলিফায় একটি ফ্ল্যাটের দাম প্রায় ২০০ কোটি, কী আছে সেখানে</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            তিন-চার দিনের জন্য বাড়ি
                                            ভাড়া করে ব্যবসা, গরিব দেশের মেয়েদের এনে চলে অপকর্ম</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container pt-3 m-pt-2 mt-5" style="    overflow: hidden;">
                    <div class="width100 block-2 row">
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="padding">
                                <div class="news news-3 width100">
                                    <h3 class="title width100"><a
                                            href="https://www.bd24live.com/bangla/category/life-style-news/">লাইফ
                                            স্টাইল</a></h3>
                                    <div class="first width100"><a href="#"><img
                                                src="https://www.bd24live.com/bangla/mthumb.php?src=https://www.bd24live.com/bangla/wp-content/uploads/2022/12/71-2021-12-07-23-58-40.jpg&amp;w=233&amp;h=148"
                                                width="233" height="148">
                                            <h3>শীতকালে ত্বকের যত্নে করণীয়</h3>
                                        </a></div>
                                    <div class="other width100"><a href="#"> <i class="fas fa-long-arrow-right"></i>
                                            সহজেই
                                            তৈরি করুন কাঁঠালের বার্গার</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i> ‘এলি
                                            সাব মেইসন’ এখন বাংলাদেশে</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            ‘কুল’
                                            বিশ্বাস করে সকল ছেলেই কুল</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="padding">
                                <div class="news news-3 width100">
                                    <h3 class="title width100"><a href="#">বিজ্ঞান
                                            ও প্রযুক্তি</a></h3>
                                    <div class="first width100"><a href="#"><img
                                                src="https://www.bd24live.com/bangla/mthumb.php?src=https://www.bd24live.com/bangla/wp-content/uploads/2023/01/Walton-Digi-Tech-new-year-offer-website-launching-Picture.jpg&amp;w=233&amp;h=148"
                                                width="233" height="148">
                                            <h3>ওয়ালটন কম্পিউটার পণ্যে ১০০ শতাংশ পর্যন্ত ক্যাশব্যাক, চালু হলো নতুন
                                                ওয়েবসাইট</h3>
                                        </a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            আইএসও
                                            সনদ পেলো এডিসন ইন্ডাস্ট্রিজ লিমিটেড</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            ফাস্ট
                                            চার্জিং ওয়্যারলেস পাওয়ার ব্যাংক আনলো ওয়ালটন</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i> নতুন
                                            দুই মডেলের আইপিএস গেমিং মনিটর আনলো ওয়ালটন</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="padding">
                                <div class="news news-3 width100">
                                    <h3 class="title width100"><a href="#">ক্যাম্পাস</a></h3>
                                    <div class="first width100"><a href="#"><img
                                                src="https://www.bd24live.com/bangla/mthumb.php?src=https://www.bd24live.com/bangla/wp-content/uploads/2023/01/1673268824001.jpg&amp;w=233&amp;h=148"
                                                width="233" height="148">
                                            <h3>প্রতিষ্ঠাবার্ষিকীতে রক্তদান কর্মসূচি পালন করল ছাত্রলীগ</h3>
                                        </a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            পিআইবিতে কুবিসাস সদস্যদের
                                            নিয়ে দুই দিনব্যাপী কর্মশালা সমাপনী</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            ঢাবির
                                            জিন প্রকৌশল ও জীব প্রযুক্তি বিভাগের নবীন বরণ অনুষ্ঠিত</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            শীতের
                                            সকালে নতুন রূপে সরকারি তিতুমীর কলেজ</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="padding">
                                <div class="news news-3 width100">
                                    <h3 class="title width100"><a href="#">ভিন্ন
                                            স্বাদের খবর</a></h3>
                                    <div class="first width100"><a href="https://www.bd24live.com/bangla/569652/"><img
                                                src="https://www.bd24live.com/bangla/mthumb.php?src=https://www.bd24live.com/bangla/wp-content/uploads/2023/01/abbrity.jpg&amp;w=233&amp;h=148"
                                                width="233" height="148">
                                            <h3>আবৃত্তি একাডেমির নেতৃত্বে তাহমিনা-বেলায়েত</h3>
                                        </a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            বিড়াল
                                            ও মানুষের খুনসুটিতে জনপ্রিয় ‘পুচি ফ্যামিলি’</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            বুর্জ
                                            খলিফায় একটি ফ্ল্যাটের দাম প্রায় ২০০ কোটি, কী আছে সেখানে</a></div>
                                    <div class="other width100"><a href="#"><i class="fas fa-long-arrow-right"></i>
                                            তিন-চার দিনের জন্য বাড়ি
                                            ভাড়া করে ব্যবসা, গরিব দেশের মেয়েদের এনে চলে অপকর্ম</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="LeadTitlebar3">
                        <a href="https://www.risingbd.com/videogallery/archives">
                            <h2><span>ভিডিও গ্যালারি</span></h2>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-sm-12 rowresize" style="flex: 0 0 40%;max-width: 40%;">
                            <div class="VideoGalleryTop">
                                <div class="col-sm-12 thumbnail">
                                    <a href="#">
                                        <div class="Imgresize">
                                            <picture class="Ratio Ratio16x9 VideoIcon">
                                                <img src="https://img.youtube.com/vi/MTj0t0_STkM/0.jpg" alt="" title=""
                                                    class="img-fluid img100 Ratio Ratio16x9">
                                            </picture>
                                        </div>
                                        <div class="caption">
                                            <h3></h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-12 rowresize" style="flex: 0 0 60%;max-width: 60%;">
                            <div class="DVideoArea">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="VideoGalleryList">
                                            <div class="col-sm-12 thumbnail">
                                                <a
                                                    href="https://www.risingbd.com/videogallery/index.php?videoinfo=1165">
                                                    <div class="Imgresize">
                                                        <picture class="Ratio Ratio16x9 VideoIcon">
                                                            <img src="https://img.youtube.com/vi/_gib8atjfPA/0.jpg"
                                                                alt="" title="" class="img-fluid img100">
                                                        </picture>
                                                    </div>
                                                    <div class="caption">
                                                        <h3></h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="VideoGalleryList">
                                            <div class="col-sm-12 thumbnail">
                                                <a
                                                    href="https://www.risingbd.com/videogallery/index.php?videoinfo=1164">
                                                    <div class="Imgresize">
                                                        <picture class="Ratio Ratio16x9 VideoIcon">
                                                            <img src="https://img.youtube.com/vi/NjbZYKyWrzA/0.jpg"
                                                                alt="জার্সি, পতাকা বিক্রির ধুম | World Cup | RisingBD"
                                                                title="জার্সি, পতাকা বিক্রির ধুম | World Cup | RisingBD"
                                                                class="img-fluid img100">
                                                        </picture>
                                                    </div>
                                                    <div class="caption">
                                                        <h3>জার্সি, পতাকা বিক্রির ধুম | World Cup | RisingBD</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="VideoGalleryList">
                                            <div class="col-sm-12 thumbnail">
                                                <a
                                                    href="https://www.risingbd.com/videogallery/index.php?videoinfo=1163">
                                                    <div class="Imgresize">
                                                        <picture class="Ratio Ratio16x9 VideoIcon">
                                                            <img src="https://img.youtube.com/vi/ThjAyNEER8g/0.jpg"
                                                                alt="" title="" class="img-fluid img100">
                                                        </picture>
                                                    </div>
                                                    <div class="caption">
                                                        <h3></h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="VideoGalleryList">
                                            <div class="col-sm-12 thumbnail">
                                                <a
                                                    href="https://www.risingbd.com/videogallery/index.php?videoinfo=1161">
                                                    <div class="Imgresize">
                                                        <picture class="Ratio Ratio16x9 VideoIcon">
                                                            <img src="https://img.youtube.com/vi/_dbbqpipi6Y/0.jpg"
                                                                alt="" title="" class="img-fluid img100">
                                                        </picture>
                                                    </div>
                                                    <div class="caption">
                                                        <h3></h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="VideoGalleryList">
                                            <div class="col-sm-12 thumbnail">
                                                <a
                                                    href="https://www.risingbd.com/videogallery/index.php?videoinfo=1160">
                                                    <div class="Imgresize">
                                                        <picture class="Ratio Ratio16x9 VideoIcon">
                                                            <img src="https://img.youtube.com/vi/OAYM3wwn64s/0.jpg"
                                                                alt="" title="" class="img-fluid img100">
                                                        </picture>
                                                    </div>
                                                    <div class="caption">
                                                        <h3></h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="VideoGalleryList">
                                            <div class="col-sm-12 thumbnail">
                                                <a
                                                    href="https://www.risingbd.com/videogallery/index.php?videoinfo=1159">
                                                    <div class="Imgresize">
                                                        <picture class="Ratio Ratio16x9 VideoIcon">
                                                            <img src="https://img.youtube.com/vi/G-NWoPgVkJw/0.jpg"
                                                                alt="" title="" class="img-fluid img100">
                                                        </picture>
                                                    </div>
                                                    <div class="caption">
                                                        <h3></h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>














            </div>
        </main>
    </div>
</template>
<script>
import carousel from 'vue-owl-carousel'
export default {
    components: { carousel },
    created() {
        // if (!User.loggedIn()) {
        //     this.$router.push({ name: "/login" });
        // }
        this.getPosts();
    },
    data() {
        return {
            posts: {},
        };
    },
    mounted() {
    },
    methods: {
        async getPosts() {
            var res = await this.callApi('get', `/api/get/all/latest/news`, []);
            this.posts = res.data
        }
    },
};
</script>
<style>
span.next {
    background: red;
    padding: 3px 11px;
    font-size: 24px;
    color: white;
    position: absolute;
    top: 47%;
    right: 0;
    z-index: 9999;
}

span.prev {
    background: red;
    padding: 3px 11px;
    font-size: 24px;
    color: white;
    position: absolute;
    top: 47%;
    left: 0;
    z-index: 9999;
}



.overlay {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9;
    background: #3d566e;
    overflow: hidden;
    opacity: 0;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    width: 100%;
    height: 100%;
}

.box:hover .overlay {
    opacity: 0.8;
}

.overlay-info {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9;
    overflow: hidden;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    width: 100%;
    height: 100%;
}

.box:hover .overlay-info {
    opacity: 1;
}

.cat {
    position: absolute;
    text-transform: capitalize;
    left: 15px;
    top: 0;
    padding: 0;
    margin: 0;
    z-index: 10;
    width: auto;
    height: 36px;
    line-height: 36px;
    color: #fff;
    font-size: 12px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.banner-outer-thumb .cat {
    top: 15px;
    opacity: 1;
}

.cat-data span {
    width: 36px;
    height: 36px;
    text-align: center;
    color: #fff;
    line-height: 36px;
    font-weight: 700;
    font-size: 22px;
    background: #e74c3c;
    display: inline-block;
    margin-right: 5px;
    float: left;
}

.box:hover .cat {
    top: 15px;
    opacity: 1;
}

.info {
    display: block;
    position: absolute;
    left: 15px;
    bottom: 0;
    z-index: 100;
    text-align: center;
    color: #fff;
    height: 36px;
    line-height: 36px;
    font-weight: normal;
    font-size: 12px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.banner-outer-thumb .info {
    bottom: 10px;
    opacity: 1;
}

.info span {
    font-size: 12px;
    display: inline-block;
    padding: 0 5px 0 10px;
}

.info span:first-child {
    padding-left: 0;
}

.box:hover .info {
    bottom: 10px;
    opacity: 1;
}

.banner-outer-thumb {
    padding-bottom: 15px;
}

.box {
    position: relative;
    overflow: hidden;
}

.box:hover .info {
    bottom: 10px;
    opacity: 1;
}

.banner-outer-thumb {
    padding-bottom: 15px;
}

.carousel-caption {
    left: 15px;
    right: 8%;
    bottom: 10px;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 30px;
    color: #ffffff;
    text-align: left;
    text-shadow: none;
    font-size: 18px;
    font-weight: bold;
    line-height: 24px;
    background: #637684d9;
    padding: 24px 16px;
}

.banner-outer-thumb .carousel-caption {
    position: absolute;
    left: 15px;
    right: 8%;
    bottom: 10px;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 30px;
    color: #ffffff;
    text-align: left;
    text-shadow: none;
    font-size: 18px;
    font-weight: bold;
    line-height: 24px;
    opacity: 0;
}

.banner-outer-thumb a p,
.banner-oute-thumbr a:hover p {
    color: #fff;
}

.banner-outer-thumb .box:hover .carousel-caption {
    opacity: 1;
}

.banner-outer-thumb .item {
    margin: 0 5px;
    padding: 4px;
    ;
    background-color: #f8f8f8;
    border: 1px solid #ededed;
}

.banner-outer .carousel-caption {
    position: absolute;
    left: 15px;
    right: 8%;
    bottom: 10px;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 30px;
    color: #ffffff;
    text-align: left;
    text-shadow: none;
    font-size: 20px;
    font-weight: bold;
    line-height: 24px;
}

.banner-outer a p,
.banner-outer a:hover p {
    color: #fff;
}

.right-img-top {
    margin-bottom: 10px;
    overflow: hidden;
    height: 212px;
}

.right-img-top .box {
    height: 212px;
}

.right-img-btm {
    overflow: hidden;
    height: 212px;
}

.right-img-btm .box {
    height: 212px;
}

/*8-4 OWL CAROUSEL SYNC*/
#sync2 .item {
    margin: 0 5px;
    cursor: pointer;
}

#sync2 .owl-wrapper-outer {}

#sync2 .synced .item {
    border: 2px solid #e74c3c;
}

.box img {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    image-rendering: optimizequality;
}

.box:hover img {
    -webkit-transform: scale(1.25);
    -moz-transform: scale(1.25);
    -ms-transform: scale(1.25);
    -o-transform: scale(1.25);
    transform: scale(1.25);
    display: inline-block;
    line-height: 0;
}

a:hover img {
    border: 1px solid #ffcfca;
    opacity: 0.6;
}

.box:hover img {
    -webkit-transform: scale(1.25);
    -moz-transform: scale(1.25);
    -ms-transform: scale(1.25);
    -o-transform: scale(1.25);
    transform: scale(1.25);
    display: inline-block;
    line-height: 0;
}

.overlay-info {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9;
    overflow: hidden;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    width: 100%;
    height: 100%;
}

.left,
.middle {
    float: left;
}

.news {
    margin-bottom: 15px;
    float: left;
}

.news .title {
    border-bottom: 2px solid #f01010;
    font-size: 23px;
    line-height: 30px;
    margin-bottom: 10px;
    margin-top: 0;
}

.news-3 .other {

    margin-bottom: 5px;
}

.width25 {
    width: 25%;
    float: left;
}

.width100 {
    width: 100%;
    float: left;
}

.first.width100 a h3 {
    font-size: 22px;
    margin-bottom: 18px;
    margin-top: 11px;
}


/* video gallery */

.LeadTitlebar3 {
    position: relative;
}

.LeadTitlebar3 h2 {
    /* background: url(../../media/common/dot.png); */
    width: 100%;
    position: relative;
    border-bottom: 2px solid #939297;
    line-height: 100%;
    margin: 0 0 15px;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: .3px;
}

.LeadTitlebar3 h2 span {
    background: #A91717;
    padding: 7px 18px;
    color: #fff;
    height: 30px;
    line-height: 39px;
    position: relative;
    border-bottom: 2px solid#939297;
}

.LeadTitlebar3 h2 span::after {
    border-color: #939297 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0)rgba(0, 0, 0, 0);
    position: absolute;
    content: " ";
    width: auto;
    height: auto;
    bottom: -20px;
    margin-left: -10px;
    left: 50%;
    border-width: 10px;
    border-style: solid;
}

.VideoGalleryList {
    margin-bottom: 15px;
}

.VideoGalleryList .thumbnail {
    border: 0 none;
    box-shadow: none;
    margin: 0 0 0 0;
    padding: 0;
}

.Imgresize {
    position: relative;
}

.VideoGalleryList .thumbnail .caption {
    padding: 7px;
}

.VideoGalleryList .caption h3 {
    color: #fff;
    font-size: 1.1em;
    font-weight: 400;
}

.VideoGalleryList .caption {
    width: 100%;
    bottom: 0;
    position: absolute;
    background: rgba(0, 0, 0, 0.5) linear-gradient(to bottom, rgba(0, 0, 0, 0.14) 0%, rgb(0, 0, 0) 100%) repeat scroll 0 0;
    z-index: 10;
    border-bottom: 1px solid #2d2d2d;
}

.VideoGalleryList .VideoIcon::after {
    position: absolute;
    top: 18%;
    left: 10%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    content: "\f144";
    font-family: FontAwesome;
    font-size: 40px;
    color: #fff;
    text-shadow: 0px 0px 30px rgb(0 0 0 / 50%);
}

.navDotsImage {
    border: 2px solid #bbbbbb;
    margin: 1px;
}
.category-header {
    background: #b1aeae;
}
h3.title.width100 {
    background: #a3ffaa;
}
</style>
