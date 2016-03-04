    $(document).ready(function () {


        $('#ecran-commencer').css('height', (window.innerHeight-169) + 'px');
        $('#question1').css('height', (window.innerHeight) + 'px');
        $('#question2').css('height', (window.innerHeight) + 'px');
        $('#question3').css('height', (window.innerHeight) + 'px');
        $('#question4').css('height', (window.innerHeight) + 'px');
        $('#question5').css('height', (window.innerHeight-169) + 'px');

        $("#message-contact").on('click', function () {
            $("#myModal").modal("show");
        });

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