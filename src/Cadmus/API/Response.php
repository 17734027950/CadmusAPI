<?php
  /**
   * Created by PhpStorm.
   * User: wrewolf
   * Date: 29.08.17
   * Time: 14:08
   */
  
  namespace Cadmus\API;
  
  
  use Buzz\Message\MessageInterface;
  
  class Response
  {
    private $response;
    private $header;
    
    public function setResponse($response)
    {
      $this->response = json_decode($response, true);
    }
    
    /**
     * @return mixed
     */
    public function getResponse()
    {
      return $this->response;
    }
    
    /**
     * Response constructor.
     *
     * @param \Buzz\Message\MessageInterface $response
     */
    public function __construct(MessageInterface $response = null)
    {
      if ($response != null)
      {
        $this->header = $response->getHeaders();
        $this->setResponse($response->getContent());
      }
    }
    
    /**
     * @return array
     */
    public function getHeader(): array
    {
      return $this->header;
    }
    
    /**
     * @param array $header
     */
    public function setHeader(array $header)
    {
      $this->header = $header;
    }
  }