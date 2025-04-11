        <!-- jQuery (required for Bootstrap JS) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    function increse(){
        const $span = $('#selected_count');
        $span.text(parseInt($span.text()) + 1);
        updateBuyNowLink();
    }

    function decrease() {
        const $span = $('#selected_count');
        if (parseInt($span.text()) > 1) {
            $span.text(parseInt($span.text()) - 1);
        updateBuyNowLink();
        }
    }


    function updateBuyNowLink() {
        const count = $('#selected_count').text();
        const originalHref = $('.product_card-link').attr('href').split('quantity=')[0];
        $('.product_card-link').attr('href', originalHref + 'quantity=' + count);
    }

    function addToCart(product_id, user_id){
            const $quantity = $('#selected_count').html();
            $.post('/add_to_cart',  {
                    id_product: product_id,
                    id_user: user_id,
                    count: $quantity,
                    _token: $('meta[name="csrf-token"]').attr('content')
                }, function(result) {
                    $("#cart_button").html(result.message);
                });
                
    }

</script>