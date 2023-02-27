<?php
require_once('./connect.php');

function getMessages() {
  global $db;
  $resultats = $db->query("SELECT p.postmessage, u.pseudo, p.date, p.postid, p.userid, p.likecounter, u.profilepicture 
                           FROM posts p
                           INNER JOIN users u ON p.userid = u.id
                           ORDER BY p.date DESC");
  $messages = $resultats->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($messages)) {
    foreach ($messages as &$message) {
      if ($message['profilepicture'] != null && is_string($message['profilepicture'])) {
        $profilePictureBase64 = base64_encode($message['profilepicture']);
        $message['profilepicture'] = "data:image/jpeg;base64,$profilePictureBase64";
      }
    }
    header('Content-Type: application/json');
    echo json_encode(['messages' => $messages]);
  }
};

getMessages();

?>
