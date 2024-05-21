// Función para intercambiar las monedas
function swapCurrencies() {
    var fromCurrency = document.getElementById('fromCurrency');
    var toCurrency = document.getElementById('toCurrency');
    var temp = fromCurrency.value;
    fromCurrency.value = toCurrency.value;
    toCurrency.value = temp;
}
