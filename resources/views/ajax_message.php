<html>
    <head>
        <title>Ajax message change</title>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
        <script>
            function getMessage() {
                $.ajax({
                    type:'POST',
                    url:'/getmsg',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:'_token = <?php echo csrf_token(); ?>',
                    success:function(data) {
                        $("#msg").html(data.msg);
                    }
                });
            }
        </script>
    </head>
    <body>
        <div id="msg">Click on replace to get new text.</div>
        <button onclick="getMessage()">click to replace</button>
    </body>
</html>