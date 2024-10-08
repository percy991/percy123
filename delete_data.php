// Delete data from education table
function deleteEducation($id) {
    global $conn;
    $sql = "DELETE FROM education WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
