        <!-- jQuery (required for Bootstrap JS) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    $(".card_icon").click(function(){
        $.get('/ribbon', function(data) {
                $('#ribbon_header').html(data);
                $('#ribbon_header').toggleClass('d_none');
            });
    })

    $(window).click(function() {
        $('#ribbon_header').addClass('d_none');
    });

    $('#ribbon_header').click(function(event){
        event.stopPropagation();
    });
</script>