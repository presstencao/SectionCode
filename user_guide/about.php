<?php include_once ('./header.php'); ?>

<main><div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m9">
                    <h1 class="header center-on-small-only">About</h1>
                    <h4 class ="light red-text text-lighten-4 center-on-small-only">Learn about the Material Design and our Project Team.</h4>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <!--  Outer row  -->
        <div class="row">

            <div class="col s12 m9 l10">
                <!--  Material Design -->
                <div id="sectioncode" class="section scrollspy">
                    <h2 class="header">Section Code</h2>
                    <p class="caption">Created and designed by Google, Material Design is a design language that combines the classic principles of successful design
                        along with innovation and technology. Google's goal is to develop a system of design that allows for a unified user experience
                        across all their products on any platform.</p>
                    <div class="video-container">
                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="row section">
                        <h3 class="header light">Principles</h3>
                        <div class="col s12 l4">
                            <img class="promo" src="images/metaphor.png">
                            <h4 class="center">Material is the metaphor</h4>
                            <p class="light">The metaphor of material defines the relationship between space and motion. The idea is that the technology is inspired by paper and ink and is utilized to facilitate creativity and innovation. Surfaces and edges provide familiar visual cues that allow users to quickly understand the technology beyond the physical world.</p>
                            <br>
                        </div>

                        <div class="col s12 l4">
                            <img class="promo" src="images/bold.png">
                            <h4 class="center">Bold, graphic, intentional</h4>
                            <p class="light">Elements and components such as grids, typography, color, and imagery are not only visually pleasing, but also create a sense of hierarchy, meaning, and focus. Emphasis on different actions and components create a visual guide for users.</p>
                            <br>
                        </div>

                        <div class="col s12 l4">
                            <img class="promo" src="images/motion.png">
                            <h4 class="center">Motion provides meaning</h4>
                            <p class="light">Motion allows the user to draw a parallel between what they see on the screen and in real life. By providing both feedback and familiarity, this allows the user to fully immerse him or herself into unfamiliar technology. Motion contains consistency and continuity in addition to giving users additional subconscious information about objects and transformations.</p>
                        </div>
                    </div>
                </div>

                <!--  About the Team-->
                <div id="team" class="section scrollspy">
                    <div class="row">
                        <h2 class="header">Meet the Team</h2>
                        <p class="caption">We are a team of students from Carnegie Mellon University.</p>
                        <div class="s12 center">
                            <div class="image-container">
                                <img src="images/materialize_team.jpeg" style="width:100%;">
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="row">
                        <div class="col s12 m3 center-on-small-only">
                            <div class="image-container">
                                <img src="images/alvin.png">
                            </div>
                        </div>
                        <div class="col s12 m9">
                            <h4>Alvin Wang</h4>
                            <p>Alvin is an Information Systems and Human Computer Interaction Major. He worked as a Software Engineer at Fidelity Investments this past summer.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m3 center-on-small-only">
                            <div class="image-container">
                                <img src="images/Alan.png">
                            </div>
                        </div>
                        <div class="col s12 m9">
                            <h4>Alan Chang</h4>
                            <p>Alan is an Information Systems major with a minor in computer science. He worked at as a Front End Developer at Shift Collaborative this past summer.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m3 center-on-small-only">
                            <div class="image-container">
                                <img src="images/alex.png">
                            </div>
                        </div>
                        <div class="col s12 m9">
                            <h4>Alex Mark</h4>
                            <p>Alex is an Information Systems major with a minor in Human Computer Interaction. He worked as a software developer for Intuit this past summer.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m3 center-on-small-only">
                            <div class="image-container">
                                <img src="images/kevin.png">
                            </div>
                        </div>
                        <div class="col s12 m9">
                            <h4>Kevin Louie</h4>
                            <p>Kevin is an Information Systems major with a minor in Human Computer Interaction. This past summer, he worked as a technology analyst at PPG Industries.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Table of Contents -->
            <div class="col hide-on-small-only m3 l2">
                <div class="toc-wrapper">
                    <div style="height: 1px;">
                        <ul class="section table-of-contents">
                            <li><a href="#sectioncode">Section Code</a></li>
                            <li><a href="#team">Meet the Team</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- End Container -->
</main>

<?php
include_once ('./footer.php');
