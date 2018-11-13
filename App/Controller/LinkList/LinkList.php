<?php

namespace App\Controller\LinkList;


class LinkList
{
    public static function index()
    {
        $list = new \Lzb\LinkList\LinkList();
        $list->addNode('1')->addNode('2')->addNode('fkjjdkf')->dump();
    }
}