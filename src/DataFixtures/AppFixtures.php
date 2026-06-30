<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $projects = [
            // EN COURS
            [
                'title'       => 'Port Dakhla Atlantique',
                'category'    => 'maritime',
                'location'    => 'Dakhla, Maroc',
                'status'      => 'en-cours',
                'year'        => '2021–2028',
                'description' => 'Mégaprojet portuaire stratégique en eau profonde sur la façade atlantique, réalisé par le consortium SGTM-SOMAGEC pour 12,4 milliards de dirhams. Ce port fera du Maroc un hub logistique africain de premier plan.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037282/xfx0j3c1hd3cwxtdkx6r.jpg',
            ],
            [
                'title'       => 'Nouveau Chantier Naval de Casablanca',
                'category'    => 'maritime',
                'location'    => 'Casablanca, Maroc',
                'status'      => 'en-cours',
                'year'        => '2021–2024',
                'description' => 'Construction du nouveau chantier naval de Casablanca pour l\'Agence Nationale des Ports (ANP). Infrastructure industrielle et maritime de haute précision destinée à la réparation et la construction navale.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037348/tm5mniwwhdzoamuipbxd.jpg',
            ],
            [
                'title'       => 'Tanger Med II – Quai TC2',
                'category'    => 'maritime',
                'location'    => 'Tanger, Maroc',
                'status'      => 'en-cours',
                'year'        => '2020–2024',
                'description' => 'Construction du quai à conteneurs A-18 MZH du port Tanger Méditerranée II et remblais hydrauliques et terrestres. Extension du terminal TC2, l\'un des plus grands ports d\'Afrique.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037383/vlvf5sa2gwhmr0ugw2cq.jpg',
            ],
            [
                'title'       => 'Extension Port Tanger PPR',
                'category'    => 'maritime',
                'location'    => 'Tanger, Maroc',
                'status'      => 'en-cours',
                'year'        => '2024–2026',
                'description' => 'Extension du terminal passagers et roulier (PPR) de Tanger Med pour accroître la capacité d\'accueil des camions et passagers. Marché de 5,5 milliards de dirhams attribué à SOMAGEC en 2024.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037183/ofekblio4w5fsq2rbni1.jpg',
            ],
            [
                'title'       => 'Barrage Tamri',
                'category'    => 'hydraulique',
                'location'    => 'Agadir, Maroc',
                'status'      => 'en-cours',
                'year'        => '2022–2026',
                'description' => 'Construction du barrage Tamri dans la province d\'Agadir avec une capacité de 204 millions de m³. Ouvrage hydraulique majeur contribuant à la sécurité hydrique de la région Souss-Massa.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037216/ikqkh2sxixbh7buemiba.jpg',
            ],
            [
                'title'       => 'Rehaussement Barrage Mokhtar Soussi',
                'category'    => 'hydraulique',
                'location'    => 'Taroudant, Maroc',
                'status'      => 'en-cours',
                'year'        => '2023–2026',
                'description' => 'Rehaussement du barrage Mokhtar Soussi portant sa hauteur de 52 m à 100 m pour augmenter la capacité de stockage hydrique dans le contexte du stress hydrique régional.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037216/ikqkh2sxixbh7buemiba.jpg',
            ],
            // RÉALISÉS
            [
                'title'       => 'Tanger MED V',
                'category'    => 'maritime',
                'location'    => 'Tanger, Maroc',
                'status'      => 'realise',
                'year'        => '2016–2020',
                'description' => 'Extension du complexe portuaire Tanger Med, renforçant la capacité logistique du détroit de Gibraltar. Construction de nouvelles infrastructures portuaires de classe mondiale.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037383/vlvf5sa2gwhmr0ugw2cq.jpg',
            ],
            [
                'title'       => 'Port Tanger Ville',
                'category'    => 'maritime',
                'location'    => 'Tanger, Maroc',
                'status'      => 'realise',
                'year'        => '2012–2016',
                'description' => 'Réhabilitation et modernisation du port historique de Tanger dans le cadre du projet de reconversion urbaine. Aménagement des quais et rénovation des infrastructures portuaires.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037183/ofekblio4w5fsq2rbni1.jpg',
            ],
            [
                'title'       => 'Mazagan Beach & Golf Resort',
                'category'    => 'batiment',
                'location'    => 'El Jadida, Maroc',
                'status'      => 'realise',
                'year'        => '2008–2010',
                'description' => 'Construction du complexe hôtelier et touristique de luxe 5 étoiles Mazagan sur la côte atlantique marocaine : casino, hôtels, villas et équipements sportifs.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037196/mmbz1keefuhti0h4voua.jpg',
            ],
            [
                'title'       => 'Marina de Casablanca',
                'category'    => 'maritime',
                'location'    => 'Casablanca, Maroc',
                'status'      => 'realise',
                'year'        => '2004–2010',
                'description' => 'Construction de la Marina de Casablanca, aménagement nautique et touristique emblématique sur la corniche de la capitale économique. Travaux de génie maritime et aménagement des pontons.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037282/xfx0j3c1hd3cwxtdkx6r.jpg',
            ],
            [
                'title'       => 'Aménagement Lagune de Marchica',
                'category'    => 'maritime',
                'location'    => 'Nador, Maroc',
                'status'      => 'realise',
                'year'        => '2011–2017',
                'description' => 'Projet d\'aménagement écotouristique de la lagune de Marchica à Nador. Travaux de génie maritime pour la protection et la valorisation de ce site naturel classé.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037348/tm5mniwwhdzoamuipbxd.jpg',
            ],
            [
                'title'       => 'Port Militaire de Ksar Sghir',
                'category'    => 'maritime',
                'location'    => 'Ksar Sghir, Maroc',
                'status'      => 'realise',
                'year'        => '2005–2008',
                'description' => 'Construction du port militaire de Ksar Sghir pour la Marine Royale Marocaine. Infrastructures portuaires sécurisées : quais, jetées et installations techniques spécialisées.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037183/ofekblio4w5fsq2rbni1.jpg',
            ],
            [
                'title'       => 'Émissaire en Mer – Rabat',
                'category'    => 'maritime',
                'location'    => 'Rabat, Maroc',
                'status'      => 'realise',
                'year'        => '2009',
                'description' => 'Construction de l\'émissaire en mer de Rabat pour le rejet des eaux usées traitées en haute mer. Travaux sous-marins spécialisés incluant pose de conduites en mer et ancrage.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037216/ikqkh2sxixbh7buemiba.jpg',
            ],
            [
                'title'       => 'Émissaire en Mer Mzar – Agadir',
                'category'    => 'maritime',
                'location'    => 'Agadir, Maroc',
                'status'      => 'realise',
                'year'        => '2004',
                'description' => 'Construction de l\'émissaire sous-marin de Mzar au sud d\'Agadir permettant le rejet en profondeur des eaux usées traitées. Ouvrage pionnier dans l\'expertise sous-marine de SOMAGEC.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037216/ikqkh2sxixbh7buemiba.jpg',
            ],
            [
                'title'       => 'Parc Éolien de Tarfaya',
                'category'    => 'genie-civil',
                'location'    => 'Tarfaya, Maroc',
                'status'      => 'realise',
                'year'        => '2013–2015',
                'description' => 'Travaux de génie civil du parc éolien de Tarfaya, l\'un des plus grands parcs éoliens d\'Afrique avec une capacité de 300 MW. Fondations massives et infrastructures routières d\'accès.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037228/wbagtw49hx3mwxotlwir.jpg',
            ],
            [
                'title'       => 'Port de Malabo',
                'category'    => 'maritime',
                'location'    => 'Malabo, Guinée Équatoriale',
                'status'      => 'realise',
                'year'        => '2006–2012',
                'description' => 'Construction du port en eau profonde de Malabo par la filiale internationale SOMAGEC GE. Infrastructure portuaire de premier plan contribuant au développement économique de la Guinée Équatoriale.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037282/xfx0j3c1hd3cwxtdkx6r.jpg',
            ],
            [
                'title'       => 'Port de Kogo',
                'category'    => 'maritime',
                'location'    => 'Kogo, Guinée Équatoriale',
                'status'      => 'realise',
                'year'        => '2008–2014',
                'description' => 'Construction du port de Kogo en Guinée Équatoriale par SOMAGEC GE. Aménagement d\'un port polyvalent avec quais de commerce, digue de protection et équipements de manutention.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037348/tm5mniwwhdzoamuipbxd.jpg',
            ],
        ];

        foreach ($projects as $data) {
            $project = (new Project())
                ->setTitle($data['title'])
                ->setCategory($data['category'])
                ->setLocation($data['location'])
                ->setStatus($data['status'])
                ->setYear($data['year'])
                ->setDescription($data['description'])
                ->setImage($data['image']);

            $manager->persist($project);
        }

        $manager->flush();
    }
}
