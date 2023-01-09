<template>
    <div>


        <section class="header_top_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <small class="date">
                            <i class="fa fa-map-marker"></i> তেতুলিয়া,পঞ্চগড় &nbsp;&nbsp;<i class="fa fa-calendar"> </i>
                            ১০ই জানুয়ারি, ২০২৩ খ্রিস্টাব্দ | ২৬শে পৌষ, ১৪২৯ বঙ্গাব্দ | ১৬ই জমাদিউস সানি, ১৪৪৪ হিজরি
                        </small>
                    </div>

                    <div class="col-sm-3">

                        <form role="search" method="get" id="searchform" class="searchform d-flex"
                            action="https://shamolynews24.com">
                            <div class="col-xs-10 col-sm-11" style="padding:0 !important">
                                <input class="form-control" value="" name="s" id="s" placeholder="কী খুঁজতে চান ?"
                                    type="text">
                                <input type="hidden" name="post_type" value="post">
                            </div>
                            <div class="col-xs-2 col-sm-1" style="padding:0 !important">
                                <input name="post_type" value="post" type="hidden">
                                <button class="search_submit_button form-control" id="searchsubmit" value="অনুসন্ধান"
                                    type="submit">
                                    <i class="fa fa-search srch_btn"></i>
                                </button>
                            </div>
                        </form>

                    </div>

                    <div class="col-sm-2">
                        <ul class="social-media">

                            <li><a href="" target="_blank" title="iPhone/Mac"><i style="background: #cd171e;"
                                        class="fa fa-camera"></i></a></li>

                            <li><a href="#" target="_blank" title="Youtube" style=""><i style="background: #cd171e;"
                                        class="fa fa-video-camera"></i></a></li>


                            <li><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </li>


                            <!--<li><a href="" target="_blank" title="Android"><i class="fa fa-android"></i></a></li>
							<li><a href="" target="_blank" title="iPhone/Mac"><i class="fa fa-apple"></i></a></li>
							<li><a href="" target="_blank" title="RSS"><i class="fa fa-rss"></i></a></li>
							<li class="sr-only"><a href="" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div class="scroll width100">
            <div class="padding">
                <div class="scroll-parent">
                    <span class="title">শিরোনাম</span>
                    <div class="scroll-cont">
                        <marquee style="width: 100%;background: #152437;" align="top" onmouseout="this.start();"
                            onmouseover="this.stop();" scrollamount="1" scrolldelay="10" behavior="scroll"
                            direction="left" truespeed="truespeed">

                            <router-link
                                :to="{ name: 'readPost', params: { id: featured_post.id, slug: featured_post.slug } }"
                                v-for="(featured_post, index) in getlatestpost" :key="'marq' + index"> ◈ {{
                                    featured_post.title
                                }}</router-link>

                        </marquee>
                    </div>
                </div>
            </div>
        </div>



        <div class="body-items" style="background: #f9f9f9">
            <div class="container d-none d-print">
                <img class="print-logo" style="max-width: 250px;"
                    src="https://cdn.dhakapost.com/media/common/dhaka-post-logo.svg" alt="dhakapost.com" />
            </div>

            <div class="container d-none d-lg-flex py-3 navbar-root" id="section-down"
                style="padding-top: 5px !important;">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <router-link class="brand-logo-top" title="Dhaka Post" to="/">
                        <img style="max-width: 300px;" :src="$asseturl + 'cropped-cropped-Alokitotetulia.png.png'"
                            alt="Dhaka Post" />
                    </router-link>

                    <!-- <div class="d-flex align-items-center social-media-icons">
                <p class="d-flex align-items-center">
                  <span class="d-flex align-items-center">
                     <svg class="mr-2" fill="black" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z" />
                     </svg>
                     <span> সোমবার, ০৯ জানুয়ারি ২০২৩</span>
                  </span>
               </p>
               </div> -->
                </div>
            </div>
            <nav class="navbar navbar-expand-lg sticky-top shadow-sm navigator-extra">
                <div class="container">
                    <button class="navbar-toggler collapsed m-margin-reducer-left-14" type="button"
                        data-toggle="collapse" data-target="#main-nav-1" aria-controls="main-nav-1"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                        <span class="sr-only">DP</span>
                    </button>
                    <div class="navbar-brand align-items-center d-flex d-lg-none mr-0">
                        <a title="Dhaka Post" href="/">
                            <img src="https://cdn.dhakapost.com/media/common/dhaka-post-logo.svg" alt="Dhaka Post"
                                width="1345" height="192" />
                        </a>
                    </div>
                    <button type="button" class="btn btn-link d-flex d-lg-none" data-target="slide-down-m"
                        aria-label="Search" style="margin-right: -14px;">
                        <i class="fa fa-search" style="font-size: 20px;"></i></button>
                    <div class="navbar-collapse collapse" id="main-nav-1">
                        <div style="width: 99%">
                            <ul class="navbar-nav m-auto d-none d-lg-flex d-menu-items justify-content-center">
                                <li class="nav-item">
                                    <router-link title="" to="/" class="nav-link">প্রচ্ছদ</router-link>
                                </li>



                                <!-- <li v-for="(menu,index) in menus" :key="index" class="nav-item header_li">
                            <a class="nav-link d-block position-relative" :href="'/category/'+menu.slug">{{ menu.name }}</a>
                            <ul class="header_child_list header_hover_bottom_menu" style="display: none;" v-if="menu.subCategoies">
                            <li :class="[index2==0 ? 'first_sub_cat' : '']"  v-for="(Submenu,index2) in menu.subCategoies" :key="index2" >
                                <a :href="'/category/'+menu.slug+'/'+Submenu.slug">{{ Submenu.name }}</a></li>
                            </ul>
                        </li> -->


                                <li v-for="(menu, index) in menus" :key="index" class="nav-item"
                                    :class="[menu.subCategoies.length ? ' dropdown dropdown-toggle' : '']"
                                    style="display: flex; color: #FFF; align-items: center;">
                                    <router-link title="" :to="{ name: 'categoryPost', params: { cat: menu.slug } }"
                                        class="nav-link">{{ menu.name }}</router-link>

                                    <div class="dropdown-menu single-dropdown s-dr-menu m-0"
                                        v-for="(Submenu, index2) in menu.subCategoies" :key="index2"
                                        aria-labelledby="navbarDropdown">
                                        <router-link class="dropdown-item"
                                            :to="{ name: 'categoryPost2', params: { cat: menu.slug, cat2: Submenu.slug } }"
                                            style="padding: 5px 0;">{{ Submenu.name }}</router-link>
                                    </div>

                                </li>




                                <!-- <li class="nav-item position-static d-flex">
                                    <button type="button" class="btn btn-link" data-target="slide-down"
                                        aria-label="Search"><i class="fa fa-search"></i>
                                    </button>
                                </li> -->
                            </ul>
                        </div>
                        <div class="d-flex d-lg-none"
                            style="position: fixed; padding: 1rem; background: #f5f5f5; width: 100%; color: #FFF; justify-content:space-between">
                            <button class="navbar-toggler m-margin-reducer-left-14 text-white" type="button"
                                data-toggle="collapse" data-target="#main-nav-1" aria-controls="main-nav-1"
                                aria-expanded="true" aria-label="Toggle navigation" style=" ">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                                <span class="sr-only">DP</span>
                            </button>
                        </div>
                    </div>
                </div>
                <form class="search-wrapper needs-validation" style="display: none;" data-target="slide-content"
                    action="https://www.dhakapost.com/search" method="get">
                    <div class="container m-pl-0 m-pr-0">
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" autocomplete="off"
                                    placeholder="অনুসন্ধান করুন" required />
                                <div class="input-group-append search-action">
                                    <button type="submit" class="btn btn-dark"><i style="color: white !important;"
                                            class="fa fa-search"></i></button>
                                    <button type="button" class="btn btn-light m-margin-reducer-right-14"
                                        data-target="slide-up">
                                        <i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </nav>
            <!-- <div style="position:relative">

            <span class="Headtitle">সর্বশেষঃ</span>
            <marquee style="
                    background: #FF0000;
                    color: white;
                    padding: 3px 0;
                    font-size: 15px;
                    ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos rem illo provident magni dolores possimus, modi doloribus optio distinctio quod tempore perferendis, accusantium adipisci ducimus facere. Nostrum placeat quod in.</marquee>

