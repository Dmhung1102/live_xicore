<?php
?>
<footer class="py-3 my-4">
    <div class="container-lg">
        <div class="footer_wrapper">
            <h1 class="text-white">The latest Champions League Group A Live Scores, plus Results, Fixtures & Tables</h1>
            <h2 class="text-white">All the live scores, fixtures and tables for Champions League Group A from LiveSport.com.</h2>
            <div class="footer_meta text-white">The LiveScore website powers you with live football scores and fixtures from Champions League Group A. Keep up to date with the latest Group A score, Group A results, Group A standings and Group A schedule.</div>
            <div class="footer_copyright text-white">
                © 1998-2023 LiveSport
            </div>
            <div class="footer_links">
                    <span>
                        <a href="">Carrers</a>
                    </span>
                <span>
                        <a href="">Mobile</a>
                    </span>
                <span>
                        <a href="">Advertise</a>
                    </span>
                <span>
                        <a href="">Faq</a>
                    </span>
                <span>
                        <a href="">Contact</a>
                    </span>
                <span>
                        <a href="">News Publishers</a>
                    </span>
                <span>
                        <a href="">Privacy Notice</a>
                    </span>
                <span>
                        <a href="">Cookie Policy</a>
                    </span>
                <span>
                        <a href="">Terms of Use</a>
                    </span>
                <span>
                        <a href="">Modern Slavery Statement</a>
                    </span>
                <span>
                        <a href="">Corporate</a>
                    </span>
            </div>
        </div>
    </div>
    <div class="menu_bottom d-lg-none container-lg">
        <ul class="d-flex justify-content-between ps-0">
            <li class="nav-item">
                <a class="nav-link d-flex flex-column text-center align-items-center special_svg active" aria-current="page" href="/home.php">
                        <span class="no_active_svg">
                            <?php include 'assets/icons/svg/football_nav.php'?>
                        </span>
                    <span class="active_svg">
                            <?php include 'assets/icons/svg/football_nav_active.php'?>
                        </span>
                    <span class="fs-10" style="color: #5E6272">Scores</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex flex-column text-center normal_svg align-items-center" aria-current="page" href="/favorite.php">
                        <span class="no_active_svg">
                            <?php include 'assets/icons/svg/heart.php'?>
                        </span>
                    <span class="active_svg">
                            <?php include 'assets/icons/svg/heart_active.php'?>
                        </span>
                    <span class="fs-10" style="color: #5E6272">Favourites</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex flex-column text-center normal_svg align-items-center" aria-current="page" href="/watch.php">
                        <span class="no_active_svg">
                            <?php include 'assets/icons/svg/watch.php'?>
                        </span>
                    <span class="active_svg">
                            <?php include 'assets/icons/svg/watch_active.php'?>
                        </span>
                    <span class="fs-10" style="color: #5E6272">Watch</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex flex-column text-center normal_svg align-items-center" aria-current="page" href="/news.php">
                        <span class="no_active_svg">
                            <?php include 'assets/icons/svg/news.php'?>
                        </span>
                    <span class="active_svg">
                            <?php include 'assets/icons/svg/news_active.php'?>
                        </span>
                    <span class="fs-10" style="color: #5E6272">News</span>
                </a>
            </li>
        </ul>
    </div>
