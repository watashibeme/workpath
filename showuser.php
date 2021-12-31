//Supppose there is something by axios here
//below uses the online bundle by jsDelivr cdn, since npm and yarn are for linux based distros
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

//Shows stored value in session whcih was passed in previous file (user.php)
echo "<pre>";
print_r($_SESSION['founduser']);  
echo "</pre>";
//THE END