<?php

namespace App\Controller\LinkList;


class LinkList
{
    public static function index()
    {
        $list = new \Lzb\LinkList\LinkList();
        $list->addNode('1')->addNode('2')->addNode('fkjjdkf')->dump();
    }

    /**
     * @desc 反转单链表
     * @return mixed
     */
    public static function reverse()
    {
        $list = new \Lzb\LinkList\LinkList();
        $head = $list->head;
        if ($head->next == null) echo '这是一个空链表';die;
        $pre = null;
        $node = $head->next;
        while ($node->next != null) {
            $next = $node->next;
            $node->next = $pre;
            $pre = $node;
            $node = $next;
        }
        $node->next = $pre;
        $head->next = $node;
        return $list->dump();
    }
}