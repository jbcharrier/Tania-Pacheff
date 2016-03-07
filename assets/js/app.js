    $(document).ready(function () {


        $('#facebook1').on('click', function(){
            window.open('https://www.facebook.com/sharer/sharer.php?u=www.taniapacheff.com&title=Quiz nutritionnel de Tania Pacheff&description=Testez vos connaissances en diététique et débusquez les idées reçues !', 'facebook_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');
        });



        $("#valid").on('click', function () {
            $("#myModal").modal("show");
        });

        $(".btn-default").on('click', function () {
            $("#valider").click();
        });



        $('#ecran-commencer').css('height', (window.innerHeight-169) + 'px');
        $('#question1').css('height', (window.innerHeight) + 'px');
        $('#question2').css('height', (window.innerHeight) + 'px');
        $('#question3').css('height', (window.innerHeight) + 'px');
        $('#question4').css('height', (window.innerHeight) + 'px');
        $('#question5').css('height', (window.innerHeight-169) + 'px');


        $('.btn-start').on('click', function(){
            $('html, body').animate( {
                scrollTop: $('#question1').offset().top
            }, 1000);
            return false;
        });


        $('#btn-q1').on('click', function(){
            $('html, body').animate( {
                scrollTop: $('#question2').offset().top
            }, 1000);
            return false;
        });


        $('#btn-q2').on('click', function(){
            $('html, body').animate( {
                scrollTop: $('#question3').offset().top
            }, 1000);
            return false;
        });


        $('#btn-q3').on('click', function(){
            $('html, body').animate( {
                scrollTop: $('#question4').offset().top
            }, 1000);
            return false;
        });


        $('#btn-q4').on('click', function(){
            $('html, body').animate( {
                scrollTop: $('#question5').offset().top
            }, 1000);
            return false;
        });
    });