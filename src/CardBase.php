<?php
declare(strict_types=1);

namespace ExampleApp;

use Psr\Http\Message\ResponseInterface;
use ExampleApp\Manager\CardManager;


/**
 * @package   ExampleApp
 */
class CardBase
{
    /**
     * @var string
     */
    private $db;
    /**
     * @var ResponseInterface
     */
    private $response;


    /**
     * CardBase constructor.
     *
     * @param ResponseInterface $response
     * @param array $db
     */
    public function __construct($db, ResponseInterface $response) 
    {
        $this->db = $db;
        $this->response = $response;
    }


    /**
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function __invoke(): ResponseInterface
    {
        $item = [];
        $cardManager = new CardManager($this->db);

        $uac = $cardManager->getUnAssignedCard();
        $item['unAssignedCard'] = $uac;

        $itemPostSuggester = $cardManager->postSuggester();
            if($itemPostSuggester != false){
                $sc = $cardManager->getSuggesterCard($itemPostSuggester);
                if($sc != false){
                    $item ['suggester'] = $sc;
                }
        }

        $itemPostFind = $cardManager->postFind();
            if($itemPostFind != false){
                $fc = $cardManager->getFindCard($itemPostFind);
                if($fc != false){
                   $item ['find'] = $fc;
                }
        }

        /**
         *  Update
         */
        $itemPostUpdateUser = $cardManager->postUpdateUser();
        if($itemPostUpdateUser != false){
            $card_number_id = $itemPostUpdateUser['card_number_id'];
            unset($itemPostUpdateUser['card_number_id']);
            $cardManager->update($card_number_id, $itemPostUpdateUser);
        }

        /**
         *  Insert
         */
        $itemPostInsertUser = $cardManager->postInsertUser();
        if($itemPostInsertUser != false){
            $card_number_id = $itemPostInsertUser['card_number_id'];
            unset($itemPostInsertUser['card_number_id']);
            $cardManager->add($card_number_id, $itemPostInsertUser);
        }

        include dirname(__DIR__) . '/src/template/HtmlRenderCardBase.php';
        $html = HtmlCardBase($item);

        $response =  $this->response->withHeader('Content-Type', 'text/html');
        $response->getBody()->write($html);
        return $response;
    }

    /**
     * End class
     */
}
