@extends('layouts.default')

@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
    <style>
        /*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Rockwell:wght@500;600;700&display=swap");
/*===== VARIABLES CSS =====*/
:root{
    --header-height: 3rem;
    --font-medium: 500;
}
/*===== Colores =====*/
:root{
    --first-color: #A0E7E5;
    --white-color: #67595E;
    --dark-color: #2A3B47;
    --text-color: #697477;
}
/*===== Fuente y tipografia =====*/
:root{
    --body-font: 'Montserrat', sans-serif;
    --big-font-size: 6.25rem;
    --h2-font-size: 1.25rem;
    --normal-font-size: .938rem;
    --small-font-size: .813rem;
}
@media screen and (min-width: 768px){
    :root{
        --big-font-size: 10.5rem;
        --h2-font-size: 2rem;
        --normal-font-size: 1rem;
        --small-font-size: .875rem;
    }
}
/*===== Margenes =====*/
:root{
    --mb-1: .5rem;
    --mb-2: 1rem;
    --mb-3: 1.5rem;
    --mb-4: 2rem;
}
/*===== z index =====*/
:root{
    --z-fixed: 100;
}
/*===== BASE =====*/
*,::before,::after{
    box-sizing: border-box;
}
html{
    scroll-behavior: smooth;
}
body{
    margin: var(--header-height) 0 0 0;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    font-weight: var(--font-medium);
    color: var(--text-color);
    line-height: 1.6;
}
h1,h2,p{
    margin: 0;
}
ul{
    margin: 0;
    padding: 0;
    list-style: none;
}
a{
    text-decoration: none;
    color: var(--text-color);
}
img{
    max-width: 100%;
    height: auto;
    display: block;
}
/*===== CLASS CSS ===== */
.section{
    padding: 3rem 0;
}
.section-title{
    position: relative;
    font-size: var(--h2-font-size);
    color: var(--dark-color);
    margin: 0;
    text-align: center;
}
.section-title::after{
    position: absolute;
    content: "";
    width: 32px;
    height: .18rem;
    left: 0;
    right: 0;
    margin: auto;
    top: 2rem;
    background-color: var(--first-color);
}
/*===== LAYOUT =====*/
.bd-grid{
    max-width: 1024px;
    display: grid;
    grid-template-columns: 100%;
    grid-column-gap: 2rem;
    width: calc(100% - 2rem);
    margin-left: var(--mb-2);
    margin-right: var(--mb-2);
}
.l-header{
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--z-fixed);
    background-color: #A0E7E5;
}
/*===== NAV =====*/
.nav{
    height: var(--header-height);
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #A0E7E5;
}
@media screen and (max-width: 768px){
    .nav__menu{
        position: fixed;
        top: var(--header-height);
        right: -100%;
        width: 80%;
        height: 100%;
        padding: 2rem;
        background-color: rgba(255,255,255,.3);
        transition: .5s;
        backdrop-filter: blur(10px);
    }
}
.nav__item{
    margin-bottom: var(--mb-4);
}
.nav__link{
    position: relative;
    color: var(--dark-color);
}
.nav__link:hover{
    color: var(--first-color);
}
.nav__logo{
    color: var(--white-color);
}
.nav__toggle{
    color: var(--white-color);
    font-size: 1.5rem;
    cursor: pointer;
}
/*=== Show menu ===*/
.show{
    right: 0;
}
/*Active menu*/
.active::after{
    position: absolute;
    content: "";
    width: 100%;
    height: .18rem;
    left: 0;
    top: 2rem;
    background-color: var(--first-color);
}
/*===== HOME =====*/
.home{
    position: relative;
    background-color: #A0E7E5;
    overflow: hidden;
}
.home__container{
    height: calc(100vh - var(--header-height));
    row-gap: 5rem;
}
.home__title{
    align-self: flex-end;
    font-size: 150px;
    color: var(--white-color);
    line-height: .8;
}
.home__title span{
    text-shadow: 0 20px 25px rgba(0,0,0,.5);
}
.home__scroll{
    align-self: flex-end;
    padding-bottom: var(--mb-4);
}
.home__scroll-link{
    writing-mode: vertical-lr;
    transform: rotate(-180deg);
    color: var(--white-color);
}
.home__img{
    position: absolute;
    right: 0;
    bottom: 0;
    width: 295px;
}
/* ===== ABOUT =====*/
.about__container{
    justify-items: center;
    row-gap: 2rem;
    text-align: center;
}
.about__img{
    display: flex;
    justify-content: center;
    padding-top: 1rem;
    width: 200px;
    height: 200px;
    background-color: #A0E7E5;
    border-radius: 50px;
    overflow: hidden;
}
.about__img img{
    width: 100px;
}
.about__subtitle{
    font-size: var(--h2-font-size);
    color: #A0E7E7;
    margin-bottom: var(--mb-1);
}
.about__text{
    margin-bottom: var(--mb-4);
}
.about__profession{
    display: block;
    margin-bottom: var(--mb-4);
}
.about__social-icon{
    font-size: 1.4rem;
    margin: 0 var(--mb-1);
}
.about__social-icon:hover{
    color: var(--first-color);
}
/* ===== SKILLS =====*/
.skills__container{
    row-gap: 2rem;
}
.skills__subtitle{
    color: var(--first-color);
    margin-bottom: var(--mb-3);
}
.skills__name{
    display: inline-block;
    font-size: var(--small-font-size);
    margin-right: var(--mb-2);
    margin-bottom: var(--mb-3);
    padding: .25rem .5rem;
    background-color: var(--white-color);
    border-radius: .25rem;
}
.skills__name:hover{
    background-color: var(--first-color);
    color: var(--white-color);
}
.skills__img img{
    border-radius: .5rem;
}
/* ===== PORTFOLIO =====*/
.portfolio{
    background-color: var(--white-color);
}
.portfolio__container{
    justify-items: center;
    row-gap: 2rem;
}
.portfolio__img{
    position: relative;
    overflow: hidden;
}
.portfolio__img img{
    border-radius: .5rem;
}
.portfolio__link{
    position: absolute;
    bottom: -100%;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #A0E7E5;
    border-radius: .5rem;
    cursor: pointer;
    backdrop-filter: blur(10px);
    transition: .3s;
}
.portfolio__img:hover .portfolio__link{
    bottom: 0;
}
.portfolio__link-name{
    color: var(--dark-color);
}
/* ===== CONTACT =====*/
.contact__container{
    row-gap: 2rem
}
.contact__subtitle{
    font-size: var(--normal-font-size);
    color: var(--first-color);
}
.contact__text{
    display: inline-block;
    margin-bottom: var(--mb-2);
}
.contact__inputs{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    column-gap: 1rem;
}
.contact__input{
    width: 100%;
    padding: .8rem;
    outline: none;
    border: 1.5px solid var(--dark-color);
    font-size: var(--normal-font-size);
    margin-bottom: var(--mb-4);
    border-radius: .5rem;
}
.contact__button{
    display: block;
    background-color: var(--first-color);
    color: var(--white-color);
    padding: .75rem 2.5rem;
    margin-left: auto;
    border-radius: .5rem;
    border: none;
    outline: none;
    font-size: var(--normal-font-size);
    cursor: pointer;
}
/* ===== FOOTER=====*/
.footer{
    background-color: #A0E7E5;
}
.footer__container{
    row-gap: 2rem;
}
.footer__title{
    font-size: 40px;
    color: var(--white-color);
    margin-bottom: var(--mb-2);
}
.footer__link{
    padding: .25rem 0;
}
.footer__link:hover{
    color: var(--first-color);
}
.footer__social{
    font-size: 55px;
    margin-right: var(--mb-1);
}
.footer__social:hover{
    color: var(--first-color);
}
/* ===== MEDIA QUERIES =====*/
/* For small devices */
@media screen and (max-width: 320px) {
  .home__img {
    width: 230px;
  }
}
@media screen and (min-width: 768px){
    body{
        margin: 0;
    }
    .section{
        padding-top: 4rem;
    }
    .section-title{
        margin-bottom: 3rem;
    }
    .section-title::after{
        width: 64px;
        top: 3rem;
    }
    .nav{
        height: calc(var(--header-height) + 1rem);
    }
    .nav__list{
        display: flex;
    }
    .nav__item{
        margin-left: var(--mb-4);
        margin-bottom: 0;
    }
    .nav__toggle{
        display: none;
    }
    .nav__link{
        color: var(--white-color);
    }
    .nav__link:hover{
        color: var(--white-color);
    }
    .active::after{
        background-color: var(--white-color);
    }
    .home__container{
        height: 100vh;
        grid-template-rows: 1.7fr 1fr;
        row-gap: 0;
    }
    .home__img{
        width: 524px;
        right: 10%;
    }
    .about__container{
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        text-align: initial;
        padding: 4rem 0;
    }
    .about__img{
        width: 200px;
        height: 200px;
    }
    .about__img img{
        width: 165px;
    }
    .skills__container{
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }
    .portfolio__container{
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        column-gap: 2rem;
    }
    .contact__container{
        grid-template-columns: repeat(2, 1fr);
        justify-items: center;
    }
    .contact__form{
        width: 380px;
    }
    .footer__container{
        grid-template-columns: repeat(3, 1fr);
        justify-items: center;
    }
}
@media screen and (min-width: 1024px){
    .bd-grid{
        margin-left: auto;
        margin-right: auto;
    }
}
/* For tall screens on mobiles y desktop*/
@media screen and (min-height: 721px) {
    .home__container {
        height: 640px;
    }
    .home__img {
        width: 500px;
        right: 24%;
    }
}
</style>
</head>

