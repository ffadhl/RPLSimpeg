<style>
    
.sidenav .logo img
{
    background-color: rgb(255, 255, 255);
    height: 60px;
    width: auto;
    margin-right: 20px;
}



.sidenav
{
    height: 100%;
    width: 0px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #5479f7;
    overflow-x: hidden;
    padding-top: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    transition: 0.4s;
}

.sidenav .close-btn
{
    position: relative;
    top: 8px;
    right: 17px;
    margin-left: 200px;
    font-size: 55px;
    border: none;
    padding: 0px 2px 0px 2px;
}

.fa-bars
{
    font-size: 35px;
    padding-left: 20px;
    
}

hr
{
    width: 85%;
}

.fa-bars:hover
{
    color:#2c4491;
}

.sidenav a, .dropdown-btn
{
    padding: 2px 8px 19px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #fffdfd;
    display: block;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    transition: 0.5s;
    border: none;
}


.sidenav a:hover, .dropdown-btn:hover
{
    color: #f1f1f1;
}

.active
{
    background-color: #3a54a8;
    transition: 0.3s ease;
}

.drop-container
{
    display: none;
    background-color: #3a54a8;
    padding-left: 8px;
    padding-top: 2px;
    padding-bottom: 2px;
}

.drop-container a
{
    font-size: 18px;
}

.fa-caret-down
{
    float: right;
    padding-right: 8px;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<div class="sidenav" id="sidebar">
        
        <div class="logo">
            <a href="#home"><figure><img src="assets/logo.png" alt="logo"></figure></a>
        </div>
        <hr>
        <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</a>
        <script src="sidebar2.js"></script>
        <a href="#home" class="home">Beranda</a>
        <a href="#karyawan" class="karyawan">Karyawan</a>
        <button class="dropdown-btn">Kantor<i class="fa fa-caret-down"></i></button>
        <div class="drop-container">
            <a href="#jabatan">Jabatan</a>
            <a href="#departemen">Departemen</a>
        </div>
        <button class="dropdown-btn">Jadwal<i class="fa fa-caret-down" aria-hidden="true"></i></button>
        <div class="drop-container">
            <a href="#jadwalkaryawan">Jadwal Karyawan</a>
            <a href="#Cuti">Cuti</a>
        </div>
        <a href="#Presensi">Presensi</a>
        <a href="#Penggajian">Penggajian</a>


    </div>

    <a href="javascript:void(0)"><span onclick="openNav()"> <i class="fa fa-bars" aria-hi></i></span></a>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for(i=0; i<dropdown.length; i++)
{
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if(dropdownContent.style.display==="block")
        {
            dropdownContent.style.display = "none";
        }else
        {
            dropdownContent.style.display = "block";
        }
    });
}

function closeNav()
{
    document.getElementById("sidebar").style.width="0";
}

function openNav()
{
    document.getElementById("sidebar").style.width="250px";
}
</script>