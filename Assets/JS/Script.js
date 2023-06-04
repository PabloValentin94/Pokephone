const pokemons = [
    {nome: "Bulbassauro", imagem: "Assets/Images/Pokemons/Bulbassauro.png"},
    {nome: "Butterfree", imagem: "Assets/Images/Pokemons/Butterfree.png"},
    {nome: "Caterpie", imagem: "Assets/Images/Pokemons/Caterpie.png"},
    {nome: "Charmander", imagem: "Assets/Images/Pokemons/Charmander.png"},
    {nome: "Eevee", imagem: "Assets/Images/Pokemons/Eevee.png"},
    {nome: "Ekans", imagem: "Assets/Images/Pokemons/Ekans.png"},
    {nome: "Flareon", imagem: "Assets/Images/Pokemons/Flareon.png"},
    {nome: "Jigglypuff", imagem: "Assets/Images/Pokemons/Jigglypuff.png"},
    {nome: "Meowth", imagem: "Assets/Images/Pokemons/Meowth.png"},
    {nome: "Onix", imagem: "Assets/Images/Pokemons/Onix.png"},
    {nome: "Pidgey", imagem: "Assets/Images/Pokemons/Pidgey.png"},
    {nome: "Pikachu", imagem: "Assets/Images/Pokemons/Pikachu.png"},
    {nome: "Rattata", imagem: "Assets/Images/Pokemons/Rattata.png"},
    {nome: "Riolu", imagem: "Assets/Images/Pokemons/Riolu.png"},
    {nome: "Sandshrew", imagem: "Assets/Images/Pokemons/Sandshrew.png"},
    {nome: "Spearow", imagem: "Assets/Images/Pokemons/Spearow.png"},
    {nome: "Squirtle", imagem: "Assets/Images/Pokemons/Squirtle.png"},
    {nome: "Vulpix", imagem: "Assets/Images/Pokemons/Vulpix.png"}
];

var indice_pokemon = 0;

function Mudar_Pokemon(condicao)
{

    if(indice_pokemon - 1 < 0 && condicao == "anterior")
    {

        alert("Este é o primeiro pokémon do celular! Veja os próximos.");
        
    }

    else if(indice_pokemon + 1 > 17 && condicao == "proximo")
    {

        alert("Este é o último pokémon do celular! Veja os anteriores.");

    }

    else
    {

        if(condicao == "anterior")
        {

            indice_pokemon--;

        }

        else if(condicao == "proximo")
        {

            indice_pokemon++;

        }

        //console.log(indice_pokemon);

        document.getElementById("name").innerHTML = "<p>" + pokemons[indice_pokemon].nome + "</p>";

        document.getElementById("image").style = "background-image: url(" + pokemons[indice_pokemon].imagem + ");";

    }

}