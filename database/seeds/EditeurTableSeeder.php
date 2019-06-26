<?php

use Illuminate\Database\Seeder;

class EditeurTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('editeur')->delete();
        
        \DB::table('editeur')->insert(array (
            0 => 
            array (
                'EditeurNum' => 1,
                'EditeurNom' => 'Albert René',
                'EditeurCreation' => 1979,
                'EditeurAdresse' => '26 avenue victor hugo',
                'EditeurCP' => '75116',
                'EditeurVille' => 'Paris',
                'EditeurTel' => '0145004141',
                'EditeurFax' => '0140679512',
                'EditeurMail' => '',
            ),
            1 => 
            array (
                'EditeurNum' => 2,
                'EditeurNom' => 'Alpen publishers',
                'EditeurCreation' => 1881,
                'EditeurAdresse' => '',
                'EditeurCP' => '',
                'EditeurVille' => '',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            2 => 
            array (
                'EditeurNum' => 3,
                'EditeurNom' => 'Appro éditions',
                'EditeurCreation' => 0,
                'EditeurAdresse' => '',
                'EditeurCP' => '',
                'EditeurVille' => 'Lausanne',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            3 => 
            array (
                'EditeurNum' => 4,
                'EditeurNom' => 'Bamboo',
                'EditeurCreation' => 1997,
                'EditeurAdresse' => '116 rue des jonchères',
                'EditeurCP' => '71012',
                'EditeurVille' => 'Charnay les macon',
                'EditeurTel' => '0385349909',
                'EditeurFax' => '0385344755',
                'EditeurMail' => 'bamboo-diffusion@bamboodif.fr',
            ),
            4 => 
            array (
                'EditeurNum' => 5,
                'EditeurNom' => 'Blake et Mortimer éditions',
                'EditeurCreation' => 2008,
                'EditeurAdresse' => '15-27 rue Moussorgski',
                'EditeurCP' => '75018',
                'EditeurVille' => 'Paris',
                'EditeurTel' => '0153263232',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            5 => 
            array (
                'EditeurNum' => 6,
                'EditeurNom' => 'Dargaud',
                'EditeurCreation' => 1936,
                'EditeurAdresse' => '15 rue moussorgski',
                'EditeurCP' => '75018',
                'EditeurVille' => 'Paris',
                'EditeurTel' => '0153263232',
                'EditeurFax' => '0153263200',
                'EditeurMail' => 'Boutique.Dargaud@mdsfrance.fr',
            ),
            6 => 
            array (
                'EditeurNum' => 7,
                'EditeurNom' => 'Delcourt',
                'EditeurCreation' => 1986,
                'EditeurAdresse' => '8 rue Léon Jouhaux   ',
                'EditeurCP' => '75010',
                'EditeurVille' => 'PARIS',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            7 => 
            array (
                'EditeurNum' => 8,
                'EditeurNom' => 'Dupuis',
                'EditeurCreation' => 1922,
                'EditeurAdresse' => '15-17 rue Moussorgski',
                'EditeurCP' => '75895',
                'EditeurVille' => 'Marseille',
                'EditeurTel' => '0170385600',
                'EditeurFax' => '0170385601',
                'EditeurMail' => 'boutique@dupuis.com',
            ),
            8 => 
            array (
                'EditeurNum' => 9,
                'EditeurNom' => 'Editions du miroir',
                'EditeurCreation' => 2004,
                'EditeurAdresse' => '15 impasse des Grives ',
                'EditeurCP' => '03170',
                'EditeurVille' => 'Montvicq',
                'EditeurTel' => '0677968386',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            9 => 
            array (
                'EditeurNum' => 10,
                'EditeurNom' => 'Glénat Bd',
                'EditeurCreation' => 1972,
                'EditeurAdresse' => '37rue Servan',
                'EditeurCP' => '38000',
                'EditeurVille' => 'Grenoble',
                'EditeurTel' => '0476887575',
                'EditeurFax' => '0476887570',
                'EditeurMail' => 'glenat-edition@glenat.com',
            ),
            10 => 
            array (
                'EditeurNum' => 11,
                'EditeurNom' => 'Hachette',
                'EditeurCreation' => 1826,
                'EditeurAdresse' => '43 quai de Grenelle',
                'EditeurCP' => '75905',
                'EditeurVille' => 'Paris',
                'EditeurTel' => '0143923000',
                'EditeurFax' => '0143923111',
                'EditeurMail' => 'Hachette@hotmail.fr',
            ),
            11 => 
            array (
                'EditeurNum' => 12,
                'EditeurNom' => 'Kana',
                'EditeurCreation' => 1966,
                'EditeurAdresse' => '6 Avenue Paul Henri Spaak ',
                'EditeurCP' => '71060',
                'EditeurVille' => 'Bruxelles',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => 'boutique.kana@mdsfrance.fr',
            ),
            12 => 
            array (
                'EditeurNum' => 13,
                'EditeurNom' => 'Komikku Editions',
                'EditeurCreation' => 2012,
                'EditeurAdresse' => '46 rue de Montgrésin',
                'EditeurCP' => '60560',
                'EditeurVille' => 'Orry La Ville',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            13 => 
            array (
                'EditeurNum' => 14,
                'EditeurNom' => 'Le Lombard',
                'EditeurCreation' => 1946,
                'EditeurAdresse' => '15-27 rue Moussorgski',
                'EditeurCP' => '75018',
                'EditeurVille' => 'Paris',
                'EditeurTel' => '0153263232',
                'EditeurFax' => '0153263200',
                'EditeurMail' => '',
            ),
            14 => 
            array (
                'EditeurNum' => 15,
                'EditeurNom' => 'Loup-Hibou',
                'EditeurCreation' => 0,
                'EditeurAdresse' => '36 rue théodore de cuyper',
                'EditeurCP' => '1200',
                'EditeurVille' => 'Bruxelles',
                'EditeurTel' => '00324753418',
                'EditeurFax' => '0',
                'EditeurMail' => '',
            ),
            15 => 
            array (
                'EditeurNum' => 16,
                'EditeurNom' => 'Mad Fabrik',
                'EditeurCreation' => 2010,
                'EditeurAdresse' => '431 Lasne Office Park',
                'EditeurCP' => '1380',
                'EditeurVille' => 'Lasne',
                'EditeurTel' => '023573328',
                'EditeurFax' => '023573322',
                'EditeurMail' => '',
            ),
            16 => 
            array (
                'EditeurNum' => 17,
                'EditeurNom' => 'Marsu Production',
                'EditeurCreation' => 2007,
                'EditeurAdresse' => '15-27 rue Moussorgski',
                'EditeurCP' => '75018',
                'EditeurVille' => 'Paris',
                'EditeurTel' => '0205214802',
                'EditeurFax' => '0205214827',
                'EditeurMail' => 'marsuproduction@marsu.fr',
            ),
            17 => 
            array (
                'EditeurNum' => 18,
                'EditeurNom' => 'Nakarmaz',
                'EditeurCreation' => 0,
                'EditeurAdresse' => '1 mail gay-lussac  ',
                'EditeurCP' => '95000',
                'EditeurVille' => 'Neuville sur oise',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            18 => 
            array (
                'EditeurNum' => 19,
                'EditeurNom' => 'Panini Comics',
                'EditeurCreation' => 0,
                'EditeurAdresse' => 'Av. Emmanuel Pontremoli  ',
                'EditeurCP' => '6205',
                'EditeurVille' => 'Nice',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            19 => 
            array (
                'EditeurNum' => 20,
                'EditeurNom' => 'Paquet editions SArl',
                'EditeurCreation' => 0,
                'EditeurAdresse' => '',
                'EditeurCP' => '',
                'EditeurVille' => 'Genève - Suisse',
                'EditeurTel' => '0177455221',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            20 => 
            array (
                'EditeurNum' => 21,
                'EditeurNom' => 'Point image',
                'EditeurCreation' => 1994,
                'EditeurAdresse' => '10 Clos Saint Mathurin',
                'EditeurCP' => '78121',
                'EditeurVille' => 'Crespières',
                'EditeurTel' => '0134590758',
                'EditeurFax' => '0134590760',
                'EditeurMail' => '',
            ),
            21 => 
            array (
                'EditeurNum' => 22,
                'EditeurNom' => 'Soleils Editions',
                'EditeurCreation' => 1989,
                'EditeurAdresse' => '44 rue Baudin',
                'EditeurCP' => '83107',
                'EditeurVille' => 'Toulon',
                'EditeurTel' => '0156039220',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            22 => 
            array (
                'EditeurNum' => 23,
                'EditeurNom' => 'Topinambour',
                'EditeurCreation' => 0,
                'EditeurAdresse' => '40, avenue de Reims',
                'EditeurCP' => '02200',
                'EditeurVille' => 'Soissons',
                'EditeurTel' => '0323745981',
                'EditeurFax' => '0',
                'EditeurMail' => 'pl_tina@yahoo.com',
            ),
            23 => 
            array (
                'EditeurNum' => 24,
                'EditeurNom' => 'Urban Comics',
                'EditeurCreation' => 2012,
                'EditeurAdresse' => '15/27 rue Moussorgski  ',
                'EditeurCP' => '75018',
                'EditeurVille' => 'Paris',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            24 => 
            array (
                'EditeurNum' => 25,
                'EditeurNom' => 'Vents d\'ouest',
                'EditeurCreation' => 1981,
                'EditeurAdresse' => '37rue Servan',
                'EditeurCP' => '38000',
                'EditeurVille' => 'Grenoble',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
            25 => 
            array (
                'EditeurNum' => 26,
                'EditeurNom' => 'Z\'éditions',
                'EditeurCreation' => 1983,
                'EditeurAdresse' => '6 rue Lycee',
                'EditeurCP' => '06000',
                'EditeurVille' => 'Nice',
                'EditeurTel' => '0899184603',
                'EditeurFax' => '0899184937',
                'EditeurMail' => '',
            ),
            26 => 
            array (
                'EditeurNum' => 27,
                'EditeurNom' => 'Casterman Editions',
                'EditeurCreation' => 1780,
                'EditeurAdresse' => 'Cantersteen 47',
                'EditeurCP' => '1000',
                'EditeurVille' => 'Bruxelles',
                'EditeurTel' => '',
                'EditeurFax' => '',
                'EditeurMail' => '',
            ),
        ));
        
        
    }
}