<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>আলোকিত তেতুলিয়া</title>
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

    <script src="{{ asset('js/frontend.js?ver=1.0.2') }}"></script>

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
