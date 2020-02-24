<?php

namespace frontend\models;

use Yii;
//use frontend\components\StringHelper;

/**
 * 
 */
class Test
{
	
	public static function getNewsList($max){
            
                $max = intval($max);

                $sql = "SELECT * FROM `news` LIMIT ".$max;
                $result = Yii::$app->db->createCommand($sql)->queryAll();
                
//                $helper = new StringHelper(); //only inside the class
                $helper = Yii::$app->stringHelper; 
                
                foreach ($result as &$item) {
                    
                    $item['content'] = $helper->getShort($item['content']);
                }
               
                return $result;
                
        }
        
        public static function getItem($id) {
            
            $id = intval($id);
            
            $sql = "SELECT * FROM `news` WHERE id = $id";
            return Yii::$app->db->createCommand($sql)->queryOne();
            
        }
}