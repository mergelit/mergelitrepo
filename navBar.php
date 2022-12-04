<?php
    include 'dbConnection.php';
    include 'sessions.php';
?>
<style>
    nav{
        padding: 20px;
        border-style: none none solid none;
        border-color: white;
        border-width: 10px;
    }
    #banner{
        font-size: 30px;
        position: relative;
        text-align: center;
    }
    #iconImage{
        display: inline;
        width: 100px;
        height: auto;
    }

    #mainPageLink{
        float: left;
    }
    #accountDetailsLink{
        float: right;
        
    }
    #loginPageLink{
        float: right;
        
    }
    #membershipsPageLink{
        float: right;
    }
    #adminPageLink{
        float: right;
    }

</style>

<nav>
    <table width="100%">
        <tr>
            <td>
                <a id="mainPageLink" href="main.php">
                    <img id="iconImage" src="images/fire_1f525.png" alt="MergeLit Icon and Main Page Link">
                </a>
            </td>
            <td>
                <span id="banner">MergeLit</span>
            </td>
            <td>
                <a id="accountDetailsLink" href="accountDetails.php">
                    Account Details
                </a>
                <br>

                <a id="loginPageLink" href="login.php">
                    Login/Signup
                </a>
                <br>
                <a id="loginPageLink" href="logout.php">
                    Log Out
                </a>
                <br>
                <a id="membershipsPageLink" href="memberships.php">
                    Memberships
                </a>
                <br>
                <a id="adminPageLink" href="memberships.php">
                    Admin Page
                </a>
            </td>
        </tr>
    </table>
</nav>