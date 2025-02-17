</div>
<footer>
        <div class="row">
            <div class="col-12 text-center">Logo</div>
            <ul>
            Quick Links
            <?php
            include('nav.php');
            foreach($navigation as $links){
                echo '<li><a href="' . $links['path'] . '" >' . $links['title'] . '</a></li>';
            } 
            ?>
            </ul>
            </div>
            <ul>
            Downloads
                <?php
                include('nav.php');
                foreach($Downloads as $links){
                    echo '<li><a href="' . $links['path'] . '" >' . $links['title'] . '</a></li>';
                } 
                ?>
            </ul>
            <ul>
            Socials
                <?php
                include('nav.php');
                foreach($socials as $social){
                    echo '<li><a href="' . $social['path'] . '" >' . $social['title'] . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </footer>
</body>
</html>