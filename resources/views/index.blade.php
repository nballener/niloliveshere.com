<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nilo Lives Here</title>
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/uikit.almost-flat.min.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/uikit.min.js"></script>
    </head>
    <body>
        <nav class="uk-navbar uk-text-center">
            <ul class="uk-navbar-nav uk-hidden-small">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <a href="#hidden-nav" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        </nav>
        <div id="hidden-nav" class="uk-offcanvas">
            <div class="uk-offcanvas-bar"></div>
        </div>

        <div>
            <h1>Welcome to my place</h1>
        </div> <!-- Welcome Cover -->

        <div>
            <h2><a href="{{ route('projects.index') }}">Projects</a></h2>
            <div>
                <h3>maryballener.com</h3>
                <div>
                    maryballener.com is a client landing page built using the
                    <a href="https://www.laravel.com">Laravel</a> framework,
                    styling with <a href="https://getbootstrap.com/">Bootstrap</a>
                    and the <a href="http://startbootstrap.com/template-overviews/agency/">Agency</a>
                    template from <a href="http://startbootstrap.com/">Startbootstrap</a>
                </div>
            </div>
            <div>
                <h3>Shopping Buddy</h3>
                <div>
                </div>
            </div>
        </div> <!-- Featured Projects -->
        <div>
            <h2>About</h2>
            <div>
            </div>
        </div> <!-- About -->
        <div>
            <h2><a href="{{ route('posts.index') }}">Blog</a></h2>
            <div>
                <h3>Post 1</h3>
                <div>blurb</div>
                <a href="{{ route('projects.show', ['id' => '1']) }}">more</a>
            </div>
        </div> <!-- Featured Blog Posts -->

        <div>
            <h2>Contact</h2>
            <div>
                <form>
                    <label>
                        <input placeholder="Name" type="text" />
                    </label>
                    <label>
                        <input placeholder="Email" type="email" />
                    </label>
                    <label>
                        <input placeholder="Subject" type="subject" />
                    </label>
                    <label>
                        <textarea>Message</textarea>
                    </label>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div> <!-- Contact -->

        <footer>
            <a href="https://github.com/nballener">github</a>
            <a href="">facebook</a>
        </footer> <!-- Footer -->

    </body>
</html>
