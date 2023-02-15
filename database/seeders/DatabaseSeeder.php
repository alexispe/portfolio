<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(12)->create();

        Project::factory()->create([
            'title' => 'YouStock',
            'slug' => 'youstock',
            'excerpt' => 'YouStock propose le stockage de vos meubles et objets en toute sécurité. Vous pouvez demander l\'ajout ou le retrait d\'un objet en un clic.',
            'description' => 'YouStock propose le stockage de vos meubles et objets en toute sécurité. Vous pouvez demander l\'ajout ou le retrait d\'un objet en un clic.',
            'main_image' => 'storage/projects/youstock/youstock-thumb.png',
            'link' => 'https://www.youstock.com/fr-fr',
            'role' => 'Développeur Laravel',
            'type' => 'Site e-commerce',
            'technologies' => ["Laravel", "API Stripe", "API Checkout", "Design Patterns", "Vue.js"],
            'images' => ["storage/projects/bluto/bluto-homepage.png", "storage/projects/bluto/bluto-about.png", "storage/projects/bluto/bluto-profile.png"],
            'published_at' => '2022-10-20',
        ]);

        Project::factory()->create([
            'title' => 'Bluto',
            'slug' => 'bluto',
            'excerpt' => 'Bluto est une start-up Londonienne innovante et originale proposant un service de livraison de pains et de viennoiseries à domicile.',
            'description' => 'Bluto est une start-up Londonienne innovante et originale proposant un service de livraison de pains et de viennoiseries à domicile.',
            'main_image' => 'storage/projects/bluto/bluto-thumb.png',
            'link' => 'https://bluto.co.uk/',
            'role' => 'Développeur Laravel',
            'type' => 'Site e-commerce',
            'technologies' => ["Laravel", "Vue.js", "MySQL", "Docker", "GitHub Actions", "API OpenRouteService", "API Google Maps", "API Stripe", "API SendInBlue"],
            'images' => ["storage/projects/bluto/bluto-homepage.png", "storage/projects/bluto/bluto-about.png", "storage/projects/bluto/bluto-profile.png"],
            'published_at' => '2022-09-01',
        ]);

        Project::factory()->create([
            'title' => 'Busnel',
            'slug' => 'busnel',
            'excerpt' => 'Busnel est une distillerie Normande créée en 1820. Leur site e-commerce leur permet une mise en avant de leurs produits et une vente en ligne.',
            'description' => 'La Distillerie BUSNEL est la plus ancienne des grandes maisons de Calvados, emblématique du terroir normand.<br/><br/>La réalisation de ce site e-commerce renforce la présence de la marque sur le web. Il permet de mettre en avant les produits de la marque et de les vendre en ligne.',
            'main_image' => 'storage/projects/busnel/busnel-thumb.png',
            'link' => 'https://distillerie-busnel.fr/',
            'role' => 'Développeur Sylius',
            'type' => 'Site e-commerce',
            'technologies' => ["Symfony", "Sylius", "Docker", "SASS"],
            'images' => ["storage/projects/bluto/bluto-homepage.png", "storage/projects/bluto/bluto-about.png", "storage/projects/bluto/bluto-profile.png"],
            'published_at' => '2020-07-01',
        ]);

        Project::factory()->create([
            'title' => 'Elitis',
            'slug' => 'elitis',
            'excerpt' => 'Elitis propose la vente de tapisseries dans différentes matières. L\'entreprise propose des produits haut de gamme avec des visuels uniques créés par des artistes.',
            'description' => 'Elitis propose la vente de tapisseries dans différentes matières. L\'entreprise propose des produits haut de gamme avec des visuels uniques créés par des artistes.',
            'main_image' => 'storage/projects/elitis/elitis-thumb.png',
            'link' => 'https://elitis.fr/fr',
            'role' => 'Développeur Sylius',
            'type' => 'Site e-commerce',
            'technologies' => ["Symfony", "Sylius", "API OpenRouteService", "Docker", "Elasticsearch", "Ansible"],
            'images' => ["storage/projects/bluto/bluto-homepage.png", "storage/projects/bluto/bluto-about.png", "storage/projects/bluto/bluto-profile.png"],
            'published_at' => '2022-01-01',
        ]);

        Project::factory()->create([
            'title' => 'Promuseum',
            'slug' => 'promuseum',
            'excerpt' => 'Promuseum est le spécialiste du matériel à destination des musées, espaces et sites culturels.',
            'description' => 'Promuseum est le spécialiste du matériel à destination des musées, espaces et sites culturels.<br/><br/>Plus de 11 200 articles sont disponibles sur le site. En communication constante avec l\'ERP client, le site se met à jour automatiquement. Un véritable défi technique.',
            'main_image' => 'storage/projects/promuseum/promuseum-thumb.png',
            'link' => 'https://promuseum.eu/',
            'role' => 'Développeur Laravel',
            'type' => 'Site e-commerce',
            'technologies' => ["Laravel", "AWS DynamoDB", "AWS Bucket S3", "Docker"],
            'images' => ["storage/projects/bluto/bluto-homepage.png", "storage/projects/bluto/bluto-about.png", "storage/projects/bluto/bluto-profile.png"],
            'published_at' => '2020-01-01',
        ]);

        Project::factory()->create([
            'title' => 'Alexandra Boussagol',
            'slug' => 'aboussagol',
            'excerpt' => 'Alexandra Boussagol est une architecte d\'intérieur. Nous avons travaillé ensemble pour la réalisation de son site vitrine lui permettant de présenter ses travaux et ses projets.',
            'description' => 'Alexandra Boussagol est une architecte d\'intérieur. Nous avons travaillé ensemble pour la réalisation de son site vitrine lui permettant de présenter ses travaux et ses projets.',
            'main_image' => 'storage/projects/aboussagol/aboussagol-thumb.png',
            'link' => 'https://aboussagol.com/',
            'role' => 'Développeur',
            'type' => 'Site vitrine',
            'technologies' => ["Wordpress", "Bedrock", "Docker"],
            'images' => ["storage/projects/bluto/bluto-homepage.png", "storage/projects/bluto/bluto-about.png", "storage/projects/bluto/bluto-profile.png"],
            'published_at' => '2022-01-01',
        ]);
    }
}
