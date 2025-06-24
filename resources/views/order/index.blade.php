<x-app-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto bg-white p-6 shadow-md rounded-md flex gap-8">

            <!-- Pizza List -->
            <div class="w-2/3 grid grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($pizzas as $pizza)
                    <button type="button" onclick="addToOrder('{{ $pizza->name }}', {{ $pizza->price }})" class="text-center w-full">
                        <img src="{{ asset('img/' . $pizza->img) }}" alt="{{ $pizza->name }}" class="w-full h-40 object-cover rounded-t-md">
                        <div class="bg-green-600 text-white py-2 italic text-lg rounded-b-md">
                            {{ $pizza->name }} - €{{ number_format($pizza->price, 2) }}
                        </div>
                    </button>
                @endforeach
            </div>

            <!-- Order Summary -->
            <div class="w-1/3 bg-red-500 text-white p-6 rounded-md flex flex-col justify-between">
                <div>
                    <img src="{{ asset('img/stonks-logo.png') }}" class="w-44 h-44 mx-auto mb-4" />
                    <h3 class="text-xl font-semibold text-center mb-4">U heeft besteld:</h3>
                    <ul id="orderList" class="mb-4 text-sm list-none space-y-2"></ul>
                    <p class="text-lg font-bold text-center">Totaal: €<span id="total">0.00</span></p>
                </div>

                <form id="orderForm" action="{{ route('order.store') }}" method="POST" class="mt-6">
                    @csrf
                    <input type="hidden" name="pizzas" id="pizzasInput">
                    <button type="submit" onclick="submitOrder()" class="w-full bg-white text-red-600 font-bold py-2 px-4 rounded hover:bg-gray-100 transition">
                        Order
                    </button>
                </form>

                @if (session('success'))
                    <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            alert("{{ session('success') }}");
                        });
                    </script>
                @endif
            </div>
        </div>
    </div>

    <script>
        let selectedPizzas = [];
        let total = 0;

        function addToOrder(name, price) {
            selectedPizzas.push({ name, price });
            total += price;
            updateOrderList();
        }

        function removeFromOrder(index) {
            total -= selectedPizzas[index].price;
            selectedPizzas.splice(index, 1);
            updateOrderList();
        }

        function updateOrderList() {
            const list = document.getElementById('orderList');
            list.innerHTML = '';

            selectedPizzas.forEach((pizza, index) => {
                const li = document.createElement('li');
                li.className = 'flex justify-between items-center bg-red-400 px-3 py-1 rounded';

                li.innerHTML = `
                    <span>${pizza.name} - €${pizza.price.toFixed(2)}</span>
                    <button onclick="removeFromOrder(${index})" class="ml-2 text-white bg-red-700 px-2 rounded hover:bg-red-800">❌</button>
                `;

                list.appendChild(li);
            });

            document.getElementById('total').textContent = total.toFixed(2);
        }

        function submitOrder() {
            const input = document.getElementById('pizzasInput');
            input.value = selectedPizzas.map(p => p.name).join(',');
        }
    </script>
</x-app-layout>
