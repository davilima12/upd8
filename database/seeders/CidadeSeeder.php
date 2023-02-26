<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $cidades = array(
            "São Miguel do Oeste",
            "Lages",
            "São Joaquim",
            "Balneário Camboriú",
            "Fraiburgo",
            "Bom Retiro",
            "Seara",
            "Xanxerê",
            "Pomerode",
            "Criciúma",
            "Lapa",
            "Castro",
            "Umuarama",
            "Guarapuava",
            "Paranaguá",
            "Irati",
            "Telêmaco Borba",
            "União da Vitória",
            "Marechal Cândido Rondon",
            "Rolândia",
            "Resende",
            "Volta Redonda",
            "Angra dos Reis",
            "Petrópolis",
            "Maricá",
            "Rio das Ostras",
            "Armação dos Búzios",
            "Teresópolis",
            "Saquarema",
            "Arraial do Cabo",
            "Caruaru",
            "Igarassu",
            "Garanhuns",
            "Serra Talhada",
            "Carpina",
            "Gravatá",
            "Ouricuri",
            "Goiana",
            "Belo Jardim",
            "Santa Cruz do Capibaribe",
            "Franca",
            "Presidente Prudente",
            "Barretos",
            "Fernandópolis",
            "Andradina",
            "Lins",
            "Catanduva",
            "Bebedouro",
            "Penápolis",
            "Olímpia",
            "Cacoal",
            "Ji-Paraná",
            "Vilhena",
            "Pimenta Bueno",
            "Ariquemes",
            "São Mateus",
            "Nova Venécia",
            "São Gabriel da Palha",
            "Santa Maria de Jetibá",
            "Venda Nova do Imigrante",
            "Itapemirim",
            "Castelo",
            "Colatina",
            "Cachoeiro de Itapemirim",
            "Linhares",
            "Aracruz",
            "Guaçuí",
            "Barra de São Francisco",
            "Bom Jesus do Norte",
            "Guarapari",
            "Mimoso do Sul",
            "Muniz Freire",
            "Pinheiros",
            "São José do Calçado",
            "Viana",
            "Vitória",
            "Balsa Nova",
            "Campina Grande do Sul",
            "Cerro Azul",
            "Piraquara",
            "Rio Negro",
            "São José dos Pinhais",
            "Além Paraíba",
            "Muriaé",
            "Viçosa",
            "Alfenas",
            "Pouso Alegre",
            "Varginha",
            "Passos",
            "Itajubá",
            "Lavras",
            "Santa Rita do Sapucaí",
            "Três Corações",
            "Guaxupé",
            "Borda da Mata",
            "São Lourenço"
        );

        foreach($cidades as $cidade){
            Cidade::create(
                [
                    'nome' => $cidade,
                ]
            );
        }


    }
}
