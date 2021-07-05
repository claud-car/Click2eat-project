/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/braintree.js ***!
  \***********************************/
var token = '';
axios.get('/api/generate-token').then(function (response) {
  token = response.data.token;
}).then(function () {
  var form = document.querySelector('#payment-form');
  var client_token = token;
  braintree.dropin.create({
    authorization: client_token,
    selector: '#bt-dropin',
    paypal: {
      flow: 'vault'
    }
  }, function (createErr, instance) {
    if (createErr) {
      console.log('Create Error', createErr);
      return;
    }

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      instance.requestPaymentMethod(function (err, payload) {
        if (err) {
          console.log('Request Payment Method Error', err);
          return;
        }

        var restaurant = JSON.parse(localStorage.getItem('cart'));
        var plates = restaurant.map(function (plate) {
          return {
            id: plate.id,
            qty: plate.qty
          };
        });
        restaurant = restaurant[0].restaurant_id;
        axios.post('/api/payment', {
          restaurant_id: restaurant,
          plates: plates,
          customer: JSON.parse(sessionStorage.getItem('order')),
          amount: parseInt(sessionStorage.getItem('amount')),
          token: payload.nonce
        }).then(function (response) {
          if (response.status === 200) {
            document.querySelector('#details').style.display = 'none';
            document.querySelector('#payment').style.display = 'none';
            document.querySelector('#confirmed').style.display = 'block';
            document.querySelector('#stepConfirmed').classList.remove('text-gray-300');
            sessionStorage.clear();
            localStorage.clear();
          }
        });
      });
    });
  });
});
/******/ })()
;