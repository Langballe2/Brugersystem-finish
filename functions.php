<?php

function get_user_details($user_id = null)
{
    if(is_null($user_id))
    {
        $user_id = $_SESSION['user_id'];
    }

    $conn = dbcon();

    if($stmt = $conn->prepare("SELECT * FROM users WHERE id=? LIMIT 1"))
    {
        $stmt->bind_param('i', $user_id);
        $stmt->execute();

        if($stmt->num_rows > 0)
        {
            $result = $stmt->get_result();
            return $result->fetch_array(MYSQLI_ASSOC);
        }
    }

    return false;

}