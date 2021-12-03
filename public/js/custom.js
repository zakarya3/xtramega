$(document).ready(function () {
    $('.increment-btn').click(function (e) {
        e.preventDefault();
        var incre_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value<10){
            value++;
            var quantity = $(this).closest('.product_data').find('.qty-input').val(value);
            $.ajax({
              method: "POST",
               url: "/cart",
               data: {
                 'quantity' : quantity,
               },
             });
        }
 
    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();
        var decre_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>1){
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    $('.order_choice').change(function() {
      var order_choice = $(".order_choice option:selected").val(value);
      $.ajax({
        method: "POST",
         url: "/payment-method",
         data: {
           'order_choice' : order_choice,
         },
       });
    })

  });