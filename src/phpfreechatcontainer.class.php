<?php

/**
 * @abstract
 */
class phpFreeChatContainer
{
  var $c;
  function phpFreeChatContainer(&$config)
  {
    $this->c =& $config;
  }
  function getDefaultConfig()
  {
    return array();
  }
  function init()
  {
    return array();
  }  
  function updateMyNick()
  {
    return false;
  }
  function removeObsoletNick()
  {
    return false;
  }
  function removeNick($nick)
  {
    return false;
  }
  function changeMyNick($newnick)
  {
    return $newnick;
  }
  function getOnlineNick()
  {
    return array();
  }
  function writeMsg($pseudo, $msg)
  {
  }
  function readNewMsg($from_id)
  {
    return array();
  }
}

?>