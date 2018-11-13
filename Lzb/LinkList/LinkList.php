<?php
namespace Lzb\LinkList;

class LinkList
{
    public $head;

    //初始化一个链表
    public function __construct()
    {
        $headNode = new LinkNode('');
        $this->head = $headNode;
    }

    //向链表末尾添加节点
    public function addNode($data)
    {
        $newNode = new LinkNode($data);
        $pointer = $this->head;
        while ($pointer->next != null) {
            $pointer = $pointer->next;
        }
        $pointer->next = $newNode;
        return $this;
    }

    //正向输出
    public function dump()
    {
        $a = [];
        $pointer = $this->head;
        while ($pointer->next != null) {
            $a[] = $this->head->next->data;
            $pointer = $pointer->next;
        }
        var_dump($a);
    }

    //单链表反转
    public static function reverse()
    {

    }
}