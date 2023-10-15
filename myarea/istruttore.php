
@{
    ViewBag.Title = "istruttore";
    Layout = "~/Views/Shared/_LayoutMyArea.cshtml";
}

<!-- instructor profile block -->
<section class="container instructor-profile-block">
    <div class="row">
        <!-- profiler aside -->
        <aside class="col-xs-12 col-sm-4 col-lg-3 profiler-aside">
            <!-- profile info -->
            <div class="profile-info bg-dark">
                <div class="aligncenter">
                    <img src="images/fabio-della-moglie.jpeg" alt="Fabio Della Moglie">
                </div>
                <dl>
                    <dd><a href="mailto:&#069;&#120;&#097;&#109;&#112;&#108;&#101;&#064;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;">&#069;&#120;&#097;&#109;&#112;&#108;&#101;&#064;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;</a></dd>
                </dl>
                <hr class="sep">
                <ul class="socail-networks list-unstyled">
                    <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
                    <li><a href="#" class="linkedin"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>

        </aside>
        <!-- profile desription content -->
        <article class="col-xs-12 col-sm-8 col-lg-9 profile-desription-content">
            <!-- list feature box -->
            <div class="list-feature-box">
                <h3>Lospher Cook</h3>
                <ul class="list-unstyled listDefault">
                    <li>Role: Front End Developer</li>
                    <li>Experience: 12 years</li>
                    <li>Specialist in: Digital Media</li>
                    <li>Current work: Good Studio</li>
                </ul>
            </div>
            <h3>Biografia</h3>
            <p>Fusce eleifend donec sapien sed phase lusa. Pellentesque lacus vamus lorem arcu semper duiacCras ornare arcu avamus nda leo. Etiam ind arcu morbi us justo mauris tempus pharetra interdum at congue semper purus. acus vamu lorem arcu semper duiacCras ornare arcu</p>

            <h3 class="content-h3">Corsi con suoi contenuti:</h3>
            <div class="table-wrap">
                <!-- topics data table -->
                <table class="table topics-data-table tab-full-responsive">
                    <thead class="bg-theme text-uppercase hidden-xs">
                        <tr>
                            <th>Nome del corso</th>
                            <th>Nome della lezione</th>
                            <th>Durata</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-title="Course Name"><span><a href="single-corso.php">Nome del corso</a></span></td>
                            <td data-title="Lesson Name"><span>Lezione 1.2.1.1</span></td>
                            <td data-title="Length"><span>9 minuti</span></td>
                        </tr>
                        <tr>
                            <td data-title="Course Name"><span><a href="single-corso.php">Nome del corso</a></span></td>
                            <td data-title="Lesson Name"><span>Lezione 1.2.1.1</span></td>
                            <td data-title="Length"><span>9 minuti</span></td>
                        </tr>
                        <tr>
                            <td data-title="Course Name"><span><a href="single-corso.php">Nome del corso</a></span></td>
                            <td data-title="Lesson Name"><span>Lezione 1.2.1.1</span></td>
                            <td data-title="Length"><span>9 minuti</span></td>
                        </tr>
                        <tr>
                            <td data-title="Course Name"><span><a href="single-corso.php">Nome del corso</a></span></td>
                            <td data-title="Lesson Name"><span>Lezione 1.2.1.1</span></td>
                            <td data-title="Length"><span>9 minuti</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>
    </div>
</section>

