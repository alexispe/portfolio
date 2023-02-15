<section class="bg-light">
    <div class="bg-dark rounded-4 mx-lg-4">
        <div class="container-fluid p-5">
            <div class="row py-5 my-5">
                <div class="col-12 col-lg-5 text-center">
                    <h2 class="text-white fw-bold display-4">Derniers articles</h2>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-7">
                            <p class="lead my-5 text-white">
                                Découvrez mes derniers articles sur le développement web.
                            </p>
                        </div>
                    </div>
                    <a href="{{ route('posts.index') }}" class="">Voir tous les articles</a>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <x-post.tile
                                image="https://picsum.photos/300/200?random=1"
                                title="Sylius vs Prestashop : que choisir pour votre boutique en ligne ?"
                            ></x-post.tile>
                        </div>
                        <div class="col">
                            <x-post.tile
                                image="https://picsum.photos/300/200?random=2"
                                title="Sylius vs Prestashop : que choisir pour votre boutique en ligne ?"
                            ></x-post.tile>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
