<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Des préoccupations ?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Site centre, INP-HB
                                    Yamoussoukro, Côte d'Ivoire</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+225 07 47
                                        26 05 05</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">siriky.kone@inphb.ci</span></a></li>
                        </ul>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="https://twitter.com/inphbpolytech"><span
                                    class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/inphb.polytech"><span
                                    class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/inphb/?hl=fr"><span
                                    class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Liens</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>Accueil</a></li>
                        <li><a href="{{ route('personnel') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>Personnel</a></li>
                        <li><a href="{{ route('portfolio') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>Portfolio</a></li>
                        <li><a href="{{ route('services') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                        <li><a href="{{ route('blog') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Blog</a>
                        </li>
                        <li><a href="{{ route('contacts') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Actualités récentes</h2>
                    <!-- Articles récents -->
                    @foreach ($blog_articles as $article)
                    <div class="block-21 mb-4 d-flex">
                        <a href="{{ url('/blog-details?id=' . $article->id ) }}" class="blog-img mr-4"
                            style='background-image: url("{{ asset($article->image_article) }}");'></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ url('/blog-details?id=' . $article->id ) }}">{{
                                    $article->titre_article }}</a></h3>
                            <div class="meta">
                                <div><span class="icon-calendar"></span>
                                    {{ date('d M Y', strtotime($article->date_publication)) }}</div>
                                <div><span class="icon-person"></span> Admin</div>
                                <div><span class="icon-chat"></span> 19</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Restez informé !</h2>
                    <form action="{{ route('newsletter.store') }}" class="subscribe-form" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control mb-2 text-center"
                                placeholder="Entrez votre Email" required>
                            <input type="submit" value="S'abonner" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                {{-- <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p> --}}
            </div>
        </div>
    </div>
</footer>
