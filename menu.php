<!-- Hardcoded bootstrap menu, @url: http://bootstrapdesigntools.com/tools/bootstrap-menu-builder/## -->
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">

								<!-- home -->
                <li>
									<a href="<?php bloginfo('url'); ?>">
										<span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
										 Home</a>
                </li>


								<!-- EAAA -->
                <li class="dropdown"><a href="/products" class="dropdown-toggle" data-toggle="dropdown">
										<span class="glyphicon glyphicon-education" aria-hidden="true"></span> 
										EAAA / BAAA <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/category/MMD2/">MMD2</a></li>
                        <li><a href="http://paste.ubuntu.com/">Ubuntu Pastebin</a></li>
                        <li><a href="https://github.com/asathoor">Per's Github Repos</a></li>
                        <li><a href="http://jsfiddle.net/user/petj/fiddles/">Per's JsFiddles</a></li>
                    </ul>
                </li>

								<!-- About -->
                <li>
									<a href="<?php bloginfo('url'); ?>/about/">
										<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
										 About</a>
                </li>

								<!-- Xampp -->
                <li>
									<a href="<?php bloginfo('url'); ?>/1md14y1-intro-day-2-xampp/">
										<span class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></span> 
									 	Xampp Intro</a>
                </li>


								<!-- Links -->
                <li>
									<a href="<?php bloginfo('url'); ?>/links/">
										<span class="glyphicon glyphicon-link" aria-hidden="true"></span> 
									 	Links</a>
                </li>


								<!-- sitemap -->
                <li>
									<a href="<?php bloginfo('url'); ?>/sitemap/">
										<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 
										 Sitemap</a>
                </li>

								<!-- Contact -->
                <li>
									<a href="<?php bloginfo('url'); ?>/contact/">
										<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
										 Contact</a>
                </li>


            </ul><!-- ends nav -->
        </div>
    </div>
</div><!-- ends bootstrap menu -->
