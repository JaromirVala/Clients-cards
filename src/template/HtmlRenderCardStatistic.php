<?php
define('SERVER_ROOT1', "http://".$_SERVER['HTTP_HOST']);

function HtmlCardStatistic($item)
{   
    if(isset( $item['assignedCard'] )){
        $assignedCard = $item['assignedCard'];
    }

    if(isset( $item['countClient'] )){
        $countClient = $item['countClient'];
    }   
 
    $topTeen = "";
    if(isset($item['topTenByMoon'])){
        foreach($item['topTenByMoon']  as $key => $value ){
            $topTeen .='<tr>
            <td class="table-body">'.$value['user_id'].'</td>
            <td class="table-body">'.$value['user_name'].'</td>
            <td class="table-body">'.$value['user_lastname'].'</td>
            <td class="table-body">'.$value['purchase_total'].'</td>
            </tr>';
        }
    }


return "

<style>
h4{
  font-size:14px;
  margin:20px 0 4 0;
}
.menu-wrapper{
  width:328px;
}
.menu-banner{}
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

.tab1, .tab2{
    display:block;
    width:318px;
    margin: 40px 0 0 0;
    padding: 0 0 0 10px;
    border:1px solid #bbbbbb; 
}

.tab1 table, .tab2 table{
    width:100%;
    font-family:Verdana;
    font-size:12px;
}
.tab2,.tab1{
    padding:0;
    margin: 0 0 0 0;
}
.tab2 table tbody tr:nth-child(odd){
    background: #eeeeee;
}
.tab2 table tbody tr td:nth-child(1){
    padding-left:2px;
}
.tab2 table tbody tr td:nth-child(4){
    width:100px;
}
.tab2 table thead {
text-align:left;
background: #dddddd;
}
</style>

<div class=\"menu-wrapper\">
    <div class=\"menu-banner\">

        <div class=\"menu\">
            <a href=\"/\" class=\"\">Index</a> 
        </div>

        <div class=\"menu\">
            <a href=\"/detail\" class=\"\">Detail</a>   
        </div>

    </div>  
</div>

<h4>Informace o kartách zákaznících</h4>
<div class=\"tab1\">
<table>
<thead>
<tr>
<th class=\"table-head table-first\"></th><th class=\"table-head table-second\"></th>
</tr>
</thead>
<tbody>
<tr>
<td class=\"table-body table-first\">Počet zákazníků: </td><td class=\"table-body table-second\">{$countClient}</td>
</tr>
<tr>
<td class=\"table-body table-first\">Počet přiřazených karet: </td><td class=\"table-body table-second\">{$assignedCard}</td>
</tr>
</tbody>
</table>
</div>


<h4>Top 10 za poslední měsíc</h4>
<div class=\"tab2\">
<table>
<thead>
<tr>
<th class=\"table-head\">id</th><th class=\"table-head\">Jméno</th><th class=\"table-head\">Příjmení</th><th class=\"table-head\">Nákup celkem</th>
</tr>
</thead>
<tbody>
    {$topTeen}
</tbody>
</table>
</div>

";
}
