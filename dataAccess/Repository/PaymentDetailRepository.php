<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/PaymentDetail.php";
class PaymentDetailRepository implements IRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this -> db = $db;
    }
    public function get_db()
    {
        return $this -> db;
    }

    public function get_all()
    {
        $sql = "SELECT * FROM payment_details";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $payment_details = null;
        if ($result) {
            $payment_details = [];
            foreach ($result as $payment_detail) {
                $obj = new PaymentDetail();
                $this -> to_payment_detail($obj, $payment_detail);
                array_push($payment_details, $obj);
            }
        }

        return $payment_details;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM payment_details where id  = :id LIMIT 1";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        $payment_detail = null;
        if ($result) {
            $payment_detail = new PaymentDetail();
            $this -> to_payment_detail($payment_detail, $result);
        }
        return $payment_detail;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO payment_details 
        (payment_type, provider, account, 
        expiry,  order_id)
        VALUES (:payment_type, :provider, :account, 
        :expiry, :order_id)";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':payment_type' => $entity -> get_payment_type(),
            ':provider'     => $entity -> get_provider(),
            ':account'      => $entity -> get_account(),
            ':expiry'       => $entity -> get_expiry(),
            ':order_id'     => $entity -> get_order_id(),
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM payment_details WHERE id = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id' => $entity -> get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE payment_details SET 
        payment_type = :payment_type,
        provider     = :provider,
        account      = :account,
        expiry       = :expiry,
        order_id     = :order_id
        WHERE id     = :id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute([
            ':id'           => $entity -> get_id(),
            ':payment_type' => $entity -> get_payment_type(),
            ':provider'     => $entity -> get_provider(),
            ':account'      => $entity -> get_account(),
            ':expiry'       => $entity -> get_expiry(),
            ':order_id'     => $entity -> get_order_id(),
            // Add other columns as needed
        ]);
    }


    public function to_payment_detail($payment_detail, $payment_detail_in_db)
    {
        if($payment_detail_in_db["id"] != null)
            $payment_detail -> set_id((int) $payment_detail_in_db["id"]);
        if($payment_detail_in_db["payment_type"] != null)
            $payment_detail -> set_payment_type($payment_detail_in_db["payment_type"]);
        if($payment_detail_in_db["provider"] != null)
            $payment_detail -> set_provider($payment_detail_in_db["provider"]);
        if($payment_detail_in_db["account"] != null)
            $payment_detail -> set_account($payment_detail_in_db["account"]);
        if($payment_detail_in_db["expiry"] != null)
            $payment_detail -> set_expiry($payment_detail_in_db["expiry"]);
        if($payment_detail_in_db["order_id"] != null)
            $payment_detail -> set_order_id((int) $payment_detail_in_db["order_id"]);
    }
}