</footer>
<div class="offcanvas offcanvas-start" tabindex="-1" id="menuOffCanvas" aria-labelledby="menuOffCanvasLabel">
    <div class="offcanvas-header">
        <img class="mt-3" src="/assets/images/logo_text.png" width="150" height="35" alt="">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!--            <div class="d-flex">-->
        <!--                <a class="border-1 login_button navbar_account_button" href="javascript:void(0)" type="button" data-bs-target="#modal_login">Log in</a>-->
        <!--                <a class="border-1 register_button navbar_account_button" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal_register">Join Now</a>-->
        <!--            </div>-->
        <div>
            <ul class="nav_list">
                <li class="nav_item fs-14">
                    <a href="/preferencecs.php" class="nav_item_link active">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15.5 12C15.5 13.933 13.933 15.5 12 15.5C10.067 15.5 8.5 13.933 8.5 12C8.5 10.067 10.067 8.5 12 8.5C13.933 8.5 15.5 10.067 15.5 12Z" stroke="white" stroke-width="1.5"/>
                                <path d="M20.7906 9.15201C21.5969 10.5418 22 11.2366 22 12C22 12.7634 21.5969 13.4582 20.7906 14.848L18.8669 18.1638C18.0638 19.548 17.6623 20.2402 17.0019 20.6201C16.3416 21 15.5402 21 13.9373 21H10.0627C8.45982 21 7.6584 21 6.99807 20.6201C6.33774 20.2402 5.93619 19.548 5.13311 18.1638L3.20942 14.848C2.40314 13.4582 2 12.7634 2 12C2 11.2366 2.40314 10.5418 3.20942 9.152L5.13311 5.83621C5.93619 4.45196 6.33774 3.75984 6.99807 3.37992C7.6584 3 8.45982 3 10.0627 3H13.9373C15.5402 3 16.3416 3 17.0019 3.37992C17.6623 3.75984 18.0638 4.45197 18.8669 5.83622L20.7906 9.15201Z" stroke="white" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <span>Preferencecs</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M18.952 8.60657L21.4622 8.45376C19.6629 3.70477 14.497 0.999917 9.4604 2.34474C4.09599 3.77711 0.909632 9.26107 2.34347 14.5935C3.77731 19.926 9.28839 23.0876 14.6528 21.6553C18.6358 20.5917 21.4181 17.2946 22 13.4844" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 8V12L14 14" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>Clear Cache</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15 9L9 14.9996M15 15L9 9.00039" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z" stroke="#5E6272" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <span>Clear Cache</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="/default_sport.php" class="nav_item_link justify-content-between">
                        <div class="d-flex">
                            <div class="grey_stroke_svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M19 9H6.65856C5.65277 9 5.14987 9 5.02472 8.69134C4.89957 8.38268 5.25517 8.01942 5.96637 7.29289L8.21091 5" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 15H17.3414C18.3472 15 18.8501 15 18.9753 15.3087C19.1004 15.6173 18.7448 15.9806 18.0336 16.7071L15.7891 19" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <span>Default Sport</span>
                        </div>
                        <span class="grey_fill_svg">
                                <?php include 'assets/icons/svg/football.php'?>
                            </span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="notifications.php" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M2.52992 14.394C2.31727 15.7471 3.268 16.6862 4.43205 17.1542C8.89481 18.9486 15.1052 18.9486 19.5679 17.1542C20.732 16.6862 21.6827 15.7471 21.4701 14.394C21.3394 13.5625 20.6932 12.8701 20.2144 12.194C19.5873 11.2975 19.525 10.3197 19.5249 9.27941C19.5249 5.2591 16.1559 2 12 2C7.84413 2 4.47513 5.2591 4.47513 9.27941C4.47503 10.3197 4.41272 11.2975 3.78561 12.194C3.30684 12.8701 2.66061 13.5625 2.52992 14.394Z" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 21C9.79613 21.6219 10.8475 22 12 22C13.1525 22 14.2039 21.6219 15 21" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="" class="nav_item_link justify-content-between">
                        <div class="d-flex">
                            <div class="grey_stroke_svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 8.37931H11.5M11.5 8.37931H14.5M11.5 8.37931V7M17 8.37931H14.5M14.5 8.37931C13.9725 10.2656 12.8679 12.0487 11.6071 13.6158M11.6071 13.6158C10.5631 14.9134 9.41205 16.0628 8.39286 17M11.6071 13.6158C10.9643 12.8621 10.0643 11.6426 9.80714 11.0909M11.6071 13.6158L13.5357 15.6207" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z" stroke="#5E6272" stroke-width="1.5"/>
                                </svg>
                            </div>
                            <span>Language</span>
                        </div>
                        <span>English</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5.5 9C5.5 5.70017 5.5 4.05025 6.4519 3.02513C7.40381 2 8.93587 2 12 2C15.0641 2 16.5962 2 17.5481 3.02513C18.5 4.05025 18.5 5.70017 18.5 9V15C18.5 18.2998 18.5 19.9497 17.5481 20.9749C16.5962 22 15.0641 22 12 22C8.93587 22 7.40381 22 6.4519 20.9749C5.5 19.9497 5.5 18.2998 5.5 15V9Z" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M12 19H12.009" stroke="#5E6272" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11 5H13" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 8.5C22 8.5 21 8.846 21 9.8125C21 10.779 22 11.0335 22 12C22 12.9665 21 13.221 21 14.1875C21 15.154 22 15.5 22 15.5" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 8.5C2 8.5 3 8.846 3 9.8125C3 10.779 2 11.0335 2 12C2 12.9665 3 13.221 3 14.1875C3 15.154 2 15.5 2 15.5" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>Vibration</span>
                    </a>
                </li>
                <li>
                    <hr style="color: #A8CDFF; opacity: 0.5;">
                </li>
                <li class="nav_item fs-14">
                    <a href="help.php" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#5E6272" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                                <path d="M9.5 10C9.5 8.61929 10.6193 7.5 12 7.5C13.3807 7.5 14.5 8.61929 14.5 10C14.5 11.3807 13.3807 12.5 12 12.5V14.5M12 16V17.5" stroke="#5E6272" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <span>Help</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 15C5 11.134 8.13401 8 12 8C15.866 8 19 11.134 19 15C19 18.866 15.866 22 12 22C8.13401 22 5 18.866 5 15Z" stroke="#5E6272" stroke-width="1.5" stroke-linejoin="round"/>
                                <path d="M16.5 9.5V6.5C16.5 4.01472 14.4853 2 12 2C9.51472 2 7.5 4.01472 7.5 6.5V9.5" stroke="#5E6272" stroke-width="1.5" stroke-linejoin="round"/>
                                <path d="M12 15H12.009" stroke="#5E6272" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>Privacy</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="new_publishers.php" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M10 8H19M10 12H13M19 12H16M10 16H13M19 16H16" stroke="#5E6272" stroke-width="1.5" stroke-linejoin="round"/>
                                <path d="M2 7.5V6.75H1.25V7.5H2ZM6.99995 3.5V2.75C6.58574 2.75 6.24995 3.08579 6.24995 3.5H6.99995ZM22 3.5H22.75C22.75 3.08579 22.4142 2.75 22 2.75V3.5ZM6.24995 7.5L6.24999 18H7.74999L7.74995 7.5H6.24995ZM2.75 18V7.5H1.25V18H2.75ZM2 8.25H6.99995V6.75H2V8.25ZM6.24999 18C6.24999 18.9665 5.46649 19.75 4.5 19.75V21.25C6.29492 21.25 7.75 19.7949 7.74999 18H6.24999ZM1.25 18C1.25 19.7949 2.70507 21.25 4.5 21.25V19.75C3.5335 19.75 2.75 18.9665 2.75 18H1.25ZM7.74995 7.5V3.5H6.24995V7.5H7.74995ZM6.99995 4.25H22V2.75H6.99995V4.25ZM21.25 3.5V18H22.75V3.5H21.25ZM19.5 19.75H4.5V21.25H19.5V19.75ZM21.25 18C21.25 18.9665 20.4665 19.75 19.5 19.75V21.25C21.2949 21.25 22.75 19.7949 22.75 18H21.25Z" fill="#5E6272"/>
                            </svg>
                        </div>
                        <span>New Publishers</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="/consent_preferences.php" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M18.9905 19H19M18.9905 19C18.3678 19.6175 17.2393 19.4637 16.4479 19.4637C15.4765 19.4637 15.0087 19.6537 14.3154 20.347C13.7251 20.9374 12.9337 22 12 22C11.0663 22 10.2749 20.9374 9.68457 20.347C8.99128 19.6537 8.52349 19.4637 7.55206 19.4637C6.76068 19.4637 5.63218 19.6175 5.00949 19C4.38181 18.3776 4.53628 17.2444 4.53628 16.4479C4.53628 15.4414 4.31616 14.9786 3.59938 14.2618C2.53314 13.1956 2.00002 12.6624 2 12C2.00001 11.3375 2.53312 10.8044 3.59935 9.73817C4.2392 9.09832 4.53628 8.46428 4.53628 7.55206C4.53628 6.76065 4.38249 5.63214 5 5.00944C5.62243 4.38178 6.7556 4.53626 7.55208 4.53626C8.46427 4.53626 9.09832 4.2392 9.73815 3.59937C10.8044 2.53312 11.3375 2 12 2C12.6625 2 13.1956 2.53312 14.2618 3.59937C14.9015 4.23907 15.5355 4.53626 16.4479 4.53626C17.2393 4.53626 18.3679 4.38247 18.9906 5C19.6182 5.62243 19.4637 6.75559 19.4637 7.55206C19.4637 8.55858 19.6839 9.02137 20.4006 9.73817C21.4669 10.8044 22 11.3375 22 12C22 12.6624 21.4669 13.1956 20.4006 14.2618C19.6838 14.9786 19.4637 15.4414 19.4637 16.4479C19.4637 17.2444 19.6182 18.3776 18.9905 19Z" stroke="#5E6272" stroke-width="1.5"/>
                                <path d="M9 12.8929L10.8 14.5L15 9.5" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>Consent Preferences</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5.18007 15.2964C3.92249 16.0335 0.625212 17.5386 2.63348 19.422C3.6145 20.342 4.7071 21 6.08077 21H13.9192C15.2929 21 16.3855 20.342 17.3665 19.422C19.3748 17.5386 16.0775 16.0335 14.8199 15.2964C11.8709 13.5679 8.12906 13.5679 5.18007 15.2964Z" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C12.2091 3 14 4.79086 14 7Z" stroke="#5E6272" stroke-width="1.5"/>
                                <path d="M19.5 4V9M22 6.5H17" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>Add Friend</span>
                    </a>
                </li>
                <li class="nav_item fs-14">
                    <a href="/contact_us.php" class="nav_item_link">
                        <div class="grey_stroke_svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M8.5 14.5H15.5M8.5 9.5H12" stroke="#5E6272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.1706 20.8905C18.3536 20.6125 21.6856 17.2332 21.9598 12.9909C22.0134 12.1607 22.0134 11.3009 21.9598 10.4707C21.6856 6.22838 18.3536 2.84913 14.1706 2.57107C12.7435 2.47621 11.2536 2.47641 9.8294 2.57107C5.64639 2.84913 2.31441 6.22838 2.04024 10.4707C1.98659 11.3009 1.98659 12.1607 2.04024 12.9909C2.1401 14.536 2.82343 15.9666 3.62791 17.1746C4.09501 18.0203 3.78674 19.0758 3.30021 19.9978C2.94941 20.6626 2.77401 20.995 2.91484 21.2351C3.05568 21.4752 3.37026 21.4829 3.99943 21.4982C5.24367 21.5285 6.08268 21.1757 6.74868 20.6846C7.1264 20.4061 7.31527 20.2668 7.44544 20.2508C7.5756 20.2348 7.83177 20.3403 8.34401 20.5513C8.8044 20.7409 9.33896 20.8579 9.8294 20.8905C11.2536 20.9852 12.7435 20.9854 14.1706 20.8905Z" stroke="#5E6272" stroke-width="1.5" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="offcanvas-footer">
        <a href="javascript:void(0)" type="button" data-bs-toggle="modal" data-bs-target="#modal_login" class="login_button open_modal_offcanvas">
            Login
        </a>
        <div class="text-center register_box text-white">
            Don't have account? <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal_register" class="register_button open_modal_offcanvas">Sign Up</a>
        </div>
    </div>
</div>
<?php include 'modal_login.php'?>
<?php include 'modal_register.php'?>
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/bootstrap/js/color-modes.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/owl.carousel.setup.js"></script>
<script src="/assets/js/modal_login.js"></script>
<script src="/assets/js/custom.js"></script>
</body>
</html>
