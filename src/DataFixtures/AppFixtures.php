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
            [
                'title'       => 'Port Dakhla Atlantique',
                'category'    => 'maritime',
                'location'    => 'Dakhla, Maroc',
                'status'      => 'en-cours',
                'year'        => '2022–2025',
                'description' => 'Mégaprojet portuaire stratégique sur la façade atlantique, renforçant la position du Maroc comme hub régional.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037282/xfx0j3c1hd3cwxtdkx6r.jpg',
            ],
            [
                'title'       => 'Chantier Naval de Casablanca',
                'category'    => 'maritime',
                'location'    => 'Casablanca, Maroc',
                'status'      => 'en-cours',
                'year'        => '2021–2024',
                'description' => 'Construction du chantier naval de la Marine Royale, infrastructure militaro-industrielle de haute précision.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037348/tm5mniwwhdzoamuipbxd.jpg',
            ],
            [
                'title'       => 'Tanger Med II – Phase II',
                'category'    => 'maritime',
                'location'    => 'Tanger, Maroc',
                'status'      => 'en-cours',
                'year'        => '2020–2024',
                'description' => 'Extension du terminal à conteneurs TC2 du port Tanger Méditerranée II, l\'un des plus grands ports d\'Afrique.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037383/vlvf5sa2gwhmr0ugw2cq.jpg',
            ],
            [
                'title'       => 'Mazagan Beach & Golf Resort',
                'category'    => 'batiment',
                'location'    => 'El Jadida, Maroc',
                'status'      => 'realise',
                'year'        => '2008–2010',
                'description' => 'Complexe hôtelier et touristique de luxe 5 étoiles sur la côte atlantique marocaine.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037196/mmbz1keefuhti0h4voua.jpg',
            ],
            [
                'title'       => 'Port Tanger Ville',
                'category'    => 'maritime',
                'location'    => 'Tanger, Maroc',
                'status'      => 'realise',
                'year'        => '2012–2016',
                'description' => 'Réhabilitation et modernisation du port historique de Tanger, symbole de la transformation urbaine.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037183/ofekblio4w5fsq2rbni1.jpg',
            ],
            [
                'title'       => 'Tanger MED V',
                'category'    => 'maritime',
                'location'    => 'Tanger, Maroc',
                'status'      => 'realise',
                'year'        => '2016–2020',
                'description' => 'Extension du complexe portuaire Tanger Med, renforçant la capacité logistique du détroit de Gibraltar.',
                'image'       => 'https://res.cloudinary.com/aniboom-ma/image/upload/v1645037383/vlvf5sa2gwhmr0ugw2cq.jpg',
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