</div> -->



            <slot></slot>

        </div>

<footer style="    display: block;
    background: #62626263;
    width: 100%;
    overflow: hidden;
    color: #161616 !important;">
        <div class="container">
        <div class="copyright width100">
            <div class="padding">
                <div class="width33 copy left">
                    <div class="padding">
                        <div class="width100"><router-link to="/">
                            <img width="50%" :src="$asseturl + 'cropped-cropped-Alokitotetulia.png.png'" ></router-link></div>
                        <div class="width100"> alokitotetulia.com © ২০২৩ | নিবন্ধন নং- .... | <br> - Developed by | <a
                                href="https://www.softwebsys.com" target="_blank" rel="noopener">Softweb System solution</a> <br>
                        </div>
                    </div>
                </div>
                <div class="width66 right">
                    <div class="padding">
                        <div>
                            <p> <strong>এডিটর ইন চিফ: এস.কে. দোয়েল</strong><br data-x="">তেতুলিয়া,পঞ্চগড়<br data-x=""><strong>ই-মেইলঃ</strong> **********<br
                                    data-x=""><strong>ফোনঃ</strong> ************</p>
                        </div>
                        <div>
                            <p></p>
                            <p data-x=""><strong>নিউজ রুমঃ</strong> ***********<br data-x=""><strong>মফস্বল
                                    ডেস্কঃ</strong> ***********<br data-x=""><strong>বার্তা প্রধানঃ</strong>
                                ***********<br data-x=""><strong>মার্কেটিং ও সেলসঃ</strong> ***********<br
                                    data-x=""><strong>ইমেইলঃ</strong> **************</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="links"> <a href="https://www.bd24live.com/bangla/about-us">About Us</a> <a
                    href="https://www.bd24live.com/bangla/terms-conditions">Terms &amp; Conditions</a> <a
                    href="https://www.bd24live.com/bangla/privacy-policy">Privacy Policy</a> <a
                    href="https://www.bd24live.com/bangla/advertise">Advertise with us </a> <a
                    href="https://www.bd24live.com/bangla/contact-us">Contact Us</a> <a
                    href="https://www.bd24live.com/bangla/cookies">Cookies</a> <a
                    href="https://www.bd24live.com/bangla/archive">Archive</a></div> -->
        </div>
    </div>
