<?php
namespace Auto;

trait Api
{
    /**
     * API
     * @notice this just for yaf
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/10
     */
    public function apiAction()
    {
        $this->getView()->assign('notice', 'You should know , this api is useful !');
        $this->getView()->assign('host', AUTO_TEST_API_HOST);
        echo $this->getView()->render('api.php');
    }
}