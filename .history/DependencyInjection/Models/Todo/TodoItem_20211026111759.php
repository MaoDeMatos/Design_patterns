<?php

namespace DependencyInjection\Models\Todo;


class TodoItem {
    private int $id;
    private  string $name;
    private  boolean $finished = 0;
    private  DateTime $createdAt;
    private  DateTime $completed;
    
    

}