<?php


namespace luxury;


class App
{
    public static $app;

    public function __construct()
    {
        // Получить строку запроса пользователя
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getOptions();
    }

    protected function getOptions(){
        $options = require_once CONF . '/options.php';

        if (!empty($options)) {
            foreach ($options as $key => $value) {
                self::$app->setProperty($key, $value);
            }
        }
    }
}
