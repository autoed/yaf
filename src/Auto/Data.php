<?php
namespace Auto;

use Faker\Factory;

Class Data {
    /**
     * @var $fun string
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/10
     */
    public static $fun;

    /**
     * @var \Faker\Generator
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/10
     */
    protected static $data;

    /**
     * Data constructor.
     */
    public function __construct()
    {
        isset(self::$data) ? : self::$data = Factory::create();
    }

    /**
     * 姓名
     * eg: Augusta Gislason
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/10
     * @return string
     */
    public static function name()
    {
        self::$fun = __FUNCTION__;

        return   self::$data->name;
    }

    /**
     * 银行卡
     * eg: 188118427081
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/10
     * @return string
     */
    public static function bankAccountNumber()
    {
        self::$fun = __FUNCTION__;

        return   self::$data->bankAccountNumber;
    }

    /**
     * 地址
     * eg: 86944 Bobby Tunnel
     *     West Zella, MI 21698-4660
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/10
     * @return string
     */
    public static function address()
    {
        self::$fun = __FUNCTION__;

        return   self::$data->address;
    }

    /**
     * 邮箱
     * eg: maegan03@gmail.com
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/10
     * @return string
     */
    public static function email()
    {
        self::$fun = __FUNCTION__;

        return   self::$data->email;
    }


}