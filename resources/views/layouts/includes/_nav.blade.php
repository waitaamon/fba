<a href="./" class="logo" style="border-bottom: 1px solid #FFFFFF"><img src="/img/FBA%20COMPANY%20LOGO.png" alt="" width="60%"></a>
<a href="#menu" >
    <div class="nav-trigger" id="nav-trigger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</a>
<div class="menu">
    <div class="menu-container">
        <ul class="menu-list">
            <li class="dropdown"><a class="page-scroll" href="{{ route('home') }}">Home</a></li>
            <li class="dropdown"><a class="page-scroll" href="{{ URL::to('aboutUs') }}">About</a></li>
            <li class="dropdown"><a class="page-scroll" href="{{ URL::to('services') }}">Services</a></li>
            <li class="dropdown"><a class="page-scroll" href="{{ URL::to('contact-us') }}">Contact</a></li>
        </ul>
        <div class="menu-social">
            <ul>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-google-outline"></i></a></li>
                <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<nav id="main-nav">
    <a href="{{ route('home') }}">HOME</a>
    <a href="{{ URL::to('about-us') }}">About US</a>
    <a href="{{ URL::to('services') }}">Our Services</a>
    <a href="{{ URL::to('contact-us') }}">Contact us</a>
</nav>


