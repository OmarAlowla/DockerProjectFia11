<script src="./js/main.js?t=51" defer></script>
<script src="../js/app.js?v=99" defer></script>
<script>
function IsLogged() {
    $(".sys li:nth-child(2) a").html('Log Out');
    $(".sys li:nth-child(2) a").attr("href", "../logout/")
    $(".sys li:nth-child(1) a").attr("href", "../UserProfile/")
    $(".this2").attr("href", "../UserProfile/")
    $(".this").attr("href", "../logout/");
}

function NoLogged() {
    $(".this2").attr("href", "../Register/")
    $(".sys li:nth-child(2) a").html('Login');
    $(".sys li:nth-child(2) a").attr("href", "../Login/");
    $(".this").attr("href", "../Login/");
}
<script>
</body>


</html>