</footer>
<div class="jFooterBottom">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-6">
                    <p style="    display: flex;
    align-items: center;
    color: white;
    font-size: 13px;">
                        <i class="fa fa-copyright"></i> &nbsp; ২০২৩ সর্বস্বত্ব সংরক্ষিত  &nbsp; <a href="https://alokitotetulia.com" class="text-white">আলোকিত তেতুলিয়া</a>
                    </p>
                </div>
                <div class="col-sm-6 text-right">
                    <ul>
                        <li><a href="#" title="Facebook" target="_blank" rel="nofollow noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter" target="_blank" rel="nofollow noopener"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#" title="Instagram" target="_blank" rel="nofollow noopener"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" title="Youtube" target="_blank" rel="nofollow noopener"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!--
        <footer data-nosnippet class="d-print-none" style="background: #006328; padding-bottom: 90px;">
         <div class="footer-top py-3 bg-section-two" style="border-top: 3px solid">
            <div class="container">
               <div class="footer-top-items footer-mv d-flex align-items-center justify-content-between">
                  <div class="footer-logo d-none d-lg-flex">
                     <router-link to="/">
                     <img style="max-width: 200px;" :src="$asseturl+'cropped-cropped-Alokitotetulia.png.png'" alt="Dhaka Post" />
                     </router-link>
                  </div>
                  <div class="editor">
                     <p>সম্পাদক: এস.কে. দোয়েল</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom pt-3" style="background: #006328">
            <div class="container text-white">
               <div class="footerNewLinks text-center">
                  <a href="#" class="text-white">গোপনীয়তার নীতি</a>
                  <a href="#" class="text-white">ব্যবহারের শর্তাবলি</a>
                  <a href="#" class="text-white">আমাদের সম্পর্কে</a>
                  <a href="#" class="text-white">আমরা</a>
                  <a href="#" class="text-white">যোগাযোগ</a>
                  <a href="#" class="text-white">আর্কাইভ</a>
                  <a href="#" class="text-white">বিজ্ঞাপন</a>
               </div>
               <div class="footerNewAddress text-center py-3">
                  <p class="text-white">তেঁতুলিয়া, পঞ্চগড়</p>
               </div>
            </div>
         </div>
      </footer> -->





    </div>
