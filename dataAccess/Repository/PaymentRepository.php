<?php
include_once APP_ROOT . "/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT . "/models/Payment.php";
class PaymentRepository implements IRepository
{
    private PDO $db;


    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function get_db()
    {
        return $this->db;
    }
    public function get_all()
    {
        $sql = "SELECT * FROM payments";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $payments = null;
        if ($result) {
            $payments = [];
            foreach ($result as $payment) {
                $obj = new Payment();
                $this->to_payment($obj, $payment);
                array_push($payments, $obj);
            }
        }

        return $payments;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM payments where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $payment = null;
        if ($result) {
            $payment = new Payment();
            $this->to_payment($payment, $result);
        }
        return $payment;
    }
    public function add($entity)
    {
        $sql = "INSERT INTO payments (quantity, order_id, type, date_time, status)
       VALUES (:quantity, :order_id, :type, :date_time, :status)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':quantity' => $entity->get_quantity(),
            ':order_id' => $entity->get_order_id(),
            ':date_time' => $entity->get_date_time(),
            ':type' => $entity->get_type(),
            ':status' => $entity->get_status(),
        ]);
    }
    public function remove($entity)
    {
        $sql = "DELETE FROM payments WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
        ]);
    }
    public function update($entity)
    {
        $sql = "UPDATE payments SET 
        quantity = :quantity,
        order_id = :order_id,
        date_time = :date_time,
        type = :type,
        status = :status
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity->get_id(),
            ':quantity' => $entity->get_quantity(),
            ':order_id' => $entity->get_order_id(),
            ':date_time' => $entity->get_date_time(),
            ':type' => $entity->get_type(),
            ':status' => $entity->get_status(),
            // Add other columns as needed
        ]);
    }
    public function to_payment($payment, $payment_in_db)
    {
        $payment->set_id((int) $payment_in_db["id"]);
        $payment->set_order_id((int) $payment_in_db["order_id"]);
        $payment->set_type($payment_in_db["type"]);
        $payment->set_date_time(new DateTime($payment_in_db["date_time"]));
        $payment->set_status($payment_in_db["status"]);
    }
}
