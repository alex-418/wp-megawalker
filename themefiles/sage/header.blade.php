<!-- Add the following to your header.blade.php, modify as needed  -->

<div class="container-fluid">
    <nav class="navbar navbar-light bg-faded rounded navbar-expand-md primary_navigation navbar-megamenu">
        <button class="navbar-toggler navbar-toggler-right p-2" type="button" data-toggle="collapse"
                data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="containerNavbar">
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu' => 'Primary Navigation',
            'menu_class' => 'nav navbar-nav mr-auto',
            'depth' => 3,
            'echo' => true,
            'fallback_cb' => '__return_empty_string',
            'walker' => $nav_walker ]) !!} <!-- $nav_walker comes the method you'll add in your App.php -->
            @endif
        </div>
    </nav>
</div>