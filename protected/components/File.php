<?php

/**
 * Created by PhpStorm.
 * User: kamae
 * Date: 17.02.2016
 * Time: 10:01
 */

/* @var $settings Settings */
class File
{
    public static function fullpath($filename)
    {
        $result="";
        $settings = Settings::model()->findByPk(1);
        if($settings->mode == 0)
        {
            $result.=$settings->img_path_dev_local.$filename;
        }
        else
        {
            $result.=$settings->img_path_remote.$filename;
        }
        return $result;
    }

    
}