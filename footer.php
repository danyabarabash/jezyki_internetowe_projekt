<?php
function template_footer() {
    $year = date('Y');
    echo <<<EOT
        </main>
        <footer class="footer">
            <div class="container">
                <a href="login.php">Login</a>
                <p>&copy; $year, Traverly</p>           
            </div>
        </footer>
        <script src="js/bootstrap.bundle.min.js"></script>
           </body>
</html>
EOT;
}
?>



