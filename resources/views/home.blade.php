<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISPM Back End Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

    {{--ini navbar--}}
    <nav class="navbar bg-dark">
            <div class="container-fluid justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2" style="margin: auto">
                            <a class="navbar-brand" style="color: #ffffff; font-size: 24px"><strong>ISPM</strong></a>
                        </div>
                        <div class="col-md-8" style="margin: auto">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-light" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col-md-2" style="margin: auto; text-align: right">
                            <a class="btn btn-outline-primary" href="{{ url('/add-new-content') }}" style="width: 100%";><strong>+</strong> Add New Content</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    {{--nav bar end--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>