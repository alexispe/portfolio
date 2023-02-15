<section>
    <div class="container">
        <div class="row my-5">
            <div class="col-3">
                <ul class="d-flex flex-column navbar-aside list-unstyled">
                    <!-- <div class="navbar-aside-line"></div> -->
                    <li>
                        <a href="#sylius" class="text-black text-decoration-none">La solution e-commerce</a>
                    </li>
                    <li>
                        <a href="#sylius-une-technologie-de-pointe" class="text-black text-decoration-none">Une technologie de pointe</a>
                    </li>
                    <li>
                        <a href="#sylius-developpement-de-theme" class="text-black text-decoration-none">Développement de thème</a>
                    </li>
                    <li>
                        <a href="#sylius-developpement-de-plugin" class="text-black text-decoration-none">Développement de plugin</a>
                    </li>
                    <li>
                        <a href="#sylius-elitis" class="text-black text-decoration-none">Cas client : Elitis</a>
                    </li>
                    <li>
                        <a href="#sylius-busnel" class="text-black text-decoration-none">Cas client : Busnel</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h2 id="sylius" class="fw-semi-bold display-5 mb-4">Sylius. <span class="text-black-50">La solution e-commerce</span></h2>
                <p class="lead">
                    Sylius est une plateforme e-commerce en pleine essor. Faisant parti du top 3 des outils e-commerce PHP, la croissance de Sylius bat tous les records. Cette plateforme e-commerce évolutive est développée par et pour les développeurs de la communauté PHP. Basé sur Symfony, Sylius est un socle solide pour le développement de votre site e-commerce.
                </p>
                <p class="lead">
                    Sylius répond aux projets e-commerce B2B et B2C très spécifiques. C’est la solution optimale pour les projets qui n’entrent pas dans des cases pré-définies et qui ont des problématiques métier spécifiques. Les possibilités de personnalisation sont vastes.
                </p>

                <div class="d-flex flex-row my-5">
                    <div class="me-5">
                        <img src="{{ asset('storage/icons/trophy.svg') }}" alt="" style="width: 59px">
                    </div>
                    <div>
                        <h3 class="fw-semi-bold mb-3">Haut standard de qualité</h3>
                        <p class="lead">
                            Il est crucial d'envisager le commerce électronique à moyenne et longue échelle, et pas seulement d'une année à l'autre. Une chose que Sylius a rendu possible est la mise en œuvre rapide des meilleurs processus. Sylius offre l'évolutivité dont vous avez besoin pour respecter les normes de qualité les plus strictes.
                        </p>
                    </div>
                </div>

                <div class="d-flex flex-row my-5">
                    <div class="me-5">
                        <img src="{{ asset('storage/icons/server.rack.svg') }}" alt="" style="width: 59px">
                    </div>
                    <div>
                        <h3 class="fw-semi-bold mb-3">Facile à héberger</h3>
                        <p class="lead">
                            Sylius vous aide à démarrer votre entreprise et à la faire grandir avec efficacité. Il fonctionne bien avec un VPS standard, mais peut être utilisé avec Docker et Kubernetes sur le cloud pour devenir une pile d'applications véritablement évolutive avec un coût d'exploitation optimisé.
                        </p>
                    </div>
                </div>

                <div class="d-flex flex-row my-5">
                    <div class="me-5">
                        <img src="{{ asset('storage/icons/lizard.svg') }}" alt="" style="width: 59px">
                    </div>
                    <div>
                        <h3 class="fw-semi-bold mb-3">Testé et Testable</h3>
                        <p class="lead">
                            Identifiez et corrigez les problèmes avant qu'ils ne deviennent des problèmes majeurs. Sylius est un leader innovant dans les tests automatisés et les intègre dans votre projet. Le "Behavior Driven Development" permet le développement de logiciels Agiles, qui encouragent activement la collaboration entre développeurs, la recherche d'une valeur ajoutée métier au-delà du pur plaisir de coder.
                        </p>
                    </div>
                </div>

                <h2 id="sylius-une-technologie-de-pointe" class="fw-semi-bold display-5 mb-4 mt-5">Une technologie de pointe</h2>
                <p class="lead mb-4">
                    Sylius permet une personnalisation à l’extreme car c’est un outil nécessitant obligatoirement
                    l’intervention d’un développeur. La plateforme e-commerce est basée sur le célèbre framework
                    Symfony. Et hérite donc de toutes les optimisations et bonnes pratiques de ce framework.
                </p>
                <p class="lead mb-4">
                    Sylius est connu pour être très bien conçu techniquement et laisse peu de place à la dette technique
                    en respectant les standards les plus modernes. Grâce à Sylius, vous allez proposer à vos clients une
                    expérience utilisateur unique. En choisissant une bonne équipe de développement, vous aurez une
                    solution durable.
                </p>

                <h2 id="sylius-developpement-de-theme" class="fw-semi-bold display-5 mb-4 mt-5">Développement de thème</h2>
                <p class="lead mb-4">
                    Avec Sylius, vous pouvez développer votre thème sur mesure. La solution étant hautement personnalisable, vous pouvez absolument tout moduler en fonction de vos besoins.
                </p>
                <p class="lead mb-4">
                    Je développe votre thème Sylius à partir de vos maquettes. En partant sur un développement CSS from scratch, ou bien partir depuis le framework CSS de votre choix. Je peut par exemple développer votre thème en partant sur une base Bootstrap pour Sylius.
                </p>

                <h2 id="sylius-developpement-de-plugin" class="fw-semi-bold display-5 mb-4 mt-5">Développement de plugin</h2>
                <p class="lead mb-4">
                    Sylius étant une plateforme e-commerce très modulaire.
                    Vous pouvez ajouter des fonctionnalités à votre plateforme en installant des plugins.
                    Je développe des plugins pour Sylius. Vous pouvez par exemple ajouter une fonctionnalité de
                    paiement en ligne, ou bien un module de blog, de SEO, un CMS...
                </p>

                @include('partials.devweb.sylius.elitis')
                @include('partials.devweb.sylius.busnel')
            </div>
        </div>
    </div>
</section>
