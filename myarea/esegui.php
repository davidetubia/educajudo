<?php include 'header.php'; ?>
<!-- @_d.ID-->
<div class="container-corso d-flex flex-grow-1 rotation-required">
    <article style="text-align:center">
            <a href="/myarea/mycorsi/next">
                <img src="../slides/1.jpg" alt="@_d.Titolo" style="margin-top:0px;width:100%" id="immaginislide">
            </a> 
    </article>
    
    <aside id="sidebarCorsi">
        <?php include 'sidebar.php'; ?>
    </aside>
</div>


    <script type='text/javascript'>
        document.getElementById('video-corso').addEventListener('ended', passaavantiHandler, false);
        function passaavantiHandler(e) {
            $.ajax({
                url: "/myarea/mycorsi/salvafine/?i=@_d.ID", success: function () {
                    $('#next-lesson').show();
                }
            });
        }
    </script>

<?php include 'footer.php'; ?>