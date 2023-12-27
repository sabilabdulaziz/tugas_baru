<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="EnterStream">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EnterStream</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Css Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/plyr.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{route('home')}}">
                            <img src="img/Logos3.png" alt="Logo" width="175" height="27">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{route('rumah')}}">Homepage</a></li>
                                <li><a href="{{route('kat1')}}">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('kat1')}}">Categories</a></li>
                                        <li><a href="{{route('detil')}}">Anime Details</a></li>
                                        <li><a href="{{route('tonton')}}">Anime Watching</a></li>
                                        <li><a href="{{route('detil')}}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('blog')}}">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <ul class="drp-h">
                            <li class="drp-ico"><a href="#">p</a>
                                <ul class="drp">
                                    <li class="drp-item"><a href="#">edit profil</a></li>
                                    <li class="drp-item"><a href="#">change password</a></li>
                                    <li class="drp-item"><a href="#">logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/Berserk.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Berserk: Scream Of Face</h2>
                                <p>This ultraviolent fantasy manga is the first in a series about a cursed lone wanderer with a tragic fate and a cast of bio-horror demons...</p>
                                <a href="{{route('tonton')}}"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/br.png">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Boruto: Naruto next generations</h2>
                                <p>Throughout all their adventures, Boruto is determined to make his mark in the ninja world and live outside of his father's shadow.</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="{{route('detil1')}}" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="{{route('detil1')}}"><img src="img/trending/1.png" alt="gambar"></a>
                                        <div class="ep">9 / 10</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </li>
                                        </ul>
                                        <h5><a href="./anime-details.html">Berserk: Scream Of Face</a></h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/trending/trend-2.jpg" alt="gambar2"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color: yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill"></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/trending/trend-3.jpg" alt="gambar3"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill"></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/trending/trend-4.jpg" alt="gambar4"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/trending/trend-5.jpg" alt="gambar5"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/trending/trend-6.jpg" alt="gambar6"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/popular/popular-1.jpg" alt="gambar7"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Sen to Chihiro no Kamikakushi</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/popular/popular-2.jpg" alt="gambar8"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/popular/popular-3.jpg" alt="gambar8"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/popular/popular-4.jpg" alt="gambar9"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Rurouni Kenshin: Meiji Kenkaku Romantan</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/popular/popular-5.jpg" alt="gambar10"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/popular/popular-6.jpg" alt="gambar11"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Monogatari Series: Second Season</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/recent/recent-1.jpg" alt="gambar12"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Great Teacher Onizuka</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/recent/recent-2.jpg" alt="gambar13"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow" ></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/recent/recent-3.jpg" alt="gambar14"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Mushishi Zoku Shou: Suzu no Shizuku</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/recent/recent-4.jpg" alt="gambar15"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Fate/Zero 2nd Season</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/recent/recent-5.jpg" alt="gambar16"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Kizumonogatari II: Nekket su-hen</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/recent/recent-6.jpg" alt="gambar17"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Live Action</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/live/live-1.jpg" alt="gambar18"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Shouwa Genroku Rakugo Shinjuu</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/live/live-2.jpg" alt="gambar19"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color: yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/live/live-3.jpg" alt="gambar20"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Mushishi Zoku Shou: Suzu no Shizuku</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/live/live-4.jpg" alt="gambar21"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color: yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/live/live-5.jpg" alt="gambar22"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        <a href="#"><img src="img/live/live-6.jpg" alt="gambar23"></a>
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>
                                                <i class="bi bi-star-fill" style="color:yellow"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill" ></i>
                                            </li>
                                        </ul>
                                        <h5><a href="#">Kizumonogatari II: Nekketsu-hen</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="img/sidebar/tv-1.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="img/sidebar/tv-2.jpg">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="img/sidebar/tv-3.jpg">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="img/sidebar/tv-4.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="img/sidebar/tv-5.jpg">
                <div class="ep">18 / ?</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
            </div>
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>New Comment</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-1.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-2.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-3.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-4.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Monogatari Series: Second Season</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="{{route('rumah')}}"><img src="img/Logos3.png" alt="" width="75%"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="{{route('rumah')}}">Homepage</a></li>
                        <li><a href="{{route('kat1')}}">Categories</a></li>
                        <li><a href="{{route('blog')}}">Our Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>
