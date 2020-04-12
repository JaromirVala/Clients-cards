<?php
declare(strict_types=1);

namespace ExampleApp;

use Psr\Http\Message\ResponseInterface;
use ExampleApp\Manager\CardManager;


/**
 * @package   ExampleApp
 */
class CardStatistic
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
     * CardStatistic constructor.
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


        
        $ac = $cardManager->getAssignedCard();
        $item['assignedCard'] = $ac;

        $cc = $cardManager->getCountClient();
        $item['countClient'] = $cc;

        $tt = $cardManager->getTopTenByMoon();
        $item['topTenByMoon'] = $tt;



/*
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
*/


        include dirname(__DIR__) . '/src/template/HtmlRenderCardStatistic.php';
        $html = HtmlCardStatistic($item);

        $response =  $this->response->withHeader('Content-Type', 'text/html');
        $response->getBody()->write($html);
        return $response;
    }

    /**
     * End class
     */
}
