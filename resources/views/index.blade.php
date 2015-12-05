<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nilo Lives Here</title>
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/uikit.almost-flat.min.css" />
        <link rel="stylesheet" href="css/mytheme.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/uikit.min.js"></script>
    </head>
    <body>
        @include('partials.navbar')

        <div id="th-cover" class="uk-cover-background uk-block">
            <div class="uk-container">
                <h1 class="uk-h1 uk-heading-large">Welcome to my place</h1>
            </div>
        </div> <!-- Welcome Cover -->

        <div class="uk-block uk-block-primary">
            <div class="uk-container">
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
            </div>
        </div><!-- Featured Projects -->


        <div class="uk-block uk-block-secondary">
            <div class="uk-container">
                <h2>About</h2>
                <div>
                </div>
            </div>
        </div><!-- About -->

        <div class="uk-block uk-block-primary">
            <div class="uk-container">
                <h2><a href="{{ route('posts.index') }}">Blog</a></h2>

                <div class="uk-grid border-red">
                    <div class="uk-width-small-1-2">
                        <div class="uk-article">
                            <h3 class="uk-article-title">Post 1</h3>
                            <p>Aliquam laoreet, lorem a dapibus semper, dolor arcu imperdiet nunc, a scelerisque ex est gravida nibh.</p>
                            <a href="{{ route('projects.show', ['id' => '1']) }}">more</a>
                        </div>
                    </div>
                    <div class="uk-width-small-1-2">
                        <div class="uk-article">
                            <h3 class="uk-article-title">Post 2</h3>
                            <p>Aliquam laoreet, lorem a dapibus semper, dolor arcu imperdiet nunc, a scelerisque ex est gravida nibh.</p>
                            <a href="{{ route('projects.show', ['id' => '1']) }}">more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- Featured Blog Posts -->

        <div id="contact" class="uk-block uk-block-secondary">
            <div class="uk-container">
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
            </div>
        </div> <!-- Contact -->

        <footer class="uk-block">
            <div class="uk-container">
                <a href="https://github.com/nballener">github</a> |
                <a href="">facebook</a>
            </div>
        </footer> <!-- Footer -->

    </body>
</html>
