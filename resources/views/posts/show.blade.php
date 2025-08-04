<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ahmed Blog Posts</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">All Posts</a>
                        </li>

                </div>
            </div>
        </nav>

        <div class="container mt-4 ">

            <div class="card mb-4">
                <div class="card-header">
                    Post Details
                </div>
                <div class="card-body">
                    <h5 class="card-title">Title {{$singlePost['title']}}</h5>
                    <p class="card-text">Discription : {{$singlePost['discription']}}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Post Creator Details
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nsmr : Ahmed Mohamed</h5>
                    <p class="card-text">Email : ahmed@example.com</p>
                    <p class="card-text">Created At : 2022-10-10 09:00:00</p>
                </div>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
    </body>

</html>
