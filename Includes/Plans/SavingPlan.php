<?php
namespace Includes\Plans;
use Includes\DB\Connection;

class SavingPlan extends Connection
{
    private $allPlans;
    public function __construct()
    {
        $sql = "SELECT * FROM saving_interest_plan";
        $stmt = (new Connection)->connect()->prepare($sql);
        $stmt->execute();
        $this->allPlans = $stmt->fetchAll();
    }

    /**
     * return All Savingplans
     */
    public function getAllSavingPlans():array
    {
        return $this->allPlans;
    }
    
    public function getAllSavingPlansId():array
    {
        $ids = array();
        foreach ($this->allPlans as $id) {
            array_push($ids, $id["s_plan_id"]);
        }
        return $ids;
    }
}


?>