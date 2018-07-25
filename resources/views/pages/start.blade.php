<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  </head>
  <body>
          <div class="container is-fluid">

              <!-- START NAVBAR -->
                <nav class="navbar is-transparent">
                  <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">
                      <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                    </a>
                    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>

                  <div id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-start">
                      <a class="navbar-item" href="{{ url('/home') }}">
                        Home
                      </a>
                      @if(Auth::check())
                      <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="/documentation/overview/start/">
                          Docs
                        </a>
                        <div class="navbar-dropdown is-boxed">
                          <a class="navbar-item" href="/documentation/overview/start/">
                            Overview
                          </a>
                          <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                            Modifiers
                          </a>
                          <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                            Columns
                          </a>
                          <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                            Layout
                          </a>
                          <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                            Form
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                            Elements
                          </a>
                          <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                            Components
                          </a>
                        </div>
                        @endif
                      </div>
                    </div>


                      

                      <!-- DROPDOWN -->
                      <div class="navbar-item has-dropdown is-hoverable">
                        @if(!Auth::check())
                          <a class="navbar-item" href="{{ route('login') }}"><span class="fas fa-sign-in-alt" style="margin-right: 5px;"></span>
                            Login
                          </a>
                          <a class="navbar-item" href="{{ route('register') }}"><span class="fas fa-user-plus" style="margin-right: 5px;"></span>
                            Register
                          </a>
                          @else

                        <a class="navbar-link" href="/documentation/overview/start/"><span class="fas fa-users-cog" style="margin-right: 5px;"></span>
                          Tue Knudsen
                        </a>
                        <div class="navbar-dropdown is-boxed">
                          <a class="navbar-item" href="/documentation/overview/start/"><span class="far fa-user" style="margin-right: 5px;"></span>
                             My Profile
                          </a>
                          <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/"><span class="fas fa-toolbox" style="margin-right: 5px;"></span>
                            Admin Panel
                          </a>
                          @endif
                          
                        </div>
                    
                    </div>
                  </div>
                </nav>

          </div>
          <!-- END NAVBAR -->


          <!-- START HERO -->
          <div class="container">
            <section class="hero is-light" style="margin-top: 20px;">
                <div class="hero-body">
                  <div class="container">
                    <h1 class="title">
                      Velkommen til Tutorials fra TkPro.dk
                    </h1>
                    <h2 class="subtitle">
                      Denne side er en forklaring og noteliste til de Turorials jeg skal bruge for at lave sider..
                    </h2>
                  </div>
                </div>
            </section>
          <!-- END HERO -->


          <!-- START LEFT NAVIGATION -->
          <div class="columns">
            <div class="column is-3" style="margin-top: 30px;">
              <div class="box">
                  <article class="media">
                      <div class="media-left">
                        
                      </div>
                      <div class="media-content">
                        <div class="content">
                          <p>
                            <strong><span class="far fa-object-group" style="margin-right: 5px;"></span>Kategorier:</strong>
                            
                            <ul style="list-style-type: none; margin-left: 0px;">
                              @foreach ($links as $link)
                              <li><span class="{{ $link -> icon }}" style="margin-right: {{ $link -> margin_right }};"></span><a href="{{ $link -> url }}">{{ $link -> name }}</a></li>
                              @endforeach
                            </ul>
                        </div>
                        <nav class="level is-mobile">
                          <div class="level-left">
                            
                          </div>
                        </nav>
                      </div>
                  </article>
            </div>
          </div>
          <!-- END LEFT NAVIGATION -->

          <!-- START CARD -->
          <div class="column is-9"  style="margin-top: 30px;">
              <div class="box">
                <article class="media">
                  <div class="media-left">
                    <h1 class="is-size-3"><span class="fab fa-youtube icon" style="margin-right: 5px;"></span><strong>Seneste Tutorials:</strong></h1>
              </div>      
          </div> 


          <div class="card">
            <div class="card-content">
              <nav class="level">
                <div class="level-left">
                  <div class="level-item">
                    <p class="subtitle is-7">
                      <strong>Auther:</strong> Tue Knudsen
                    </p>
                  </div>
                <div class="level-item">
              <div class="field has-addons">
                      
                      
            </div>
            </div>
          </div>

          <!-- Right side -->
          <div class="level-right">
            <p class="subtitle is-7"><strong>Published at:</strong> 21 okt 2018</p>
          </div>
        </nav>

            
            <p class="title is-6">
              “There are two hard things in computer science: cache invalidation, naming things, and off-by-one errors.”
            </p>
            <p class="subtitle is-7">
              Her er en længere forklaring til dette emne.
            </p>
            <textarea class="textarea" placeholder="e.g. Hello world"></textarea>
            
          </div>
          
          <footer class="card-footer">
            <p class="card-footer-item">
              <span>
                <a href="#" class="button is-info is-outlined"><span class="fab fa-readme" style="margin-right: 5px;"></span>Læs Indlæg</a>
                <a href="#" class="button is-warning is-outlined"><span class="fas fa-edit" style="margin-right: 5px;"></span>Rediger</a>
                <a href="#" class="button is-danger is-outlined"><span class="fas fa-trash-alt" style="margin-right: 5px;"></span>Slet</a>
              </span>
            </p>
            
          </footer>
        </div>     
              </div>


            </div>


    <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>TkPro.dk</strong> by <a href="https://jgthms.com">Tue Knudsen</a>. The source code is licensed
      <a href="http://tkpro.dk">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>



    <script type="text/javascript">document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});</script>
</html>