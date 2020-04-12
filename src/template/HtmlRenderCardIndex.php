<?php
define('SERVER_ROOT1', "http://".$_SERVER['HTTP_HOST']);

function HtmlCardBase($item)
{       
    //echo '<pre> item htmlCardBase'; 
    //print_r($item);
    //echo '</pre>';



return "
<style>

.menu-wrapper{

  }
.menu-banner{

  }
.menu{
    display:block;
    width:100px;      
    padding:10px 30px 10px 30px;
    border:1px solid #666666;      
    display:inline-block;
    font-family:Verdana; 
  }
.menu a{
    display:block;
    width: min-content;
    text-decoration:none;
    margin:auto;
}
  

</style>

<div class=\"menu-wrapper\">
    <div class=\"menu-banner\">

        <div class=\"menu\">
            <a href=\"/statistiky\" class=\"\">Statistiky</a> 
        </div>

        <div class=\"menu\">
            <a href=\"/detail\" class=\"\">Detail</a>   
        </div>

    </div>  
</div>





";
}
