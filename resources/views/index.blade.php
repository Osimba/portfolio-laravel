@extends('layouts.app')
@section('content')
<main>
    <section id="About" class="text-center">
        <h1 class="d-none d-md-block">Problem Solver</h1>
        <h1>Web Application Developer</h1>
        <img src="{{ asset('img/osei-quashie-web-developer.jpg') }}" alt="osei-quashie"
            class="image-circle">
        <br><br>
        <h1>Osei Quashie</h1>

        <br><br>
        <a href="#Hire"><button class="btn button-link btn-lg">Hire Me</button></a>
    </section>

    <div class="contact-info row text-center" style="margin: 0 auto;">
        <div class="col-md-3 contact-item">
            <a href="mailto:osiqua@gmail.com">
                <i class="fas fa-envelope"></i>
                <span>osiqua@gmail.com</span>
            </a>
        </div>
        <div class="col-md-3 contact-item">
            <a href="tel:6025524941">
                <i class="fas fa-phone"></i>
                <span>6025524941</span>
            </a>
        </div>
        <div class="col-md-3 contact-item">
            <a href="https://www.linkedin.com/in/osei-quashie/">
                <i class="fab fa-linkedin"></i>
                <span>LinkedIn</span>
            </a>
        </div>
        <div class="col-md-3 contact-item">
            <a href="https://github.com/Osimba">
                <i class="fab fa-github"></i>
                <span>Github</span>
            </a>
        </div>
    </div>

    <section class="text-center experiences">
        <h2>About Me</h2>
        <br>
        <div class="container">
            <p>Quality Web Developer with a passion for learning and understanding how applications work. 4.9 Rating on
                Upwork as a freelance web developer with a Job Success rating of 100%. Developed a marketplace web app
                with buyers and sellers, a realtime messenger, and a dashboard to help a local church process contact
                data. Committed to customer satisfaction and being a self-starter.</p>
            <p>Currently taking on freelance work unil I can find a good opportunity at the right company. I love working in Laravel and VueJS, but I'm open to working in any programming language.</p>
        </div>
    </section>

    <section id="Portfolio" class="client-work text-center">

        <h2>Client Work</h2>
        <div class="row project-title container">
            <h3 class="col-lg-5"><strong>Musetudio</strong></h3>
        </div>

        <div class="row project-row container">
            <div class="col-lg-5 project-img"><img src="{{ asset('img/musetudio-mobile.png') }}"></div>

            <div class="col project-details">
                <p><strong>Project Details:</strong></p>

                <ul>
                    <li>Developed a marketplace for sellers to post products and buyers to purchase.</li>
                    <li>Implements Pusher to allow users to send messages in real time.</li>
                    <li>Displays sales and order information on graphs using ChartJS.</li>
                    <li>Added admin functionality that allows admins to approve user content.</li>
                    <li>Uses Stripe Marketplace to charge buyers and payout sellers.</li>
                    <li>Still being worked on...</li>
                </ul>

                <p><strong>Technologies Used:</strong></p>
                <p>PHP, Laravel, Bootstrap, JavaScript, JQuery, AJAX, MySQL</p>

                <div class="project-link">
                    <a target="_blank" href="https://musetudio.com/">
                        <button class="btn button-link btn-lg">Check it out</button>
                    </a>

                </div>
            </div>
        </div> <!-- project-row -->

        <hr class="divider">

        <div class="row project-title container">
            <h3 class="col-lg-5"><strong>NJ Word</strong></h3>
        </div>

        <div class="row project-row container">
            <div class="col-lg-5 project-img"><img src="{{ asset('img/njword-dashboard.PNG') }}"></div>

            <div class="col project-details">
                <p><strong>Project Details:</strong></p>

                <ul>
                    <li>Created a way for local church members to track the number of times delivering a subject</li>
                    <li>Uses Laravel's Authentication to log user in to their account.</li>
                    <li>After inputting the signature information, it will be saved in the database and the progress bar will adjust.</li>
                    <li>The user can also select the star associated with a signature and edit it.</li>
                </ul>

                <p><strong>Technologies Used:</strong></p>
                <p>PHP, Laravel, Bootstrap, JavaScript, VueJS, Axios, MySQL</p>

                <div class="row">
                    <div class="project-link col-12 col-sm-6">
                        <a target="_blank" href="https://github.com/Osimba/njword/">
                            <button class="btn second-link btn-lg">Github</button>
                        </a>
                    </div>
                    <div class="project-link col-12 col-sm-6">
                        <a target="_blank" href="https://njword.proqweb.com/">
                            <button class="btn button-link btn-lg">Check it out</button>
                        </a>
                    </div>
                    
                </div>

                <p>Email: osiqua@hotmail.com</p>
                <p>Password: Password123</p>
            </div>
        </div> <!-- project-row -->

        <hr class="divider">

        <div class="row project-title container">
            <h3 class="col-lg-5"><strong>Anime Database</strong></h3>
        </div>

        <div class="row project-row container">
            <div class="col-lg-5 project-img"><img src="{{ asset('img/anime-list-members.jpg') }}"></div>

            <div class="col project-details">
                <p><strong>Project Details:</strong></p>

                <ul>
                    <li>Develop platform where users and create an account, log in and view information about anime</li>
                    <li>Provide pages that can only be accessed by those with an account.</li>
                    <li>Allow members to leave comments about an anime and add the anime to a watched list.</li>
                    <li>Members can rate the anime and view the rating of anime watched by other users</li>
                    <li>Discontinued...</li>
                </ul>

                <p><strong>Technologies Used:</strong></p>
                <p>HTML5, CSS3, Bootstrap, JavaScript, Ajax, PHP, MySQL</p>

                <div class="row">
                    <div class="project-link col-12 col-sm-6">
                        <a target="_blank" href="https://github.com/Osimba/anime-list/">
                            <button class="btn second-link btn-lg">Github</button>
                        </a>
                    </div>
                    <div class="project-link col-12 col-sm-6">
                        <a target="_blank" href="https://portfolio.proqweb.com/anime-list/">
                            <button class="btn button-link btn-lg">Check it out</button>
                        </a>
                    </div>
                </div>

                <p>Username: Testuser </p>
                <p>Password: Password123</p>
            </div>
        </div> <!-- project-row -->

        <hr class="divider">

        <div class="row project-title container">
            <h3 class="col-lg-5"><strong>Coin and History</strong></h3>
        </div>

        <div class="row project-row container">
            <div class="col-lg-5 project-img"><img src="{{ asset('img/coin-history-filter.JPG') }}"></div>
            <div class="col project-details">
                <p><strong>Project Details:</strong></p>

                <ul>
                    <li>Create MySQL database for storing each coin with it's information.</li>
                    <li>Display filter selection based off of values found in database.</li>
                    <li>Used AJAX to filter the coins and display the ones that match the criteria specified live.</li>
                    <li>Styled the display of the coins and their information.</li>
                </ul>

                <p><strong>Technologies Used:</strong></p>
                <p>HTML5, CSS3, Bootstrap, JavaScript, Ajax, PHP, MySQL</p>

                <div class="row">

                    <div class="project-link col-12 col-sm-6">
                        <a target="_blank" href="https://github.com/Osimba/coin-history/">
                            <button class="btn second-link btn-lg">Github</button>
                        </a>
                    </div>
                    <div class="project-link col-12 col-sm-6">
                        <a target="_blank" href="https://portfolio.proqweb.com/coin-history-demo/">
                            <button class="btn button-link btn-lg">Check it out</button>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- project-row -->

        <hr class="divider">

        <div class="row project-title container">
            <h3 class="col-lg-5"><strong>Preaching Dashboard</strong></h3>
        </div>

        <div class="row project-row container">
            <div class="col-lg-5 project-img"><img src="{{ asset('img/az-preaching-chart.JPG') }}"></div>
            <div class="col project-details">
                <p><strong>Project Details:</strong></p>

                <ul>
                    <li>Developed a dashboard that allowed a quick and easy way for all church members to see preaching results</li>
                    <li>Provided an easy to use table for church leaders to update daily preaching information for it to display on the dashboard </li>
                    <li>Created MySQL Database that contains each church's name and daily preaching information.</li>
                    <li>Created admin pages that were password protected for church leaders to log in and update their information</li>
                    <li>Displayed church data using Google Chart's Library.</li>
                </ul>

                <p><strong>Technologies Used:</strong></p>
                <p>HTML5, CSS3, Bootstrap, JavaScript, Google Charts, PHP, MySQL</p>

                <div class="row">
                    <div class="project-link col-12 col-sm-6">
                        <a target="_blank" href="https://github.com/Osimba/azfestival/">
                            <button class="btn second-link btn-lg">Github</button>
                        </a>
                    </div>
                    <div class="project-link col-12 col-sm-6">
                        <a target="_blank" href="https://azfestival.proqweb.com/">
                            <button class="btn button-link btn-lg">Check it out</button>
                        </a>
                    </div>
                    <p>Password: Elohim1948</p>
                </div>
            </div>
        </div> <!-- project-row -->

        <hr class="divider">

        <div class="row project-title container">
            <h3 class="col-lg-5"><strong>Metal Sculpture Studio</strong></h3>
        </div>

        <div class="row project-row container">
            <div class="col-lg-5 project-img"><img src="{{ asset('img/metal-sculpture-studio.JPG') }}"></div>
            <div class="col project-details">
                <p><strong>Project Details:</strong></p>

                <ul>
                    <li>Implimented Mulit-Carrier Shipping plugin and UPS Freight Shipping.</li>
                    <li>Altered design to be more user friendly and responsive.</li>
                    <li>Helped to lower page loading times with caching and compressing image files.</li>
                </ul>

                <p><strong>Technologies Used:</strong></p>
                <p>PHP, Wordpress</p>

                <div class="project-link">
                    <a href="https://www.metalsculpturestudio.com/" target="_blank">
                        <button class="btn button-link btn-lg">Check it out</button>
                    </a>
                </div>
            </div>
        </div> <!-- project-row -->

        <hr class="divider">

        <div class="row project-title container">
            <h3 class="col-lg-5"><strong>Dental Service Page</strong></h3>
        </div>

        <div class="row project-row container">
            <div class="col-lg-5 project-img"><img src="{{ asset('img/dental-page.JPG') }}"></div>
            <div class="col project-details">
                <p><strong>Project Details:</strong></p>

                <ul>
                    <li>Developed responsive landing page to help convert visitors to request a free consultation.</li>
                </ul>

                <p><strong>Technologies Used:</strong></p>
                <p>Wordpress</p>

                <div class="project-link">
                    <a href="https://visitcaringsmiles.com/services-type/all-on-4/" target="_blank">
                        <button class="btn button-link btn-lg">Check it out</button>
                    </a>
                </div>
            </div>
        </div> <!-- project-row -->

        <hr class="divider">

        <div class="row project-title container">
            <h3 class="col-lg-5"><strong>Jitseasy</strong></h3>
        </div>

        <div class="row project-row container">
            <div class="col-lg-5 project-img"><img src="{{ asset('img/jitseasy-filter-open.JPG') }}"></div>
            <div class="col project-details">
                <p><strong>Project Details:</strong></p>

                <ul>
                    <li>Hid category items in a div that opens when category title is clicked</li>
                    <li>Used CSS and Javascript to indent the child category items.</li>
                    <li>Removed pagination links and allowed for vidoes to autoload when user reaches bottom of page.</li>
                    <li>Allowed ad to remain on the screen when user scrolls passed it.</li>
                </ul>

                <p><strong>Technologies Used:</strong></p>

                <p>HTML5, CSS3, JavaScript, Wordpress, Toolset</p>

                <div class="project-link">
                    <a href="https://www.jitseasy.com/" target="_blank">
                        <button class="btn button-link btn-lg">Check it out</button>
                    </a>
                </div>
            </div>
        </div> <!-- project-row -->

    </section>

    <section class="testimonials text-center">
        <h2>Testimonials</h2>
        <div class="row container">
            <div class="col-sm-12">
                <x-testimonial 
                    num="0"
                    image1="{{ asset('img/upwork-1.PNG') }}"
                    image2="{{ asset('img/upwork-2.PNG') }}"
                    image3="{{ asset('img/upwork-3.PNG') }}"
                    image4="{{ asset('img/upwork-4.PNG') }}"
                />
            </div>
        </div>
    </section>

    <section class="personal-projects text-center">
        <h2>Personal Projects</h2>
        <div class="row">
            <div class="arrows left"><span>&#10094;</span></div>
            <div class="thumbnails">
                <ul class="slider">
                    <li><a href="https://portfolio.proqweb.com/02" target="_blank"><img src="{{ asset('img/portfolio-image-02.png') }}" alt="php-store-and-blog">
                            <p class="proj-info">Created a mock website for a client. Also has an online store and a
                                blog. Product data for the store is pulled from a MySQL database. <br>Used: HTML, CSS,
                                PHP, MySQL.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/03" target="_blank"><img src="{{ asset('img/portfolio-image-03.png') }}" alt="picture-slider">
                            <p class="proj-info">Created a slider that has a featured picture amoung a gallery of
                                pictures. The featured picture changes to the selected image. Not responsive. <br>Used:
                                HTML, CSS, Javascript.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/05" target="_blank"><img src="{{ asset('img/portfolio-image-05.png') }}" alt="simon-game">
                            <p class="proj-info">Created the original Simon game. <br>Used: HTML, CSS, Javascript,
                                JQuery.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/06" target="_blank"><img src="{{ asset('img/portfolio-image-06.png') }}" alt="tic-tac-toe-game">
                            <p class="proj-info">Created the Tic Tac Toe game against an unbeatable computer. <br>Used:
                                HTML, CSS, Javascript, JQuery.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/07" target="_blank"><img src="{{ asset('img/portfolio-image-07.png') }}" alt="pomodoro-clock">
                            <p class="proj-info">Created a Pomodoro Clock that allows the user to adjust the work and
                                break times. <br>Used: HTML, CSS, Javascript, JQuery.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/08" target="_blank"><img src="{{ asset('img/portfolio-image-08.png') }}" alt="calculator">
                            <p class="proj-info">Created a basic calculator. <br>Used: HTML, CSS, Javascript, JQuery.
                            </p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/09" target="_blank"><img src="{{ asset('img/portfolio-image-09.png') }}" alt="twitch-tv">
                            <p class="proj-info">Created an interface that displays Twitch.tv profile information. The
                                user can also toggle the list to view online, offline or all. <br>Used: HTML, CSS,
                                Javascript, JQuery, Twitch.tv API.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/10" target="_blank"><img src="{{ asset('img/portfolio-image-10.png') }}" alt="wikipedia-search">
                            <p class="proj-info">Created interface that displays a list of wikipedia articles related to
                                what the user searched. <br>Used: HTML, CSS, Javascript, JQuery, Wikipedia API.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/11" target="_blank"><img src="{{ asset('img/portfolio-image-11.png') }}" alt="local-weather-app">
                            <p class="proj-info">Created interface that displays the user's location, temperature, and
                                wind speed/direction. <br>Used: HTML, CSS, Javascript, JQuery, Weather API.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/12" target="_blank"><img src="{{ asset('img/portfolio-image-12.png') }}" alt="random-quote-generator">
                            <p class="proj-info">Created interface that shows a random quote when the user clicks a
                                button. The user can also tweet the quote. <br>Used: HTML, CSS, Javascript, JQuery,
                                Random Quote API, Twitter API.</p>
                        </a></li>
                    <li><a href="https://portfolio.proqweb.com/13" target="_blank"><img src="{{ asset('img/portfolio-image-13.png') }}" alt="tribute-page">
                            <p class="proj-info">Created a simple tribute page. <br>Used: HTML, CSS.</p>
                        </a></li>
                </ul>
            </div>
            <div class="arrows right"><span>&#10095;</span></div>
        </div>
    </section>

    <section id="Hire" class="contact text-center container">
        <h2>Contact</h2>
        <p>If you have any questions or would like to speak with me about an open position, you can email me or just fill out the form and I will get back to you.</p>
        <p>EMAIL: <a href="mailto:osiqua@gmail.com">osiqua@gmail.com</a></p>
        <br>
        <form method="post" action="{{ route('send.message') }}">
            @csrf
            <div class="row">
                <div class="text-center form-group center-block col-12">
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                </div>
                <div class="text-center form-group center-block col-12">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                </div>
                <div class="text-center form-group center-block col-12">
                    <textarea class="form-control" name="message">{{ old('message') }}</textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-lg button-link" value="Hire Me">
            </div>
        </form>
        <br><br>
    </section>
</main>

@endsection
