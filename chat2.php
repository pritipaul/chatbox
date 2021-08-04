<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Chatroom</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }

        .form-floating {}

    }

    section {
        border: 2px solid rgb(235, 213, 213);
        height: 600px;
        width: 800px;
        display: flex;
        flex-direction: column;
        margin: auto;
        margin-top: 200px;
        overflow-y: scroll;

    }

    .container2 {
        border: 2px solid rgb(155, 188, 207);
        margin: 5px;
        padding: 10px;
        background-color: rgb(157, 240, 185);
    }

    #btn {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -40px;
        margin-bottom: 500px;
    }

    .form-floating {
        width: 600px;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <img src="./pro2.jpg" class="ho" alt="this is the picture" height="100px" width="100px">
                <a class="navbar-brand " href="#">Ladies Tailors</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="../html/home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/contact.html">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <section class="shadow p-3 mb-5 bg-body rounded">
        <div class="container2">
            <div class="dill">
                <img src="./pro.jpg" alt="Avatar" height="50px" width="50px">
                <p>hi</p>
                <p>hi</p>
                <span class="time-right">45</span>
            </div>
        </div>
    </section>
    <form>
        <input type="text" name="room" id="text" class="form-floating " placeholder="entered the message">
        <button name="send" id="true">Send</button>
    </form>

    </div>
    </div>


    <footer class="text-muted py-5 bg-dark">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="./home.html">Visit the homepage</a> or read our <a
                    href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
            </ul>
        </div>
    </footer>



    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
     setInterval(run , 1000);
     function run() {
         $.post("htcon.php", {name: '<?php echo $name ?>'},
          function (data, status) {
              document.getElementsByClassName('dill')[0].innerHTML = data;
          }
         )
     }
</script>

<script>
    $("#true").click(function() {
        var clientmsg = $("#text").val();
        $.post("room.php", {
                text: clientmsg,
                name: '<?php echo $name?>'
            },
            function(data, status) {
                document.getElementsByClassName('dill')[0].innerHtml = data;
            });
        $("#text").val("");
        return false;
    });
</script>


</body>

</html>