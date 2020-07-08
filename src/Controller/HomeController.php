<?php

    namespace App\Controller; //PERMET D'IDENTIFIER MA CLASSE

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //IMPORT DES NAMESPACES POUR LES ROUTES
    use Symfony\Component\Routing\Annotation\Route;


    class HomeController extends AbstractController{    //LA CLASS "HOMECONTROLLER" ETEND LA CLASS "ABSTRACTCONTROLLER" POUR BENEFICIER DE PLUS DE METHODES

        private $articles = [       //LA VARIABLE "$ARTICLES" EST UN ARRAY (MULTIDIMENSIONNEL AVEC 8 ELEMENTS) (propriete)
                                    //QUI SERA APPELLER PAR LA SUITE
            1 => [
                'title' => 'Article 1',
                'image' => 'https://photos.lci.fr/images/613/344/vincent-lagaf-l-aventure-robinson-53320f-0@1x.jpeg'
            ],
            2 => [
                'title' => 'Article 2',
                'image' => 'https://www.brain-magazine.fr/m/posts/53266/originals/big.jpg'
            ],
            3 => [
                'title' => 'Article 3',
                'image' => 'https://photos.tf1.fr/700/933/gregory-lemarchal-une-voix-d-ange-10-ans-nikos-aliagas-appelle-aux-dons-l-association-gregory-lemarchal-5ae101-0@1x.jpg'
            ],
            4 => [
                'title' => 'Article 4',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e3/Mimie_Mathy_Cannes.jpg'
            ],
            5 => [
                'title' => 'Article 5',
                'image' => 'https://gal.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fgal.2Fvar.2Fgal.2Fstorage.2Fimages.2Fmedia.2Fmultiupload_du_07_decembre_2013.2Fjean-pierre-foucault_leader.2F2307250-1-fre-FR.2Fjean-pierre-foucault_leader.2Ejpg/480x480/quality/80/jean-pierre-foucault-son-engagement-politique-fait-debat.jpg'
            ],
            6 => [
                'title' => 'Article 6',
                'image' => 'https://www.leparisien.fr/resizer/LjWaLhId-FIuOBc50RlkQWUfadY=/932x582/arc-anglerfish-eu-central-1-prod-leparisien.s3.amazonaws.com/public/ZXR5K7PB5YHAYDYZMWC5LAYUUI.jpg'
            ],
            7 => [
                'title' => 'Article 7',
                'image' => 'https://cdn-elle.ladmedia.fr/var/plain_site/storage/images/societe/news/apres-sa-blague-sur-les-violences-conjugales-tex-ne-presentera-plus-les-z-amours-3590966/85241129-1-fre-FR/Apres-sa-blague-sur-les-violences-conjugales-Tex-ne-presentera-plus-les-Z-amours.jpg'
            ],
            8 => [
                'title' => 'Article 8',
                'image' => 'https://www.merci-maman.eu/wp-content/uploads/2020/03/Jean-Luc-Reichmann-800x445.jpg'
            ]
        ];


        /**
         * @Route("/accueil", name="accueil")  //--> ANNOTATION
         */
        public function accueil(){  //--> METHODE

            $two_values = array_slice($this->articles, 0, 2); //VARIABLE POUR SELECTIONNER SEULEMENT DEUX ELEMENTS DE MON ARRAY,
                                                                          //LE "ARRAY_SLICE" DECOUPE MON ARRAY,
                                                                          //LE "THIS->ARTICLES" FAIT REFERENCE AU ARRAY PRECEDEMENT DECLARER

            return $this->render('accueil.html.twig', [  //--> RENVOI HTML/TWIG, EN UTILISANT "RENDER"

                'article' => $two_values   //--> VARIABLE A UTILISER DANS LE HTML/TWIG
            ]);
        }


        /**************************************************************/


        /**
         * @Route("/article", name="article")  //--> ANNOTATION
         */
        public function article(){  //--> METHODE

            return $this->render('article.html.twig', [  //--> RENVOI HTML/TWIG, EN UTILISANT "RENDER"

                'article' => $this->articles   //--> VARIABLE A UTILISER DANS LE HTML/TWIG, LE "THIS->ARTICLES" FAIT REFERENCE AU ARRAY PRECEDEMENT DECLARER
            ]);
        }
    }
