<?php
define('SERVER_ROOT1', "http://".$_SERVER['HTTP_HOST']);

function HtmlCardBase($item)
{       
    //echo '<pre> item htmlCardBase'; 
    //print_r($item);
    //echo '</pre>';

    $formaction = 'in';
    $user_name = '';
    $user_lastname ='';
    $user_address = '';
    $user_email = '';
    $user_phone = '';
    $options = '';
    $listCards = '';
    $user_id = '';
    $assigned_card = [];
    $listFind = '';    

    if(isset($item['suggester'])){
        $formaction    = 'up';
        $user_id       = $item['suggester']['user_id'];         
        $user_name     = $item['suggester']['user_name'];
        $user_lastname = $item['suggester']['user_lastname'];
        $user_address  = $item['suggester']['user_address'];
        $user_email    = $item['suggester']['user_email'];
        $user_phone    = $item['suggester']['user_phone'];
        $assigned_card = $item['suggester']['cards'];
    }

        foreach($assigned_card  as $key => $value ){
            $listCards .= '<div class="list-using-card-list">
            <span>'.$value['card_number_desc'].'</span>
            </div>';
       }


    if(isset($item['unAssignedCard'])){
        foreach($item['unAssignedCard']  as $key => $value ){
            $options .='<option value="'.$value['card_number_id'].'"> '.$value['card_number_desc'].' </option>';
        }
    }


    if(isset($item['find'])){
      foreach($item['find']  as $key => $value ){
        $numbersCard = " (";
        foreach($value['card_number_id'] as $number){
          $numbersCard .= $number.",";
        }
        $numbersCard = rtrim($numbersCard, ",");
        $numbersCard .=")";

        $listFind .='<div class="find-result">
                    <form onclick="this.submit()" class="find-form" action="./client" method="post" accept-charset="utf-8" enctype= "application/x-www-form-urlencoded">
                    '.$value['user_lastname'].' '.$value['user_name'].' '.$numbersCard.'
                        <input type="hidden" class="find-input" name="suggester" value="'.$value['user_email'].'">
                    </form>
                </div>';
      }
    }

return "
<style>
a{
  text-decoration:none;
}
h4{
  font-size: 14px  
}
form {
  font-family:Verdana;
}
#form-panel{
  width: 500px;
  padding:20px;
}
.form-label{
  display:block;
  width:70px;
  height:24px;
  font-size:14px;
}
.form-submit{
  width:115px;
  height:40px;
}
.list-using-card{
  width:235px;
  border:1px solid #333333;
  margin-top:10px;
  margin-bottom:30px;  
}

.list-using-card-header { 
  border: thin solid #333333;  
}
.list-using-card-header span{
  width: max-content;
  font-size: 13px;
  font-weight: bold;
  margin: auto;
  display: block;
}  

.list-using-card-list { 
  border-left:1px solid #333333;  
  border-right:1px solid #333333;
  border-bottom:1px solid #333333;
}
.list-using-card-list span{
  width: 100%;
  font-size: 13px;
  margin: auto;
  padding:2px 0 2px 4px;
  display: block;
}
#form-suggester{
  width: 500px;
  padding:20px;
  }
.form-suggester{
  width:235px;
  height:30px;
  padding:0 0 0 4px;
}
#form-find{
    width: 500px;
    padding:20px;
    }
.form-find{
    width:235px;
    height:30px;
    padding:0 0 0 4px;
  }

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
  
  .find-wrapper{
    display:block;
    width:233px;
    border:1px solid #666666;
    background:#dddddd;
    position: relative;
    top: -40px;
    left: 20px; 
  }
  .find-banner{
      display:block;
      padding:0 0 0 2px;   
  }
  .find-result{
      display:block;
      cursor:pointer;
      margin:2px 0 2px 0; 
  }  
.find-form{
    margin:0;
    padding:0;
    font-size:11px;
    font-family:Verdana; 
}
.find-input:{
    margin:0;
    padding:0 0 0 0;   
}

</style>

<div class=\"menu-wrapper\">
    <div class=\"menu-banner\">

        <div class=\"menu\">
            <a href=\"/\" class=\"\">Index</a> 
        </div>

        <div class=\"menu\">
            <a href=\"/statistiky\" class=\"\">Statistiky</a>   
        </div>

    </div>  
</div>

