
document.querySelector(".writeHeader").innerHTML = `
   
    <div class="header">
        <div id="logo">
            <a href="indexsearchtest.php"><img src="/bdweb/imgs/logo/luna (1).png" alt=""></a>
        </div>
    </div>
    <div class="boxheader">
        <p>follow me</p> <a href="https://github.com/hannaeelias">github</a> <p>|</p> 
        <a href="/bdweb/pages/login.php">login</a><p>|</p> 
        <a href="/bdweb/pages/register.php">register</a>

        <div class="bar">
            <form action="/bdweb/pages/search.php" method="GET">
                <input type="text" name="boek" placeholder="search" id="livesearch">
                <input type="submit" value="enter">
            </form>
        </div>

        <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
            <a href="/bdweb/pages/register.php"><button>register</button></a>
            <a href="/bdweb/pages/login.php"><button>login</button></a>
            <a href="/bdweb/pages/indexsearchtest.php"><button>homepage</button></a>
            <a href="/bdweb/pages/admin login.php"><button>admin</button></a>
            <a href="/bdweb/php files/logout.php"><button>logout</button></a>
        </div>

    </div>
    
    </div>
    
`;