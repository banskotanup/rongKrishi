<style type="text/css">
    
@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

    .dropdown {
        position: fixed;
        top: 0;
        right: 30px;
        z-index:999;
    }

/* Banner */
.navbar-toggler:focus{
    box-shadow: none;
}

      /* TABLE OF CONTENTS */
/* ------------------
1. General
2. Navbar
3. Banner
4. About
5. Services
6. Portfolio
7. Blog
8. Contact
9. Footer
-------------------- */

/* 1 General */
@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');


* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

:root {
    /* Background Color */
    --primary-color: #6b7908;
    --secondary-color: #6b7908;
    --bg-white: #fff;
    --bg-light: #faf8ff;
    --bg-black: #000;
    --bg-gray: #eee;
    --gradient: linear-gradient(to right, #b3c145 0%, #9fb111 100%), radial-gradient(circle at top left, #6b7908 , #abc008);

    /* Text Color */
    --primary-text: #6b7908;
    --secondary-text: #abc008;
    --text-white: #fff;
    --text-black: #000;
    --text-gray: #777;

    /* Font Family */
    --primary-font: 'Rubik', sans-serif;
    --secondary-font: 'Roboto', sans-serif;
}

body {
    font-family: var(--secondary-font);
    width: 100%;
    background-image: url('../images/body-bg.png.webp');
    background-repeat: no-repeat;
}

a {
    text-decoration: none;
}

/* 1 Custom CSS */

::-webkit-scrollbar {
    width: 0.25rem;
}

::-webkit-scrollbar-track {
    background: var(--bg-gray);
}

::-webkit-scrollbar-thumb {
    background: var(--primary-color);
}

section{
    padding: 5rem 0;
}

.main-btn{
    display: inline-block;
    font-family: var(--primary-font);
    font-weight: 500;
    font-size: 0.875rem;
    line-height: 2.875rem;
    text-align: center;
    cursor: pointer;
    text-transform: uppercase;
    border-radius: 0.3125rem;
    box-shadow: 0 0.625rem 1.875rem rgb(118, 85, 225 / 30%);
    border: double 0.125rem transparent;
    padding: 0 2.625rem;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;;
}

.primary-btn{
    background-image: var(--gradient);
    color: var(--text-white);
}

.primary-btn:hover{
    border-color: var(--secondary-color);
    background: var(--bg-white);
    color: var(--secondary-text);
    box-shadow: none;
}

.secondary-btn{
    background-image: var(--bg-white);
    color: var(--secondary-text);
    border-color: var(--secondary-color);
}

.secondary-btn:hover{
    background: var(--gradient);
    color: var(--text-white);
    box-shadow: none;
}

h1 {
    font-size: 4.375rem;
    line-height: 3.75rem;
    font-weight: 700;
    color: var(--text-black);
    margin-bottom: 1.25rem;
    font-family: var(--primary-font);
}

h2 {
    font-weight: 500;
    font-size: 2.5rem;
    line-height: 3.4375rem;
    margin-bottom: 1.5625rem;
    color: var(--text-black);
    font-family: var(--primary-font);
}

h3 {
    font-weight: 700;
    font-size: 2.25rem;
    line-height: 3.125rem;
    margin-bottom: 0.9375rem;
    color: var(--text-black);
    font-family: var(--primary-font);
    text-transform: uppercase;
}

h5 {
    font-weight: 500;
    font-size: 1.5rem;
    margin-bottom: 2.1875rem;
    color: var(--text-black);
}

p {
    color: var(--text-gray);
    font-size: 0.9375rem;
    line-height: 1.625rem;
    font-weight: 400;
}

/* 2.Navbar */
.header_wrapper .navbar{
    padding: 0.9375rem 0;
    -o-transition: all 0.2s linear;;
    -webkit-transition: all 0.2s linear;;
    transition: all 0.2s linear;

}

.header_wrapper .navbar-brand{
    max-width: 10rem;
    height: auto;
    margin-left: 10px;
}

.header_wrapper .navbar-toggler:focus{
    box-shadow: none;
}

.header_wrapper .nav-item{
    margin:0 0.625rem;
}

.header_wrapper .nav-item .nav-link, .dropdown{
    font-family: var(--primary-font);
    font-size: 0.9375rem;
    font-weight: 500;
    text-transform: uppercase;
    color: var(--text-black);
    display: inline-block;
}

.header_wrapper .nav-item .nav-link.active,
.header_wrapper .nav-item .nav-link:hover{
    color: var(--primary-text);
}

.header-scrolled{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: var(--bg-white);
    -webkit-box-shadow: 0 0.25rem 0.375rem rgba(12, 0, 46, 05);
    box-shadow: 0 0.25rem 0.375rem rgba(12, 0, 46, 05);
}

/*Banner */
.banner_wrapper{
    padding-top: 6.875rem;
    z-index: 1;
    background-image: url(../images/home-banner.png);
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
}

.banner_wrapper .banner-content{
    vertical-align: middle;
    align-self: center;

}

.banner_wrapper .banner-content h2::after{
    content: '';
    width: 60%;
    height: 0.125rem;
    position: absolute;
    top: 50%;
    left: 25%;
    background: var(--bg-black);
    overflow-x: hidden;
}

/*About*/
.about_wrapper .single-logo-item{
    width: 100%;
    height: 6.875rem;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border: 0.0625rem solid var(--bg-gray);
    box-shadow: none;
    -webkit-transition: all .4s ease 0s;
    -moz-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s;
}

.about_wrapper .single-logo-item:hover {
    border: 0.0625rem solid transparent;
    box-shadow: 0 0.5rem 1.875rem rgb(118 85 225 / 15%);
}

.about_wrapper .client-info {
    padding: 1.5625rem 1.875rem;
    background: var(--bg-light);
    position: relative;
    margin-top: 1.5625rem;
}

.about_wrapper .client-info:before {
    content: '';
    position: absolute;
    top: -1.5625rem;
    left: -3.4375rem;
    background: url('../images/client-info.webp');
    background-repeat: no-repeat;
    height: 10.9375rem;
    width: 10.9375rem;
}

.client-info .large {
    color: var(--secondary-text);
    font-family: var(--primary-font);
    font-size: 6.25rem;
    font-weight: 700;
    position: relative;
    z-index: 9;
}

.client-info .smll {
    text-align: left;
    color: var(--text-black);
    font-family: var(--primary-font);
    font-size: 1.25rem;
    margin-left: 1.25rem;
    font-weight: 500;
}

.call-now span {
    font-size: 3.75rem;
    font-weight: 700;
    color: #000;
}

.call-now p {
    color: var(--secondary-color);
    text-transform: uppercase;
    margin-bottom: 0.3125rem;
}


/*Services*/
.services_wrapper .card {
    background-color: var(--bg-light);
    cursor: pointer;
    -webkit-transition: all .4s ease 0s;
    -moz-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s;
}

.services_wrapper .card:hover {
    box-shadow: 0 0.9375rem 1.875rem rgb(77 87 222 / 30%);
    background: var(--bg-white);
}

/*Portfolio*/
.portfolio_wrapper .nav-link {
    font-size: 0.9375rem;
    font-weight: 500;
    margin-right: 0.25rem;
    color: var(--text-black);
    text-transform: uppercase;
}

.portfolio_wrapper .nav-link.active {
    color: var(--secondary-text);
    background-color: transparent;
}

.portfolio_wrapper .portfolio-img {
    position: relative;
    cursor: pointer;
}

.portfolio_wrapper .portfolio-img .overlay {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    -webkit-transition: all .4s ease 0s;
    -moz-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s;
}

.portfolio_wrapper .portfolio-img:hover .overlay {
    background: rgba(77, 87, 222, .5);
}

.portfolio-img .overlay i {
    font-size: 6.25rem;
    color: var(--text-white);
    position: absolute;
    top: 25%;
    left: 25%;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all .4s ease 0s;
    -moz-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s;
}

.portfolio_wrapper .portfolio-img:hover i {
    opacity: 1;
    visibility: visible;
    top: 50%;
    left: 50%;
}

/* 7 blog */

.blog_wrapper .card {
    position: relative;
    cursor: pointer;
}

.blog_wrapper .blog_details {
    position: absolute;
    top: 1.25rem;
    left: 1.25rem;
    right: 1.25rem;
    bottom: 1.25rem;
    background: rgba(34, 34, 34, .8);
    color: var(--text-white);
    transition: all .3s linear;
    display: flex;
    align-items: center;
    justify-content: center;
}

.blog_wrapper .card:hover .blog_details {
    background: rgba(68, 88, 220, .85);
}

.blog_wrapper .blog_details .border_line {
    margin: 0.625rem 0;
    background: var(--bg-white);
    width: 100%;
    height: 0.125rem;
}



/* 8 contact */
.newsletter {
    width: 100%;
    height: 100%;
    background-image: url('../images/subscribe-bg.webp');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 9.375rem 0;
}

.newsletter input {
    line-height: 3rem;
    padding: 0 1.5625rem;
    border: 0.125rem solid var(--bg-white);
    background: transparent;
    font-weight: 400;
    border-radius: 0.3125rem;
    color: var(--text-white);
}

.form-control:focus {
    color: var(--text-white);
    background-color: transparent;
    border-color: var(--bg-white);
    outline: 0;
    box-shadow: none;
}

.form-control::placeholder {
    color: var(--text-white);
}

/* footer */
.footer_wrapper .footer-logo img {
    max-width: 12.5rem;
    height: auto;
}

.footer_wrapper .social-icon li {
    margin: 0.375rem;
}

.footer_wrapper .social-icons a {
    line-height: 1.875rem;
    font-size: 1.5625rem;
    display: inline-block;
    color: var(--text-black);
    text-align: center;
    margin: 0 0.625rem;
}

.footer_wrapper .social-icons a:hover {
    color: var(--primary-color);
}

.footer_wrapper .copyright-text p {
    font-size: 0.6875rem;
    line-height: 1.25rem;
    font-weight: 600;
}

.footer_wrapper .footer-text a {
    color: var(--primary-color);
}




</style>