<form class=\"form-form\" action=\"./client\" method=\"post\" name=\"form_zakaznik\" id=\"zakaznik\" accept-charset=\"utf-8\" autocomplete=\"off\" enctype= \"application/x-www-form-urlencoded\">

<div id = \"form-panel\">

<h4>Založení zákazníka</h4>
<table>
<thead>
<tr>
<th></th><th></th>
</tr>
</thead>
<tbody>


<tr>
<td><label class=\"form-label form-label-left\" id=\"label_1\" for=\"input_1\"> Jméno </label></td>
<td><input type=\"text\" id=\"input_1\" name=\"user_name\" class=\"form-textbox\" size=\"20\" value=\"{$user_name}\" required ></td>
</tr>

<tr>
<td><label class=\"form-label form-label-left\" id=\"label_2\" for=\"input_2\"> Příjmení </label></td>
<td><input type=\"text\" id=\"input_2\" name=\"user_lastname\" class=\"form-textbox\" size=\"20\" value=\"{$user_lastname}\" required ></td>
</tr>

<tr>
<td><label class=\"form-label form-label-left\" id=\"label_3\" for=\"input_3\"> Adresa </label></td>
<td><input type=\"text\" id=\"input_3\" name=\"user_address\" class=\"form-textbox\" size=\"20\" value=\"{$user_address}\" required ></td>
</tr>

<tr>
<td><label class=\"form-label form-label-left\" id=\"label_4\" for=\"input_4\"> Email </label></td>
<td><input type=\"email\" id=\"input_4\" name=\"user_email\" class=\"form-textbox\" size=\"20\" value=\"{$user_email}\" pattern=\"[a-z0-9._-]{2,}@[a-z0-9.-]{2,}\.[a-z]{2,}$\" required ></td>
</tr>

<tr>
<td><label class=\"form-label form-label-left\" id=\"label_5\" for=\"input_5\"> Telefon </label></td>
<td><input type=\"text\" id=\"input_5\" name=\"user_phone\" class=\"form-textbox\" size=\"20\" value=\"{$user_phone}\" required ></td>
</tr>

</tbody>
<tfoot>
<tr>
<td></td>
<td></td>
</tr>
</tfoot>
</table>

<h4>Přiřazení karty a jejich přehled</h4>


<table>
  <thead>
  <tr>
  <th></th><th></th>
  </tr>
  </thead>
  <tbody>
  
  
  <tr>
  <td><label class=\"form-label form-label-left\" id=\"label_6\" for=\"input_6\">vybrat </label></td>
  <td>
    <div id=\"cid_6\" class=\"form-input\">
      <select class=\"form-dropdown\" id=\"input_6\" name=\"assigned\" style=\"width:150px\">
      <option value=\"\"></option>
        {$options}
      </select>
    </div>  
  </td>
  </tr>
  

</tbody>
<tfoot> 
<tr>
<td></td>
<td></td>
</tr>
</tfoot>
</table>


<div class=\"list-using-card\">

  <div class= \"list-using-card-header\">
  <span>Seznam přiřazených karet</span>
  </div>

{$listCards}

  </tbody>
</div>

<input type=\"submit\" id=\"input_8\"  class=\"form-submit\"  value=\"Uložit\" name=\"save\">
<input type=\"reset\" id=\"input_9\"  class=\"form-submit\"  value=\"Storno\">
<input type=\"hidden\" id=\"input_10\"  name=\"form-action\" value=\"{$formaction}\">
<input type=\"hidden\" id=\"input_11\"  name=\"user_id\" value=\"{$user_id}\">

</div>

</form>


<form onclick=\"\" class=\"form-form\" action=\"./client\" method=\"post\" name=\"form_find\" id=\"find\" accept-charset=\"utf-8\" autocomplete=\"on\" novalidate=\"true\" enctype= \"application/x-www-form-urlencoded\">
<div id = \"form-find\">
<h4>Vyhledání karty/klienta</h4>
<input type=\"text\" id=\"input_13\" name=\"find\" class=\"form-find\" size=\"20\" value=\"\">
<input type=\"submit\" id=\"input_14\"  class=\"form-submit\"  value=\"Vyhledat\" name=\"submit-find\">
</div>

</form>





<div class=\"find-wrapper\">
    <div class=\"find-banner\">
    {$listFind}
    </div>  
</div>


";
}
