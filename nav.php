<style type="text/css">
    ul {
        position: absolute;
        top: 190px;
        left: -10px;
        color: navy;
        width: 135px;
        text-align: center;
        margin: 0;
    }
    /*set general side button styles*/

    li {
        width: 115px;
        list-style-type: none;
        margin-bottom: 3px;
        text-align: center;
    }
    /*Set general anchor styles*/

    li a {
        display: block;
        width: 115px;
        color: white;
        font-weight: bold;
        text-decoration: none;
    }
    /*specify state styles*/
    /*mouseout (default)*/

    li a {
        background: #5B78BE;
        border: 4px outset #8ABAFF;
    }
    /*mouseover*/

    li a:hover {
        display: block;
        background: #0a4adf;
        border: 4px outset #8abaff;
        width: 115px;
    }
    /*onmousedown*/

    li a:active {
        background: #aecbff;
        border: 4px inset #aecbff;
    }
</style>
<div id="nav">!--The side menu column contains the vertical menu block--></div>
    <ul>
    <li><a href="page2.php" title="page two">Page 2</a></li>
     <li><a href="page3.php" title="page three">Page3</a></li>
      <li><a href="page4.php" title="page four">Page4</a></li>
       <li><a href="page5.php" title="page five">Page5</a></li>
        <li><a href="index.php" title="Return to Home page">Home Page</a></li>
    </ul>
    </div><!--end of side column and menu-->