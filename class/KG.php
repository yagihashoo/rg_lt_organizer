<?php

class LtWeek extends Model{
  public static $_table = 'kgs';

  public function members(){
    return $this->has_many('Users');
  }
}