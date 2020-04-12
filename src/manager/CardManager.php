<?php
declare(strict_types=1);

namespace ExampleApp\manager;

use ICanBoogie\DateTime;
define('SERVER_ROOT', "//".$_SERVER['HTTP_HOST']);


/**
 * @package   ExampleApp
 */
class CardManager
{
    /**
     * @var string
     */


    /**
     * CardManager constructor.
     *
     * @param array|null $db
     */
    public function __construct($db=null) 
    {
        $this->db = $db;

    }


    /**
     * @return array|bool
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function postInsertUser()
    {
        $item = [];

        if(!empty($_POST['form-action'])) {
            if($_POST['form-action'] == 'in') {            

                if(!empty($_POST['user_name'])) {
                    $user_name = strip_tags($_POST['user_name']);  
                }
                else{
                    $user_name ='';
                };
                if(!empty($_POST['user_lastname'])) {
                    $user_lastname = strip_tags($_POST['user_lastname']);  
                }
                else{
                    $user_lastname = "";
                };
                if(!empty($_POST['user_address'])) {
                    $user_address = strip_tags($_POST['user_address']);  
                }
                else{
                    $user_address ="";
                };          
                if(!empty($_POST['user_email'])){
                    $user_email = strip_tags($_POST['user_email']);  
                }
                else{
                    $user_email='';
                };          
                if(!empty($_POST['user_phone'])) {
                    $user_phone = strip_tags($_POST['user_phone']);  
                }
                else{
                    $user_phone="";
                };
                if(!empty($_POST['assigned'])) {
                    $assigned = strip_tags($_POST['assigned']);  
                }
                else{
                    $assigned ="";
                };

                $item ['user_name'] = $user_name;
                $item ['user_lastname'] = $user_lastname;
                $item ['user_address'] = $user_address;
                $item ['user_email'] = $user_email;   
                $item ['user_phone'] = $user_phone;
                $item ['user_create_at'] = new DateTime('now', 'Europe/Paris');
                $item ['card_number_id'] = $assigned;        
                return $item;
            }
        }else{
            return false;
        }
    }


    /**
     * @return array|bool
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function postUpdateUser()
    {
        $item = [];

        if(!empty($_POST['form-action'])) {
            if($_POST['form-action'] == 'up') {

                if(!empty($_POST['user_id'])) {
                    $user_id = strip_tags($_POST['user_id']);  
                }
                else{
                    $user_id ='';
                };
                if(!empty($_POST['user_name'])) {
                    $user_name = strip_tags($_POST['user_name']);  
                }
                else{
                    $user_name ='';
                };
                if(!empty($_POST['user_lastname'])) {
                    $user_lastname = strip_tags($_POST['user_lastname']);  
                }
                else{
                    $user_lastname = "";
                };
                if(!empty($_POST['user_address'])) {
                    $user_address = strip_tags($_POST['user_address']);  
                }
                else{
                    $user_address ="";
                };          
                if(!empty($_POST['user_email'])){
                    $user_email = strip_tags($_POST['user_email']);  
                }
                else{
                    $user_email='';
                };          
                if(!empty($_POST['user_phone'])) {
                    $user_phone = strip_tags($_POST['user_phone']);  
                }
                else{
                    $user_phone="";
                };
                if(!empty($_POST['assigned'])) {
                    $assigned = strip_tags($_POST['assigned']);  
                }
                else{
                    $assigned ="";
                };

                $item ['user_id'] = $user_id;
                $item ['user_name'] = $user_name;
                $item ['user_lastname'] = $user_lastname;
                $item ['user_address'] = $user_address;
                $item ['user_email'] = $user_email;   
                $item ['user_phone'] = $user_phone;
                $item ['user_create_at'] = new DateTime('now', 'Europe/Paris');
                $item ['card_number_id'] = $assigned;        
                return $item;
            }
        }else{
            return false;
        }
    }


    /**
     * @return array|bool
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function postSuggester()
    {      
        if(!empty($_POST['suggester'])){
            return $item ['suggester']  = strip_tags($_POST['suggester']); 
        }else{
            return false;
        }
    }


    /**
     * @return array|bool
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function postFind()
    {      
        if(!empty($_POST['find'])){
            return $item ['find']  = strip_tags($_POST['find']); 
        }else{
            return false;
        }
    }   


    /**
     * @param string
     * @return string|null
     */
    public function hasUniqueEmail($email)
    {
		$match =  $this->db->select('user_email')
        ->from('users')
        ->where("[user_email] = %s", $email)
        ->fetchSingle();					
        return $match;
    }


    /**
     * @param int $card_number_id
     * @param array $itemPostInsertUser
     */
	public function add($card_number_id, $itemPostInsertUser)
	{
 
        $uni = $this->hasUniqueEmail($itemPostInsertUser['user_email']);
        if ($itemPostInsertUser['user_email'] == $uni) {
            echo '</pre><script>alert("Email '.$uni.' již existuje. Zadejte jiný.");</script>';
        }else{
            $this->db->insert('users', $itemPostInsertUser)->execute();
            $new_user_id = $this->db->getInsertId();

            if(!empty($card_number_id)){
                $item = [];
                $item['card_number_user_id'] =  $new_user_id;
                $item['card_number_timestamp'] =  new DateTime('now', 'Europe/Paris');
    
                $this->db->update('card_number', $item)
                ->where('[card_number_id] = %i', $card_number_id)          
                ->execute();            
            }
        }
    }


