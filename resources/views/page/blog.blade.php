@extends('index')
@section('title','Blog')
@section('content')
 
    <section class="uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                <div class="uk-text-center">
                    <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Blog</span></li>
                    </ul>
                    <h1 class="uk-margin-small-top uk-margin-remove-bottom">Blog</h1>
                </div>
                <div>
                    <div class="uk-grid-medium" uk-grid>
                        <section class="uk-width-1-1 uk-width-expand@m">
                            <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                <div><a href="article.html">
                                        <article
                                            class="uk-card uk-card-default uk-card-small uk-article uk-overflow-hidden uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                                            <div class="tm-ratio tm-ratio-16-9">
                                                <figure
                                                    class="tm-media-box uk-cover-container uk-margin-remove">
                                                    <img src="images/articles/macbook-photo.jpg"
                                                        alt="Everything You Need to Know About the MacBook Pro"
                                                        uk-cover="uk-cover" /></figure>
                                            </div>
                                            <div class="uk-card-body">
                                                <div class="uk-article-body">
                                                    <div class="uk-article-meta uk-margin-xsmall-bottom">
                                                        <time>May 21, 2018</time></div>
                                                    <div>
                                                        <h3 class="uk-margin-remove">Everything You Need to Know
                                                            About the MacBook Pro</h3>
                                                    </div>
                                                    <div class="uk-margin-small-top">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Proin sodales eget ipsum id aliquam. Nam
                                                            consectetur interdum nibh eget sodales. Cras
                                                            volutpat efficitur ornare.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </a></div>
                                <div><a href="article.html">
                                        <article
                                            class="uk-card uk-card-default uk-card-small uk-article uk-overflow-hidden uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                                            <div class="tm-ratio tm-ratio-16-9">
                                                <figure
                                                    class="tm-media-box uk-cover-container uk-margin-remove">
                                                    <img src="images/articles/macos.jpg"
                                                        alt="Apple introduces macOS Mojave"
                                                        uk-cover="uk-cover" /></figure>
                                            </div>
                                            <div class="uk-card-body">
                                                <div class="uk-article-body">
                                                    <div class="uk-article-meta uk-margin-xsmall-bottom">
                                                        <time>May 21, 2018</time></div>
                                                    <div>
                                                        <h3 class="uk-margin-remove">Apple introduces macOS
                                                            Mojave</h3>
                                                    </div>
                                                    <div class="uk-margin-small-top">
                                                        <p>Praesent consequat justo eu massa malesuada posuere.
                                                            Donec ultricies tincidunt nisl, sed euismod nulla
                                                            venenatis maximus. Maecenas sit amet semper tellus.
                                                            Pellentesque imperdiet finibus sapien, a consectetur
                                                            eros auctor a.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </a></div>
                            </div>
                        </section>
                        <aside class="uk-width-1-4 uk-visible@m tm-aside-column">
                            <section class="uk-card uk-card-default uk-card-small"
                                uk-sticky="offset: 90; bottom: true;">
                                <nav>
                                    <ul class="uk-nav uk-nav-default tm-nav">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li class="uk-active"><a href="blog.html">Blog</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="delivery.html">Delivery</a></li>
                                    </ul>
                                </nav>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
@endsection