</template>
<script>
export default {
    props: ['user', 'latestpost'],
    async created() {

        // console.log(this.latestpost)
        this.$store.commit('setlatestpost', this.latestpost)

        this.getMainMenu();

    },

    data() {
        return {
            menus: {},
        }
    },
    methods: {
        async getMainMenu() {
            var res = await this.callApi('get', `/api/get/all/category`, []);
            this.menus = res.data
        },
    },
    mounted() {

    }
}
</script>
<style>
span.Headtitle {
    position: absolute;
    background: #001080;
    color: white;
    z-index: 99;
    padding: 2px 13px 2px 26px;
}

a.nav-link.router-link-exact-active.router-link-active {
    background: var(--brand-hover-color);
    border-bottom: 2px solid var(--brand-object-color);
}

.scroll-parent {
    position: relative;
}

.scroll .title {
    color: #fff;
    background: #b50301;
    float: left;
    font-size: 17px;
    height: 36px;
    line-height: 34px;
    margin: 0;
    padding-left: 8px;
    padding-right: 8px;
    position: absolute;
    z-index: 99;
    border-right: 10px solid #152437;
}

.scroll a {
    color: #fff;
    font-size: 17px;
    text-decoration: none;
    margin: 5px 0 5px 7px;
    display: inline-block;
}

.scroll a:hover {
    color: #F00;
}

.header_top_section {
    padding: 5px 0px;
    background: #FFF;
    box-shadow: 0px 5px 5px -5px #000;
}

.searchform input[type="text"] {
    border-radius: 4px 0px 0px 4px;
    height: 28px;
    background: #FFF;
    color: #363131;
    border-radius: 0;
    border: none;
}

button,
input,
select,
textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

.search_submit_button {
    background-color: #000;
    color: #FFF;
    border-radius: 0px 4px 5px 0px;
    border: none;
    height: 26px;
    padding: 0px;
    background-color: #9c9c9c;
    margin-top: 1px;
}

.header_top_section .social-media {
    margin-bottom: 0px;
    text-align: right;
}

.social-media li {
    display: inline-block;
}

.social-media li a,
.social-media li button {
    color: #000;
    border: none;
    background: none;
    padding: 0;
}

.header_top_section .social-media li a i,
.header_top_section .social-media li button i {
    width: 20px;
    height: 20px;
    border-radius: 0;
    line-height: 20px;
    font-size: 12px;
}

.social-media li a i,
.social-media li button i {
    width: 34px;
    height: 34px;
    border-radius: 100%;
    text-align: center;
    line-height: 34px;
    color: #fff;
}

.copyright .copy {
    font-size: 12px;
}.copyright .padding {
    padding: 10px;
    float: left;
}
.copyright .right .padding div:first-child {
    width: 50%;
    float: left;
    line-height: 1.7em;
    padding-left: 18px;
    border-left: 1px solid red;
}
.copyright .right .padding div:first-child {
    width: 50%;
    float: left;
    line-height: 1.7em;
}
.copyright .right .padding div:nth-child(2) {
    width: 40%;
    float: right;
    padding-left: 5%;
    border-left: 1px solid red;
    font-size: 17px;
    line-height: 1.8em;
}
.copyright .right .padding div:nth-child(2) {
    width: 40%;
    float: right;
    padding-left: 5%;
    border-left: 1px solid black;
    font-size: 17px;
    line-height: 1.8em;
}.width33 {
    width: 33%;
    float: left;
}
.width66 {
    width: 66%;
    float: left;
}
.jFooterBottom {
    width: 100%;
    background: #2f343f;
}
.jFooterBottom ul {
    list-style: none;
    margin: 0;
    padding: 0;
}.jFooterBottom ul li {
    display: inline-block;
}.jFooterBottom ul li a {
    color: #fff;
    margin: 10px 5px;
    display: block;
}
</style>
