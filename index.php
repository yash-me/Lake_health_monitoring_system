<?php

if(!empty($_POST['value']))
    {
    	$value = $_POST['value'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>T2WN2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bare.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/fontfix.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/office-code-pro" type="text/css"/> -->
    <script src="./js/jquery-3.3.1.min.js"></script>
</head>
<body>
    <nav id="navbar">
        <label id="lbl">
            <input type="checkbox">
            <header>
                <a><h2>T<span style="font-size: 2.5rem">.</span>T<span style="font-size: 2.5rem">.</span>T</h2></a>
            </header>
            <ul>
                <li><a href="#intropic">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href=".more">More</a></li>
            </ul>
        </label>
    </nav>
    <img src="./img/intro_m.jpg" id="intropic_m">
    <img src="./img/intro.jpg" id="intropic">
    <section id="intro" txt="c">
        <grid>
            <div col="1/3">
                <h5 style="padding-top: 2em;">Pollution Level</h5>
                <h4 style="color: white; text-align: left; font-size: 4rem; padding-bottom: 0; padding-top: 0; margin-left:-20;" id="auto"><?php echo $value; ?><span style="font-size: 2rem">pH</span></h4>
                <span><i class="fab fa-twitter" style="color:#07F;"></i>
                    <a class="twitter-share-button"
                      href="http://twitter.com/intent/tweet?text=%23SpreadAwareness+%23SaveOurLakes%0ALearn%20more%20at%20http://ctrl-c.club/~greymtr/T2WN2/" style="text-decoration: none;color: #07F;">
                    Tweet</a>
                </span>
            </div>
        </grid>
    </section>
    <div txt="c" id="about" width="100%" style="margin:auto">
        <h2>ABOUT</h2>
        <grid>
            <div col="2/5">
                <p txt="c" style="font-size: 2rem">Illegal Dumping of Toxic Waste is a very important problem. In addition to causing further wastage of water in times of scarcity it also causes horrible effects to the ground water levels and the aquatic ecosystem.</p>
            </div>
            <div col="1/5"></div>
            <div col="2/5">
                <img src="./img/lake1.jpeg" >
            </div>
        </grid>
    </div>
    <!-- <div id="lakpol">
        <h2 txt="c">LAKE POLLUTION</h2>
        <grid>
            <div col="1/3"></div>
            <div col="1/3" txt="c">
                <card style="background-color: #0c0c0c;">
                    <h2 txt="c">Bellandur Lake</h2>
                    <iframe src="./value.html" style="border: 0px; text-align: center;" id="auto">
                        <p>Your browser does not support iframes.</p>
                    </iframe>
                </card>
            </div>
            <div col="1/3"></div>
        </grid>
    </div> -->
    <div txt="c" id="about" class="more">
        <h2 style="padding-top: 3rem;">More on Lake Protection</h2>
        <grid>
            <div col="1/3">
                <card style="background-color: #222;">
                    <h3>What is Froth?</h3>
                    <a href="http://bengaluru.citizenmatters.in/all-you-need-to-know-about-bellandur-lake-and-its-problems-7834"><img src="./img/froth.jpg"></a>
                </card>
            </div>
            <div col="1/3">
                <card style="background-color: #222;">
                    <h3>Problems caused</h3>
                    <a href="https://www.hindustantimes.com/india-news/bengaluru-lake-froth-on-streets-here-s-what-causes-the-toxic-foam-and-how-it-is-harmful-to-people/story-yuAhx2f4wIYlJYPReVxz7O.html"><img src="./img/lake2.jpg"></a>
                </card>
            </div>
            <div col="1/3">
                <card style="background-color: #222;">
                    <h3>Save lakes!</h3>
                    <a href="https://yourstory.com/2018/03/meet-15-year-old-behind-campaign-save-bengalurus-bellandur-lake/"><img src="./img/lake3.jpg"></a>
                </card>
            </div>
        </grid>
    </div>

    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<!--     <script type="text/javascript">
        $(document).ready( function(){
            $('#auto').load('index.php');
            refresh();
        });
        
        function refresh()
        {
            setTimeout( function() {
            $('#auto').load('index.php');
            refresh();
            }, 10000);
        }
    </script> -->
</body>

<style>

    body{
        color: #DDD;
        background-color: #222;
    }

    #intropic{
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
        width: 100vw;
        height: 100vh;
    }

    #intropic_m{
        display: none;
    }

    #intro{

        padding-top:55vh;
        font-size:5rem;
        padding-bottom:10rem;

    }

    #intro div{
        background-color: rgb(0,0,0,0.7);
        padding-bottom: 0px;
    }
    
    #navbar{
        background: rgb(0,0,0,0.7);
        color: #DDD;
        padding: 0px;
        border-bottom: 1px solid #080808;
    }

    #navbar ul li a:hover{
        color: #4AA;
        border-color: #4AA;
    }

    #lbl{
        max-width: 100vw;
    }

    /* About Section */

    #about{
        background-color: #0c0c0c;
        padding: 6rem;
        padding-left: 15rem;
        padding-right: 15rem;
    }

    #lakpol{
        background-color: #111;
        padding: 6rem;
    }

    #sadimg{
        width: 30rem;
    }

    /* Scrollbar Changes */
    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #000; 
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888; 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555; 
    }

    @media (max-width: 50rem)
    {
        #intro{
            padding-bottom:6rem;
        }

        #navbar label ul li{
            border: 0px;
        }
        
        #navbar label ul{
            background: rgb(0,0,0,0.7);
            border-top: 1px solid #080808;
        }
        
        #about{
            background-color: #0c0c0c;
            padding-left: 3rem;
            padding-right: 3rem;
            text-align: center !important;
        }

        #intropic{
            display: none;
        }

        #intropic_m{
            display: block;
            z-index: -1;
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
        }

        #about{
            text-align: center;
        }

        ::-webkit-scrollbar {
            width: 0px;
        }
    }

    .blink_text {

        animation:1s blinker linear infinite;
        -webkit-animation:1s blinker linear infinite;
        -moz-animation:1s blinker linear infinite;
        color: red;
    }

    @-moz-keyframes blinker {  
        0% { opacity: 1.0; }
        50% { opacity: 0.0; }
        100% { opacity: 1.0; }
    }

    @-webkit-keyframes blinker {  
        0% { opacity: 1.0; }
        50% { opacity: 0.0; }
        100% { opacity: 1.0; }
    }

    @keyframes blinker {  
        0% { opacity: 1.0; }
        50% { opacity: 0.0; }
        100% { opacity: 1.0; }
    }
</style>
</html>
