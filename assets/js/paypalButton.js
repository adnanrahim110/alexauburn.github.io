function renderPayPalButton(price, productId) {
  paypal.Buttons({
    createOrder: function (data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: price.toFixed(2)
          }
        }]
      });
    },
    onApprove: function (data, actions) {
      return actions.order.capture().then(function (details) {
        // AJAX request to save secure link and redirect to download page
        $.ajax({
          url: 'generate-secure-link.php',
          method: 'POST',
          dataType: 'json', // Ensures response is automatically parsed as JSON
          data: {
            product_id: productId
          }
        })
          .done(function (response) {
            if (response && response.success) {
              // Redirect to download page with secure link
              window.location.href = 'downloadbook.php?secure_link=' + encodeURIComponent(response.secure_link);
            } else {
              alert('Error: ' + (response.error || 'Unable to generate secure link.'));
            }
          })
          .fail(function (jqXHR, textStatus) {
            alert('Error: ' + textStatus + ' - Unable to process the payment.');
          });
      });
    }
  }).render('#paypal-button');
}
