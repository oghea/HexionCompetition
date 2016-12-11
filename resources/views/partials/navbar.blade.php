<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand mobile" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li class="{{ str_contains(\Route::current()->getName(),'about.') ? 'active' : '' }}"><a href="{{url('/about')}}">ABOUT</a></li>
                <li class="{{ str_contains(\Route::current()->getName(),'kompetisi.') ? 'active' : '' }}"><a href="{{url('/kompetisi')}}">COMPETITION</a></li>
                <li class="{{ str_contains(\Route::current()->getName(),'koleksi.') ? 'active' : '' }}"><a href="{{url('/koleksi')}}">COLLECTION</a></li>
                <li class="{{ str_contains(\Route::current()->getName(),'publikasi.') ? 'active' : '' }}"><a href="{{url('/publikasi')}}">PUBLICATION</a></li>
                <li class="{{ str_contains(\Route::current()->getName(),'visit.') ? 'active' : '' }}"><a href="{{url('/visit')}}">VISIT</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>