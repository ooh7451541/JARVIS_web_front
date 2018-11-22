<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 자비스 </title>

    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400i|Bangers|Oleo+Script+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400i|Bangers|Oleo+Script+Swash+Caps|Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <style>
        header {
            background-color: #000000;
            color: #ffffff;
            font-family: 'Bangers', cursive;
            font-size: 80pt;
        }
        #small {
            font-family: 'Song Myung', serif;
            font-size: 15pt;
            text-align: center;
        }
        footer {
            font-family: font-family: 'Open Sans', sans-serif;
            width: 100%;
            background-color: #f6eded;
            border: 3px solid#808080;
            text-align: center;
            line-height: 200px height: 200px;
            font-size: 80%;
        }
    </style>

</head>


<body>
    <head>
        <style>
        body {
            overflow-x: hidden
        }

        nav {
            width: 100%;
        }

        .nav_wrapper {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            background: #2f3b3f;
        }

        .menu {
            width: 100%;
            height: auto;
            background: #2f3b3f;
        }

            .menu ul {
                padding: 0px;
                margin: 0px;
                list-style: none;
                position: relative;
                display: inline-block;
            }

            .menu > li > ul.sub_menu {
                min-width: 10em;
                padding: 4px 0;
                background-color: #f4f4f4;
                border: 1px solid #fff;
            }

            .menu ul li {
                padding: 0px;
            }

            .menu > ul > li {
                display: inline-block;
            }

            .menu ul li a {
                display: block;
                text-decoration: none;
                color: #fff;
                font-size: 14px;
            }

                .menu ul li a:hover {
                    background: #efa666;
                    color: #fff;
                    transition: all .5s ease-out;
                }

            .menu ul li.hover > a {
                background: #efa666;
                color: #fff;
            }

            .menu ul li > a {
                padding: 15px;
            }

            .menu ul ul {
                display: none;
                position: absolute;
                top: 100%;
                min-width: 160px;
                background: #39484d;
            }

            .menu ul li:hover > ul {
                display: block;
            }

            .menu ul ul > li {
                position: relative;
            }

                .menu ul ul > li a {
                    padding: 10px 15px;
                    height: auto;
                    background: #39484d;
                }

                    .menu ul ul > li a:hover {
                        background: #efa666;
                        color: #fff;
                    }

            .menu ul ul ul {
                position: absolute;
                left: 100%;
                top: 0;
            }
        </style>
    </head>
    <body>
      <?php require_once('view/nav.php'); ?>
         <header>
                <div style="text-align:center" id="medium">
                    HISTORY
                </div>
                <div id="small">
                    안녕하세요, 주인님. <br /><br />
                </div>
        </header>
        <br>






        <div class="container">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>날짜</th>
                        <th>조회수</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>5</td>
                        <td>안녕</td>
                        <td>최씨</td>
                        <td>6월</td>
                        <td>38</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>안녕</td>
                        <td>최씨</td>
                        <td>6월</td>
                        <td>38</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>안녕</td>
                        <td>김씨</td>
                        <td>5월</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>안녕</td>
                        <td>김씨</td>
                        <td>5월</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>안녕?</td>
                        <td>박씨</td>
                        <td>3월</td>
                        <td>4</td>
                    </tr>
                    </tbody>
                </table>

                <form action="create.php">
                  <button type="submit" class="btn">글쓰기</button>
                </form>
                <hr/>

                <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


        <nav>

        </nav>

        <section></section>

        <br>


        <footer>

            <div id="footer_wrap" class="div-wrap">
                <div id="footer" class="div-cont">

                    <div id="fcopyright">
                        <em> <br /><br />JARVIS</em>&nbsp;&nbsp;
                        <address>
                            52828
                            경남 진주시 진주대로 501 경상대학교  공과대학 407동
                        </address>
                        <p class="tel">
                            TEL. 010-xxxx-xxxx
                            &nbsp;&nbsp;&nbsp;E-mail. kakired121@naver.com
                        </p>
                        <p class="copyright"> Copyright@GNU All rights Reserved  <br /> <br /><br /></p>
                    </div>
                </div>
            </div>




        </footer>
    </body>
    </html>
