<x-app-layout>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-3 flex flex-col md:flex-row gap-1 items-start">

                <!-- Logo links naast de tekst -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/stonks-logo.png') }}" alt="Stonks Pizza Logo" class="h-48 w-auto">
                </div>


                <!-- Text Content -->
                <div class="text-gray-800 space-y-5 text-sm">
                </br>
                </br>

                    <h2 class="text-3xl font-semibold italic text-red-600">
                        Pizza Eindhoven? Proef Italië bij Stonks Pizza net buiten de stad!
                    </h2>

                    <p>
                        Welkom bij <strong>Stonks Pizza</strong>, waar Italiaanse passie en smaak samenkomen in elke hap.
                        Zin om uit eten te gaan in de buurt van Eindhoven of liever thuis genieten van de allerbeste pizza? Bij Stonks zit je altijd goed.
                        Reserveer een tafeltje voor een gezellige avond of haal je pizza gemakkelijk af, vers bereid en boordevol smaak!
                    </p>

                    <p>
                        Onze pizza’s worden gemaakt volgens authentiek Italiaans recept, met een dunne krokante bodem,
                        rijke tomatensaus en de beste ingrediënten. Eén hap en je waant je in een sfeervolle pizzeria in Napels.
                        En dat allemaal op slechts enkele minuten rijden van Eindhoven.
                    </p>

                    <h3 class="text-2xl font-semibold italic text-red-700">Waarom kiezen voor Stonks Pizza?</h3>

                    <ul class="list-disc list-inside space-y-1">
                        <li><strong>Ambachtelijk bereid</strong>: Elk deeg wordt met de hand gemaakt en krijgt de tijd om perfect te rijzen.</li>
                        <li><strong>Verse ingrediënten</strong>: Van buffelmozzarella tot huisgemaakte sauzen, vers betekent écht vers.</li>
                        <li><strong>Italiaanse sfeer</strong>: Onze pizzeria straalt warmte, gezelligheid en gastvrijheid uit.</li>
                    </ul>

                    <p>
                        Of je nu met vrienden langskomt, een romantisch etentje plant of gewoon trek hebt in een goede pizza: bij ons voel je je thuis.
                    </p>

                    <h3 class="text-2xl font-semibold italic text-red-700">Favoriete pizza’s? Moeilijk kiezen...</h3>

                    <p>
                        Vraag je het ons, dan is <strong>één favoriete pizza kiezen bijna onmogelijk</strong>. Onze klanten zijn dol op de klassieke
                        <em>Margherita</em> - simpel, maar perfect in balans. Een dunne bodem, frisse tomatensaus, romige mozzarella en een blaadje verse basilicum:
                        het bewijs dat eenvoud soms het allerlekkerst is.
                    </p>

                    <p>
                        Maar dat is nog maar het begin. Of je nu houdt van pittige salami, romige truffelkaas of een vegetarische variant vol gegrilde groentes,
                        onze menukaart biedt voor ieder wat wils.
                    </p>

                    <a href="{{ route('order.index') }}" class="mt-6 inline-block bg-red-500 text-white font-semibold text-lg py-3 px-6 rounded hover:bg-red-600 transition">
                        Maak je bestelling!
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
