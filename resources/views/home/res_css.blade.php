<style>
    @media(max-width: 1199.5px){
    /*Custom Css */
    h1{
        font-size: 3.75rem;
    }

    h2{
        font-size: 2.1875rem;
    }

    h3{
        font-size: 1.875rem;
        line-height: 2.6875rem;
    }

    h5{
        font-size: 1.0625rem;
    }


    /* Blog */
    .blog_wrapper .blog_details {
        position: absolute;
        top: 0.3125rem;
        left: 0.3125rem;
        right: 0.3125rem;
        bottom: 0.3125rem;
    }


}

@media(max-width: 991px){
    /*Navbar*/
    .header-scrolled{
        height: auto;
    }

    .header_wrapper .navbar-collapse{
        margin-top: -0.125rem;
    }

    .header_wrapper .menu-navbar-nav{
        text-align: center;
        background-color: var(--bg-white);
        padding-bottom: 0.9375rem;
    }

    .header_wrapper .nav-item .nav-link{
        margin-top: 0.9375rem;
    }

}

@media(max-width: 767px){
    /*Custom Css*/
    h1{
        font-size: 2.5rem;
        line-height: 3rem;
    }

    h2{
        font-size: 1.1875rem;
        line-height: 2.375rem;
    }

    h3{
        font-size: 1.5625rem;
        line-height: 2.875rem;
    }
    /*About*/
    .about_wrapper .client-info>div {
        justify-content: center;
    }

    .about_wrapper .client-info:before {
        top: 0.25rem;
        left: 2.8125rem;
    }
    
}

@media(max-width: 575.5px){
    /*Blog*/
    .blog_wrapper .blog_details {
        position: absolute;
        top: 2.1875rem;
        left: 2.1875rem;
        right: 2.1875rem;
        bottom: 2.1875rem;
    }
}

@media(max-width: 390px){
    /*Top Banner*/
    .banner_wrapper .banner-content h2::after {
        left: 34%;
    }
    
}
</style>