    /**
     * @param int $card_number_id
     * @param array $itemPostUpdateUser
     */
    public function update($card_number_id, $itemPostUpdateUser)
    {
        //$uni = $this->hasUniqueEmail($itemPostUpdateUser['user_email']);
        //if ($itemPostUpdateUser['user_email'] == $uni) {
        //    echo '</pre><script>alert("Email '.$uni.' již existuje. Zadejte jiný.");</script>';
        //}else{

            $this->db->update('users', $itemPostUpdateUser)
			->where('[user_id] = %i', $itemPostUpdateUser['user_id'])
            ->execute();

            if(!empty($card_number_id)){
                $item = [];
                $item['card_number_user_id'] =  $itemPostUpdateUser['user_id'];
                $item['card_number_timestamp'] =  new DateTime('now', 'Europe/Paris');

                $this->db->update('card_number', $item)
                ->where('[card_number_id] = %i', $card_number_id)          
                ->execute();
            }
        //}           
	}

    
    /**
     * @return array|null
     */
    public function getUnAssignedCard()
    {
        return $this->db->query("
        select card_number_id, concat(card_number_id,' - ',card_type_desc) as card_number_desc 
        from card_number 
        join l_card_type 
        on card_number_type_code=card_type_code 
        where card_number_user_id is null")->fetchAll();
    }


    /**
     * @param string $item
     * @return array
     */
    public function getSuggesterCard($item)
    {
        $result =  $this->db->query("
        select user_id, 
                user_name,
                user_lastname,
                user_address,
                user_email,
                user_phone,
                card_number_id,
                concat(card_number_id,' - ',card_type_desc) as card_number_desc                                       
        from users as a 
        join card_number as b 
        on b.card_number_user_id = a.user_id 
        join l_card_type as c 
        on c.card_type_code = b.card_number_type_code 
        where a.user_email = '".$item."'")->fetchAll();

        if(!empty($result)){

            $output = [];       
            $cards = [];

            foreach($result as $key => $object) {
                foreach($object as $keyItem => $value) {
                    if ($keyItem == 'user_id') {
                        $output ['user_id'] = $value;
                    }
                    if ($keyItem == 'user_name') {
                        $output ['user_name'] = $value;
                    }
                    if ($keyItem == 'user_lastname') {
                        $output ['user_lastname'] = $value;
                    }
                    if ($keyItem == 'user_address') {
                        $output ['user_address'] = $value;
                    }
                    if ($keyItem == 'user_email') {
                        $output ['user_email'] = $value;
                    }
                    if ($keyItem == 'user_phone') {
                        $output ['user_phone'] = $value;
                    }
                    if ($keyItem == 'card_number_id') {
                        $cards [$key]['card_number_id'] = $value;
                        $output ['cards'] = $cards;
                    }
                    if ($keyItem == 'card_number_desc') {
                        $cards [$key]['card_number_desc'] = $value;
                        $output ['cards'] = $cards;
                    }

                }
            }

            return $output;
        }else{
            return false;
        }
    }
 

    /**
     * @param string $item
     * @return array
     */    
    public function getFindCard($item)
    {
        $result =  $this->db->query("
        select user_id, 
                user_name,
                user_lastname,
                user_address,
                user_email,
                user_phone,
                card_number_id,
                concat(card_number_id,' - ',card_type_desc) as card_number_desc                                       
        from users as a 
        join card_number as b 
        on b.card_number_user_id = a.user_id 
        join l_card_type as c 
        on c.card_type_code = b.card_number_type_code 
        where a.user_email = '".$item."'
        or a.user_name = '".$item."'
        or a.user_lastname = '".$item."'
        or b.card_number_id = '".$item."'
        order by user_id"        
        )->fetchAll();
    
        if(!empty($result)){

            $c = 0;
            $output = [];
            $cardsTmp = [];
            $user_id = null;      
            foreach($result as $key => $object) {
                foreach($object as $keyItem => $value) {
                    if ($keyItem == 'user_id') {
                        if(!empty($output[$c] ['user_id'])){                                               
                            if($output[$c] ['user_id'] == $value){
                            }else{
                                $c++;
                            }
                        }
                    }                    
                    if ($keyItem == 'user_id') {                                               
                        $output[$c] ['user_id'] = $value;
                    }
                    if ($keyItem == 'user_name') {
                        $output [$c]['user_name'] = $value;
                    }
                    if ($keyItem == 'user_lastname') {
                        $output [$c]['user_lastname'] = $value;
                    }
                    if ($keyItem == 'user_address') {
                        $output [$c]['user_address'] = $value;
                    }
                    if ($keyItem == 'user_email') {
                        $output [$c]['user_email'] = $value;
                    }
                    if ($keyItem == 'card_number_id') {                      
                        $output[$c]['card_number_id'][$key] = $value;
                    }
                }
            }

            $itemFind = $this->unique_multidim_array($output,'user_id');

            return $itemFind;
        }else{
            return false;
        }
    }
 

    /**
     * @param array $array
     * @param string $key
     * @return array
     */
    public function unique_multidim_array($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();
       
        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        sort($temp_array);
        return $temp_array;
    }

    
    /**
     * @return int
     */
    public function getAssignedCard()
    {
        return $this->db->query("select count(card_number_id) from card_number where card_number_user_id is not null")->fetchSingle();
    }


    /**
     * @return int
     */
    public function getCountClient()
    {
        return $this->db->query("select count(user_id) from users")->fetchSingle();
    } 
    
    
    /**
     * @return array
     */
    public function getTopTenByMoon()
    {
        return $this->db->query("select user_id, user_name, user_lastname, sum(purchase_commodity_price_total) as purchase_total 
            from users 
            join card_number on user_id=card_number_user_id 
            join purchase 
            on purchase_card_number_id=card_number_id 
            WHERE purchase_timestamp > date_add(now(), interval -1 month)
            group by user_id 
            order by sum(purchase_commodity_price_total) desc 
            limit 10")->fetchAll();
    }    
   
    /**
     * End class
     */
}
