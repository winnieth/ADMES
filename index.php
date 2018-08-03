<!DOCTYPE html>
<html>
<head>
    <script src="jquery-ui-1.12.1.js"></script>
<style>
    *{
        font-family: monospace;
        font-size: 14px;
    }
    body {
        margin: 0;
    }

    ul {
        list-style-type: none;
        margin-top: 15%;
        padding: 0;
        width: 20%;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    li a {
        display: block;
        color: #000;
        padding: 8px 0 8px 16px;
        text-decoration: none;
    }

    li a.active {
        background-color: #4CAF50;
        color: white;
    }

    li a:hover:not(.active) {
        background-color: #555;
        color: white;
    }
    header{ display=block;
            height=12%;
            background-color= #4CAF50;
            float:left;}
    .ubox{
        width:20%;
        height:10%;
        float: left;
        background-color:#83c985;
        text-align: center;
        padding-top: 150px;
        padding-bottom: 50px;
        overflow:hidden;
        position: fixed;
    }
 
</style>
</head>
<body>
    <div class="ubox">User</div>
    <div class="header"></div>

<ul>

  <li><a class="active" href="#dashboard">Dashboard</a></li>
  <li><a href="#Users">Registered Users</a></li>
  <li><a href="#Files">Accreditation files</a></li>

</ul>


<div style="margin-left:25%;padding:1px 16px;height:1000px;">
</div>
 <lframe src="login_as.html"></lframe>

</body>
</html>
