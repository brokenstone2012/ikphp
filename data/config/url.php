<?php 
return array (
  'URL_MODEL' => 0,
  'URL_CASE_INSENSITIVE' => false,
  'URL_ROUTER_ON' => true,
  'URL_ROUTE_RULES' => 
  array (
    '/^people\/(\w+)$/' => 'people/index?id=:1',
    '/^group\/topic\/(\d+)$/' => 'group/topic?id=:1',
    '/^group\/topic\/(\d+)\/p\/(\d+)$/' => 'group/topic?id=:1&p=:2',
    '/^group\/(\d+)$/' => 'group/show?id=:1',
    '/^article\/(\d+)$/' => 'article/show?id=:1',
  ),
  'URL_IKPHP_RULES' => 
  array (
    'index/id/' => '',
    'show/id/' => '',
    'topic/id/' => 'topic/',
  ),
);