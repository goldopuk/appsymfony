<?php
namespace Goldopuk\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use phpcassa\ColumnFamily as ColumnFamily;
use phpcassa\ColumnSlice as ColumnSlice;
use phpcassa\Connection\ConnectionPool as ConnectionPool; 
use Goldopuk\ServiceBundle\Services\Calculator;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->get('calculator');
        
        //$cassa = new \goldopuk\cassaclient\CassandraDB();
        
        return $this->render('GoldopukServiceBundle:Default:index.html.php');
    }
    
    public function cassaAction() {
        
        echo '<pre>';
        $servers = array("127.0.0.1:9160");
        $pool = new ConnectionPool("felipe", $servers);

        // Retrieve a raw connection from the ConnectionPool
        $raw = $pool->get();

        //var_dump($raw);

        $rows = $raw->client->execute_cql_query("SELECT * FROM user WHERE username = 'toto'", 2);

        $pool->return_connection($raw);

        var_dump($rows);

        die('end');
    }
}
