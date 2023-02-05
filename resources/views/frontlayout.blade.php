<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>আলোকিত তেঁতুলিয়া</title>
    <meta property="og:url" content="" />
    <link rel="shortcut icon" type="image" href="https://www.alokitotetulia.com/public/cropped-cropped-Alokitotetulia.png.png" />

<meta name="title" content="আলোকিত তেঁতুলিয়া" />
<meta name="description" content="আলোকিত তেঁতুলিয়া" />
<meta name="keywords" content="আলোকিত তেঁতুলিয়া" />
<meta name="author" content="আলোকিত তেঁতুলিয়া " />
<meta name="news_keywords" content="" />
<meta property="og:type" content="article" />
<meta property="og:title" content="আগামীতেও সফলভাবে নির্বাচনী দায়িত্ব পালন করবে পুলিশ" />
<meta property="og:description" content="আলোকিত তেঁতুলিয়া" />
<meta property="og:image" content="https://www.alokitotetulia.com/public/blogs/1674063022____70348.jpeg" />
<meta property="og:image:width" content="1200" />
<meta name="brand_name" content="আলোকিত তেঁতুলিয়া" />









    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/SolaimanLipi.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
<style>
    li.nav-item {
        padding: 0 6px !important;
        border-right: 1px solid white !important;
        margin: 0 !important;
    }


        </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div id="app">
        <component :is="$route.meta.layout || 'div'"  :latestpost="{{ $latestpost }}"  >
            <router-view />
          </component>

    </div>

    <script src="{{ asset('js/frontend.js?ver=1.0.180000') }}"></script>

<script>


if ("{{ Auth::user() }}") {

    if(!User.loggedIn()){
        axios.post('/logout').then(()=>{
            // window.location.href = '/'
        })
    }


}else{
    User.loggedOut()

}

</script>

</body>
</html>
