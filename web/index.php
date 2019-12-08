<!DOCTYPE html>
<html>
<head>

    <title>茶道首页</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng|Varela+Round|ZCOOL+KuaiLe|ZCOOL+QingKe+HuangYou|Zhi+Mang+Xing&display=swap" rel="stylesheet">
</head>
<body>

<!-//导航栏>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">茶道</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">主页<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    茶叶分类
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="茶的来源.php">茶的来源</a>
                    <a class="dropdown-item" href="茶叶分类.php">茶叶的分类</a>
                    <a class="dropdown-item" href="茶的好坏.php">判断茶的好坏</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    茶具分类
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="">茶壶</a>
                    <a class="dropdown-item" href="">茶杯</a>
                    <a class="dropdown-item" href="">茶几</a>
                </div>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">about</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/DSC_0004.JPG" alt="茶" width="1100" height="500">
            <div class="carousel-caption">
                <h3>茶    壶</h3>
                <p>茶叶</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/DSC_0013.JPG" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/DSC_0078.JPG" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">欢迎来到这</h2>
    </div>
    <div class="container-fluid">


        <div class="row">
            <div  class="col-lg-6  col-md-6 col-12">
                <img src="images/DSC_0080.JPG" class="img-fluid aboutimg">
            </div>
            <div  class="col-lg-6  col-md-6 col-12">
                <h2 class="display-4">广东茶乡</h2>
                <p class="py-3">
                    小字部分!!!
                </p>
                <a href="about.php" class="btn btn-success">了解更多</a>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">标题2</h2>
    </div>
    <div class=container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/DSC_0078.JPG" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/DSC_0004.JPG" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/DSC_0080.JPG" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">留言区</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>用户名</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>邮箱</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>电话号码</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>建议  *只能英语或数字!</label>
                <textarea class="form-control" name="comments">

                </textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@hzy and @fxc</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
