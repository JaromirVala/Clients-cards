<?php
declare(strict_types=1);

namespace ExampleApp;

use Psr\Http\Message\ResponseInterface;
use ExampleApp\Manager\CardManager;


/**
 * @package   ExampleApp
 */
class CardIndex
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
     * CardIndex constructor.
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
        $cardManager = new CardManager($this->db);
        $item = '';

        include dirname(__DIR__) . '/src/template/HtmlRenderCardIndex.php';
        $html = HtmlCardBase($item);

        $response = $this->response->withHeader('Content-Type', 'text/html');
        $response->getBody()->write("<html><head></head><body>".$html."</body></html>");
        return $response;
    }
}
