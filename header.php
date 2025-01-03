<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (isset($pageTitle))?$pageTitle:"Medtravely"; ?></title>
    <link rel="stylesheet" href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="top-nav bg-primary">
            <div class="container">
                <div class="tophead">
                    <a href="" class="logo text-white">
                        <h2>MedTravely</h2>
                    </a>
                    <div class="searchbar">
                        <div class="search">
                            <input type="text" class="form-control" placeholder="Search by hostpital, doctor...">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="quotebtn">
                        <a href="" class="btn btn-danger">Get a Free Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav2">
            <div class="container">
                <div class="menu">
                    <div class="menu-item">
                        <a href="" class="nav-link active">Home</a>
                    </div>
                    <div class="menu-item">
                        <a href="hospital-main.php" class="nav-link ">Hostpitals</a>
                    </div>
                    <div class="menu-item">
                        <a href="doctor-main.php" class="nav-link ">Doctors</a>
                    </div>
                    <div class="menu-item">
                        <a href="" class="nav-link ">Patient Stories</a>
                    </div>
                    <div class="menu-item">
                        <a href="" class="nav-link ">Services</a>
                    </div>
                    <div class="menu-item">
                        <a href="" class="nav-link ">Blog</a>
                    </div>
                    <div class="menu-item">
                        <a href="" class="nav-link ">Consult Free</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
