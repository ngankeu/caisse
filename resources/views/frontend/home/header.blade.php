   @php
   $setting = App\Models\SiteSetting::find(1);
   @endphp

   <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">


                            <li><i class="far fa-clock"></i>Du lundi au samedi de 9h00 à 18h00</li>



                                    <li><i class="far fa-phone"></i><a href="tel: ">+237 698323606</a></li>


                        </ul>
                    </div>
                    <div class="right-column pull-right">
    <ul class="social-links clearfix">



    </ul>

         @auth

         <div class="sign-box">
                <a href="{{ route('dashboard') }}"><i class="fas fa-user"></i>Tableau de bord</a>
               <a href="{{ route('user.logout') }}"><i class="fas fa-user"></i>Se déconnecter</a>
        </div> 

         @else 

         <div class="sign-box">
         <a href="{{ route('login') }}"><i class="fas fa-user"></i>Se connecter </a>
         <a href="{{ route('register') }}"><i class="fas fa-address-book"></i>S'enregistrer </a>
                        </div>

         @endauth               
                        


                    </div>
                </div>
            </div>
<!-- header-lower -->
<div class="header-lower">
<div class="outer-box">
<div class="main-box">
<div class="logo-box">

    @if($setting && $setting->logo)
        <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset($setting->logo) }}" alt=""></a></figure>
    @endif

</div>
<div class="menu-area clearfix">
    <!--Mobile Navigation Toggler-->
    <div class="mobile-nav-toggler">
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
    </div>
    <nav class="main-menu navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">

     <li><a href="{{ url('/') }}"><span>Accueil</span></a> </li>



             





</li> 


            </ul>
        </div>
    </nav>
</div>

</div>
</div>
</div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            @if($setting && $setting->logo)
                                <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset($setting->logo) }}" alt=""></a></figure>
                            @endif
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </header>