<body>
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Laurence's Portfolio</title>
    
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Laurence Ramos</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#dream" class="nav__link">CS 202</a></li>
                        <li class="nav__item"><a href="#visit" class="nav__link">CS 405</a></li>
                        <li class="nav__item"><a href="#years" class="nav__link">6 Years From Now</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span> Laurence Ramos</span></h1>

                    <img src="assets/img/Kevin.png" alt="" class="home__img">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                <section class="dream section" id="dream">
                    
                        <h2 class="about__subtitle">I'm Laurence Ramos</h2>
                        <span class="about__profession">I'm currently taking Bachelor of Science in Computer SCience in PLP. My hobbies are Playing Basketball, Cycling and Travelling to different places. I have an online business, I sell watches and Perfumes. I also like to watch movies with my family and sometimes with my friends.
</p>
        
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="dream section" id="dream">
                <h2 class="section-title">CS 202</h2>

               <div class="skills__container bd-grid">
                        <p class="about__text">Interconnection Topologies</p>
                    </div> 

                    <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <p class="about__text">Switching components are used to create interconnection networks. Topology refers to the pattern used to link individual switches to other components such as processors, memory, and other switches. In a parallel system, a network allows data to be exchanged between processors.</p>
                    </div> 
                   </section>

                   <!--===== PORTFOLIO =====-->
                   <section class="visit section" id="visit">
                <h2 class="section-title">CS 405</h2>

               <div class="skills__container bd-grid">
                        <p class="about__text">VUE.JS</p>
                    </div> 

                    <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <p class="about__text">VueJS is mostly used to create web interfaces and one-page apps. However, because of the HTML extensions and JS basis that operate in combination with an Electron framework, it can be used to construct both desktop and mobile apps, making it a popular frontend tool.</p>
                    </div> 
                   </section>

            <!--===== CONTACT =====-->
            <section class="years section" id="years">
                <h2 class="section-title">6 Years From Now</h2>

                <div class="skills__container bd-grid">
                <div class="skills__box">
                <p class="about__text">I can see myself in 6 years, having a successful online business and also having many resellers in time. Overall having such successful business is what I see in my future.</p>
</div>
                          </div>
                      </form>
                </div>
            </section>
        </main>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>

@stop